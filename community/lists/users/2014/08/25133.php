<?
$subject_val = "Re: [OMPI users] Best way to communicate a 2d array with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 15:24:34 2014" -->
<!-- isoreceived="20140822192434" -->
<!-- sent="Fri, 22 Aug 2014 21:24:04 +0200" -->
<!-- isosent="20140822192404" -->
<!-- name="Oscar Vega-Gisbert" -->
<!-- email="ovega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to communicate a 2d array with Java binding" -->
<!-- id="53F798D4.6060802_at_dsic.upv.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+ssbKUqoe29QRpppm2XAhABueyVZ7RrRu3zq8tSmY=_N3Qt0w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Best way to communicate a 2d array with Java binding<br>
<strong>From:</strong> Oscar Vega-Gisbert (<em>ovega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-22 15:24:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25134.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25132.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25132.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25134.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25134.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
El 22/08/14 20:44, Saliya Ekanayake escribi&#243;:
<br>
<span class="quotelev1">&gt; Thank you Oscar for the detailed information, but I'm still wondering 
</span><br>
<span class="quotelev1">&gt; how would the copying in 2 would be different than what's done here 
</span><br>
<span class="quotelev1">&gt; with copying to a buffer.
</span><br>
<p>If you have a buffer array like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double buffer[] = new double[m * n];
<br>
<p>Copy the 2D matrix to the buffer:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; m; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.arraycopy(matrix[i], 0, buffer, i * n, n);
<br>
<p>Copy from the buffer to the 2D matrix:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; m; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.arraycopy(buffer, i * n, matrix[i], 0, n);
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 22, 2014 at 2:17 PM, Oscar Vega-Gisbert &lt;ovega_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:ovega_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     El 22/08/14 17:10, Saliya Ekanayake escribi&#243;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I've a quick question about the usage of Java binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Say there's a 2 dimensional double array (size m x n) that
</span><br>
<span class="quotelev1">&gt;         needs to be sent to another rank. I see two options to get
</span><br>
<span class="quotelev1">&gt;         this done,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         1. Copy values to a direct buffer of size m*n and send it
</span><br>
<span class="quotelev1">&gt;         2. Copy values to a 1D array of size m*n and send it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I guess 2 would internally do the copying to a buffer and use
</span><br>
<span class="quotelev1">&gt;         it, so suggesting 1. is the best option. Is this the case or
</span><br>
<span class="quotelev1">&gt;         is there a better way to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The best option is 1 because 2 requires one extra copy to C heap.
</span><br>
<span class="quotelev1">&gt;     Supposing the matrix is the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         double matrix[][] = new double[m][n];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Then you can allocate a direct DoubleBuffer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         DoubleBuffer buffer = MPI.newDoubleBuffer(m * n);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In order to send/receive the matrix I suggest to use the bulk
</span><br>
<span class="quotelev1">&gt;     put/get methods:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         for(int i = 0; i &lt; m; i++)
</span><br>
<span class="quotelev1">&gt;             buffer.put(matrix[i]); // Copy to the buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI.COMM_WORLD.send(buffer, m*n, MPI.DOUBLE, 1, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The receive code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI.COMM_WORLD.recv(buffer, m*n, MPI.DOUBLE, 0, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         for(int i = 0; i &lt; m; i++)
</span><br>
<span class="quotelev1">&gt;             buffer.get(matrix[i]); // Copy from the buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Note that bulk get/put methods increment the buffer position in n.
</span><br>
<span class="quotelev1">&gt;     So if you want reuse the buffer you must set the buffer position
</span><br>
<span class="quotelev1">&gt;     to 0 before copy the matrix:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         buffer.position(0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;     Oscar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thank you,
</span><br>
<span class="quotelev1">&gt;         Saliya
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2014/08/25130.php">http://www.open-mpi.org/community/lists/users/2014/08/25130.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2014/08/25131.php">http://www.open-mpi.org/community/lists/users/2014/08/25131.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25132.php">http://www.open-mpi.org/community/lists/users/2014/08/25132.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25134.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25132.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25132.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25134.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25134.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
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
