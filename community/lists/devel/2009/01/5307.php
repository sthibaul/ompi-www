<?
$subject_val = "[OMPI devel] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 14:19:21 2009" -->
<!-- isoreceived="20090126191921" -->
<!-- sent="Mon, 26 Jan 2009 14:19:15 -0500" -->
<!-- isosent="20090126191915" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Heterogeneous OpenFabrics hardware" -->
<!-- id="34F0EE4E-1A96-4B3E-A357-CFA18004C000_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Heterogeneous OpenFabrics hardware<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 14:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5308.php">Paul H. Hargrove: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="5306.php">Jeff Squyres: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5308.php">Paul H. Hargrove: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="5308.php">Paul H. Hargrove: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Interop Working Group (IWG) of the OpenFabrics Alliance asked me  
<br>
to bring a question to the Open MPI user and developer communities: is  
<br>
anyone interested in having a single MPI job span HCAs or RNICs from  
<br>
multiple vendors?  (pardon the cross-posting, but I did want to ask  
<br>
each group separately -- because the answers may be different)
<br>
<p>The interop testing lab at the University of New Hampshire (<a href="http://www.iol.unh.edu/services/testing/ofa/">http://www.iol.unh.edu/services/testing/ofa/</a> 
<br>
) discovered that most (all?) MPI implementations fail when having a  
<br>
single MPI job span HCAs from multiple vendors and/or span RNICs from  
<br>
multiple vendors.  I don't remember the exact details (and they may  
<br>
not be public, anyway), but I'm pretty sure that OMPI failed when used  
<br>
with QLogic and Mellanox HCAs in a single MPI job.  This is fairly  
<br>
unsurprising, given how we tune Open MPI's use of OpenFabrics-capable  
<br>
hardware based on an internal Open MPI .ini file.
<br>
<p>So my question is: does anyone want/need to support jobs that span  
<br>
HCAs from multiple vendors and/or RNICs from multiple vendors?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5308.php">Paul H. Hargrove: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="5306.php">Jeff Squyres: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5308.php">Paul H. Hargrove: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="5308.php">Paul H. Hargrove: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
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
