<?
$subject_val = "Re: [OMPI users] segfault on java binding from MPI.init()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 21:20:45 2015" -->
<!-- isoreceived="20150815012045" -->
<!-- sent="Sat, 15 Aug 2015 10:20:42 +0900" -->
<!-- isosent="20150815012042" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault on java binding from MPI.init()" -->
<!-- id="CAAkFZ5siohYBfRE2qX=HdbnQ=GL0i2iADkK4zFWkuV7Y=OoLtA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj6hzOBJb3ovsWWu9UeQJig3Jzgb3mn1Hjgw7T=UZUPz-w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault on java binding from MPI.init()<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 21:20:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27480.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27478.php">Khalid Hasanov: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>In reply to:</strong> <a href="27476.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27480.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27480.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard,
<br>
<p>I have no infinipath hardware, but the infinipath libraries are installed.
<br>
I tried to run with --mca mtl_psm_priority 0 instead of --mca mtl ^psm
<br>
but that did not work.
<br>
without psm mtl, I was unable to reproduce the persistent communication
<br>
issue,
<br>
so I concluded there was only one issue here.
<br>
<p>do you configure with --disable-dlopen on hopper ?
<br>
I wonder whether --mca mtl ^psm is effective if dlopen is disabled
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, August 15, 2015, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know why Gilles keeps picking on the persistent request problem
</span><br>
<span class="quotelev1">&gt; and mixing
</span><br>
<span class="quotelev1">&gt; it up with this user bug.  I do think for this user the psm probably is
</span><br>
<span class="quotelev1">&gt; the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They don't have anything to do with each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can reproduce the persistent request problem on hopper consistently.  As
</span><br>
<span class="quotelev1">&gt; I said
</span><br>
<span class="quotelev1">&gt; on the telecon last week it has something to do with memory corruption
</span><br>
<span class="quotelev1">&gt; with the
</span><br>
<span class="quotelev1">&gt; receive buffer that is associated with the persistent request.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-08-14 11:21 GMT-06:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  Oscar's not around to ask any more, but I'd be greatly surprised if
</span><br>
<span class="quotelev2">&gt;&gt; he had InfiniPath on his systems where he ran into this segv issue...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Aug 14, 2015, at 1:08 PM, Howard Pritchard &lt;hppritcha_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','hppritcha_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Gilles,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Good catch!  Nate we hadn't been testing on a infinipath system.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2015-08-14 0:20 GMT-06:00 Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Nate,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; i could get rid of the problem by not using the psm mtl.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the infinipath library (used by the psm mtl) sets some signal handlers
</span><br>
<span class="quotelev2">&gt;&gt; that conflict with the JVM
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that can be seen by running
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun -np 1 java -Xcheck:jni MPITestBroke data/
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; so instead of running
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun -np 1 java MPITestBroke data/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; please run
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun --mca mtl ^psm -np 1 java MPITestBroke data/
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that solved the issue for me
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 8/13/2015 9:19 AM, Nate Chambers wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I appreciate you trying to help! I put the Java and its compiled
</span><br>
<span class="quotelev2">&gt;&gt; .class file on Dropbox. The directory contains the .java and .class files,
</span><br>
<span class="quotelev2">&gt;&gt; as well as a data/ directory:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.dropbox.com/sh/pds5c5wecfpb2wk/AAAcz17UTDQErmrUqp2SPjpqa?dl=0">http://www.dropbox.com/sh/pds5c5wecfpb2wk/AAAcz17UTDQErmrUqp2SPjpqa?dl=0</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; You can run it with and without MPI:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;  java MPITestBroke data/
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;  mpirun -np 1 java MPITestBroke data/
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Attached is a text file of what I see when I run it with mpirun and
</span><br>
<span class="quotelev2">&gt;&gt; your debug flag. Lots of debug lines.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Nate
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Wed, Aug 12, 2015 at 11:09 AM, Howard Pritchard &lt;
</span><br>
<span class="quotelev2">&gt;&gt; hppritcha_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','hppritcha_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi Nate,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sorry for the delay in getting back to you.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; We're somewhat stuck on how to help you, but here are two suggestions.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Could you add the following to your launch command line
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --mca odls_base_verbose 100
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; so we can see exactly what arguments are being feed to java when
</span><br>
<span class="quotelev2">&gt;&gt; launching
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; your app.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Also, if you could put your MPITestBroke.class file somewhere (like
</span><br>
<span class="quotelev2">&gt;&gt; google drive)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; where we could get it and try to run locally or at NERSC, that might
</span><br>
<span class="quotelev2">&gt;&gt; help us
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; narrow down the problem.    Better yet, if you have the class or jar
</span><br>
<span class="quotelev2">&gt;&gt; file for
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the entire app plus some data sets, we could try that out as well.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; All the config outputs, etc. you've sent so far indicate a correct
</span><br>
<span class="quotelev2">&gt;&gt; installation
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; of open mpi.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Howard
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Aug 6, 2015 1:54 PM, &quot;Nate Chambers&quot; &lt;nchamber_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','nchamber_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Howard,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I tried the nightly build openmpi-dev-2223-g731cfe3 and it still
</span><br>
<span class="quotelev2">&gt;&gt; segfaults as before. I must admit I am new to MPI, so is it possible I'm
</span><br>
<span class="quotelev2">&gt;&gt; just configuring or running incorrectly? Let me list my steps for you, and
</span><br>
<span class="quotelev2">&gt;&gt; maybe something will jump out? Also attached is my config.log.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; CONFIGURE
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ./configure --prefix=&lt;install-dir&gt; --enable-mpi-java CC=gcc
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; MAKE
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make all install
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; RUN
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &lt;install-dir&gt;/mpirun -np 1 java MPITestBroke twitter/
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; DEFAULT JAVA AND GCC
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; $ java -version
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; java version &quot;1.7.0_21&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Java(TM) SE Runtime Environment (build 1.7.0_21-b11)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Java HotSpot(TM) 64-Bit Server VM (build 23.21-b01, mixed mode)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; $ gcc --v
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Target: x86_64-redhat-linux
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Configured with: ../configure --prefix=/usr --mandir=/usr/share/man
</span><br>
<span class="quotelev2">&gt;&gt; --infodir=/usr/share/info --with-bugurl=
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bugzilla.redhat.com/bugzilla">http://bugzilla.redhat.com/bugzilla</a> --enable-bootstrap --enable-shared
</span><br>
<span class="quotelev2">&gt;&gt; --enable-threads=posix --enable-checking=release --with-system-zlib
</span><br>
<span class="quotelev2">&gt;&gt; --enable-__cxa_atexit --disable-libunwind-exceptions
</span><br>
<span class="quotelev2">&gt;&gt; --enable-gnu-unique-object
</span><br>
<span class="quotelev2">&gt;&gt; --enable-languages=c,c++,objc,obj-c++,java,fortran,ada
</span><br>
<span class="quotelev2">&gt;&gt; --enable-java-awt=gtk --disable-dssi
</span><br>
<span class="quotelev2">&gt;&gt; --with-java-home=/usr/lib/jvm/java-1.5.0-gcj-1.5.0.0/jre
</span><br>
<span class="quotelev2">&gt;&gt; --enable-libgcj-multifile --enable-java-maintainer-mode
</span><br>
<span class="quotelev2">&gt;&gt; --with-ecj-jar=/usr/share/java/eclipse-ecj.jar --disable-libjava-multilib
</span><br>
<span class="quotelev2">&gt;&gt; --with-ppl --with-cloog --with-tune=generic --with-arch_32=i686
</span><br>
<span class="quotelev2">&gt;&gt; --build=x86_64-redhat-linux
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thread model: posix
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; gcc version 4.4.7 20120313 (Red Hat 4.4.7-4) (GCC)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Thu, Aug 6, 2015 at 7:58 AM, Howard Pritchard &lt;hppritcha_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','hppritcha_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; HI Nate,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; We're trying this out on a mac running mavericks and a cray xc
</span><br>
<span class="quotelev2">&gt;&gt; system.   the mac has java 8
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; while the cray xc has java 7.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; We could not get the code to run just using the java launch command,
</span><br>
<span class="quotelev2">&gt;&gt; although we noticed if you add
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     catch(NoClassDefFoundError e) {
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;       System.out.println(&quot;Not using MPI its out to lunch for now&quot;);
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; as one of the catches after the try for firing up MPI, you can get
</span><br>
<span class="quotelev2">&gt;&gt; further.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Instead we tried on the two systems using
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; mpirun -np 1 java MPITestBroke tweets repeat.txt
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; and, you guessed it, we can't reproduce the error, at least using
</span><br>
<span class="quotelev2">&gt;&gt; master.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Would you mind trying to get a copy of nightly master build off of
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/nightly/master/">http://www.open-mpi.org/nightly/master/</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; and install that version and give it a try.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; If that works, then I'd suggest using master (or v2.0) for now.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Howard
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 2015-08-05 14:41 GMT-06:00 Nate Chambers &lt;nchamber_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','nchamber_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Howard,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks for looking at all this. Adding System.gc() did not cause it to
</span><br>
<span class="quotelev2">&gt;&gt; segfault. The segfault still comes much later in the processing.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I was able to reduce my code to a single test file without other
</span><br>
<span class="quotelev2">&gt;&gt; dependencies. It is attached. This code simply opens a text file and reads
</span><br>
<span class="quotelev2">&gt;&gt; its lines, one by one. Once finished, it closes and opens the same file and
</span><br>
<span class="quotelev2">&gt;&gt; reads the lines again. On my system, it does this about 4 times until the
</span><br>
<span class="quotelev2">&gt;&gt; segfault fires. Obviously this code makes no sense, but it's based on our
</span><br>
<span class="quotelev2">&gt;&gt; actual code that reads millions of lines of data and does various
</span><br>
<span class="quotelev2">&gt;&gt; processing to it.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Attached is a tweets.tgz file that you can uncompress to have an input
</span><br>
<span class="quotelev2">&gt;&gt; directory. The text file is just the same line over and over again. Run it
</span><br>
<span class="quotelev2">&gt;&gt; as:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; java MPITestBroke tweets/
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Nate
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Wed, Aug 5, 2015 at 8:29 AM, Howard Pritchard &lt;hppritcha_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','hppritcha_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi Nate,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sorry for the delay in getting back.  Thanks for the sanity check.
</span><br>
<span class="quotelev2">&gt;&gt; You may have a point about the args string to MPI.init -
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; there's nothing the Open MPI is needing from this but that is a
</span><br>
<span class="quotelev2">&gt;&gt; difference with your use case - your app has an argument.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Would you mind adding a
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; System.gc()
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; call immediately after MPI.init call and see if the gc blows up with a
</span><br>
<span class="quotelev2">&gt;&gt; segfault?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Also, may be interesting to add the -verbose:jni to your command line.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; We'll do some experiments here with the init string arg.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Is your app open source where we could download it and try to
</span><br>
<span class="quotelev2">&gt;&gt; reproduce the problem locally?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; thanks,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Howard
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 2015-08-04 18:52 GMT-06:00 Nate Chambers &lt;nchamber_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','nchamber_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sanity checks pass. Both Hello and Ring.java run correctly with the
</span><br>
<span class="quotelev2">&gt;&gt; expected program's output.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Does MPI.init(args) expect anything from those command-line args?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Nate
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Tue, Aug 4, 2015 at 12:26 PM, Howard Pritchard &lt;hppritcha_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','hppritcha_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hello Nate,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; As a sanity check of your installation, could you try to compile the
</span><br>
<span class="quotelev2">&gt;&gt; examples/*.java codes using the mpijavac you've installed and see that
</span><br>
<span class="quotelev2">&gt;&gt; those run correctly?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I'd be just interested in the Hello.java and Ring.java?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Howard
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 2015-08-04 14:34 GMT-06:00 Nate Chambers &lt;nchamber_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','nchamber_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sure, I reran the configure with CC=gcc and then make install. I think
</span><br>
<span class="quotelev2">&gt;&gt; that's the proper way to do it. Attached is my config log. The behavior
</span><br>
<span class="quotelev2">&gt;&gt; when running our code appears to be the same. The output is the same error
</span><br>
<span class="quotelev2">&gt;&gt; I pasted in my email above. It occurs when calling MPI.init().
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I'm not great at debugging this sort of stuff, but happy to try things
</span><br>
<span class="quotelev2">&gt;&gt; out if you need me to.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Nate
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Tue, Aug 4, 2015 at 5:09 AM, Howard Pritchard &lt;hppritcha_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','hppritcha_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hello Nate,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; As a first step to addressing this, could you please try using gcc
</span><br>
<span class="quotelev2">&gt;&gt; rather than the Intel compilers to build Open MPI?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; We've been doing a lot of work recently on the java bindings, etc. but
</span><br>
<span class="quotelev2">&gt;&gt; have never tried using any compilers other
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; than gcc when working with the java bindings.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Howard
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 2015-08-03 17:36 GMT-06:00 Nate Chambers &lt;nchamber_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','nchamber_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; We've been struggling with this error for a while, so hoping someone
</span><br>
<span class="quotelev2">&gt;&gt; more knowledgeable can help!
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Our java MPI code exits with a segfault during its normal operation,
</span><br>
<span class="quotelev2">&gt;&gt; but the segfault occurs before our code ever uses MPI functionality like
</span><br>
<span class="quotelev2">&gt;&gt; sending/receiving. We've removed all message calls and any use of
</span><br>
<span class="quotelev2">&gt;&gt; MPI.COMM_WORLD from the code. The segfault occurs if we call MPI.init(args)
</span><br>
<span class="quotelev2">&gt;&gt; in our code, and does not if we comment that line out. Further vexing us,
</span><br>
<span class="quotelev2">&gt;&gt; the crash doesn't happen at the point of the MPI.init call, but later on in
</span><br>
<span class="quotelev2">&gt;&gt; the program. I don't have an easy-to-run example here because our non-MPI
</span><br>
<span class="quotelev2">&gt;&gt; code is so large and
</span><br>
<span class="quotelev2">&gt;&gt;    complicated. We have run simpler test programs with MPI and the segfault
</span><br>
<span class="quotelev2">&gt;&gt; does not occur.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; We have isolated the line where the segfault occurs. However, if we
</span><br>
<span class="quotelev2">&gt;&gt; comment that out, the program will run longer, but then randomly (but
</span><br>
<span class="quotelev2">&gt;&gt; deterministically) segfault later on in the code. Does anyone have tips on
</span><br>
<span class="quotelev2">&gt;&gt; how to debug this? We have tried several flags with mpirun, but no good
</span><br>
<span class="quotelev2">&gt;&gt; clues.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; We have also tried several MPI versions, including stable 1.8.7 and
</span><br>
<span class="quotelev2">&gt;&gt; the most recent 1.8.8rc1
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ATTACHED
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - config.log from installation
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - output from `ompi_info -all`
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; OUTPUT FROM RUNNING
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; mpirun -np 2 java -mx4g FeaturizeDay datadir/ days.txt
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; some normal output from our code
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; mpirun noticed that process rank 0 with PID 29646 on node r9n69 exited
</span><br>
<span class="quotelev2">&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27386.php">http://www.open-mpi.org/community/lists/users/2015/08/27386.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27389.php">http://www.open-mpi.org/community/lists/users/2015/08/27389.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27391.php">http://www.open-mpi.org/community/lists/users/2015/08/27391.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27392.php">http://www.open-mpi.org/community/lists/users/2015/08/27392.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27393.php">http://www.open-mpi.org/community/lists/users/2015/08/27393.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27396.php">http://www.open-mpi.org/community/lists/users/2015/08/27396.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27399.php">http://www.open-mpi.org/community/lists/users/2015/08/27399.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27405.php">http://www.open-mpi.org/community/lists/users/2015/08/27405.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27406.php">http://www.open-mpi.org/community/lists/users/2015/08/27406.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27446.php">http://www.open-mpi.org/community/lists/users/2015/08/27446.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27450.php">http://www.open-mpi.org/community/lists/users/2015/08/27450.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27465.php">http://www.open-mpi.org/community/lists/users/2015/08/27465.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27471.php">http://www.open-mpi.org/community/lists/users/2015/08/27471.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27472.php">http://www.open-mpi.org/community/lists/users/2015/08/27472.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27479/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27480.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27478.php">Khalid Hasanov: "Re: [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>In reply to:</strong> <a href="27476.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27480.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Reply:</strong> <a href="27480.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
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
