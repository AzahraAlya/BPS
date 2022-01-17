<?= $this->extend('pengawas/template'); ?>
<?= $this->section('content'); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?= $this->include('navbar'); ?>
        <!-- End of Topbar -->
                <div class="card mt-3">
                    <div class="card-header">
                        Form Edit Data Anggota
                    </div>
                    
                    <div class="card-body">
                            <a href="/pengawas/savePenilaian">
                                <i class="fas fa-paper-plane"></i>Kirim</a>
                    </div>
                </div>

     <?= $this->endSection(); ?>