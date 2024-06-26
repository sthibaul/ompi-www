<?
$subject_val = "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  2 23:30:42 2012" -->
<!-- isoreceived="20120403033042" -->
<!-- sent="Mon, 2 Apr 2012 20:30:37 -0700" -->
<!-- isosent="20120403033037" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)" -->
<!-- id="CAMD57oeYfE70T67dP7sj+6FB7VhqRAU4FzaTGs0gPrhxp__N0Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9F89BD72-8367-4C92-8D18-EC31011E8CA4_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-02 23:30:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18917.php">Eloi Gaudry: "[OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18915.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>In reply to:</strong> <a href="18910.php">Reuti: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19149.php">Rémi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="19149.php">Rémi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid the 1.5 series doesn't offer any help in this regard. The
<br>
required changes only exist in the developers trunk, which will be released
<br>
as the 1.7 series in the not-too-distant future.
<br>
<p><p>On Mon, Apr 2, 2012 at 9:42 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 02.04.2012 um 17:40 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure the 1.4 series can support that behavior. Each mpirun only
</span><br>
<span class="quotelev1">&gt; knows about itself - it has no idea something else is going on.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you attempted to bind, all procs of same rank from each run would
</span><br>
<span class="quotelev1">&gt; bind on the same CPU.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All you can really do is use -host to tell the fourth run not to use the
</span><br>
<span class="quotelev1">&gt; first node. Or use the devel trunk, which has more ability to separate runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aha, this could be interesting as I face a similar issue on one of the
</span><br>
<span class="quotelev1">&gt; clusters we use: I want to run several `mpiexec &amp;` under SLURM inside one
</span><br>
<span class="quotelev1">&gt; job. But as none knows about the others, I had to disable the SLURM
</span><br>
<span class="quotelev1">&gt; integration by unsetting the job id information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Despite the fact I used a proper value for -np *and* work only on one
</span><br>
<span class="quotelev1">&gt; node, the executions of mpiexec twice reveals (i.e. `mpiexec &amp;` twice)
</span><br>
<span class="quotelev1">&gt; otherwise:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;All nodes which are allocated for this job are already filled.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does 1.5 offer in detail in this area?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my iPad
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 2, 2012, at 6:53 AM, R&#233;mi Palancher &lt;remi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi there,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm encountering a problem when trying to run multiple mpirun in
</span><br>
<span class="quotelev1">&gt; parallel inside
</span><br>
<span class="quotelev3">&gt; &gt;&gt; one SLURM allocation on multiple nodes using a QLogic interconnect
</span><br>
<span class="quotelev1">&gt; network with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PSM.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm using Open MPI version 1.4.5 compiled with GCC 4.4.5 on Debian
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My cluster is composed of 12 cores nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is how I'm able to reproduce the problem:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Allocate 20 CPU on 2 nodes :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; frontend $ salloc -N 2 -n 20
</span><br>
<span class="quotelev3">&gt; &gt;&gt; frontend $ srun hostname | sort | uniq -c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    12 cn1381
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     8 cn1382
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My job allocates 12 CPU on node cn1381 and 8 CPU on cn1382.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My test MPI program parse for each task the value of Cpus_allowed_list
</span><br>
<span class="quotelev1">&gt; in file
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /proc/$PID/status and print it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I run it on all 20 allocated CPU, it works well:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; frontend $ mpirun get-allowed-cpu-ompi 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 00 of 20 (cn1381): 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 01 of 20 (cn1381): 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 02 of 20 (cn1381): 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 03 of 20 (cn1381): 3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 04 of 20 (cn1381): 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 05 of 20 (cn1381): 7
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 06 of 20 (cn1381): 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 07 of 20 (cn1381): 9
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 08 of 20 (cn1381): 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 09 of 20 (cn1381): 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 10 of 20 (cn1381): 6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 11 of 20 (cn1381): 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 12 of 20 (cn1382): 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 13 of 20 (cn1382): 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 14 of 20 (cn1382): 6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 15 of 20 (cn1382): 7
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 16 of 20 (cn1382): 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 17 of 20 (cn1382): 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 18 of 20 (cn1382): 9
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 19 of 20 (cn1382): 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here you can see that Slurm gave me CPU 0-11 on cn1381 and 4-11 on
</span><br>
<span class="quotelev1">&gt; cn1382.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Now I'd like to run multiple MPI runs in parallel, 4 tasks each, inside
</span><br>
<span class="quotelev1">&gt; my job.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; frontend $ cat params.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It works well when I launch 3 runs in parallel, where it only use the
</span><br>
<span class="quotelev1">&gt; 12 CPU of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the first node (3 runs x 4 tasks = 12 CPU):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; frontend $ xargs -P 3 -n 1 mpirun -n 4 get-allowed-cpu-ompi &lt; params.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 2 Task 00 of 04 (cn1381): 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 2 Task 01 of 04 (cn1381): 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 2 Task 02 of 04 (cn1381): 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 2 Task 03 of 04 (cn1381): 7
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 00 of 04 (cn1381): 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 01 of 04 (cn1381): 3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 02 of 04 (cn1381): 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 03 of 04 (cn1381): 6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 3 Task 00 of 04 (cn1381): 9
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 3 Task 01 of 04 (cn1381): 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 3 Task 02 of 04 (cn1381): 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 3 Task 03 of 04 (cn1381): 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 4 Task 00 of 04 (cn1381): 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 4 Task 01 of 04 (cn1381): 3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 4 Task 02 of 04 (cn1381): 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 4 Task 03 of 04 (cn1381): 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 5 Task 00 of 04 (cn1381): 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 5 Task 01 of 04 (cn1381): 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 5 Task 02 of 04 (cn1381): 7
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 5 Task 03 of 04 (cn1381): 6
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But when I try to launch 4 runs or more in parallel, where it needs to
</span><br>
<span class="quotelev1">&gt; use the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CPU of the other node as well, it fails:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; frontend $ $ xargs -P 4 -n 1 mpirun -n 4 get-allowed-cpu-ompi &lt;
</span><br>
<span class="quotelev1">&gt; params.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cn1381.23245ipath_userinit: assign_context command failed: Network is
</span><br>
<span class="quotelev1">&gt; down
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cn1381.23245can't open /dev/ipath, network down (err=26)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PSM was unable to open an endpoint. Please make sure that the network
</span><br>
<span class="quotelev1">&gt; link is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; active on the node and the hardware is functioning.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Error: Could not detect network connectivity
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cn1381.23248ipath_userinit: assign_context command failed: Network is
</span><br>
<span class="quotelev1">&gt; down
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cn1381.23248can't open /dev/ipath, network down (err=26)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PSM was unable to open an endpoint. Please make sure that the network
</span><br>
<span class="quotelev1">&gt; link is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; active on the node and the hardware is functioning.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Error: Could not detect network connectivity
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cn1381.23247ipath_userinit: assign_context command failed: Network is
</span><br>
<span class="quotelev1">&gt; down
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cn1381.23247can't open /dev/ipath, network down (err=26)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cn1381.23249ipath_userinit: assign_context command failed: Network is
</span><br>
<span class="quotelev1">&gt; down
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cn1381.23249can't open /dev/ipath, network down (err=26)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PML add procs failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cn1381:23245] Abort before MPI_INIT completed successfully; not able
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cn1381:23247] Abort before MPI_INIT completed successfully; not able
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cn1381:23242] Abort before MPI_INIT completed successfully; not able
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cn1381:23243] Abort before MPI_INIT completed successfully; not able
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun has exited due to process rank 2 with PID 23245 on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node cn1381 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PML add procs failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cn1381:23246] Abort before MPI_INIT completed successfully; not able
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cn1381:23248] Abort before MPI_INIT completed successfully; not able
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cn1381:23249] Abort before MPI_INIT completed successfully; not able
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cn1381:23244] Abort before MPI_INIT completed successfully; not able
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun has exited due to process rank 2 with PID 23248 on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node cn1381 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [ivanoe1:24981] 3 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mtl-psm.txt / unable to open endpoint
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [ivanoe1:24981] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [ivanoe1:24981] 3 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [ivanoe1:24983] 3 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mtl-psm.txt / unable to open endpoint
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [ivanoe1:24983] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [ivanoe1:24983] 3 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 3 Task 00 of 04 (cn1381): 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 3 Task 01 of 04 (cn1381): 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 3 Task 02 of 04 (cn1381): 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 3 Task 03 of 04 (cn1381): 3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 00 of 04 (cn1381): 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 01 of 04 (cn1381): 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 02 of 04 (cn1381): 6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 1 Task 03 of 04 (cn1381): 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 5 Task 00 of 04 (cn1381): 7
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 5 Task 01 of 04 (cn1381): 9
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 5 Task 02 of 04 (cn1381): 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Launch 5 Task 03 of 04 (cn1381): 11
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As far as I can understand, Open MPI tries to launch all runs on the
</span><br>
<span class="quotelev1">&gt; same nodes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (cn1382 in my case) and it forgets about the other node. Am I right?
</span><br>
<span class="quotelev1">&gt; How can I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; avoid this behaviour?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here are the Open MPI variables set in my environment:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ env | grep OMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI_MCA_mtl=psm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI_MCA_pml=cm
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You can find attached to this email the config.log and the output of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; following commands:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; frontend $ ompi_info --all &gt; ompi_info_all.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; frontend $ mpirun --bynode --npernode 1 --tag-output ompi_info -v ompi
</span><br>
<span class="quotelev1">&gt; full \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          --parsable &gt; ompi_nodes.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance for any kind of help!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; R&#233;mi Palancher
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://rezib.org">http://rezib.org</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;ompi_info_all.txt.gz&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;ompi_nodes.txt&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18916/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18917.php">Eloi Gaudry: "[OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18915.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>In reply to:</strong> <a href="18910.php">Reuti: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19149.php">Rémi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="19149.php">Rémi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
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
