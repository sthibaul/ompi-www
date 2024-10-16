<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 18:09:15 2007" -->
<!-- isoreceived="20070813220915" -->
<!-- sent="Tue, 14 Aug 2007 00:08:58 +0200" -->
<!-- isosent="20070813220858" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]" -->
<!-- id="20070813220858.GY21086_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="18112.52359.892229.124072_at_ron.nulle.part" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 18:08:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2144.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2142.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2142.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2144.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2144.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 13, 2007 at 04:26:31PM -0500, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I'll now compile the 1.2.3 release tarball and see if I can reproduce
</span><br>
<p>The 1.2.3 release also works fine:
<br>
<p>adi_at_debian:~$ ./ompi123/bin/mpirun -np 2 ring
<br>
0: sending message (0) to 1
<br>
0: sent message
<br>
1: waiting for message
<br>
1: got message (1) from 0, sending to 0
<br>
0: got message (1) from 1
<br>
<p>adi_at_debian:~$ ./ompi123/bin/ompi_info 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.2.3
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r15136
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2.3
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r15136
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.2.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r15136
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /home/adi/ompi123
<br>
&nbsp;Configured architecture: x86_64-unknown-kfreebsd6.2-gnu
<br>
<p><span class="quotelev2">&gt; &gt; the segfaults. On the other hand, I guess nobody is using OMPI on
</span><br>
<span class="quotelev2">&gt; &gt; GNU/kFreeBSD, so upgrading the openmpi-package to a subversion snapshot
</span><br>
<span class="quotelev2">&gt; &gt; would also fix the problem (think of &quot;fixed in experimental&quot;).
</span><br>
<span class="quotelev1">&gt; Well, I generally prefer to follow upstream releases, and Jeff from the
</span><br>
<span class="quotelev1">&gt; upstream team echoed that. Let's wait for 1.2.4, shall we?
</span><br>
<p>That's fine, v1.2 is the production release.
<br>
<p><span class="quotelev1">&gt; | JFTR: It's currently not possible to compile OMPI on amd64 (out of the
</span><br>
<span class="quotelev1">&gt; | box). Though it compiles on i386
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; |    <a href="http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-i386&amp;stamp=1187000200&amp;file=log&amp;as=raw">http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-i386&amp;stamp=1187000200&amp;file=log&amp;as=raw</a>
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | it fails on amd64:
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; |    <a href="http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-amd64&amp;stamp=1186969782&amp;file=log&amp;as=raw">http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-amd64&amp;stamp=1186969782&amp;file=log&amp;as=raw</a>
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | stacktrace.c: In function 'opal_show_stackframe':
</span><br>
<span class="quotelev1">&gt; | stacktrace.c:145: error: 'FPE_FLTDIV' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; | function)
</span><br>
<span class="quotelev1">&gt; | stacktrace.c:145: error: (Each undeclared identifier is reported only
</span><br>
<span class="quotelev1">&gt; | once
</span><br>
<span class="quotelev1">&gt; | stacktrace.c:145: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; | stacktrace.c:146: error: 'FPE_FLTOVF' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; | function)
</span><br>
<span class="quotelev1">&gt; | stacktrace.c:147: error: 'FPE_FLTUND' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; | function)
</span><br>
<span class="quotelev1">&gt; | make[4]: *** [stacktrace.lo] Error 1
</span><br>
<span class="quotelev1">&gt; | make[4]: Leaving directory `/build/buildd/openmpi-1.2.3/opal/util'
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | This is caused by libc0.1-dev in /usr/include/bits/sigcontext.h, the
</span><br>
<span class="quotelev1">&gt; | relevant #define's are placed in an #ifdef __i386__ condition. After
</span><br>
<span class="quotelev1">&gt; | extending this for __x86_64__, everything works fine.
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | Should I file a bugreport against libc0.1-dev or will you take care?
</span><br>
<span class="quotelev1">&gt; I'm confused. What is libc0.1-dev?
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;<a href="http://packages.debian.org/unstable/libdevel/libc0.1-dev">http://packages.debian.org/unstable/libdevel/libc0.1-dev</a>
<br>
<p>It's the &quot;libc6-dev&quot; for GNU/kFreeBSD, at least that's how I understand
<br>
it.
<br>
<p><span class="quotelev1">&gt; Also note that I happened to have uploaded a third Debian revision of 1.2.3
</span><br>
<span class="quotelev1">&gt; yesterday, and that Debian release 1.2.3-3 built fine on amd as per:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://buildd.debian.org/build.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=amd64&amp;file=log">http://buildd.debian.org/build.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=amd64&amp;file=log</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So are we sure there's a bug?
</span><br>
<p>Yes, absolutely. I was a little bit imprecise: with amd64, I ment
<br>
kfreebsd-amd64, not Linux-amd64.
<br>
<p>If you follow my two links and read their headlines, you can see that
<br>
these are the buildlogs of 1.2.3-3 on kfreebsd, working for i386, but
<br>
failing for amd64.
<br>
<p>This is caused by &quot;wrong&quot; libc headers on kfreebsd, that's why I thought
<br>
Uwe might want to have a look at it.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2144.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2142.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2142.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2144.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2144.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
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
