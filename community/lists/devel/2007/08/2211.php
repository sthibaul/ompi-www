<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 11:08:24 2007" -->
<!-- isoreceived="20070824150824" -->
<!-- sent="Fri, 24 Aug 2007 11:08:15 -0400" -->
<!-- isosent="20070824150815" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer" -->
<!-- id="27A5174F-B7C4-4116-B9E5-FBAB603D2232_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46CED101.4090505_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-24 11:08:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2212.php">Brian Barrett: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2210.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>In reply to:</strong> <a href="2209.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2212.php">Brian Barrett: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2212.php">Brian Barrett: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2007, at 8:37 AM, Terry D. Dontje wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, my main concern is about fault tolerance. There is nothing in
</span><br>
<span class="quotelev2">&gt;&gt; PMI (and nothing in RSL so far) that allow any kind of fault
</span><br>
<span class="quotelev2">&gt;&gt; tolerance [And believe me re-writing the MPICH mpirun to allow
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint/restart is a hassle]. Moreover, your approach seems to
</span><br>
<span class="quotelev2">&gt;&gt; open the possibility of having heterogeneous RTE (in terms of
</span><br>
<span class="quotelev2">&gt;&gt; features) which in my view is definitively the wrong approach.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I am curious about this last paragraph.  Is it your belief that the  
</span><br>
<span class="quotelev1">&gt; current
</span><br>
<span class="quotelev1">&gt; ORTE does lend itself to being extended to incorporate fault  
</span><br>
<span class="quotelev1">&gt; tolerance?
</span><br>
<p>Absolutely. We're working on incorporating a virtual topology called  
<br>
BMG (Thara's Ph.D. work) as the main topology of ORTE. This allow us  
<br>
to route ALL communications to their ALIVE destination in presence of  
<br>
faults. In same time based on the BMG properties we will be able to  
<br>
insure a minimal cost for all broadcast like operations (always log 
<br>
(n)), and maybe the more important improve the scalability grace of a  
<br>
very fast and scalable allgather. The approach we're targeting will  
<br>
have only one point of failure (the registry) but due to the  
<br>
properties of the BMG, the impact can be kept minimal.
<br>
<p><span class="quotelev1">&gt; Also, by heterogenous RTE are you meaning RTE running on a cluster
</span><br>
<span class="quotelev1">&gt; of heterogenous set of platforms?  If so, I would like to  
</span><br>
<span class="quotelev1">&gt; understand why
</span><br>
<span class="quotelev1">&gt; you think that is the &quot;wrong&quot; approach.
</span><br>
<p>By heterogeneous RTE I was talking about what will happened once we  
<br>
have the RSL. Different back-end will support different features, so  
<br>
from the user perspective we will not provide a homogeneous execution  
<br>
environment in all situations. On the other hand, focusing our  
<br>
efforts in ORTE will guarantee this homogeneity in all cases.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 16, 2007, at 9:47 PM, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Solicitation of feedback on the possibility of adding a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; services layer to Open MPI to abstract out the runtime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: To solidify the interface between OMPI and the runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and to allow the use of different runtime systems, including  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions of ORTE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: Addition of a new framework to OMPI, and changes to many  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files in OMPI to funnel all runtime request through this framework.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Few
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes should be required in OPAL and ORTE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: Development has started in tmp/rsl, but is still in its
</span><br>
<span class="quotelev3">&gt;&gt;&gt; infancy. We hope
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to have a working system in the next month.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: 8/29/07
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Short version:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am working on creating an interface between OMPI and the runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This would make a RSL framework in OMPI which all runtime services
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accessed from. Attached is a graphic depicting this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This change would be invasive to the OMPI layer. Few (if any)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be required of the ORTE and OPAL layers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At this point I am soliciting feedback as to whether people are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supportive or not of this change both in general and for v1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Long version:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The current model used in Open MPI assumes that one runtime  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the best for all environments. However, in many environments it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; beneficial to have specialized runtime systems. With our current
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not easy to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With this in mind, the idea of creating a 'runtime services  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; layer' was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hatched. This would take the form of a framework within OMPI,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all runtime functionality would be accessed. This would allow new or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different runtime systems to be used with Open MPI. Additionally,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with such a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system it would be possible to have multiple versions of open rte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coexisting,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which may facilitate development and testing. Finally, this would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solidify the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface between OMPI and the runtime system, as well as provide
</span><br>
<span class="quotelev3">&gt;&gt;&gt; documentation and side effects of each interface function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, such a change would be fairly invasive to the OMPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; layer, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needs a buy-in from everyone for it to be possible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is a summary of the changes required for the RSL (at least how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently envisioned):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Add a framework to ompi for the rsl, and a component to support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Change ompi so that it uses the new interface. This involves:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         a. Moving runtime specific code into the orte rsl component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         b. Changing the process names in ompi to an opaque object.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         c. change all references to orte in ompi to be to the rsl.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Change the configuration code so that open-rte is only linked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course, all this would happen on a tmp branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The design of the rsl is not solidified. I have been playing in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmp branch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (located at <a href="https://svn.open-mpi.org/svn/ompi/tmp/rsl">https://svn.open-mpi.org/svn/ompi/tmp/rsl</a>) which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everyone is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; welcome to look at and comment on, but be advised that things  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subject to change (I don't think it even compiles right now). There
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some fairly large open questions on this, including:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. How to handle mpirun (that is, when a user types 'mpirun', do  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; always get ORTE, or do they sometimes get a system specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime). Most
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely mpirun will always use ORTE, and alternative launching
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be used for other runtimes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Whether there will be any performance implications. My guess is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but am not quite sure of this yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Again, I am interested in people's comments on whether they think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such abstraction is good or not, and whether it is reasonable to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thing for v1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Prins&lt;RSL-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Diagram.pdf&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2212.php">Brian Barrett: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2210.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>In reply to:</strong> <a href="2209.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2212.php">Brian Barrett: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2212.php">Brian Barrett: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
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
