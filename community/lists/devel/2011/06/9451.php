<?
$subject_val = "Re: [OMPI devel] Trunk problem: VT breakage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 11:28:31 2011" -->
<!-- isoreceived="20110630152831" -->
<!-- sent="Thu, 30 Jun 2011 09:28:24 -0600" -->
<!-- isosent="20110630152824" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk problem: VT breakage" -->
<!-- id="B0DAF294-B842-407F-BF9C-4CEDB373CA73_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C88B4360-C5D2-4314-9974-4E995FEF6448_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk problem: VT breakage<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-30 11:28:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9452.php">Mike Dubman: "[OMPI devel] RFC: extend MTL API"</a>
<li><strong>Previous message:</strong> <a href="9450.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>In reply to:</strong> <a href="9450.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9459.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9459.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm surprised that autogen/configure wouldn't catch this, yet it clearly doesn't. I guess it's because the file moved?
<br>
<p>Seems like a bug in the autotools or libtool, perhaps?
<br>
<p><p>On Jun 30, 2011, at 8:28 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I'm betting that this is a problem in the .deps directory; you could
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; foreach file (`ls ompi/contrib/vt/vt/tools/vtfilter/.deps/*.Po`)
</span><br>
<span class="quotelev1">&gt; 	echo $file
</span><br>
<span class="quotelev1">&gt; 	rm $file
</span><br>
<span class="quotelev1">&gt; 	touch $file
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then it builds fine (I just tried it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...or remove *.Po in that .deps directory and re-autogen/configure/build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...or get a fresh checkout, autogen/configure/build.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 30, 2011, at 10:18 AM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Same here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; .......
</span><br>
<span class="quotelev2">&gt;&gt; CXX    vtfilter-vt_filter.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX    vtfilter-vt_filter_common.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX    vtfilter-vt_filter_gen.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX    vtfilter-vt_filter_trc.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX    vtfilter-vt_filter_trc_hdlr.o
</span><br>
<span class="quotelev2">&gt;&gt; CXX    vtfilter-vt_filterc.o
</span><br>
<span class="quotelev2">&gt;&gt; make[7]: *** No rule to make target `vt_filthandler.cc', needed by `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that this happens only on 'svn up' on existing repository.
</span><br>
<span class="quotelev2">&gt;&gt; When doing fresh 'svn co &amp;&amp; autogen &amp;&amp; configure &amp;&amp; make', everything works fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- YK
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 30-Jun-11 4:37 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, I get the same error as Ralph.  I'm on my laptop battery atm, so I don't want to do a fresh checkout/build.  This is from an &quot;Svn up&quot; with a fresh automake/configure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [9:32] rtp-jsquyres-8714:~/svn/ompi/ompi/contrib/vt/vt/tools/vtfilter % make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** No rule to make target `vt_filthandler.cc', needed by `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [9:32] rtp-jsquyres-8714:~/svn/ompi/ompi/contrib/vt/vt/tools/vtfilter %
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there some file that we need to delete to make the tree build?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is the problem in the corresponding .deps file?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 30, 2011, at 9:05 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It seems to me that anything during your last update went wrong. Since r24803
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the source file 'vt_filthandler.cc' is moved to the subdirectory 'old', so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; actually if the source file doesn't exist the error message should be:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No rule to make target `old/vt_filthandler.cc', needed by `vtfilter-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (I just tested it by removing the source file by hand)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does the error occur also with a completely new checkout of the trunk?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thursday 30 June 2011 03:01:10 Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It appears I cannot build the trunk on Mac - I hit this issue when I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; updated from the trunk and rebuilt from autogen this evening:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[7]: *** No rule to make target `vt_filthandler.cc', needed by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Vanilla configure - I didn't turn VT off like I usually do.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matthias Jurenz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Center for Information Services and High Performance Computing (ZIH)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 01062 Dresden, Germany
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phone: +49 (351) 463-31945
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; E-Mail: matthias.jurenz_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9452.php">Mike Dubman: "[OMPI devel] RFC: extend MTL API"</a>
<li><strong>Previous message:</strong> <a href="9450.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>In reply to:</strong> <a href="9450.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9459.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9459.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk problem: VT breakage"</a>
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
