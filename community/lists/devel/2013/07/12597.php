<?
$subject_val = "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 14 12:52:54 2013" -->
<!-- isoreceived="20130714165254" -->
<!-- sent="Mon, 15 Jul 2013 01:52:41 +0900" -->
<!-- isosent="20130714165241" -->
<!-- name="KAWASHIMA Takahiro" -->
<!-- email="rivis.kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype" -->
<!-- id="20130715015241.ff27a0c55fdbe5c282fb702d_at_nifty.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="BF0B0D8A-DC40-4AC0-92F4-430FB9B3E222_at_icl.utk.edu" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype<br>
<strong>From:</strong> KAWASHIMA Takahiro (<em>rivis.kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-14 12:52:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12598.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Previous message:</strong> <a href="12596.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>In reply to:</strong> <a href="12596.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12598.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Reply:</strong> <a href="12598.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Thanks. But no, your patch does not work correctly.
<br>
<p>The assertion failure disappeared by your patch but the value of the
<br>
target buffer of MPI_Put is not a correct one.
<br>
<p>In rdma OSC (and pt2pt OSC), the following data are packed into
<br>
the send buffer in ompi_osc_rdma_sendreq_send function on the
<br>
origin side.
<br>
<p>&nbsp;&nbsp;- header
<br>
&nbsp;&nbsp;- datatype description
<br>
&nbsp;&nbsp;- user data
<br>
<p>User data are written at the offset of
<br>
(sizeof(ompi_osc_rdma_send_header_t) + total_pack_size).
<br>
<p>In the case of my program attached in my previous mail, total_pack_size
<br>
is 32 because ompi_datatype_set_args set 8 for MPI_COMBINER_DUP and
<br>
24 for MPI_COMBINER_CONTIGUOUS. See the following code.
<br>
<p>----------------------------------------------------------------
<br>
int32_t ompi_datatype_set_args(... snip ...)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;... snip ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;switch(type){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;... snip ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case MPI_COMBINER_DUP:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Recompute the data description packed size based on the optimization
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* for MPI_COMBINER_DUP.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pArgs-&gt;total_pack_size = 2 * sizeof(int); #### total_pack_size = 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;... snip ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for( pos = 0; pos &lt; cd; pos++ ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... snip ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( !(ompi_datatype_is_predefined(d[pos])) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... snip ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pArgs-&gt;total_pack_size += ((ompi_datatype_args_t*)d[pos]-&gt;args)-&gt;total_pack_size; #### total_pack_size += 24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... snip ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... snip ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;... snip ...
<br>
}
<br>
----------------------------------------------------------------
<br>
<p>But on the target side, user data are read at the offset of
<br>
(sizeof(ompi_osc_rdma_send_header_t) + 24)
<br>
because ompi_osc_base_datatype_create function, which is called
<br>
by ompi_osc_rdma_sendreq_recv_put function, progress the offset
<br>
only 24 bytes. Not 32 bytes.
<br>
<p>So the wrong data are written to the target buffer.
<br>
<p>We need to take care of total_pack_size in the origin side.
<br>
<p>I modified ompi_datatype_set_args function as a trial.
<br>
<p>Index: ompi/datatype/ompi_datatype_args.c
<br>
===================================================================
<br>
--- ompi/datatype/ompi_datatype_args.c  (revision 28778)
<br>
+++ ompi/datatype/ompi_datatype_args.c  (working copy)
<br>
@@ -129,7 +129,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Recompute the data description packed size based on the optimization
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* for MPI_COMBINER_DUP.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
-        pArgs-&gt;total_pack_size = 2 * sizeof(int);
<br>
+        pArgs-&gt;total_pack_size = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MPI_COMBINER_CONTIGUOUS:
<br>
<p>This patch in addition to your patch works correctly for my program.
<br>
But I'm not sure this is a correct solution.
<br>
<p>Regards,
<br>
KAWASHIMA Takahiro
<br>
<p><span class="quotelev1">&gt; Takahiro,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nice catch. That particular code was an over-optimizations $B!D(B that failed. Please try with the patch below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if it's working as expected, I will push it in the trunk once confirmed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: ompi/datatype/ompi_datatype_args.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/datatype/ompi_datatype_args.c	(revision 28787)
</span><br>
<span class="quotelev1">&gt; +++ ompi/datatype/ompi_datatype_args.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -449,9 +449,10 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      /* For duplicated datatype we don't have to store all the information */
</span><br>
<span class="quotelev1">&gt;      if( MPI_COMBINER_DUP == args-&gt;create_type ) {
</span><br>
<span class="quotelev1">&gt; -        position[0] = args-&gt;create_type;
</span><br>
<span class="quotelev1">&gt; -        position[1] = args-&gt;d[0]-&gt;id; /* On the OMPI - layer, copy the ompi_datatype.id */
</span><br>
<span class="quotelev1">&gt; -        return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +        ompi_datatype_t* temp_data = args-&gt;d[0];
</span><br>
<span class="quotelev1">&gt; +        return __ompi_datatype_pack_description(temp_data,
</span><br>
<span class="quotelev1">&gt; +                                                packed_buffer,
</span><br>
<span class="quotelev1">&gt; +                                                next_index );
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      position[0] = args-&gt;create_type;
</span><br>
<span class="quotelev1">&gt;      position[1] = args-&gt;ci;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 14, 2013, at 14:30 , KAWASHIMA Takahiro &lt;rivis.kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I encountered an assertion failure in Open MPI trunk and found a bug.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; See the attached program. This program can be run with mpiexec -n 1.
</span><br>
<span class="quotelev2">&gt; &gt; This program calls MPI_Put and writes one int value to the target side.
</span><br>
<span class="quotelev2">&gt; &gt; The target side datatype is equivalent to MPI_INT, but is a derived
</span><br>
<span class="quotelev2">&gt; &gt; datatype created by MPI_Type_contiguous and MPI_Type_Dup.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This program aborts with the following output.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================================================
</span><br>
<span class="quotelev2">&gt; &gt; #### dt1 (0x2626160) ####
</span><br>
<span class="quotelev2">&gt; &gt; type 2 count ints 1 count disp 0 count datatype 1
</span><br>
<span class="quotelev2">&gt; &gt; ints:     1 
</span><br>
<span class="quotelev2">&gt; &gt; types:    MPI_INT 
</span><br>
<span class="quotelev2">&gt; &gt; #### dt2 (0x2626340) ####
</span><br>
<span class="quotelev2">&gt; &gt; type 1 count ints 0 count disp 0 count datatype 1
</span><br>
<span class="quotelev2">&gt; &gt; types:    0x2626160 
</span><br>
<span class="quotelev2">&gt; &gt; put_dup_type: ../../../ompi/datatype/ompi_datatype_args.c:565: __ompi_datatype_create_from_packed_description: Assertion `data_id &lt; 45' failed.
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [ 0] /lib/libpthread.so.0(+0xeff0) [0x7fe58a275ff0]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [ 1] /lib/libc.so.6(gsignal+0x35) [0x7fe589f371b5]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [ 2] /lib/libc.so.6(abort+0x180) [0x7fe589f39fc0]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [ 3] /lib/libc.so.6(__assert_fail+0xf1) [0x7fe589f30301]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [ 4] /ompi/lib/libmpi.so.0(+0x6504e) [0x7fe58a4e804e]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [ 5] /ompi/lib/libmpi.so.0(ompi_datatype_create_from_packed_description+0x23) [0x7fe58a4e8cf6]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [ 6] /ompi/lib/openmpi/mca_osc_rdma.so(+0xd04b) [0x7fe5839a104b]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [ 7] /ompi/lib/openmpi/mca_osc_rdma.so(ompi_osc_rdma_sendreq_recv_put+0xa8) [0x7fe5839a3ae5]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [ 8] /ompi/lib/openmpi/mca_osc_rdma.so(+0x86cc) [0x7fe58399c6cc]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [ 9] /ompi/lib/openmpi/mca_btl_self.so(mca_btl_self_send+0x87) [0x7fe58510bb04]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [10] /ompi/lib/openmpi/mca_osc_rdma.so(+0xc44b) [0x7fe5839a044b]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [11] /ompi/lib/openmpi/mca_osc_rdma.so(+0xd69d) [0x7fe5839a169d]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [12] /ompi/lib/openmpi/mca_osc_rdma.so(ompi_osc_rdma_flush+0x50) [0x7fe5839a1776]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [13] /ompi/lib/openmpi/mca_osc_rdma.so(ompi_osc_rdma_module_fence+0x8e6) [0x7fe5839a84ab]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [14] /ompi/lib/libmpi.so.0(MPI_Win_fence+0x16f) [0x7fe58a54127d]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [15] ompi-trunk/put_dup_type() [0x400d10]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [16] /lib/libc.so.6(__libc_start_main+0xfd) [0x7fe589f23c8d]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] [17] put_dup_type() [0x400b09]
</span><br>
<span class="quotelev2">&gt; &gt; [ppc:05244] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec noticed that process rank 0 with PID 5244 on node ppc exited on signal 6 (Aborted).
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================================================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; __ompi_datatype_create_from_packed_description function, in which the
</span><br>
<span class="quotelev2">&gt; &gt; assertion failure occurred, seems to expect the value of data_id is an
</span><br>
<span class="quotelev2">&gt; &gt; ID of a predefined datatype. In my environment, the value of data_id
</span><br>
<span class="quotelev2">&gt; &gt; is 68, that is an ID of the datatype created by MPI_Type_contiguous.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On one-sided communication, the target side datatype is encoded as
</span><br>
<span class="quotelev2">&gt; &gt; 'description' at the origin side and then it is decoded at the target
</span><br>
<span class="quotelev2">&gt; &gt; side. I think there are problems in both encoding stage and decoding
</span><br>
<span class="quotelev2">&gt; &gt; stage.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; __ompi_datatype_pack_description function in
</span><br>
<span class="quotelev2">&gt; &gt; ompi/datatype/ompi_datatype_args.c file encodes the datatype.
</span><br>
<span class="quotelev2">&gt; &gt; For MPI_COMBINER_DUP on line 451, it encodes only create_type and id
</span><br>
<span class="quotelev2">&gt; &gt; and returns immediately. It doesn't encode the information of the base
</span><br>
<span class="quotelev2">&gt; &gt; dataype (in my case, the datatype created by MPI_Type_contiguous).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; __ompi_datatype_create_from_packed_description function in
</span><br>
<span class="quotelev2">&gt; &gt; ompi/datatype/ompi_datatype_args.c file decodes the description.
</span><br>
<span class="quotelev2">&gt; &gt; For MPI_COMBINER_DUP in line 557, it expects the value of data_id is
</span><br>
<span class="quotelev2">&gt; &gt; an ID of a predefined datatype. It is not always true.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I cannot fix this problem yet because I'm not familiar with the datatype
</span><br>
<span class="quotelev2">&gt; &gt; code in Open MPI. MPI_COMBINER_DUP is also used for predefined datatypes
</span><br>
<span class="quotelev2">&gt; &gt; and the calculation of total_pack_size is also involved. It seems not
</span><br>
<span class="quotelev2">&gt; &gt; so simple.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12598.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Previous message:</strong> <a href="12596.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>In reply to:</strong> <a href="12596.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12598.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Reply:</strong> <a href="12598.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
