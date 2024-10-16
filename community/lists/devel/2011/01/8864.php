<?
$subject_val = "Re: [OMPI devel] OMPI 1.4.3 hangs in gather";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 13 01:29:27 2011" -->
<!-- isoreceived="20110113062927" -->
<!-- sent="Thu, 13 Jan 2011 11:59:21 +0530" -->
<!-- isosent="20110113062921" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.4.3 hangs in gather" -->
<!-- id="AANLkTimrEJMAD09GOfidg8giQHagAnWoNMaHhOihnoHr_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AANLkTinOvKQ8y-W7qZU1F-Yw6XcS7WQOgzNJ=ZfK4aUQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.4.3 hangs in gather<br>
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-13 01:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8865.php">Jeff Squyres: "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch"</a>
<li><strong>Previous message:</strong> <a href="8863.php">Ralph Castain: "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch"</a>
<li><strong>In reply to:</strong> <a href="8852.php">Doron Shoham: "[OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try manually specifying the collective component &quot;-mca coll tuned&quot;
<br>
You seem to be using the &quot;sync&quot; collective component, any stale mca param
<br>
files lying around ?
<br>
<p>--Nysal
<br>
<p>On Tue, Jan 11, 2011 at 6:28 PM, Doron Shoham &lt;doron.ompi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All machines on the setup are IDataPlex with Nehalem 12 cores per node,
</span><br>
<span class="quotelev1">&gt; 24GB  memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#183;         *Problem 1 &#150; OMPI 1.4.3 hangs in gather:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m trying to run IMB and gather operation with OMPI 1.4.3 (Vanilla).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It happens when np &gt;= 64 and message size exceed 4k:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 64 -machinefile voltairenodes -mca btl sm,self,openib
</span><br>
<span class="quotelev1">&gt; imb/src-1.4.2/IMB-MPI1 gather &#150;npmin 64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; voltairenodes consists of 64 machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Benchmarking Gather
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # #processes = 64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             0         1000         0.02         0.02         0.02
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             1          331        14.02        14.16        14.09
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             2          331        12.87        13.08        12.93
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             4          331        14.29        14.43        14.34
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             8          331        16.03        16.20        16.11
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            16          331        17.54        17.74        17.64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            32          331        20.49        20.62        20.53
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            64          331        23.57        23.84        23.70
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           128          331        28.02        28.35        28.18
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           256          331        34.78        34.88        34.80
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           512          331        46.34        46.91        46.60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          1024          331        63.96        64.71        64.33
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          2048          331       460.67       465.74       463.18
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          4096          331       637.33       643.99       640.75
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This the padb output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; padb &#150;A &#150;x &#150;Ormgr=mpirun &#150;tree:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =~=~=~=~=~=~=~=~=~=~=~= PuTTY log 2011.01.06 14:33:17
</span><br>
<span class="quotelev1">&gt; =~=~=~=~=~=~=~=~=~=~=~=
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warning, remote process state differs across ranks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; state : ranks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; R (running) :
</span><br>
<span class="quotelev1">&gt; [1,3-6,8,10-13,16-20,23-28,30-32,34-42,44-45,47-49,51-53,56-59,61-63]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; S (sleeping) : [0,2,7,9,14-15,21-22,29,33,43,46,50,54-55,60]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stack trace(s) for thread: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0-63] (64 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main() at ?:?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   IMB_init_buffers_iter() at ?:?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     IMB_gather() at ?:?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PMPI_Gather() at pgather.c:175
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         mca_coll_sync_gather() at coll_sync_gather.c:46
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           ompi_coll_tuned_gather_intra_dec_fixed() at
</span><br>
<span class="quotelev1">&gt; coll_tuned_decision_fixed.c:714
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             [0,3-63] (62 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ompi_coll_tuned_gather_intra_linear_sync() at
</span><br>
<span class="quotelev1">&gt; coll_tuned_gather.c:248
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               mca_pml_ob1_recv() at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 ompi_request_wait_completion() at
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/request/request.h:375
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   opal_condition_wait() at
</span><br>
<span class="quotelev1">&gt; ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             [1] (1 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ompi_coll_tuned_gather_intra_linear_sync() at
</span><br>
<span class="quotelev1">&gt; coll_tuned_gather.c:302
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               mca_pml_ob1_send() at pml_ob1_isend.c:125
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 ompi_request_wait_completion() at
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/request/request.h:375
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   opal_condition_wait() at
</span><br>
<span class="quotelev1">&gt; ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             [2] (1 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ompi_coll_tuned_gather_intra_linear_sync() at
</span><br>
<span class="quotelev1">&gt; coll_tuned_gather.c:315
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               ompi_request_default_wait() at request/req_wait.c:37
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 ompi_request_wait_completion() at
</span><br>
<span class="quotelev1">&gt; ../ompi/request/request.h:375
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   opal_condition_wait() at ../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stack trace(s) for thread: 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0-63] (64 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; start_thread() at ?:?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   btl_openib_async_thread() at btl_openib_async.c:344
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     poll() at ?:?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stack trace(s) for thread: 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0-63] (64 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; start_thread() at ?:?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   service_thread_start() at btl_openib_fd.c:427
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     select() at ?:?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-3.2$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running again padb after couple of minutes, I can see that the total
</span><br>
<span class="quotelev1">&gt; number of processes remain in the same position but
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; different processes are at different positions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, this is the diff between two padb outputs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warning, remote process state differs across ranks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; state : ranks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -R (running) : [0,2-4,6-13,16-18,20-21,28-31,33-36,38-56,58,60,62-63]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -S (sleeping) : [1,5,14-15,19,22-27,32,37,57,59,61]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +R (running) : [2,5-14,16-23,25,28-40,42-48,50-51,53-58,61,63]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +S (sleeping) : [0-1,3-4,15,24,26-27,41,49,52,59-60,62]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stack trace(s) for thread: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0-63] (64 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -13,21 +13,21 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_coll_sync_gather() at coll_sync_gather.c:46
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_gather_intra_dec_fixed() at coll_tuned_decision_fixed.c:714
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - [0,3-63] (62 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + [0-5,8-63] (62 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:248
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv() at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_request_wait_completion() at ../../../../ompi/request/request.h:375
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_condition_wait() at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - [1] (1 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + [6] (1 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:302
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_send() at pml_ob1_isend.c:125
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_request_wait_completion() at ../../../../ompi/request/request.h:375
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_condition_wait() at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - [2] (1 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + [7] (1 processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:315
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_request_default_wait() at request/req_wait.c:37
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Choosing different gather algorithm seems to bypass the hang.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve used the following mca parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca coll_tuned_use_dynamic_rules 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca coll_tuned_gather_algorithm 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, both dec_fixed and basic_linear works while binomial and
</span><br>
<span class="quotelev1">&gt; linear_sync doesn&#146;t.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With OMPI 1.5 it doesn&#146;t hangs (with all gather algorithms) and it much
</span><br>
<span class="quotelev1">&gt; faster (the number of repetitions is much higher):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Benchmarking Gather
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # #processes = 64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             0         1000         0.02         0.03         0.02
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             1         1000        18.50        18.55        18.53
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             2         1000        18.17        18.25        18.22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             4         1000        19.04        19.10        19.07
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             8         1000        19.60        19.67        19.64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            16         1000        21.39        21.47        21.43
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            32         1000        24.83        24.91        24.87
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            64         1000        27.35        27.45        27.40
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           128         1000        33.23        33.34        33.29
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           256         1000        41.24        41.39        41.32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           512         1000        52.62        52.81        52.71
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          1024         1000        73.20        73.46        73.32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          2048         1000       416.36       418.04       417.22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          4096         1000       638.54       640.70       639.65
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          8192         1000       506.26       506.97       506.63
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         16384         1000       600.63       601.40       601.02
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         32768         1000       639.52       640.34       639.93
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         65536          640       914.22       916.02       915.13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        131072          320      2287.37      2295.18      2291.35
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        262144          160      4041.36      4070.58      4056.27
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        524288           80      7292.35      7463.27      7397.14
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       1048576           40     13647.15     14107.15     13905.29
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       2097152           20     30625.00     32635.45     31815.36
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       4194304           10     63543.01     70987.49     68680.48
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#183;         *Problem 2 &#150; segmentation fault with OMPI 1.4.3/1.5 and IMB
</span><br>
<span class="quotelev1">&gt; gather np=768:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When trying to run the same command but with np=768 I get segmentation
</span><br>
<span class="quotelev1">&gt; fault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.3/bin/mpirun -np 768 -machinefile voltairenodes -mca btl
</span><br>
<span class="quotelev1">&gt; sm,self,openib -mca coll_tuned_use_dynamic_rules 1 -mca
</span><br>
<span class="quotelev1">&gt; coll_tuned_gather_algorithm 1 imb/src/IMB-MPI1 gather -npmin 768 -mem 1.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This happens in OMPI 1.4.3 and 1.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] Failing at address: 0x2aab4a204000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [ 0] /lib64/libpthread.so.0 [0x366aa0e7c0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [ 1]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install//openmpi-1.4.3/lib/libmpi.so.0(ompi_convertor_unpack+0x15f)
</span><br>
<span class="quotelev1">&gt; [0x2b077882282e]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [ 2]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x2b077b9e1672]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [ 3]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x2b077b9dd0b6]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [ 4]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; [0x2b077c459d87]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [ 5]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install//openmpi-1.4.3/lib/libopen-pal.so.0(opal_progress+0xbe)
</span><br>
<span class="quotelev1">&gt; [0x2b0778d845b8]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [ 6]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x2b077b9d6d62]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [ 7]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x2b077b9d6ba7]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [ 8]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x2b077b9d6a90]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [ 9]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b077d298dc5]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [10]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b077d2990d3]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [11]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; [0x2b077d286e9b]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [12]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_sync.so
</span><br>
<span class="quotelev1">&gt; [0x2b077d07e96c]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [13]
</span><br>
<span class="quotelev1">&gt; /gpfs/asrc/home/voltaire/install//openmpi-1.4.3/lib/libmpi.so.0(PMPI_Gather+0x55e)
</span><br>
<span class="quotelev1">&gt; [0x2b077883ec9a]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [14] imb/src/IMB-MPI1(IMB_gather+0xe8) [0x40a088]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [15] imb/src/IMB-MPI1(IMB_init_buffers_iter+0x28a)
</span><br>
<span class="quotelev1">&gt; [0x405baa]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [16] imb/src/IMB-MPI1(main+0x30f) [0x40362f]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [17] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x3669e1d994]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compa163:20249] [18] imb/src/IMB-MPI1 [0x403269]
</span><br>
<span class="quotelev1">&gt; [compa163:20249] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas? More debuggin tips?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Doron
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8864/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8865.php">Jeff Squyres: "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch"</a>
<li><strong>Previous message:</strong> <a href="8863.php">Ralph Castain: "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch"</a>
<li><strong>In reply to:</strong> <a href="8852.php">Doron Shoham: "[OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
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
