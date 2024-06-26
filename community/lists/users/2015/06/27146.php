<?
$subject_val = "[OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 13:08:04 2015" -->
<!-- isoreceived="20150617170804" -->
<!-- sent="Wed, 17 Jun 2015 13:07:59 -0400" -->
<!-- isosent="20150617170759" -->
<!-- name="Fei Mao" -->
<!-- email="powerreactor_at_[hidden]" -->
<!-- subject="[OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5" -->
<!-- id="FEF9C079-6F6B-4D36-BED6-C6BA335A2833_at_gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5<br>
<strong>From:</strong> Fei Mao (<em>powerreactor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-17 13:07:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27147.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27145.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27147.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Reply:</strong> <a href="27147.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I am doing benchmarks on a GPU cluster with two CPU sockets and 4 K80 GPUs each node. Two K80 are connected with CPU socket 0, another two with socket 1. An IB ConnectX-3 (FDR) is also under socket 1. We are using Linux&#146;s OFED, so I know there is no way to do GPU RDMA inter-node communication. I can do intra-node IPC for MPI_Send and MPI_Receive with two K80 (4 GPUs in total) which are connected under same socket (PCI-e switch). So I thought I could do intra-node MPI_Reduce with IPC support in openmpi 1.8.5.
<br>
<p>The benchmark I was using is osu-micro-benchmarks-4.4.1, and I got the same results when I use two GPU under the same socket or different socket. The result was the same even I used two GPUs in different nodes. 
<br>
<p>Does MPI_Reduce use IPC for intra-node? Should I have to install Mellanox OFED stack to support GPU RDMA reduction on GPUs even they are under with the same PCI-e switch?
<br>
<p>Thanks,
<br>
<p>Fei Mao
<br>
High Performance Computing Technical Consultant 
<br>
SHARCNET | <a href="http://www.sharcnet.ca">http://www.sharcnet.ca</a>
<br>
Compute/Calcul Canada | <a href="http://www.computecanada.ca">http://www.computecanada.ca</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27146/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27147.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27145.php">Manoj Vaghela: "Re: [OMPI users] Memory usage for MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27147.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
<li><strong>Reply:</strong> <a href="27147.php">Rolf vandeVaart: "Re: [OMPI users] CUDA-aware MPI_Reduce problem in Openmpi 1.8.5"</a>
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
