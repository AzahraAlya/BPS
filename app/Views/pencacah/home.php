<?= $this->extend('pencacah/template'); ?>
<?= $this->section('content'); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?= $this->include('pencacah/navbar_pencacah'); ?>
        <!-- End of Topbar -->

        <?php if (session()->get('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->get('success') ?>
            </div>
        <?php endif; ?>
        <div class="container">

            <div class="card mt-3">
                <div class="card-header">
                <p class="h4 text-center font-weight-bold">Data Mitra</p>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Kode Mitra</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control-plaintext" value="<?= $pencacah['Kode_Mitra']; ?>" readonly>
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
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pencacah['NIK']; ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pencacah['ALAMAT']; ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Desa</label>
                            <div class="col-sm-4">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pencacah['DESA']; ?>">
                            </div>
                            <label for="staticEmail" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-4">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pencacah['KECAMATAN']; ?>">
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
                    <a href="/pencacah/editprofile" class="btn btn-sm btn-info">Profile</a>
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




            <?= $this->endSection(); ?>