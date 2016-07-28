<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.7.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 21 12:34:20 2013" -->
<!-- isoreceived="20130521163420" -->
<!-- sent="Tue, 21 May 2013 18:34:13 +0200" -->
<!-- isosent="20130521163413" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.7.1 released" -->
<!-- id="519BA205.5040007_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.7.1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-21 12:34:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/08/0060.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0058.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.7.1rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release
<br>
of v1.7.1:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.7.1 is a bug fix release which addresses all known bugs in the
<br>
v1.7 series.
<br>
<p>The following is a summary of the changes since v1.7:
<br>
<p>* Fix a failed assertion in the distance grouping code when loading a XML
<br>
&nbsp;&nbsp;file that already contains some groups.
<br>
&nbsp;&nbsp;Thanks to Laercio Lima Pilla for reporting the problem.
<br>
* Remove unexpected Group objects when loading XML topologies with I/O
<br>
&nbsp;&nbsp;objects and NUMA distances.
<br>
&nbsp;&nbsp;Thanks to Elena Elkina for reporting the problem and testing patches.
<br>
* Fix PCI link speed discovery when using libpciaccess.
<br>
* Fix invalid libpciaccess virtual function device/vendor IDs when using
<br>
&nbsp;&nbsp;SR-IOV PCI devices on Linux.
<br>
* Fix GL component build with old NVCtrl releases.
<br>
&nbsp;&nbsp;Thanks to Jirka Hladky for reporting the problem.
<br>
* Fix embedding breakage caused by libltdl.
<br>
&nbsp;&nbsp;Thanks to Pavan Balaji for reporting the problem.
<br>
* Always use the system-wide libltdl instead of shipping one inside hwloc.
<br>
* Document issues when enabling plugins while embedding hwloc in another
<br>
&nbsp;&nbsp;project, in the documentation section Embedding hwloc in Other Software.
<br>
* Add a FAQ entry &quot;How to get useful topology information on NetBSD?&quot;
<br>
&nbsp;&nbsp;in the documentation.
<br>
* Somes fixes in the renaming code for embedding.
<br>
* Miscellaneous minor build fixes.
<br>
<p><pre>
--
Brice
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-announce/att-0059/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/08/0060.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0058.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.7.1rc1 released"</a>
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