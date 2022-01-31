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
                        Data Pencacah
                    </div>
                    <div class="card-body">
                <form action="" method="POST">

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Kode Mitra</label>
                                    <input type="text" class="form-control" name="Kode_Mitra" value="<?= $pencacah['Kode_Mitra']; ?>" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">Nama</label>
                                    <input type="text" class="form-control" name="NAMA" value="<?= $pencacah['NAMA']; ?>" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">No Peserta</label>
                                    <input type="text" class="form-control" name="NOMOR_PESERTA" value="<?= $pencacah['NOMOR_PESERTA']; ?>" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">NIK</label>
                                    <input type="text" class="form-control" name="NIK" value="<?= $pencacah['NIK']; ?>" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <input type="text" class="form-control" name="ALAMAT" value="<?= $pencacah['ALAMAT']; ?>" required>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">Desa</label>
                                    <input type="text" class="form-control" name="DESA" value="<?= $pencacah['DESA']; ?>" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                    <label for="validationCustom04">Kecamatan</label>
                                    <input type="text" class="form-control" name="KECAMATAN" value="<?= $pencacah['KECAMATAN']; ?>" required>
                                    <div class="invalid-feedback">
                                        Please select a valid state.
                                    </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                    <label for="validationCustom05">Kabupaten</label>
                                    <input type="text" class="form-control" name="KABUPATEN" value="<?= $pencacah['KABUPATEN']; ?>" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid zip.
                                    </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">No Hp</label>
                                    <input type="text" class="form-control" name="NOMOR_HP" value="<?= $pencacah['NOMOR_HP']; ?>" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">No WA</label>
                                    <input type="text" class="form-control" name="NOMOR_WA" value="<?= $pencacah['NOMOR_WA']; ?>" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    </div>
                                </div>

                                <!-- <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-paper-plane"></i> Simpan</button> -->
                                
                </form>
                <a href="/pencacah/editprofile" class = "btn btn-sm btn-danger">Profile</a>
                    </div>
                    </div>
                    <script>
                        <?php if (!empty(session()->getFlashdata('swal_icon'))){ ?>
                              Swal.fire({
                                icon:'<?= session()->getFlashdata('swal_icon')?>',
                                title: '<?php echo session()->getFlashdata('swal_title') ?>',
                                text :'<?php echo session()->getFlashdata('swal_text')?>',
                              })
                        <?php } ?>
                    </script>




<?= $this->endSection(); ?>

 
  