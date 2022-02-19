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

        <?php if (session()->get('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->get('pesan') ?>
            </div>
        <?php endif; ?>

        <!-- Begin Page Content -->
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <div class="container">
            <h4 class="font-weight-bold">Selamat Datang, <?= $this->user->find($session->get('NO_URUT'))['NAMA'] ?></h4>
            <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> -->
            </div>
        </div>

        <div class="container">

            <div class="card mt-3">
                <div class="card-header">
                <p class="h4 text-center font-weight-bold">Data Pengawas</p>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Kode Petugas</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control-plaintext" value="<?= $pencacah['KODE_PETUGAS']; ?>" readonly>
                            </div>
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-4">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pencacah['NAMA']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">No Peserta</label>
                            <div class="col-sm-4">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pencacah['NOMOR_PESERTA']; ?>">
                            </div>
                            <label for="staticEmail" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-4">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pencacah['NIK_NIP']; ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pencacah['ALAMAT']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">No Hp</label>
                            <div class="col-sm-4">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pencacah['NOMOR_HP']; ?>">
                            </div>
                            <label for="staticEmail" class="col-sm-2 col-form-label">No WA</label>
                            <div class="col-sm-4">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pencacah['NOMOR_WA']; ?>">
                            </div>

                        </div>
                        
                        <!-- <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-paper-plane"></i> Simpan</button> -->

                    </form>
                    <a href="/editprofile" class="btn btn-sm btn-info">Profile</a>
                </div>
            </div>
            <script>
                <?php if (!empty(session()->getFlashdata('swal_icon'))) { ?>
                    Swal.fire({
                        icon: '<?= session()->getFlashdata('swal_icon') ?>',
                        title: '<?php echo session()->getFlashdata('swal_title') ?>',
                        text: '<?php echo session()->getFlashdata('swal_text') ?>',
                    })
                <?php } ?>
            </script>


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