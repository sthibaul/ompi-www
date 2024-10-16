<?
$subject_val = "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  4 08:43:00 2012" -->
<!-- isoreceived="20120904124300" -->
<!-- sent="Tue, 04 Sep 2012 15:42:22 +0300" -->
<!-- isosent="20120904124222" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time" -->
<!-- id="5045F72E.3080202_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADEJBEWG_J92RY3R0JPXGxsmNWJcnGGu_ge1-5Ds_aRgtiRKmA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-04 08:42:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20120.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20118.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20076.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20121.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Reply:</strong> <a href="20121.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/30/2012 10:28 PM, Yong Qin wrote:
<br>
<span class="quotelev1">&gt; On Thu, Aug 30, 2012 at 5:12 AM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 29, 2012, at 2:25 PM, Yong Qin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This issue has been observed on OMPI 1.6 and 1.6.1 with openib btl but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not on 1.4.5 (tcp btl is always fine). The application is VASP and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only one specific dataset is identified during the testing, and the OS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is SL 6.2 with kernel 2.6.32-220.23.1.el6.x86_64. The issue is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when a certain type of load is put on OMPI 1.6.x, khugepaged thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; always runs with 100% CPU load, and it looks to me like that OMPI is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; waiting for some memory to be available thus appears to be hung.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reducing the per node processes would sometimes ease the problem a bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but not always. So I did some further testing by playing around with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the kernel transparent hugepage support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Disable transparent hugepage support completely (echo never
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/enabled). This would allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the program to progress as normal (as in 1.4.5). Total run time for an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iteration is 3036.03 s.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll admit that we have not tested using transparent hugepages.  I wonder if there's some kind of bad interaction going on here...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The transparent hugepage is &quot;transparent&quot;, which means it is
</span><br>
<span class="quotelev1">&gt; automatically applied to all applications unless it is explicitly told
</span><br>
<span class="quotelev1">&gt; otherwise. I highly suspect that it is not working properly in this
</span><br>
<span class="quotelev1">&gt; case.
</span><br>
<p>Like Jeff said - I don't think we've ever tested OMPI with transparent
<br>
huge pages.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What exactly does changing this setting do?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here (<a href="http://lwn.net/Articles/423592/">http://lwn.net/Articles/423592/</a>)  is a pretty good documentation
</span><br>
<span class="quotelev1">&gt; on what these settings would do to the behaviour of the THP. I don't
</span><br>
<span class="quotelev1">&gt; think I can explain it better than the article so I will leave it to
</span><br>
<span class="quotelev1">&gt; you to digest. :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Disable VM defrag effort (echo never
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/defrag). This allows the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program to run as well, but the performance is horrible. The same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iteration takes 4967.40 s.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Disable defrag in khugepaged (echo no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/khugepaged/defrag). This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allows the program to run, and the performance is worse than #1 but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better than #2. The same iteration takes 3348.10 s.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. Disable both VM defrag and khugepaged defrag (#2 + #3). Similar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance as #3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So my question is, looks to me like this has to do with the memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; management in the openib btl, are we using huge pages in 1.6.x? If
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is true, is there a better way to resolve or workaround it within
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI itself without disabling transparent hugepage support? We'd like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to keep the hugepage support if possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox -- can you comment on this?
</span><br>
<p>Actually, I don't think that THP were really tested with OFED.
<br>
I can think of lots of ways thing can go wrong there.
<br>
This might be a good question to address to Linux-RDMA mailing list.
<br>
<p>-- YK
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20120.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20118.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20076.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20121.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Reply:</strong> <a href="20121.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
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
