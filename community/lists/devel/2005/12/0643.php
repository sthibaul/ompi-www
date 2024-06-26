<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 28 12:03:39 2005" -->
<!-- isoreceived="20051228170339" -->
<!-- sent="Wed, 28 Dec 2005 12:03:37 -0500" -->
<!-- isosent="20051228170337" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  sm btl/signal 11 problem on Linux" -->
<!-- id="A02E994F-F536-4DE5-BE65-9B4BE33F09B8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200512281050.09150.giuliani_at_lamma.rete.toscana.it" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-28 12:03:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0644.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0642.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="0642.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0644.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="0644.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 28, 2005, at 4:50 AM, Graziano Giuliani wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; can confirm this bug also on Linux Debian testing with kernel  
</span><br>
<span class="quotelev1">&gt; 2.6.14 and
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.0.3 20051201 (prerelease) (Debian 4.0.2-5) running WRF  
</span><br>
<span class="quotelev1">&gt; atmospheric
</span><br>
<span class="quotelev1">&gt; model compiled with portland pgf90. For who cares about this, it  
</span><br>
<span class="quotelev1">&gt; needs just a
</span><br>
<span class="quotelev1">&gt; little patch in the RSL layer of the model to convert fortran  
</span><br>
<span class="quotelev1">&gt; integer comms
</span><br>
<span class="quotelev1">&gt; to C comms (MPICH uses integer for boths, just a matter of using
</span><br>
<span class="quotelev1">&gt; MPI_Comm_f2c).
</span><br>
<p>Shame on the developers of the atmospheric code for not using  
<br>
MPI_Comm_{f2c,c2f} in the first place ;).
<br>
<p><span class="quotelev1">&gt; It is not limited to FC4.
</span><br>
<span class="quotelev1">&gt; Interesting thing is that it works if pls_rsh_debug is set....
</span><br>
<p>Could you generate a stack trace from a core file?  It would be good  
<br>
to verify that this is the startup bug we are seeing with FC4 and not  
<br>
another bug somewhere else.  Or, I think you are using a recent  
<br>
enough version of Open MPI that you should see a stack trace printed  
<br>
when a SIGSEGV or SIGBUS occurs.  Finally, could you let me know what  
<br>
options you passed to configure and send the config.out file  
<br>
generated by configure (this is probably unrelated to the error with  
<br>
sm, but I'm curious why you ended up with the malloc_hooks component  
<br>
-- it shouldn't be automatically chosen in any circumstance).
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0644.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0642.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="0642.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0644.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="0644.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
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
