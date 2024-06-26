<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 18:40:45 2016" -->
<!-- isoreceived="20160202234045" -->
<!-- sent="Tue, 2 Feb 2016 23:40:33 +0000" -->
<!-- isosent="20160202234033" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?" -->
<!-- id="20160203084032.11b77421784e27012e947ea6_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="20160202165938.GB88614_at_mordor.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-02 18:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18539.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="18537.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI web site is now 100% https"</a>
<li><strong>In reply to:</strong> <a href="18536.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18539.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Reply:</strong> <a href="18539.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>Is is sufficient?
<br>
Multiple windows can be created on a communicator.
<br>
So I think PID + CID is not sufficient.
<br>
<p>Possible fixes:
<br>
- The root process creates a filename with a random number
<br>
&nbsp;&nbsp;and broadcast it in the communicator.
<br>
- Use per-communicator counter and use it in the filename.
<br>
<p>Regards,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; Hmm, I think you are correct. There may be instances where two different
</span><br>
<span class="quotelev1">&gt; local processes may use the same CID for different communicators. It
</span><br>
<span class="quotelev1">&gt; should be sufficient to add the PID of the current process to the
</span><br>
<span class="quotelev1">&gt; filename to ensure it is unique.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 02, 2016 at 09:33:29PM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Nathan,
</span><br>
<span class="quotelev2">&gt; &gt;    the sm osc component uses communicator CID to name the file that will be
</span><br>
<span class="quotelev2">&gt; &gt;    used to create shared memory segments.
</span><br>
<span class="quotelev2">&gt; &gt;    if I understand and correctly, two different communicators coming from the
</span><br>
<span class="quotelev2">&gt; &gt;    same MPI_Comm_split might share the same CID, so CID (alone) cannot be
</span><br>
<span class="quotelev2">&gt; &gt;    used to generate a unique per communicator file name
</span><br>
<span class="quotelev2">&gt; &gt;    Makes sense ?
</span><br>
<span class="quotelev2">&gt; &gt;    Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;    Gilles
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt; &gt;    From: Peter Wind &lt;peter.wind_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Date: Tuesday, February 2, 2016
</span><br>
<span class="quotelev2">&gt; &gt;    Subject: [OMPI users] shared memory under fortran, bug?
</span><br>
<span class="quotelev2">&gt; &gt;    To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Enclosed is a short (&lt; 100 lines) fortran code example that uses shared
</span><br>
<span class="quotelev2">&gt; &gt;    memory.
</span><br>
<span class="quotelev2">&gt; &gt;    It seems to me it behaves wrongly if openmpi is used.
</span><br>
<span class="quotelev2">&gt; &gt;    Compiled with SGI/mpt , it gives the right result.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    To fail, the code must be run on a single node.
</span><br>
<span class="quotelev2">&gt; &gt;    It creates two groups of 2 processes each. Within each group memory is
</span><br>
<span class="quotelev2">&gt; &gt;    shared.
</span><br>
<span class="quotelev2">&gt; &gt;    The error is that the two groups get the same memory allocated, but they
</span><br>
<span class="quotelev2">&gt; &gt;    should not.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Tested with openmpi 1.8.4, 1.8.5, 1.10.2 and gfortran, intel 13.0, intel
</span><br>
<span class="quotelev2">&gt; &gt;    14.0
</span><br>
<span class="quotelev2">&gt; &gt;    all fail.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    The call:
</span><br>
<span class="quotelev2">&gt; &gt;       call MPI_Win_allocate_shared(win_size, disp_unit, MPI_INFO_NULL,
</span><br>
<span class="quotelev2">&gt; &gt;    comm_group, cp1, win, ierr)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Should allocate memory only within the group. But when the other group
</span><br>
<span class="quotelev2">&gt; &gt;    allocates memory, the pointers from the two groups point to the same
</span><br>
<span class="quotelev2">&gt; &gt;    address in memory.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Could you please confirm that this is the wrong behaviour?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Best regards,
</span><br>
<span class="quotelev2">&gt; &gt;    Peter Wind
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; program shmem_mpi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    !
</span><br>
<span class="quotelev2">&gt; &gt;    ! in this example two groups are created, within each group memory is shared.
</span><br>
<span class="quotelev2">&gt; &gt;    ! Still the other group get allocated the same adress space, which it shouldn't.
</span><br>
<span class="quotelev2">&gt; &gt;    !
</span><br>
<span class="quotelev2">&gt; &gt;    ! Run with 4 processes, mpirun -np 4 a.out
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    use mpi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    use, intrinsic :: iso_c_binding, only : c_ptr, c_f_pointer
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    implicit none
</span><br>
<span class="quotelev2">&gt; &gt; !   include 'mpif.h'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    integer, parameter :: nsize = 100
</span><br>
<span class="quotelev2">&gt; &gt;    integer, pointer   :: array(:)
</span><br>
<span class="quotelev2">&gt; &gt;    integer            :: num_procs
</span><br>
<span class="quotelev2">&gt; &gt;    integer            :: ierr
</span><br>
<span class="quotelev2">&gt; &gt;    integer            :: irank, irank_group
</span><br>
<span class="quotelev2">&gt; &gt;    integer            :: win
</span><br>
<span class="quotelev2">&gt; &gt;    integer            :: comm = MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt;    integer            :: disp_unit
</span><br>
<span class="quotelev2">&gt; &gt;    type(c_ptr)        :: cp1
</span><br>
<span class="quotelev2">&gt; &gt;    type(c_ptr)        :: cp2
</span><br>
<span class="quotelev2">&gt; &gt;    integer            :: comm_group
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    integer(MPI_ADDRESS_KIND) :: win_size
</span><br>
<span class="quotelev2">&gt; &gt;    integer(MPI_ADDRESS_KIND) :: segment_size
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    call MPI_Init(ierr)
</span><br>
<span class="quotelev2">&gt; &gt;    call MPI_Comm_size(comm, num_procs, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;    call MPI_Comm_rank(comm, irank, ierr)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    disp_unit = sizeof(1)
</span><br>
<span class="quotelev2">&gt; &gt;    call MPI_COMM_SPLIT(comm, irank*2/num_procs, irank, comm_group, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;    call MPI_Comm_rank(comm_group, irank_group, ierr)
</span><br>
<span class="quotelev2">&gt; &gt; !   print *, 'irank=', irank, ' group rank=', irank_group
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    if (irank_group == 0) then
</span><br>
<span class="quotelev2">&gt; &gt;       win_size = nsize*disp_unit
</span><br>
<span class="quotelev2">&gt; &gt;    else
</span><br>
<span class="quotelev2">&gt; &gt;       win_size = 0
</span><br>
<span class="quotelev2">&gt; &gt;    endif
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    call MPI_Win_allocate_shared(win_size, disp_unit, MPI_INFO_NULL, comm_group, cp1, win, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;    call MPI_Win_fence(0, win, ierr)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    call MPI_Win_shared_query(win, 0, segment_size, disp_unit, cp2, ierr)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    call MPI_Win_fence(0, win, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;    CALL MPI_BARRIER(comm, ierr)! allocations finished
</span><br>
<span class="quotelev2">&gt; &gt; !   print *, 'irank=', irank, ' size ', segment_size
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    call c_f_pointer(cp2, array, [nsize])
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    array(1)=0;array(2)=0
</span><br>
<span class="quotelev2">&gt; &gt;    CALL MPI_BARRIER(comm, ierr)!
</span><br>
<span class="quotelev2">&gt; &gt; 77 format(4(A,I3))
</span><br>
<span class="quotelev2">&gt; &gt;    if(irank&lt;num_procs/2)then
</span><br>
<span class="quotelev2">&gt; &gt;       if (irank_group == 0)array(1)=11
</span><br>
<span class="quotelev2">&gt; &gt;       CALL MPI_BARRIER(comm, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;       print 77, 'Group 0, rank', irank, ':  array ', array(1), ' ',array(2)
</span><br>
<span class="quotelev2">&gt; &gt;       CALL MPI_BARRIER(comm, ierr)!Group 1 not yet start writing
</span><br>
<span class="quotelev2">&gt; &gt;       CALL MPI_BARRIER(comm, ierr)!Group 1 finished writing
</span><br>
<span class="quotelev2">&gt; &gt;       print 77, 'Group 0, rank', irank, ':  array ', array(1),' ',array(2) 
</span><br>
<span class="quotelev2">&gt; &gt;       if(array(1)==11.and.array(2)==0)then
</span><br>
<span class="quotelev2">&gt; &gt;          print *,irank,' correct result'
</span><br>
<span class="quotelev2">&gt; &gt;       else
</span><br>
<span class="quotelev2">&gt; &gt;          print *,irank,' wrong result'
</span><br>
<span class="quotelev2">&gt; &gt;       endif
</span><br>
<span class="quotelev2">&gt; &gt;    else
</span><br>
<span class="quotelev2">&gt; &gt;       CALL MPI_BARRIER(comm, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;       CALL MPI_BARRIER(comm, ierr)!Group 0 finished writing
</span><br>
<span class="quotelev2">&gt; &gt;       print 77, 'Group 1, rank', irank, ':  array ', array(1),' ',array(2)
</span><br>
<span class="quotelev2">&gt; &gt;       if (irank_group == 0)array(2)=22
</span><br>
<span class="quotelev2">&gt; &gt;       CALL MPI_BARRIER(comm, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;       print 77, 'Group 1, rank', irank, ':  array ', array(1),' ',array(2)
</span><br>
<span class="quotelev2">&gt; &gt;       if(array(1)==0.and.array(2)==22)then
</span><br>
<span class="quotelev2">&gt; &gt;          print *,irank,' correct result'
</span><br>
<span class="quotelev2">&gt; &gt;       else
</span><br>
<span class="quotelev2">&gt; &gt;          print *,irank,' wrong result'
</span><br>
<span class="quotelev2">&gt; &gt;       endif
</span><br>
<span class="quotelev2">&gt; &gt;    endif
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    call MPI_Finalize(ierr)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; end program
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18539.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="18537.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI web site is now 100% https"</a>
<li><strong>In reply to:</strong> <a href="18536.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18539.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Reply:</strong> <a href="18539.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
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
