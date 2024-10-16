<?
$subject_val = "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 08:29:06 2015" -->
<!-- isoreceived="20150424122906" -->
<!-- sent="Fri, 24 Apr 2015 08:29:58 -0400" -->
<!-- isosent="20150424122958" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards" -->
<!-- id="1FA1354E-9171-4F00-A250-386384373D93_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CANw8Oj45vd9WGTab4iafWsYW6xndVnrp8HW3LGONjk+Hj=HMXA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-24 08:29:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26785.php">Mike Dubman: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Previous message:</strong> <a href="26783.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>In reply to:</strong> <a href="26780.php">Manumachu Reddy: "[OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26788.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<li><strong>Reply:</strong> <a href="26788.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Manumachu,
<br>
<p>Both nodes have the same IP for their Phi (mic0 and mic1). This is OK as long as they don't try to connect to each other using these addresses. A simple fix is to prevent OMPI from using the supposedly local mic0 and mic1 IP. Add --mca btl_tcp_if_exclude mic0,mic1 to your mpirun command and things should start working better.
<br>
<p>George.
<br>
<p><p><p><span class="quotelev1">&gt; On Apr 24, 2015, at 03:32, Manumachu Reddy &lt;manumachu.reddy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI Users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I request your help to resolve a hang in my OpenMPI application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My OpenMPI application hangs in MPI_Comm_split() operation. The code for this simple application is at the end of this email. Broadcast works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My experimental setup comprises of two RHEL6.4 Linux nodes. Each node has 2 mic cards. Please note that although there are mic cards, I do not use mic cards in my OpenMPI application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tested with two OpenMPI versions (1.6.5, 1.8.4). I see the hang in both the versions. OpenMPI is installed using the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/manumachu/OpenMPI/openmpi-1.8.4/OPENMPI_INSTALL_ICC CC=&quot;icc -fPIC&quot; CXX=&quot;icpc -fPIC&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have made sure I have turned off the firewall using the following commands:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sudo service iptables save
</span><br>
<span class="quotelev1">&gt; sudo service iptables stop
</span><br>
<span class="quotelev1">&gt; sudo chkconfig iptables off
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I made sure the mic cards are online and healthy. I am able to login to the mic cards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use an appfile to launch 2 processes on each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have also attached the &quot;ifconfig&quot; list for each node. Could this problem be related to multiple network interfaces (from the application output also shown at the end of the email)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know if you need further information and I look forward to your suggestions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt; Manumachu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Application
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int me, hostnamelen;
</span><br>
<span class="quotelev1">&gt;     char hostname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Get_processor_name(hostname, &amp;hostnamelen);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;me);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hostname %s: Me is %d.\n&quot;, hostname, me);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     int a;
</span><br>
<span class="quotelev1">&gt;     MPI_Bcast(&amp;a, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hostname %s: Me %d broadcasted.\n&quot;, hostname, me);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm intraNodeComm;
</span><br>
<span class="quotelev1">&gt;     int rc = MPI_Comm_split(
</span><br>
<span class="quotelev1">&gt;                 MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;                 me,
</span><br>
<span class="quotelev1">&gt;                 me,
</span><br>
<span class="quotelev1">&gt;                 &amp;intraNodeComm
</span><br>
<span class="quotelev1">&gt;     );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (rc != MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;        printf(&quot;MAIN: Problems MPI_Comm_split...Exiting...\n&quot;);
</span><br>
<span class="quotelev1">&gt;        return -1;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hostname %s: Me %d after comm split.\n&quot;, hostname, me);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_free(&amp;intraNodeComm);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Application output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hostname server5: Me is 0.
</span><br>
<span class="quotelev1">&gt; Hostname server5: Me is 1.
</span><br>
<span class="quotelev1">&gt; Hostname server5: Me 1 broadcasted.
</span><br>
<span class="quotelev1">&gt; Hostname server5: Me 0 broadcasted.
</span><br>
<span class="quotelev1">&gt; [server5][[50702,1],0][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect] connect() to 172.31.1.254 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; [server5][[50702,1],1][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect] connect() to 172.31.1.254 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; Hostname server2: Me is 2.
</span><br>
<span class="quotelev1">&gt; Hostname server2: Me 2 broadcasted.
</span><br>
<span class="quotelev1">&gt; Hostname server2: Me is 3.
</span><br>
<span class="quotelev1">&gt; Hostname server2: Me 3 broadcasted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; server2 ifconfig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; eth2      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; eth3      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;           inet addr:172.17.27.17  Bcast:172.17.27.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::921b:eff:fe42:a5ba/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback  
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mic0      Link encap:Ethernet
</span><br>
<span class="quotelev1">&gt;           inet addr:172.31.1.254  Bcast:172.31.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mic1      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;           inet addr:172.31.2.254  Bcast:172.31.2.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; server5 ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth2      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth3      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;           inet addr:172.17.27.14  Bcast:172.17.27.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback  
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mic0      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;           inet addr:172.31.1.254  Bcast:172.31.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING  MTU:64512  Metric:1
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mic1      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;           inet addr:172.31.2.254  Bcast:172.31.2.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           ...
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26780.php">http://www.open-mpi.org/community/lists/users/2015/04/26780.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26784/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26785.php">Mike Dubman: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Previous message:</strong> <a href="26783.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>In reply to:</strong> <a href="26780.php">Manumachu Reddy: "[OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26788.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<li><strong>Reply:</strong> <a href="26788.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
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
