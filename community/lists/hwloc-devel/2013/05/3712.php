<?
$subject_val = "Re: [hwloc-devel] hwloc embedding vs libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 18:00:19 2013" -->
<!-- isoreceived="20130507220019" -->
<!-- sent="Tue, 7 May 2013 22:00:14 +0000" -->
<!-- isosent="20130507220014" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc embedding vs libltdl" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F60DC50_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="517F8F3C.1040301_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc embedding vs libltdl<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 18:00:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3713.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3711.php">Jiri Hladky: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3659.php">Brice Goglin: "[hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3713.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3713.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3714.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the high latency reply.
<br>
<p>I thought about this quite a bit today.  Here's a thinking-out-of-the-box question: should we just use the default/system installed libltdl instead of embedding?  If we don't embed, many of these problems go away, right?  I.e., we can still have the same options for plugins: non-default, but available if you ask for it *and* there's a system-level libltdl available.
<br>
<p>FWIW: I see RHEL 6.x uses libtool/libltdl 2.2.6.  Do we:
<br>
<p>a) care about supporting plugins by default on distros with older ltdl versions?
<br>
b) use any functionality beyond libltdl 2.2.6?  (or some other older/benchmark distro ltdl version that we care about supporting)
<br>
<p>Attached is a patch that does a few minor things:
<br>
<p>- avoid the use of AM_CONDITIONAL for the libltdl subdir
<br>
- ensure to have libtool avoid setting up Fortran and C++ (a trick we learned from MPICH :-) )
<br>
- disallow embedded mode and plugins (per our phone discussion the other day)
<br>
- reorder the plugins support AC_MSG_RESULT to come before any WARN/ERROR messages
<br>
<p><p>On Apr 30, 2013, at 5:30 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been working on making hwloc v1.7 pass our tests/embedded scripts
</span><br>
<span class="quotelev1">&gt; in the last days. I fixed some minor issues but here's the remaining
</span><br>
<span class="quotelev1">&gt; (big) one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First problem is that we need the AM_CONDITIONAL for HWLOC_LTDL_INCLUDED
</span><br>
<span class="quotelev1">&gt; to be executed when embedded. I can fix this by moving into
</span><br>
<span class="quotelev1">&gt; HWLOC_DO_AM_CONDITIONAL. But...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We conditionally enable SUBDIRS=libltdl (in src/Makefile.am) when
</span><br>
<span class="quotelev1">&gt; plugins are enabled and the internal ltdl is used. Assuming embedders
</span><br>
<span class="quotelev1">&gt; don't want hwloc plugins, this builds fine since we don't enter libltdl
</span><br>
<span class="quotelev1">&gt; during &quot;make&quot;, and we can avoid the (ugly) ltdl configuration entirely
</span><br>
<span class="quotelev1">&gt; [1]. But &quot;make distclean&quot; still enters libltdl unconditionally, and it
</span><br>
<span class="quotelev1">&gt; fails if LTDL wasn't configured because the Makefile is missing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the record, you had a similar issue with doc/tests/tools where you
</span><br>
<span class="quotelev1">&gt; don't even have a Makefile.am in these directories in OMPI. You fixed it
</span><br>
<span class="quotelev1">&gt; by doing DIST_SUBDIRS=$(SUBDIRS). It means that distclean doesn't enter
</span><br>
<span class="quotelev1">&gt; those directories at all. But it also means that you don't get
</span><br>
<span class="quotelev1">&gt; doc/tests/tools in make dist when embedded is enabled. We don't build
</span><br>
<span class="quotelev1">&gt; hwloc tarballs in embedded mode so that's fine. Using the same idea for
</span><br>
<span class="quotelev1">&gt; my issue would require to build hwloc tarballs with plugins enabled and
</span><br>
<span class="quotelev1">&gt; ltld included (both non default), I don't thing we should to this way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we need a way to have src/libltdl stay in DIST_SUBDIRS by default, go
</span><br>
<span class="quotelev1">&gt; in SUBDIRS when needed, and disappear totally when embedded. So here's
</span><br>
<span class="quotelev1">&gt; the only solution I finally found: hwloc configure.ac sets a shell
</span><br>
<span class="quotelev1">&gt; variable to yes, and a new AM_CONDITIONAL adds src/libltdl to
</span><br>
<span class="quotelev1">&gt; DIST_SUBDIRS only when this variable is &quot;yes&quot;.
</span><br>
<span class="quotelev1">&gt; This still causes hwloc tarballs to contain libltdl (because hwloc
</span><br>
<span class="quotelev1">&gt; configure.ac sets the variable to yes). It's still enabled only when the
</span><br>
<span class="quotelev1">&gt; system doesn't have libltdl installed or --with-included-ltdl is given,
</span><br>
<span class="quotelev1">&gt; as previously. And embedders totally ignore src/libltdl, including in
</span><br>
<span class="quotelev1">&gt; distclean, because they don't set the variable to yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If an embedder ever wants to use hwloc plugins, he will have to
</span><br>
<span class="quotelev1">&gt; duplicate what the hwloc configure.ac does [1], and it can still link
</span><br>
<span class="quotelev1">&gt; with another libltdl if needed (to be tested).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patch attached, on top of trunk. Note that you may need these additional
</span><br>
<span class="quotelev1">&gt; commits if you or Pavan want to test things [2]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know what you think because you have the same problem as Pavan
</span><br>
<span class="quotelev1">&gt; when OMPI switches to hwloc v1.6+
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] Enabling ltdl requires some code like below:configure.ac
</span><br>
<span class="quotelev1">&gt; AM_PROG_LIBTOOL([dlopen win32-dll])
</span><br>
<span class="quotelev1">&gt; LT_LANG([C])
</span><br>
<span class="quotelev1">&gt; # Here's what we need to configure ltdl properly
</span><br>
<span class="quotelev1">&gt; LT_CONFIG_LTDL_DIR([src/libltdl])
</span><br>
<span class="quotelev1">&gt; LTDL_INIT([recursive convenience])
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_FILES([src/libltdl/Makefile])
</span><br>
<span class="quotelev1">&gt; # Tell src/Makefile.am that things were configured under src/libltdl/
</span><br>
<span class="quotelev1">&gt; hwloc_mayenter_src_libltdl=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool doesn't seem to like having it in a HWLOC_SETUP_LTDL macro
</span><br>
<span class="quotelev1">&gt; outside of the main, and I think we have to let embedders call
</span><br>
<span class="quotelev1">&gt; AM_PROG_LIBTOOL() directly in case they need other options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's also a hack below these lines that is specific to the
</span><br>
<span class="quotelev1">&gt; &quot;recursive&quot; mode, but we may switch to &quot;subproject&quot; mode  (hwloc
</span><br>
<span class="quotelev1">&gt; configure explicitly calls libltdl configure) at some point if libtool
</span><br>
<span class="quotelev1">&gt; doesn't fix the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [2]
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5563">https://svn.open-mpi.org/trac/hwloc/changeset/5563</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5562">https://svn.open-mpi.org/trac/hwloc/changeset/5562</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ltdl.patch&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3713.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3711.php">Jiri Hladky: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3659.php">Brice Goglin: "[hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3713.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3713.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3714.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
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
