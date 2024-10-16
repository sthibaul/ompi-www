<?
$subject_val = "Re: [OMPI users] few Problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 16:43:41 2009" -->
<!-- isoreceived="20090422204341" -->
<!-- sent="Wed, 22 Apr 2009 16:43:32 -0400" -->
<!-- isosent="20090422204332" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] few Problems" -->
<!-- id="AC5C2481-68E4-49AE-8965-A4E571C0795B_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3A18676F-A775-43E6-940B-8265837AE798_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] few Problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 16:43:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9036.php">Gus Correa: "Re: [OMPI users] few Problems"</a>
<li><strong>Previous message:</strong> <a href="9034.php">Yaakoub El Khamra: "Re: [OMPI users] Question about restart"</a>
<li><strong>In reply to:</strong> <a href="9033.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9036.php">Gus Correa: "Re: [OMPI users] few Problems"</a>
<li><strong>Reply:</strong> <a href="9036.php">Gus Correa: "Re: [OMPI users] few Problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like you need to fix your password-less ssh problems first:
<br>
<p><span class="quotelev1"> &gt; Permission denied, please try again.
</span><br>
<span class="quotelev1"> &gt; AH72000_at_cluster-srv2's password:
</span><br>
<p>As I mentioned earlier, you need to be able to be able to run
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssh cluster-srv2 uptime
<br>
<p>without being prompted for a password before Open MPI will work  
<br>
properly.
<br>
<p>If you're still having problems after fixing this, please send all the  
<br>
information from the &quot;help&quot; URL I sent earlier.
<br>
<p>Thanks!
<br>
<p><p>On Apr 22, 2009, at 3:24 PM, Luis Vitorio Cargnini wrote:
<br>
<p><span class="quotelev1">&gt; ok this is the debug information debug running on 5 nodes (trying at
</span><br>
<span class="quotelev1">&gt; least), the process is locked until now:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; each node is composed by two quad-core microprocessors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (don't finish), one node yet asked me the password. I have the home
</span><br>
<span class="quotelev1">&gt; partition mounted (the same) in all nodes. so login in cluster-
</span><br>
<span class="quotelev1">&gt; srv[0-4] is the same thing, I generated the dsa key in each node, in
</span><br>
<span class="quotelev1">&gt; different files and added all to the authorized_keys, it should be
</span><br>
<span class="quotelev1">&gt; working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is it, all help is welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is the code been executed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rank, size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init (&amp;argc, &amp;argv);     /* starts MPI */
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);       /* get current  
</span><br>
<span class="quotelev1">&gt; process id */
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size (MPI_COMM_WORLD, &amp;size);       /* get number of  
</span><br>
<span class="quotelev1">&gt; processes */
</span><br>
<span class="quotelev1">&gt;    printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; debug:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-3.2$ mpirun -v -d -hostfile chosts -np 32 /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/0/0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] top: openmpi-sessions-AH72000_at_cluster-srv0_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] mpirun: reset PATH: /export/cluster/appl/x86_64/
</span><br>
<span class="quotelev1">&gt; llvm/bin:/bin:/sbin:/export/cluster/appl/x86_64/llvm/bin:/usr/local/
</span><br>
<span class="quotelev1">&gt; llvm/bin:/usr/local/bin:/usr/bin:/usr/sbin:/home/GTI420/AH72000/oe/
</span><br>
<span class="quotelev1">&gt; bitbake/bin
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] mpirun: reset LD_LIBRARY_PATH: /export/cluster/
</span><br>
<span class="quotelev1">&gt; appl/x86_64/llvm/lib:/lib64:/lib:/export/cluster/appl/x86_64/llvm/ 
</span><br>
<span class="quotelev1">&gt; lib:/
</span><br>
<span class="quotelev1">&gt; usr/lib64:/usr/lib:/usr/local/lib64:/usr/local/lib
</span><br>
<span class="quotelev1">&gt; AH72000_at_cluster-srv1's password: AH72000_at_cluster-srv2's password:
</span><br>
<span class="quotelev1">&gt; AH72000_at_cluster-srv3's password:
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/0/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/0
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] top: openmpi-sessions-AH72000_at_cluster-srv1_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; AH72000_at_cluster-srv2's password:
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/0/3
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/0
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] top: openmpi-sessions-AH72000_at_cluster-srv3_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; AH72000_at_cluster-srv2's password:
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/0/2
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/0
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] top: openmpi-sessions-AH72000_at_cluster-srv2_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] [[35335,0],0] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] [[35335,0],0] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] [[35335,0],0] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] [[35335,0],0] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] [[35335,0],0] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] [[35335,0],1] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] [[35335,0],1] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] [[35335,0],1] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] [[35335,0],1] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] [[35335,0],1] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] [[35335,0],2] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] [[35335,0],2] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] [[35335,0],2] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] [[35335,0],2] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] [[35335,0],2] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21611] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1/0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21611] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21611] top: openmpi-sessions-AH72000_at_cluster-srv0_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21611] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21613] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1/2
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21613] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21613] top: openmpi-sessions-AH72000_at_cluster-srv0_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21613] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21612] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21612] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21612] top: openmpi-sessions-AH72000_at_cluster-srv0_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21612] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21614] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1/3
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21614] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21614] top: openmpi-sessions-AH72000_at_cluster-srv0_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21614] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21615] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1/4
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21615] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21615] top: openmpi-sessions-AH72000_at_cluster-srv0_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21615] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21616] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1/5
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21616] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21616] top: openmpi-sessions-AH72000_at_cluster-srv0_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21616] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21617] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1/6
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21617] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21617] top: openmpi-sessions-AH72000_at_cluster-srv0_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21617] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21618] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1/7
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21618] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21618] top: openmpi-sessions-AH72000_at_cluster-srv0_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21618] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07408] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1/8
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07408] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07408] top: openmpi-sessions-AH72000_at_cluster-srv1_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07408] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] [[35335,0],3] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] [[35335,0],3] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] [[35335,0],3] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] [[35335,0],3] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] [[35335,0],3] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07409] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1/9
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07409] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07409] top: openmpi-sessions-AH72000_at_cluster-srv1_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07409] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07410] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1/10
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07410] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07410] top: openmpi-sessions-AH72000_at_cluster-srv1_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07410] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] Info: Setting up debugger process table for
</span><br>
<span class="quotelev1">&gt; applications
</span><br>
<span class="quotelev1">&gt;    MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;    MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;    MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;    MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;    MPIR_proctable_size = 32
</span><br>
<span class="quotelev1">&gt;    MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (0, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 21611)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (1, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 21612)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (2, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 21613)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (3, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 21614)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (4, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 21615)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (5, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 21616)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (6, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 21617)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (7, cluster-srv0, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 21618)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (8, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 7408)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (9, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 7409)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (10, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 7410)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (11, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 7411)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (12, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 7412)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (13, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 7413)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (14, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 7414)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (15, cluster-srv1, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 7415)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (16, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 17096)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (17, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 17097)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (18, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 17098)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (19, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 17099)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (20, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 17100)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (21, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 17101)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (22, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 17102)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (23, cluster-srv2, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 17103)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (24, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 14232)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (25, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 14233)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (26, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 14234)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (27, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 14235)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (28, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 14236)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (29, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 14237)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (30, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 14238)
</span><br>
<span class="quotelev1">&gt;      (i, host, exe, pid) = (31, cluster-srv3, /export/cluster/home/
</span><br>
<span class="quotelev1">&gt; AH72000/mpi/hello, 14239)
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07412] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1/12
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07412] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07412] top: openmpi-sessions-AH72000_at_cluster-srv1_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07412] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07411] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1/11
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07411] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07411] top: openmpi-sessions-AH72000_at_cluster-srv1_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07411] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07414] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1/14
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07414] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07414] top: openmpi-sessions-AH72000_at_cluster-srv1_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07414] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07415] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1/15
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07415] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07415] top: openmpi-sessions-AH72000_at_cluster-srv1_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07415] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07413] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1/13
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07413] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv1_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07413] top: openmpi-sessions-AH72000_at_cluster-srv1_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07413] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17096] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1/16
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17096] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17096] top: openmpi-sessions-AH72000_at_cluster-srv2_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17096] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17097] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1/17
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17097] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17097] top: openmpi-sessions-AH72000_at_cluster-srv2_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17097] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17099] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1/19
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17099] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17099] top: openmpi-sessions-AH72000_at_cluster-srv2_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17099] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17098] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1/18
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17098] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17098] top: openmpi-sessions-AH72000_at_cluster-srv2_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17098] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17100] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1/20
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17100] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17100] top: openmpi-sessions-AH72000_at_cluster-srv2_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17100] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17102] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1/22
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17102] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17102] top: openmpi-sessions-AH72000_at_cluster-srv2_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17102] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17103] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1/23
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17103] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17103] top: openmpi-sessions-AH72000_at_cluster-srv2_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17103] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17101] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1/21
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17101] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv2_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17101] top: openmpi-sessions-AH72000_at_cluster-srv2_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17101] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14232] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1/24
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14232] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14232] top: openmpi-sessions-AH72000_at_cluster-srv3_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14232] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14235] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1/27
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14235] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14235] top: openmpi-sessions-AH72000_at_cluster-srv3_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14235] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14233] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1/25
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14233] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14233] top: openmpi-sessions-AH72000_at_cluster-srv3_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14233] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14234] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1/26
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14234] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14234] top: openmpi-sessions-AH72000_at_cluster-srv3_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14234] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14236] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1/28
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14236] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14236] top: openmpi-sessions-AH72000_at_cluster-srv3_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14236] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14237] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1/29
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14237] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14237] top: openmpi-sessions-AH72000_at_cluster-srv3_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14237] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14238] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1/30
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14238] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14238] top: openmpi-sessions-AH72000_at_cluster-srv3_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14238] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14239] procdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1/31
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14239] jobdir: /tmp/openmpi-sessions-AH72000_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv3_0/35335/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14239] top: openmpi-sessions-AH72000_at_cluster-srv3_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14239] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21611] [[35335,1],0] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21611] [[35335,1],0] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21611] [[35335,1],0] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21611] [[35335,1],0] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21611] [[35335,1],0] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21613] [[35335,1],2] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21613] [[35335,1],2] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21613] [[35335,1],2] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21613] [[35335,1],2] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21613] [[35335,1],2] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21614] [[35335,1],3] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21614] [[35335,1],3] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21614] [[35335,1],3] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21614] [[35335,1],3] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21614] [[35335,1],3] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21612] [[35335,1],1] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21612] [[35335,1],1] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21612] [[35335,1],1] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21612] [[35335,1],1] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21612] [[35335,1],1] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21615] [[35335,1],4] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21615] [[35335,1],4] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21615] [[35335,1],4] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21615] [[35335,1],4] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21615] [[35335,1],4] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07408] [[35335,1],8] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07408] [[35335,1],8] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07408] [[35335,1],8] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07408] [[35335,1],8] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07408] [[35335,1],8] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07409] [[35335,1],9] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07409] [[35335,1],9] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07409] [[35335,1],9] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07409] [[35335,1],9] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07409] [[35335,1],9] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07410] [[35335,1],10] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07410] [[35335,1],10] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07410] [[35335,1],10] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07410] [[35335,1],10] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07410] [[35335,1],10] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17096] [[35335,1],16] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17096] [[35335,1],16] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17096] [[35335,1],16] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17096] [[35335,1],16] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17096] [[35335,1],16] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17097] [[35335,1],17] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17097] [[35335,1],17] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17097] [[35335,1],17] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17097] [[35335,1],17] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17097] [[35335,1],17] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21617] [[35335,1],6] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21617] [[35335,1],6] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21617] [[35335,1],6] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21617] [[35335,1],6] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21617] [[35335,1],6] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21616] [[35335,1],5] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21616] [[35335,1],5] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21616] [[35335,1],5] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21616] [[35335,1],5] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21616] [[35335,1],5] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07411] [[35335,1],11] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07411] [[35335,1],11] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07411] [[35335,1],11] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07411] [[35335,1],11] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07411] [[35335,1],11] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17099] [[35335,1],19] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17099] [[35335,1],19] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17099] [[35335,1],19] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17099] [[35335,1],19] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17099] [[35335,1],19] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21618] [[35335,1],7] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21618] [[35335,1],7] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21618] [[35335,1],7] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21618] [[35335,1],7] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21618] [[35335,1],7] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17098] [[35335,1],18] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17098] [[35335,1],18] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17098] [[35335,1],18] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17098] [[35335,1],18] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17098] [[35335,1],18] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07412] [[35335,1],12] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07412] [[35335,1],12] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07412] [[35335,1],12] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07412] [[35335,1],12] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07412] [[35335,1],12] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17102] [[35335,1],22] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17102] [[35335,1],22] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17102] [[35335,1],22] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17102] [[35335,1],22] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17102] [[35335,1],22] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17100] [[35335,1],20] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17100] [[35335,1],20] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17100] [[35335,1],20] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17100] [[35335,1],20] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17100] [[35335,1],20] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07415] [[35335,1],15] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07415] [[35335,1],15] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07415] [[35335,1],15] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07415] [[35335,1],15] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07415] [[35335,1],15] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07414] [[35335,1],14] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07414] [[35335,1],14] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07414] [[35335,1],14] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07414] [[35335,1],14] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07414] [[35335,1],14] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17101] [[35335,1],21] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17101] [[35335,1],21] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17101] [[35335,1],21] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17101] [[35335,1],21] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17101] [[35335,1],21] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17103] [[35335,1],23] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17103] [[35335,1],23] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17103] [[35335,1],23] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17103] [[35335,1],23] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17103] [[35335,1],23] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07413] [[35335,1],13] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07413] [[35335,1],13] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07413] [[35335,1],13] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07413] [[35335,1],13] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07413] [[35335,1],13] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14232] [[35335,1],24] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14232] [[35335,1],24] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14232] [[35335,1],24] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14232] [[35335,1],24] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14232] [[35335,1],24] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14235] [[35335,1],27] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14235] [[35335,1],27] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14235] [[35335,1],27] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14235] [[35335,1],27] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14235] [[35335,1],27] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14233] [[35335,1],25] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14233] [[35335,1],25] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14233] [[35335,1],25] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14233] [[35335,1],25] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14233] [[35335,1],25] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14234] [[35335,1],26] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14234] [[35335,1],26] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14234] [[35335,1],26] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14234] [[35335,1],26] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14234] [[35335,1],26] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14236] [[35335,1],28] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14236] [[35335,1],28] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14236] [[35335,1],28] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14236] [[35335,1],28] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14236] [[35335,1],28] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14237] [[35335,1],29] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14237] [[35335,1],29] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14237] [[35335,1],29] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14237] [[35335,1],29] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14237] [[35335,1],29] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14239] [[35335,1],31] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14239] [[35335,1],31] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14239] [[35335,1],31] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14239] [[35335,1],31] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14239] [[35335,1],31] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14238] [[35335,1],30] node[0].name cluster-srv0 daemon 0
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14238] [[35335,1],30] node[1].name cluster-srv1 daemon 1
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14238] [[35335,1],30] node[2].name cluster-srv2 daemon 2
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14238] [[35335,1],30] node[3].name cluster-srv3 daemon 3
</span><br>
<span class="quotelev1">&gt; arch ffc91200
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14238] [[35335,1],30] node[4].name cluster-srv4 daemon
</span><br>
<span class="quotelev1">&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 4 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 1 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 7 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 6 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 24 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 5 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 27 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 25 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 21 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 20 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 18 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 10 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 16 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 8 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 12 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 22 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 13 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 11 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 14 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 31 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 19 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 17 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 26 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 29 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 9 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 30 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 2 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 23 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 3 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 15 of 32
</span><br>
<span class="quotelev1">&gt; Hello world from process 28 of 32
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21615] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07409] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17099] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14233] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17098] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17097] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17096] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21617] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07415] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07414] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07413] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14237] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21613] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17101] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17102] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17100] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14234] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14235] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17103] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv2:17092] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07412] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07408] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07411] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14238] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21616] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21614] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14236] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14239] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14232] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07410] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv3:14230] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21612] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv1:07406] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21611] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:21606] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 09-04-22 &#224; 14:10, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; This isn't really enough information for us to help you.  Can you
</span><br>
<span class="quotelev2">&gt; &gt; send all the information here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 21, 2009, at 10:34 AM, Luis Vitorio Cargnini wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Please someone can answer me which can be this problem ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  daemon INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the debug output:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [[41704,1],14] node[4].name cluster-srv4 daemon INVALID arch  
</span><br>
<span class="quotelev1">&gt; ffc91200
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cluster-srv3:09684] [[41704,1],13] node[0].name cluster-srv0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; daemon 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cluster-srv3:09684] [[41704,1],13] node[1].name cluster-srv1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; daemon 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cluster-srv3:09684] [[41704,1],13] node[2].name cluster-srv2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; daemon 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cluster-srv3:09684] [[41704,1],13] node[3].name cluster-srv3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; daemon 3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; arch ffc91200
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cluster-srv3:09684] [[41704,1],13] node[4].name cluster-srv4  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev3">&gt; &gt;&gt; INVALID arch ffc91200
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process  
</span><br>
<span class="quotelev1">&gt; whose
</span><br>
<span class="quotelev3">&gt; &gt;&gt; contact information is unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;PGP.sig&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;PGP.sig&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9036.php">Gus Correa: "Re: [OMPI users] few Problems"</a>
<li><strong>Previous message:</strong> <a href="9034.php">Yaakoub El Khamra: "Re: [OMPI users] Question about restart"</a>
<li><strong>In reply to:</strong> <a href="9033.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9036.php">Gus Correa: "Re: [OMPI users] few Problems"</a>
<li><strong>Reply:</strong> <a href="9036.php">Gus Correa: "Re: [OMPI users] few Problems"</a>
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
