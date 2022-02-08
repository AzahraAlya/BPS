<?= $this->extend('pengawas/template'); ?>
<?= $this->section('content'); ?>

<?php

use App\Models\M_petugas;

$this->user = new M_petugas();
$session = session();
?>  

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?= $this->include('pencacah/navbar_pencacah'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <div class="container">
            <h3 class="font-weight-bold">Selamat Datang, <?= $this->user->find($session->get('NO_URUT'))['NAMA'] ?></h3>
            <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> -->
            </div>
        </div>
    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<?= $this->endSection(); ?>