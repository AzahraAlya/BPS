<?= $this->extend('pengawas/template'); ?>
<?= $this->section('content'); ?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?= $this->include('pencacah/navbar_pencacah'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- /.content-header -->
            <div class="container">

                <div class="card mt-3">
                    <div class="card-header">
                        <p class="h5 text-center font-weight-bold">Ubah Profil</p>
                    </div>
                    <div class="card-body">

                        <form action="pengawas/saveprofile/<?= $pencacah['NO_URUT']; ?>" method="POST">

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Kode Petugas</label>
                                    <input type="text" class="form-control" name="KODE_PETUGAS" value="<?= $pencacah['KODE_PETUGAS']; ?>" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">No Kecamatan</label>
                                    <input type="text" class="form-control" name="noKECAMATAN" value="<?= $pencacah['noKECAMATAN']; ?>" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">No Peserta</label>
                                    <input type="text" class="form-control" name="NOMOR_PESERTA" value="<?= $pencacah['NOMOR_PESERTA']; ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">NIK</label>
                                    <input type="text" class="form-control" name="NIK_NIP" value="<?= $pencacah['NIK_NIP']; ?>" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">Nama</label>
                                    <input type="text" class="form-control" name="NAMA" value="<?= $pencacah['NAMA']; ?>" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom04">Jenis Kelamin</label>
                                    <select name="JENIS_KELAMIN" class="form-control" required>
                                        <?php
                                        if ($pencacah['JENIS_KELAMIN'] == "L") { ?>
                                            <option value="L" selected>L</option>
                                            <option value="P">P</option>
                                        <?php } else { ?>
                                            <option value="L">L</option>
                                            <option value="P" selected>P</option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom05">Pendidikan</label>
                                    <input type="text" class="form-control" name="PENDIDIKAN" value="<?= $pencacah['PENDIDIKAN']; ?>" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="TEMPAT_LAHIR" value="<?= $pencacah['TEMPAT_LAHIR']; ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="TANGGAL_LAHIR" value="<?= $pencacah['TANGGAL_LAHIR']; ?>" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Status Perkawinan</label>
                                    <select name="STATUS_PERKAWINAN" class="form-control" required>
                                        <?php
                                        if ($pencacah['STATUS_PERKAWINAN'] == "Kawin") { ?>
                                            <option value="Kawin" selected>Kawin</option>
                                            <option value="Belum Kawin">Belum Kawin</option>
                                        <?php } else { ?>
                                            <option value="Kawin">Kawin</option>
                                            <option value="Belum Kawin" selected>Belum Kawin</option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                                <!--  -->
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Pekerjaan</label>
                                    <input type="text" class="form-control" name="PEKERJAAN" value="<?= $pencacah['PEKERJAAN']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Pengalaman Survei BPS</label>
                                <input type="text" class="form-control" name="PENGALAMAN_SURVEI_BPS" value="<?= $pencacah['PENGALAMAN_SURVEI_BPS']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Alamat</label>
                                <input type="text" class="form-control" name="ALAMAT" value="<?= $pencacah['ALAMAT']; ?>" required>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">Desa</label>
                                    <input type="text" class="form-control" name="DESA" value="<?= $pencacah['DESA']; ?>" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom04">Kecamatan</label>
                                    <input type="text" class="form-control" name="KECAMATAN" value="<?= $pencacah['KECAMATAN']; ?>" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom05">Kabupaten</label>
                                    <input type="text" class="form-control" name="KABUPATEN" value="<?= $pencacah['KABUPATEN']; ?>" required>
                                   
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">No Hp</label>
                                    <input type="text" class="form-control" name="NOMOR_HP" value="<?= $pencacah['NOMOR_HP']; ?>" required>
                                   
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">No WA</label>
                                    <input type="text" class="form-control" name="NOMOR_WA" value="<?= $pencacah['NOMOR_WA']; ?>" required>
                                
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">
                                Simpan</button>
                            <a href="/pencacah" class="btn btn-sm btn-danger">Kembali</a>

                        </form>



                    </div>
                </div>
            </div>
            <!-- Content Row -->
            <div class="row">


            </div>
            <!-- /.container-fluid -->

        </div>

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<script>
    <?php if (!empty(session()->getFlashdata('swal_icon'))) { ?>
        Swal.fire(
            'Berhasil',
            'Data berhasil diubah',
            'success'
        )
    <?php } ?>
</script>

<?= $this->endSection(); ?>