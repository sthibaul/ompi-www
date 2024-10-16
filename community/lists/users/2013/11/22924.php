<?
$subject_val = "Re: [OMPI users] proper use of MPI_Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 14:13:22 2013" -->
<!-- isoreceived="20131107191322" -->
<!-- sent="Thu, 7 Nov 2013 19:13:17 +0000" -->
<!-- isosent="20131107191317" -->
<!-- name="Andrus, Brian Contractor" -->
<!-- email="bdandrus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] proper use of MPI_Abort" -->
<!-- id="ADC981242279AD408816CB7141A2789D78FFF297_at_GROWLER.ern.nps.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="24806D86-3387-47DF-B45B-A30FF7981AA0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] proper use of MPI_Abort<br>
<strong>From:</strong> Andrus, Brian Contractor (<em>bdandrus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 14:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22925.php">tmishima_at_[hidden]: "[OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>Previous message:</strong> <a href="22923.php">Gus Correa: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>In reply to:</strong> <a href="22919.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="22942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>

<br>
Good to know. Thanks!
<br>

<br>

<br>
Seems really like MPI_ABORT should only be used within error traps after MPI functions have been started.
<br>
Code-wise, the sample I got was not the best. Usage should be checked before MPI_Initialize, I think :)
<br>

<br>
It seems the expectation is that MPI_ABORT is only called when the user should be notified something went haywire.
<br>

<br>

<br>
Brian Andrus
<br>
ITACS/Research Computing
<br>
Naval Postgraduate School
<br>
Monterey, California
<br>
voice: 831-656-6238
<br>

<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
<span class="quotelev1">&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, November 06, 2013 11:30 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] proper use of MPI_Abort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just checked the v1.7 series -- it looks like we have cleaned up this
</span><br>
<span class="quotelev1">&gt; message a bit.  With your code snipit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc abort.c -o abort &amp;&amp; mpirun -np 4 abort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *#  Usage: mpicpy -input &lt;filename&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on exactly
</span><br>
<span class="quotelev1">&gt; when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Notice the lack of the 2nd message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think the answer here is: it's fixed in the 1.7.x series.  It is unlikely to be
</span><br>
<span class="quotelev1">&gt; fixed in the 1.6.x series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2013, at 3:16 PM, &quot;Andrus, Brian Contractor&quot; &lt;bdandrus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We are using the latest version: 1.6.5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian Andrus
</span><br>
<span class="quotelev2">&gt; &gt; ITACS/Research Computing
</span><br>
<span class="quotelev2">&gt; &gt; Naval Postgraduate School
</span><br>
<span class="quotelev2">&gt; &gt; Monterey, California
</span><br>
<span class="quotelev2">&gt; &gt; voice: 831-656-6238
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Tuesday, November 05, 2013 5:11 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] proper use of MPI_Abort
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You're correct -- you don't need to call MPI_Finalize after MPI_Abort.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you cite what version of Open MPI you are using?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 4, 2013, at 9:01 AM, &quot;Andrus, Brian Contractor&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;bdandrus_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; All,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have some sample code that has a syntax message and then an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Abort call if the program is run without the required parameters.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ------snip---------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    if (!rank) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        i = 1;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        while ((i &lt; argc) &amp;&amp; strcmp(&quot;-input&quot;, *argv)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            i++;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            argv++;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        if (i &gt;= argc) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            fprintf(stderr, &quot;\n*#  Usage: mpicpy -input &lt;filename&gt; \n\n&quot;);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----------snip---------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This is all well and good and it does provide the usage line, but it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; also
</span><br>
<span class="quotelev3">&gt; &gt;&gt; throws quite a message in addition:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ---- MPI_ABORT was invoked on rank 0 in communicator
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with errorcode 1.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ---- mpirun has exited due to process rank 0 with PID 40209 on node
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; compute-3-3 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; waits for all processes to call &quot;init&quot;. By rule, if one process
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; calls &quot;init&quot;, then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is there a proper way to use MPI_Abort such that it will not trigger
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; such a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; message?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It almost seems that MPI_Abort should be calling MPI_Finalize as a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rule, or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; openmpi should recognize MPI_Abort is the exception to requiring
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Finalize.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Brian Andrus
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ITACS/Research Computing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Naval Postgraduate School
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Monterey, California
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; voice: 831-656-6238
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22925.php">tmishima_at_[hidden]: "[OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>Previous message:</strong> <a href="22923.php">Gus Correa: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>In reply to:</strong> <a href="22919.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="22942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
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
