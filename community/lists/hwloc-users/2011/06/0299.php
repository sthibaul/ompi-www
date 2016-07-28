<?
$subject_val = "Re: [hwloc-users] Patch to disable GCC __builtin_ operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 11:02:52 2011" -->
<!-- isoreceived="20110609150252" -->
<!-- sent="Thu, 9 Jun 2011 11:02:47 -0400" -->
<!-- isosent="20110609150247" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Patch to disable GCC __builtin_ operations" -->
<!-- id="BANLkTimY4nOimj8SF0hN-rvcZF65T12BAQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110609130530.GP5539_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Patch to disable GCC __builtin_ operations<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 11:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0300.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0298.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>In reply to:</strong> <a href="0298.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0300.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Below is some disassembly generated from gdb from the core file that
<br>
was generated. The signal is an illegal instruction, not a segv as I
<br>
mentioned previously (sorry about that). I also included some
<br>
information about the lstopo file and configure parameters below.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>-------------------------------------
<br>
shell$ file lstopo
<br>
lstopo: ELF 64-bit LSB executable, AMD x86-64, version 1 (SYSV), for
<br>
GNU/Linux 2.6.4, statically linked, for GNU/Linux 2.6.4, not stripped
<br>
<p>hwloc configured with:
<br>
shell$ ./configure --prefix=/myprefix/hwloc --disable-xml
<br>
--enable-static --disable-shared
<br>
<p>shell$ gdb lstopo ./core
<br>
GNU gdb 6.6
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and you are
<br>
welcome to change it and/or distribute copies of it under certain conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;x86_64-suse-linux&quot;...
<br>
Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
<br>
Failed to read a valid object file image from memory.
<br>
Core was generated by `/tmp/work/jjhursey/bin/hwloc/bin/lstopo'.
<br>
Program terminated with signal 4, Illegal instruction.
<br>
#0  0x000000000041d8d9 in hwloc_weight_long ()
<br>
(gdb) bt
<br>
#0  0x000000000041d8d9 in hwloc_weight_long ()
<br>
#1  0x000000000041ffdf in hwloc_bitmap_weight ()
<br>
#2  0x0000000000424cce in look_sysfscpu ()
<br>
#3  0x0000000000426623 in hwloc_look_linux ()
<br>
#4  0x00000000004155b4 in hwloc_discover ()
<br>
#5  0x0000000000416792 in hwloc_topology_load ()
<br>
#6  0x000000000040201f in main ()
<br>
(gdb) disassemble
<br>
Dump of assembler code for function hwloc_weight_long:
<br>
0x000000000041d8d1 &lt;hwloc_weight_long+0&gt;:	push   %rbp
<br>
0x000000000041d8d2 &lt;hwloc_weight_long+1&gt;:	mov    %rsp,%rbp
<br>
0x000000000041d8d5 &lt;hwloc_weight_long+4&gt;:	mov    %rdi,0xfffffffffffffff8(%rbp)
<br>
0x000000000041d8d9 &lt;hwloc_weight_long+8&gt;:	popcnt 0xfffffffffffffff8(%rbp),%rax
<br>
0x000000000041d8df &lt;hwloc_weight_long+14&gt;:	leaveq
<br>
0x000000000041d8e0 &lt;hwloc_weight_long+15&gt;:	retq
<br>
End of assembler dump.
<br>
-------------------------------------
<br>
<p><p>On Thu, Jun 9, 2011 at 9:05 AM, Samuel Thibault
<br>
&lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Josh Hursey, le Thu 09 Jun 2011 14:52:39 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The odd thing about this environment is that the head node seems to
</span><br>
<span class="quotelev2">&gt;&gt; have a slightly different setup than the compute nodes (not sure why
</span><br>
<span class="quotelev2">&gt;&gt; exactly, but that's what it is). So hwloc is configured and runs
</span><br>
<span class="quotelev2">&gt;&gt; correctly on the head node, but when it is asked to run on the compute
</span><br>
<span class="quotelev2">&gt;&gt; nodes it segvs at the call site of the __builtin_ functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you post a disassembly of the site?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect that the ABI compatibility of the libc interface is what is
</span><br>
<span class="quotelev2">&gt;&gt; enabling the remainder of the code to work in both environments, and
</span><br>
<span class="quotelev2">&gt;&gt; that the __builtin_ functions bypass that ABI to put in system
</span><br>
<span class="quotelev2">&gt;&gt; specific code that (for whatever reason) does not match on the compute
</span><br>
<span class="quotelev2">&gt;&gt; nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the odd thing is that there shouldn't be any ABI things here, it's
</span><br>
<span class="quotelev1">&gt; meant to be inlined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0300.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0298.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>In reply to:</strong> <a href="0298.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0300.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
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