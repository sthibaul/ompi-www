<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.4 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">NVIDIA Management Library Specific Functions</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga4ee13f105f3d2a359de8ee74b6929863"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00089.php#ga4ee13f105f3d2a359de8ee74b6929863">hwloc_nvml_get_device_cpuset</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology __hwloc_attribute_unused, nvmlDevice_t device, <a class="el" href="a00051.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set)</td></tr>
<tr class="separator:ga4ee13f105f3d2a359de8ee74b6929863"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga2b5e13914ff9462ed799b3022bc746fc"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00089.php#ga2b5e13914ff9462ed799b3022bc746fc">hwloc_nvml_get_device_osdev_by_index</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned idx)</td></tr>
<tr class="separator:ga2b5e13914ff9462ed799b3022bc746fc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gadd25999bc0c482c85f6afddd7897b1c1"><td class="memItemLeft" align="right" valign="top">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00089.php#gadd25999bc0c482c85f6afddd7897b1c1">hwloc_nvml_get_device_osdev</a> (<a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, nvmlDevice_t device)</td></tr>
<tr class="separator:gadd25999bc0c482c85f6afddd7897b1c1"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga4ee13f105f3d2a359de8ee74b6929863"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline int hwloc_nvml_get_device_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&#160;</td>
          <td class="paramname"><em>__hwloc_attribute_unused</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">nvmlDevice_t&#160;</td>
          <td class="paramname"><em>device</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00051.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the CPU set of logical processors that are physically close to NVML device <code>device</code>. </p>
<p>Return the CPU set describing the locality of the NVML device <code>device</code>.</p>
<p>Topology <code>topology</code> and device <code>device</code> must match the local machine. I/O devices detection and the NVML component are not needed in the topology.</p>
<p>The function only returns the locality of the device. If more information about the device is needed, OS objects should be used instead, see <a class="el" href="a00089.php#gadd25999bc0c482c85f6afddd7897b1c1" title="Get the hwloc OS device object corresponding to NVML device device. ">hwloc_nvml_get_device_osdev()</a> and <a class="el" href="a00089.php#ga2b5e13914ff9462ed799b3022bc746fc" title="Get the hwloc OS device object corresponding to the NVML device whose index is idx. ">hwloc_nvml_get_device_osdev_by_index()</a>.</p>
<p>This function is currently only implemented in a meaningful way for Linux; other systems will simply get a full cpuset. </p>

</div>
</div>
<a class="anchor" id="gadd25999bc0c482c85f6afddd7897b1c1"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_nvml_get_device_osdev </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">nvmlDevice_t&#160;</td>
          <td class="paramname"><em>device</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the hwloc OS device object corresponding to NVML device <code>device</code>. </p>
<p>Return the hwloc OS device object that describes the given NVML device <code>device</code>. Return NULL if there is none.</p>
<p>Topology <code>topology</code> and device <code>device</code> must match the local machine. I/O devices detection and the NVML component must be enabled in the topology. If not, the locality of the object may still be found using <a class="el" href="a00089.php#ga4ee13f105f3d2a359de8ee74b6929863" title="Get the CPU set of logical processors that are physically close to NVML device device. ">hwloc_nvml_get_device_cpuset()</a>.</p>
<dl class="section note"><dt>Note</dt><dd>The corresponding hwloc PCI device may be found by looking at the result parent pointer. </dd></dl>

</div>
</div>
<a class="anchor" id="ga2b5e13914ff9462ed799b3022bc746fc"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static __hwloc_inline <a class="el" href="a00053.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_nvml_get_device_osdev_by_index </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00050.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>idx</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the hwloc OS device object corresponding to the NVML device whose index is <code>idx</code>. </p>
<p>Return the OS device object describing the NVML device whose index is <code>idx</code>. Returns NULL if there is none.</p>
<p>The topology <code>topology</code> does not necessarily have to match the current machine. For instance the topology may be an XML import of a remote host. I/O devices detection and the NVML component must be enabled in the topology.</p>
<dl class="section note"><dt>Note</dt><dd>The corresponding PCI device object can be obtained by looking at the OS device parent object. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
