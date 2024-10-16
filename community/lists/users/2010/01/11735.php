<?
$subject_val = "Re: [OMPI users] checkpointing multi node and multi process applications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 16:42:36 2010" -->
<!-- isoreceived="20100111214236" -->
<!-- sent="Mon, 11 Jan 2010 16:42:32 -0500" -->
<!-- isosent="20100111214232" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpointing multi node and multi process applications" -->
<!-- id="1B0AA6EA-0E5E-4E23-9A07-A8F68DFF8628_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="628336.11417.qm_at_web28304.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] checkpointing multi node and multi process applications<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 16:42:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11736.php">Rainer Keller: "Re: [OMPI users] OpenMPI w valgrind: need to recompile?"</a>
<li><strong>Previous message:</strong> <a href="11734.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11608.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11838.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="11838.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 19, 2009, at 7:42 AM, Jean Potsam wrote:
<br>
<p><span class="quotelev1">&gt; Hi Everyone,
</span><br>
<span class="quotelev1">&gt;                        I am trying to checkpoint an mpi application  
</span><br>
<span class="quotelev1">&gt; running on multiple nodes. However, I get some error messages when i  
</span><br>
<span class="quotelev1">&gt; trigger the checkpointing process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error: expected_component: PID information unavailable!
</span><br>
<span class="quotelev1">&gt; Error: expected_component: Component Name information unavailable!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using  open mpi 1.3 and blcr 0.8.1
</span><br>
<p>Can you try the v1.4 release and see if the problem persists?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I execute my application as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr -np 3 --hostfile hosts gol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does openmpi with blcr support checkpointing of multi node execution  
</span><br>
<span class="quotelev1">&gt; of mpi application? If so, can you provide me with some information  
</span><br>
<span class="quotelev1">&gt; on how to achieve this.
</span><br>
<p>Open MPI is able to checkpoint a multi-node application (that's what  
<br>
it was designed to do). There are some examples at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.osl.iu.edu/research/ft/ompi-cr/examples.php">http://www.osl.iu.edu/research/ft/ompi-cr/examples.php</a>
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jean.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11736.php">Rainer Keller: "Re: [OMPI users] OpenMPI w valgrind: need to recompile?"</a>
<li><strong>Previous message:</strong> <a href="11734.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11608.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11838.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="11838.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
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
