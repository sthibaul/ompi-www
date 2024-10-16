<?
$subject_val = "Re: [OMPI users] bug in MPI_Comm_accept?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 10:34:50 2015" -->
<!-- isoreceived="20150916143450" -->
<!-- sent="Wed, 16 Sep 2015 16:34:45 +0200" -->
<!-- isosent="20150916143445" -->
<!-- name="Jalel Chergui" -->
<!-- email="Jalel.Chergui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_Comm_accept?" -->
<!-- id="55F97E05.9000002_at_limsi.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55F97B2A.1070506_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in MPI_Comm_accept?<br>
<strong>From:</strong> Jalel Chergui (<em>Jalel.Chergui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 10:34:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27589.php">marcin.krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Previous message:</strong> <a href="27587.php">Marcin Krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>In reply to:</strong> <a href="27587.php">Marcin Krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27589.php">marcin.krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Reply:</strong> <a href="27589.php">marcin.krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right, anyway Finalize is necessary at the end of the receiver. The 
<br>
other issue is Barrier which is invoked probably when the sender has 
<br>
exited hence changing the size of intercom. Can you comment that line in 
<br>
both files ?
<br>
<p>Jalel
<br>
<p>Le 16/09/2015 16:22, Marcin Krotkiewski a &#233;crit :
<br>
<span class="quotelev1">&gt; But where would I put it? If I put it in the while(1), then 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_Accept cannot be called for the second time. If I put it 
</span><br>
<span class="quotelev1">&gt; outside of the loop it will never be called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/16/2015 04:18 PM, Jalel Chergui wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you check with an MPI_Finalize in the receiver ?
</span><br>
<span class="quotelev2">&gt;&gt; Jalel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 16/09/2015 16:06, marcin.krotkiewski a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have run into a freeze / potential bug when using MPI_Comm_accept 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in a simple client / server implementation. I have attached two 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simplest programs I could produce:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  1. mpi-receiver.c opens a port using MPI_Open_port, saves the port 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name to a file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  2. mpi-receiver enters infinite loop and waits for connections 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using MPI_Comm_accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  3. mpi-sender.c connects to that port using MPI_Comm_connect, sends 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one MPI_UNSIGNED_LONG, calls barrier and disconnects using 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_disconnect
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  4. mpi-receiver reads the MPI_UNSIGNED_LONG, prints it, calls 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; barrier and disconnects using MPI_Comm_disconnect and goes to point 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 - infinite loop
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All works fine, but only exactly 5 times. After that the receiver 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hangs in MPI_Recv, after exit from MPI_Comm_accept. That is 100% 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; repeatable. I have tried with Intel MPI - no such problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I execute the programs using OpenMPI 1.10 as follows
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 --mca mpi_leave_pinned 0 ./mpi-receiver
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have any clues what could be the reason? Am I doing sth 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrong, or is it some problem with internal state of OpenMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27585.php">http://www.open-mpi.org/community/lists/users/2015/09/27585.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; *------------------------------------------------------------------------*
</span><br>
<span class="quotelev2">&gt;&gt;   Jalel CHERGUI, LIMSI-CNRS, B&#226;t. 508 - BP 133, 91403 Orsay cedex, FRANCE
</span><br>
<span class="quotelev2">&gt;&gt;   T&#233;l: (33 1) 69 85 81 27     ; T&#233;l&#233;copie: (33 1) 69 85 80 88
</span><br>
<span class="quotelev2">&gt;&gt;   M&#233;l:Jalel.Chergui_at_[hidden]  ; R&#233;f&#233;rence:<a href="http://perso.limsi.fr/chergui">http://perso.limsi.fr/chergui</a>
</span><br>
<span class="quotelev2">&gt;&gt; *------------------------------------------------------------------------*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27586.php">http://www.open-mpi.org/community/lists/users/2015/09/27586.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27587.php">http://www.open-mpi.org/community/lists/users/2015/09/27587.php</a>
</span><br>
<p><pre>
-- 
*------------------------------------------------------------------------*
  Jalel CHERGUI, LIMSI-CNRS, B&#226;t. 508 - BP 133, 91403 Orsay cedex, FRANCE
  T&#233;l: (33 1) 69 85 81 27     ; T&#233;l&#233;copie: (33 1) 69 85 80 88
  M&#233;l: Jalel.Chergui_at_[hidden] ; R&#233;f&#233;rence: <a href="http://perso.limsi.fr/chergui">http://perso.limsi.fr/chergui</a>
*------------------------------------------------------------------------*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27589.php">marcin.krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Previous message:</strong> <a href="27587.php">Marcin Krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>In reply to:</strong> <a href="27587.php">Marcin Krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27589.php">marcin.krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Reply:</strong> <a href="27589.php">marcin.krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
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
