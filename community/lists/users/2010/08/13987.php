<?
$subject_val = "Re: [OMPI users] Memory allocation error when linking with MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 09:01:00 2010" -->
<!-- isoreceived="20100812130100" -->
<!-- sent="Thu, 12 Aug 2010 15:00:55 +0200" -->
<!-- isosent="20100812130055" -->
<!-- name="Nicolas Deladerriere" -->
<!-- email="nicolas.deladerriere_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory allocation error when linking with MPI libraries" -->
<!-- id="AANLkTi=f-1qgGiMGDnHmXPo9ySvQrd=h9wZBQwzP27ia_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikRKX0MgTgRmK_FMst4+_mSR8YOaRznuYv29QcK_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory allocation error when linking with MPI libraries<br>
<strong>From:</strong> Nicolas Deladerriere (<em>nicolas.deladerriere_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 09:00:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13988.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="13986.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="13927.php">Nysal Jan: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14023.php">Nysal Jan: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>Reply:</strong> <a href="14023.php">Nysal Jan: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>Reply:</strong> <a href="14024.php">Nysal Jan: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
building openmpi with option &quot;--without-memory-manager&quot; fix my problem.
<br>
<p>What does it exactly imply to compile with this option ?
<br>
I guess all malloc use functions from libc instead of openmpi one, but does
<br>
it have an effect on performance or something else ?
<br>
<p>Nicolas
<br>
<p>2010/8/8 Nysal Jan &lt;jnysal_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; What interconnect are you using? Infiniband? Use
</span><br>
<span class="quotelev1">&gt; &quot;--without-memory-manager&quot; option while building ompi in order to disable
</span><br>
<span class="quotelev1">&gt; ptmalloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 8, 2010 at 7:49 PM, Nicolas Deladerriere &lt;
</span><br>
<span class="quotelev1">&gt; nicolas.deladerriere_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I'am using 24G machine on 64 bit Linux OS.
</span><br>
<span class="quotelev2">&gt;&gt; If I compile without wrapper, I did not get any problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that when I am linking with openmpi, my program use a kind of
</span><br>
<span class="quotelev2">&gt;&gt; openmpi implemented malloc. Is it possible to switch it off in order ot only
</span><br>
<span class="quotelev2">&gt;&gt; use malloc from libc ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nicolas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010/8/8 Terry Frankcombe &lt;terry_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You're trying to do a 6GB allocate.  Can your underlying system handle
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that?  IF you compile without the wrapper, does it work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see your executable is using the OMPI memory stuff.  IIRC there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; switches to turn that off.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 2010-08-06 at 15:05 +0200, Nicolas Deladerriere wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I'am having an sigsegv error when using simple program compiled and
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; link with openmpi.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I have reproduce the problem using really simple fortran code. It
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; actually does not even use MPI, but just link with mpi shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; libraries. (problem does not appear when I do not link with mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; libraries)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    % cat allocate.F90
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    program test
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    implicit none
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        integer, dimension(:), allocatable :: z
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        integer(kind=8) :: l
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        write(*,*) &quot;l ?&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        read(*,*) l
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        ALLOCATE(z(l))
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        z(1) = 111
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        z(l) = 222
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        DEALLOCATE(z)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    end program test
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am using openmpi 1.4.2 and gfortran for my tests. Here is the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; compilation :
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    % ./openmpi-1.4.2/build/bin/mpif90 --showme -g -o testallocate
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; allocate.F90
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    gfortran -g -o testallocate allocate.F90
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -I/s0/scr1/TOMOT_19311_HAL_/openmpi-1.4.2/build/include -pthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -I/s0/scr1/TOMOT_19311_HAL_/openmpi-1.4.2/build/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -L/s0/scr1/TOMOT_19311_HAL_/openmpi-1.4.2/build/lib -lmpi_f90
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -lutil -lm -ldl -pthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; When I am running that test with different length, I sometimes get a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &quot;Segmentation fault&quot; error. Here are two examples using two specific
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; values, but error happens for many other values of length (I did not
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; manage to find which values of lenght gives that error)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    %  ./testallocate
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     l ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    1600000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    Segmentation fault
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    % ./testallocate
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     l ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    2000000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I used debugger with re-compiled version of openmpi using debug flag.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I got the folowing error in function sYSMALLOc
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    0x00002aaaab70b3b3 in sYSMALLOc (nb=6400000016, av=0x2aaaab930200)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; at malloc.c:3239
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    3239        set_head(remainder, remainder_size | PREV_INUSE);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    Current language:  auto; currently c
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    #0  0x00002aaaab70b3b3 in sYSMALLOc (nb=6400000016,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; av=0x2aaaab930200) at malloc.c:3239
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    #1  0x00002aaaab70d0db in opal_memory_ptmalloc2_int_malloc
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (av=0x2aaaab930200, bytes=6400000000) at malloc.c:4322
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    #2  0x00002aaaab70b773 in opal_memory_ptmalloc2_malloc
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (bytes=6400000000) at malloc.c:3435
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    #3  0x00002aaaab70a665 in opal_memory_ptmalloc2_malloc_hook
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (sz=6400000000, caller=0x2aaaabf8534d) at hooks.c:667
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    #4  0x00002aaaabf8534d in _gfortran_internal_free ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; from /usr/lib64/libgfortran.so.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    #5  0x0000000000400bcc in MAIN__ () at allocate.F90:11
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    #6  0x0000000000400c4e in main ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    (gdb) display
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    (gdb) list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    3234      if ((unsigned long)(size) &gt;= (unsigned long)(nb +
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MINSIZE)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    3235        remainder_size = size - nb;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    3236        remainder = chunk_at_offset(p, nb);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    3237        av-&gt;top = remainder;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    3238        set_head(p, nb | PREV_INUSE | (av != &amp;main_arena ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; NON_MAIN_ARENA : 0));
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    3239        set_head(remainder, remainder_size | PREV_INUSE);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    3240        check_malloced_chunk(av, p, nb);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    3241        return chunk2mem(p);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    3242      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    3243
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I also did the same test in C and I got the same problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Does someone has any idea that could help me understand what's going
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; on ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Nicolas
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13987/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13988.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="13986.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="13927.php">Nysal Jan: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14023.php">Nysal Jan: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>Reply:</strong> <a href="14023.php">Nysal Jan: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>Reply:</strong> <a href="14024.php">Nysal Jan: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
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
