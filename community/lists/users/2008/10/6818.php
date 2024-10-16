<?
$subject_val = "Re: [OMPI users] 1.2.2 to 1.2.7 differences.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 21:16:10 2008" -->
<!-- isoreceived="20081002011610" -->
<!-- sent="Wed, 1 Oct 2008 18:15:09 -0700" -->
<!-- isosent="20081002011509" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.2.2 to 1.2.7 differences." -->
<!-- id="260B5BEEF399B143A0F6E5D1D73ED23128C083_at_NASCMEX01.na.mscsoftware.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C570BDE5-2AED-4366-A8EC-A368D440CC06_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.2.2 to 1.2.7 differences.<br>
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 21:15:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6819.php">Shafagh Jafer: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>Previous message:</strong> <a href="6817.php">Jeff Squyres: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>In reply to:</strong> <a href="6817.php">Jeff Squyres: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6819.php">Shafagh Jafer: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>Reply:</strong> <a href="6819.php">Shafagh Jafer: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
&nbsp;
<br>
Thanks for the reply.  I built 1.2.2 with configure/make/make install.
<br>
but I built 1.2.7 with the srpm.  Perhaps I will try the tar file.
<br>
&nbsp;
<br>
Thanks,
<br>
Joe
<br>
&nbsp;
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] on behalf of Jeff Squyres
<br>
Sent: Wed 10/1/2008 5:35 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] 1.2.2 to 1.2.7 differences.
<br>
<p><p><p>Joe -- AFAIK, we didn't change anything with regards to OPAL_PREFIX in 
<br>
the 1.2 series.  Here's my tests on a 1.2.7 installation:
<br>
<p>-----
<br>
[17:34] svbu-mpi:/home/jsquyres/openmpi-1.2.7 % head config.log
<br>
This file contains any messages produced by compilers while
<br>
running configure, to aid debugging if configure makes a mistake.
<br>
<p>It was created by Open MPI configure 1.2.7, which was
<br>
generated by GNU Autoconf 2.61.  Invocation command line was
<br>
<p>&nbsp;&nbsp;&nbsp;$ ./configure --prefix=/tmp/bogus
<br>
<p>## --------- ##
<br>
## Platform. ##
<br>
[17:34] svbu-mpi:/home/jsquyres/openmpi-1.2.7 % /tmp/bogus/bin/mpirun -
<br>
np 2 uptime
<br>
&nbsp;&nbsp;17:34:06 up 42 days, 23:36,  4 users,  load average: 0.57, 1.22, 0.79
<br>
&nbsp;&nbsp;17:34:06 up 42 days, 23:36,  4 users,  load average: 0.57, 1.22, 0.79
<br>
[17:34] svbu-mpi:/home/jsquyres/openmpi-1.2.7 % mv /tmp/bogus /tmp/
<br>
bogus-foo
<br>
[17:34] svbu-mpi:/home/jsquyres/openmpi-1.2.7 % setenv OPAL_PREFIX /
<br>
tmp/bogus-foo
<br>
[17:34] svbu-mpi:/home/jsquyres/openmpi-1.2.7 % setenv 
<br>
LD_LIBRARY_PATH /tmp/bogus-foo/lib
<br>
[17:34] svbu-mpi:/home/jsquyres/openmpi-1.2.7 % /tmp/bogus-foo/bin/
<br>
mpirun -np 2 uptime
<br>
&nbsp;&nbsp;17:34:47 up 42 days, 23:37,  4 users,  load average: 0.80, 1.19, 0.80
<br>
&nbsp;&nbsp;17:34:47 up 42 days, 23:37,  4 users,  load average: 0.80, 1.19, 0.80
<br>
-----
<br>
<p><p>On Sep 30, 2008, at 3:33 PM, Joe Griffin wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My OpenMPI 1.2.2 version works fine.   I think OPAL_PREFIX has 
</span><br>
<span class="quotelev1">&gt; changed.  I install from RPM with --prefix.  When I run with 1.2.7 I 
</span><br>
<span class="quotelev1">&gt; get the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [em64t6:23450] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/
</span><br>
<span class="quotelev1">&gt; orte_init_stage1.c at line 182
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;     orte_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; from the file:
</span><br>
<span class="quotelev1">&gt;     help-orte-runtime
</span><br>
<span class="quotelev1">&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried just running MPI run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; em64t6 &lt;82&gt; setenv LD_LIBRARY_PATH /usr/local/openmpi-1.2.7/lib64/
</span><br>
<span class="quotelev1">&gt; em64t6 &lt;83&gt; setenv OPAL_PREFIX /usr/local/openmpi-1.2.7
</span><br>
<span class="quotelev1">&gt; em64t6 &lt;84&gt; /usr/local/openmpi-1.2.7/bin/mpirun --help
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;     orterun:usage
</span><br>
<span class="quotelev1">&gt; from the file:
</span><br>
<span class="quotelev1">&gt;     help-orterun.txt
</span><br>
<span class="quotelev1">&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file exists, so I think my OPAL_PREFIX that worked in 1.2.2 does 
</span><br>
<span class="quotelev1">&gt; not seem
</span><br>
<span class="quotelev1">&gt; to work like 1.2.7:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; em64t6 &lt;85&gt; ls -l $OPAL_PREFIX/share/openmpi/help-orterun.txt
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 root root 5718 Sep 29 07:23 /usr/local/openmpi-1.2.7/
</span><br>
<span class="quotelev1">&gt; share/openmpi                                                /help-
</span><br>
<span class="quotelev1">&gt; orterun.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above works with 1.2.2.  I searched the DOC and MAN pages for 
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX, but could
</span><br>
<span class="quotelev1">&gt; not find anything.   Can someone please tell me what has changed?   
</span><br>
<span class="quotelev1">&gt; I am including opmi_info for completeness:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; em64t6 &lt;93&gt; /usr/local/openmpi-1.2.7/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.7
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r19401
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.7
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r19401
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.7
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r19401
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/local/openmpi-1.2.7
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Sep 29 07:15:16 PDT 2008
</span><br>
<span class="quotelev1">&gt;           Configure host: em64t6
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Mon Sep 29 07:23:22 PDT 2008
</span><br>
<span class="quotelev1">&gt;               Built host: em64t6
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: g77
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/g77
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.7)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.7)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.7)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone please tell me what has changed?
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Joe Griffin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6818/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6819.php">Shafagh Jafer: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>Previous message:</strong> <a href="6817.php">Jeff Squyres: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>In reply to:</strong> <a href="6817.php">Jeff Squyres: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6819.php">Shafagh Jafer: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>Reply:</strong> <a href="6819.php">Shafagh Jafer: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
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
