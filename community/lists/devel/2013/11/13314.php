<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 24 10:00:39 2013" -->
<!-- isoreceived="20131124150039" -->
<!-- sent="Sun, 24 Nov 2013 08:00:37 -0700" -->
<!-- isosent="20131124150037" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem" -->
<!-- id="CAAO1KybU9ze2ZaBb4q+f1=2tbBZctMnu039gn2_oKiKRGwPPAg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD471B7A8D_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-24 10:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13315.php">J�rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13313.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>In reply to:</strong> <a href="13313.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13335.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Reply:</strong> <a href="13335.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
But how it will work once oshmem/ folder will be merged into existing
<br>
folders layout and will not have common root for all shmem files?
<br>
On Nov 24, 2013 6:03 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I'm pretty sure I was clear it's a hack. But removing from subdirs is how
</span><br>
<span class="quotelev1">&gt; we disable a project, not by adding a big fixed around a makefile (see
</span><br>
<span class="quotelev1">&gt; ORTE).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent with Good (www.good.com)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; *From: *Mike Dubman [miked_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent: *Saturday, November 23, 2013 07:49 PM Mountain Standard Time
</span><br>
<span class="quotelev1">&gt; *To: *Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject: *[EXTERNAL] Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 -
</span><br>
<span class="quotelev1">&gt; in trunk: config oshmem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Looking into Brian's fix it seems more hack then fix.
</span><br>
<span class="quotelev1">&gt; Could please explain what is wrong in one we committed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2013 10:44 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey Mike
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This fix is incorrect - Brian already committed the correct way to
</span><br>
<span class="quotelev2">&gt;&gt; disable oshmem. Please revert this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 22, 2013, at 5:51 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Date: 2013-11-22 08:51:46 EST (Fri, 22 Nov 2013)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; New Revision: 29733
</span><br>
<span class="quotelev3">&gt;&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29733">https://svn.open-mpi.org/trac/ompi/changeset/29733</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; add support for --without-oshmem in configure
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   trunk/config/oshmem_configure_options.m4 |    16 ++++++++++++++++
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   trunk/oshmem/Makefile.am                 |     5 +++++
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   2 files changed, 21 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Modified: trunk/config/oshmem_configure_options.m4
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --- trunk/config/oshmem_configure_options.m4  Fri Nov 22 07:37:31 2013
</span><br>
<span class="quotelev2">&gt;&gt;        (r29732)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +++ trunk/config/oshmem_configure_options.m4  2013-11-22 08:51:46 EST
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 22 Nov 2013)      (r29733)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -25,6 +25,22 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      [Disable building the OpenSHMEM interface])])
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +# OSHMEM support
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +#
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +AC_MSG_CHECKING([if want OSHMEM support])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +AC_ARG_WITH([oshmem],
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    [AC_HELP_STRING([--with-oshmem],
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                    [Build with OSHMEM support (default=yes)])])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +if test &quot;$with_oshmem&quot; != &quot;no&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    oshmem_with_support=1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +else
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    AC_MSG_RESULT([no])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    oshmem_with_support=0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +fi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +AM_CONDITIONAL(OSHMEM_SUPPORT, test &quot;$oshmem_with_support&quot; = 1)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +#
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # Enable compatibility mode
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #
</span><br>
<span class="quotelev3">&gt;&gt; &gt; AC_MSG_CHECKING([if want SGI/Quadrix compatibility mode])
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Modified: trunk/oshmem/Makefile.am
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --- trunk/oshmem/Makefile.am  Fri Nov 22 07:37:31 2013        (r29732)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +++ trunk/oshmem/Makefile.am  2013-11-22 08:51:46 EST (Fri, 22 Nov
</span><br>
<span class="quotelev2">&gt;&gt; 2013)      (r29733)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -9,6 +9,9 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # $HEADER$
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +# Do we need to build OSHMEM?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +if OSHMEM_SUPPORT
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # Do we have profiling?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; if OSHMEM_PROFILING
</span><br>
<span class="quotelev3">&gt;&gt; &gt; c_pshmem_lib = shmem/c/profile/libshmem_c_pshmem.la
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -99,3 +102,5 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # Remove the generated man pages
</span><br>
<span class="quotelev3">&gt;&gt; &gt; distclean-local:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       rm -f $(nodist_man_MANS) $(dir_stamp)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +endif # OSHMEM_SUPPORT
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13314/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13315.php">J�rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13313.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>In reply to:</strong> <a href="13313.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13335.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Reply:</strong> <a href="13335.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
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
