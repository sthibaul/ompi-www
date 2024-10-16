<?
$subject_val = "Re: [OMPI devel] Return status of MPI_Probe()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 10:19:40 2011" -->
<!-- isoreceived="20110322141940" -->
<!-- sent="Tue, 22 Mar 2011 10:19:34 -0400" -->
<!-- isosent="20110322141934" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Return status of MPI_Probe()" -->
<!-- id="2CADB685-B5E0-4AB0-AE2A-C817F2674782_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DF159A8F-0293-4AE0-8D89-6FD495750644_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Return status of MPI_Probe()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-22 10:19:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9117.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Previous message:</strong> <a href="9115.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>In reply to:</strong> <a href="9114.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9117.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Reply:</strong> <a href="9117.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>Your patch (r24551) looks fine. I think you should make a CMR for the 1.4 and 1.5.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Mar 22, 2011, at 09:04 , Joshua Hursey wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree that it is difficult to come up with a good scenario, outside of resilience, in which MPI_Probe would return an error (other than a bad argument type of error - which does currently work). I agree with your assessment of the value of the return code, and that it should trigger the error handler. I just wanted to confirm that there was not something I was missing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will commit a patch to fix this (it is just a couple lines in pml/ob1) for the trunk. I don't know if we need to push it to the release branches just yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2011, at 10:17 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Josh,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If we don't take in account resilience I would not expect MPI_Probe to have that many opportunities to return errors. However, in order to keep the implementation consistent (with the other MPI functions) I would abide to the following.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ERROR_IN_STATUS is only for calls taking multiple requests as input, so I don't think this should be applied to the MPI_Probe. I would expect the return to be equal to status.MPI_ERROR (similar to only other function working on a single request, such as MPI_Test).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It better trigger the error-handler attached to the communicator, as explicitly requested by the MPI standard (section 8.3).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A user can associate error handlers to three types of objects: communicators, windows, and files. The specified error handling routine will be used for any MPI exception that occurs during a call to MPI for the respective object.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 21, 2011, at 16:50 , Joshua Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If MPI_Probe() encounters an error causing it to exit with the 'status.MPI_ERROR' set, say:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ret = MPI_Probe(MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should it return an error? So should it return:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ret = status.MPI_ERROR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ret = MPI_ERROR_IN_STATUS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ret = MPI_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Additionally, should it trigger the error handler on the communicator?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In Open MPI, it will always return MPI_SUCCESS (pml_ob1_iprobe.c:74), but it feels like this is wrong. I looked to the MPI standard for some insight, but could not find where it addresses the return code of MPI_Probe.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone shed some light on this topic for me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -- Thomas Jefferson, 1799
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
<br>
&nbsp;&nbsp;-- Thomas Jefferson, 1799
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9117.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Previous message:</strong> <a href="9115.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>In reply to:</strong> <a href="9114.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9117.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Reply:</strong> <a href="9117.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
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
