<?
$subject_val = "[OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 11:53:31 2014" -->
<!-- isoreceived="20141212165331" -->
<!-- sent="Fri, 12 Dec 2014 08:53:26 -0800" -->
<!-- isosent="20141212165326" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host" -->
<!-- id="CAAvDA17OZ0AgofjAVbHLvZHwdD8hLSQoOU_Gmsse0y21Y1frEw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 11:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16552.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="16550.php">Nathan Hjelm: "Re: [OMPI devel] OpenIB has some borked code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16561.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Reply:</strong> <a href="16561.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First, I want to ask what became of the issue discussed in this thread?
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16160.php">http://www.open-mpi.org/community/lists/devel/2014/11/16160.php</a>
<br>
I though we had concluded that one just needed -D_REENTRANT.
<br>
I mention that only for completeness, because I think my current problem is
<br>
different.
<br>
<p>The following works fine with 1.8.3, making the current behavior a
<br>
regression.
<br>
<p>I am still on the same system as that previous report, and still/again see
<br>
a message like the following:
<br>
<p>------------------------------------------------------------
<br>
A process or daemon was unable to complete a TCP connection
<br>
to another process:
<br>
&nbsp;&nbsp;Local host:    pcp-j-19
<br>
&nbsp;&nbsp;Remote host:   172.18.0.120
<br>
This is usually caused by a firewall on the remote host. Please
<br>
check that any firewall (e.g., iptables) has been disabled and
<br>
try again.
<br>
------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
[...etc...]
<br>
<p>It may be worth noting that the hostname pcp-j-19 (172.16.0.119) and the
<br>
address 172.18.0.120 are on different subnets.
<br>
<p>I CANNOT resolve the issue this time by adding -D_REENTRANT to CFLAGS at
<br>
configure time (I didn't bother to check if it there by default now or not).
<br>
<p>NOR can I resolve it by using &quot;-mca oob_tcp_if_include bge0&quot; to allow only
<br>
the 172.16.0.120 subnet.
<br>
IN FACT, the message is the same with that option, other than &quot;172.18&quot;
<br>
changing to &quot;172.16&quot;.
<br>
<p>I've attached the output generated by &quot;-mca oob_base_verbose 20&quot; both with
<br>
and without the oob_tcp_if_include.
<br>
<p>I should also note that that the following is my full mpirun command, which
<br>
excludes the tcp BTL.
<br>
pcp-j-20$ mpirun -mca oob_tcp_if_include bge0 -mca oob_base_verbose 20 -mca
<br>
btl sm,self,openib -np 2 -host pcp-j-19,pcp-j-20 examples/ring_c
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16551/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16551/stdout-inc.txt">stdout-inc.txt</a>
</ul>
<!-- attachment="stdout-inc.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16551/stderr-2if.txt">stderr-2if.txt</a>
</ul>
<!-- attachment="stderr-2if.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16552.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="16550.php">Nathan Hjelm: "Re: [OMPI devel] OpenIB has some borked code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16561.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Reply:</strong> <a href="16561.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
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
