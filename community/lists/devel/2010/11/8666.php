<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  8 08:13:36 2010" -->
<!-- isoreceived="20101108131336" -->
<!-- sent="Mon, 8 Nov 2010 08:13:31 -0500" -->
<!-- isosent="20101108131331" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998" -->
<!-- id="6A48BD33-A308-4D0B-82AA-CB785CB00659_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD7DC7A.5070209_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-08 08:13:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8667.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>Previous message:</strong> <a href="8665.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>In reply to:</strong> <a href="8665.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8667.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>Reply:</strong> <a href="8667.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It doesn't look like &lt;stdbool.h&gt; is needed at all in libevent207.h.  Should it just be removed?
<br>
<p><p>On Nov 8, 2010, at 6:18 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; In light of the push event changes upstream to libevent the changes to libevent207.h probably should be modified to look like event.h.  That is wrap the include &lt;stdbool.h&gt; with some ifdef for C++.  I did not do this in the original fix because everything pulling it in was also pulling in opal_config.h and getting stdbool.h in when it needed to.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff, do you want me to change libevent207.h to the above?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/05/2010 02:58 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This patch should be pushed upstream to libevent.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Terry / Ralph?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 5, 2010, at 2:54 PM, 
</span><br>
<span class="quotelev2">&gt;&gt; tdd_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: tdd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2010-11-05 14:54:19 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 23998
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/23998">https://svn.open-mpi.org/trac/ompi/changeset/23998</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corrected stdbool.h inclusion to allow Oracle C++ compilers to work with OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/opal/mca/event/libevent207/libevent/include/event2/event.h |     4 +++-                                    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/opal/mca/event/libevent207/libevent207.h                   |     3 ---                                    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   2 files changed, 3 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/mca/event/libevent207/libevent/include/event2/event.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/mca/event/libevent207/libevent/include/event2/event.h	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/mca/event/libevent207/libevent/include/event2/event.h	2010-11-05 14:54:19 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -45,7 +45,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifndef WIN32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#include &lt;stdbool.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#    if !(defined(c_plusplus) || defined(__cplusplus))
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#        include &lt;stdbool.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#    endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/mca/event/libevent207/libevent207.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/mca/event/libevent207/libevent207.h	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/mca/event/libevent207/libevent207.h	2010-11-05 14:54:19 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -42,9 +42,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#ifndef WIN32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#include &lt;stdbool.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;opal/class/opal_object.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;opal/threads/mutex.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8667.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>Previous message:</strong> <a href="8665.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>In reply to:</strong> <a href="8665.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8667.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>Reply:</strong> <a href="8667.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
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
