<?
$subject_val = "Re: [OMPI users] Working with a CellBlade cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 16:07:21 2008" -->
<!-- isoreceived="20081031200721" -->
<!-- sent="Fri, 31 Oct 2008 16:07:23 -0400" -->
<!-- isosent="20081031200723" -->
<!-- name="Mi Yan" -->
<!-- email="miyan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Working with a CellBlade cluster" -->
<!-- id="OF5D19603C.45E4DA44-ON852574F3.0068F45E-852574F3.006E8771_at_us.ibm.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.58.0810291725400.9394_at_lxplus237.cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Working with a CellBlade cluster<br>
<strong>From:</strong> Mi Yan (<em>miyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 16:07:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7169.php">Hahn Kim: "[OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Previous message:</strong> <a href="7167.php">Gustavo Seabra: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>In reply to:</strong> <a href="7127.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilbert,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I did not know the MCA parameters that can monitor the message
<br>
passing.  I have tried a few MCA verbose parameters and did not identify
<br>
anyone helpful.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One way to check if the message goes via IB or SM maybe  to check the
<br>
counters in /sys/class/infiniband.
<br>
<p>Regards,
<br>
Mi
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gilbert                                                       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grosdidier                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;grodid_at_mail.cern                                          To 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.ch&gt;                      Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by:                                                   cc 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-bounces_at_ope                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n-mpi.org                                             Subject 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re: [OMPI users] Working with a     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CellBlade cluster                   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10/29/2008 12:36                                              
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PM                                                            
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please respond to                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI Users                                               
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;users_at_open-mpi.o                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rg&gt;                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p>Thank you very much Mi and Lenny for your detailed replies.
<br>
<p>&nbsp;I believe I can summarize the infos to allow for
<br>
'Working with a QS22 CellBlade cluster' like this:
<br>
- Yes, messages are efficiently handled with &quot;-mca btl openib,sm,self&quot;
<br>
- Better to go to the OMPI-1.3 version ASAP
<br>
- It is currently more efficient/easy to use numactl to control
<br>
processor affinity on a QS22.
<br>
<p>&nbsp;So far so good.
<br>
<p>&nbsp;One question remains: how could I monitor in details message passing
<br>
thru IB (on one side) and thru SM (on the other side) thru the use of mca
<br>
parameters, please ? Additionnal info about the verbosity level
<br>
of this monitoring will be highly appreciated ... A lengthy travel
<br>
inside the list of such parameters provided by ompi_info did not
<br>
enlighten me (there are so many xxx_sm_yyy type params that I don't know
<br>
which
<br>
could be the right one ;-)
<br>
<p>&nbsp;Thanks in advance for your hints,      Best Regards,     Gilbert.
<br>
<p><p>On Thu, 23 Oct 2008, Mi Yan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.  MCA BTL parameters
</span><br>
<span class="quotelev1">&gt; With &quot;-mca btl openib,self&quot;, both message between two Cell processors on
</span><br>
<span class="quotelev1">&gt; one QS22 and   messages between two QS22s go through IB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With &quot;-mca btl openib,sm,slef&quot;,  message on one QS22 go through shared
</span><br>
<span class="quotelev1">&gt; memory,  message between QS22 go through IB,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending on the message size and other MCA parameters,  it does not
</span><br>
<span class="quotelev1">&gt; guarantee message passing on shared memory is faster than on IB.   E.g.
</span><br>
<span class="quotelev1">&gt; the bandwidth for 64KB message is 959MB/s on shared-memory and is 694MB/s
</span><br>
<span class="quotelev1">&gt; on IB;  the bandwidth for 4MB message is 539 MB/s and 1092 MB/s on  IB.
</span><br>
<span class="quotelev1">&gt; The bandwidth of 4MB message on shared memory may be higher if you tune
</span><br>
<span class="quotelev1">&gt; some MCA parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.  mpi_paffinity_alone
</span><br>
<span class="quotelev1">&gt;   &quot;mpi_paffinity_alone =1&quot;  is not a good choice for QS22.  There are two
</span><br>
<span class="quotelev1">&gt; sockets with two physical  Cell/B.E. on one QS22.  Each Cell/B.E. has two
</span><br>
<span class="quotelev1">&gt; SMT threads.   So there are four logical CPUs on one QS22.  CBE Linux
</span><br>
<span class="quotelev1">&gt; kernel maps logical cpu 0 and 1 to socket1 and maps logical cpu 1 and 2
</span><br>
to
<br>
<span class="quotelev1">&gt; socket 2.    If mpi_paffinity_alone is set to 1,   the two MPI instances
</span><br>
<span class="quotelev1">&gt; will be assigned to logical cpu 0 and cpu 1 on socket 1.  I believe this
</span><br>
is
<br>
<span class="quotelev1">&gt; not what you want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     A temporaily solution to  force the affinity on  QS22 is to use
</span><br>
<span class="quotelev1">&gt; &quot;numactl&quot;,   E.g.  assuming the hostname is &quot;qs22&quot; and the executable is
</span><br>
<span class="quotelev1">&gt; &quot;foo&quot;.  the following command can be used
</span><br>
<span class="quotelev1">&gt;                 mpirun -np 1 -H qs22 numactl -c0 -m0  foo :   -np 1 -H
</span><br>
qs22
<br>
<span class="quotelev1">&gt; numactl -c1 -m1 foo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    In the long run,  I wish CBE kernel export  CPU topology  in /sys  and
</span><br>
<span class="quotelev1">&gt; use  PLPA to force the processor affinity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Mi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              &quot;Lenny
</span><br>
<span class="quotelev1">&gt;              Verkhovsky&quot;
</span><br>
<span class="quotelev1">&gt;              &lt;lenny.verkhovsky
</span><br>
To
<br>
<span class="quotelev1">&gt;              @gmail.com&gt;               &quot;Open MPI Users&quot;
</span><br>
<span class="quotelev1">&gt;              Sent by:                  &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;              users-bounces_at_ope
</span><br>
cc
<br>
<span class="quotelev1">&gt;              n-mpi.org
</span><br>
<span class="quotelev1">&gt;
</span><br>
Subject
<br>
<span class="quotelev1">&gt;                                        Re: [OMPI users] Working with a
</span><br>
<span class="quotelev1">&gt;              10/23/2008 05:48          CellBlade cluster
</span><br>
<span class="quotelev1">&gt;              AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Please respond to
</span><br>
<span class="quotelev1">&gt;               Open MPI Users
</span><br>
<span class="quotelev1">&gt;              &lt;users_at_open-mpi.o
</span><br>
<span class="quotelev1">&gt;                     rg&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I understand you correctly the most suitable way to do it is by
</span><br>
<span class="quotelev1">&gt; paffinity that we have in Open MPI 1.3 and the trank.
</span><br>
<span class="quotelev1">&gt; how ever usually OS is distributing processes evenly between sockets by
</span><br>
it
<br>
<span class="quotelev1">&gt; self.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There still no formal FAQ due to a multiple reasons but you can read how
</span><br>
to
<br>
<span class="quotelev1">&gt; use it in the attached scratch ( there were few name changings of the
</span><br>
<span class="quotelev1">&gt; params, so check with ompi_info )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shared memory is used between processes that share same machine, and
</span><br>
openib
<br>
<span class="quotelev1">&gt; is used between different machines ( hostnames ), no special mca params
</span><br>
are
<br>
<span class="quotelev1">&gt; needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt; Lenny,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Oct 19, 2008 at 10:32 AM, Gilbert Grosdidier
</span><br>
&lt;grodid_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;    Working with a CellBlade cluster (QS22), the requirement is to have
</span><br>
one
<br>
<span class="quotelev1">&gt;   instance of the executable running on each socket of the blade (there
</span><br>
are
<br>
<span class="quotelev1">&gt;   2
</span><br>
<span class="quotelev1">&gt;   sockets). The application is of the 'domain decomposition' type, and
</span><br>
each
<br>
<span class="quotelev1">&gt;   instance is required to often send/receive data with both the remote
</span><br>
<span class="quotelev1">&gt;   blades and
</span><br>
<span class="quotelev1">&gt;   the neighbor socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Question is : which specification must be used for the mca btl
</span><br>
component
<br>
<span class="quotelev1">&gt;   to force 1) shmem type messages when communicating with this neighbor
</span><br>
<span class="quotelev1">&gt;   socket,
</span><br>
<span class="quotelev1">&gt;   while 2) using openib to communicate with the remote blades ?
</span><br>
<span class="quotelev1">&gt;   Is '-mca btl sm,openib,self' suitable for this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Also, which debug flags could be used to crosscheck that the messages
</span><br>
<span class="quotelev1">&gt;   are
</span><br>
<span class="quotelev1">&gt;   _actually_ going thru the right channel for a given channel, please ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    We are currently using OpenMPI 1.2.5 shipped with RHEL5.2 (ppc64).
</span><br>
<span class="quotelev1">&gt;   Which version do you think is currently the most optimised for these
</span><br>
<span class="quotelev1">&gt;   processors and problem type ? Should we go towards OpenMPI 1.2.8
</span><br>
<span class="quotelev1">&gt;   instead ?
</span><br>
<span class="quotelev1">&gt;   Or even try some OpenMPI 1.3 nightly build ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks in advance for your help,                  Gilbert.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   _______________________________________________
</span><br>
<span class="quotelev1">&gt;   users mailing list
</span><br>
<span class="quotelev1">&gt;   users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; (See attached file: RANKS_FAQ.doc)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
*---------------------------------------------------------------------*
  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
  B.P. 34, F-91898 Orsay Cedex (FRANCE)
 ---------------------------------------------------------------------
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<p>
<p><p>


<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7168/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-7168/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-7168/pic09046.gif" alt="pic09046.gif">
<!-- attachment="pic09046.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-7168/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7169.php">Hahn Kim: "[OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Previous message:</strong> <a href="7167.php">Gustavo Seabra: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>In reply to:</strong> <a href="7127.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI users] Working with a CellBlade cluster"</a>
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
