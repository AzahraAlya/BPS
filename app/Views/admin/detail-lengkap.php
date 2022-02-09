<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?= $this->include('navbar'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <!-- <h1 class="h3 mb-0 text-gray-800">Detail Pencacah</h1> -->

            </div>
            <!-- /.content-header -->
            <div class="container">

                <div class="card mt-3">
                    <div class="card-header">
                    <p class="h5 text-center font-weight-bold">Detail Data Lengkap Petugas</p>
                    <a href = "/admin/mitra-lengkap" class="btn btn-sm btn-primary me-1"><i class="fas fa-arrow-left"></i></a>
                    </div>
                    <div class="card-body">
                   
                    <form action="/admin/store-mitra/<?= $petugas['NO_URUT'];?>" method= "POST">
                        
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Kode Petugas</label>
                                <input type="text" class="form-control" name="KODE_PETUGAS" value="<?= $petugas['KODE_PETUGAS']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good! </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">No Kecamatan</label>
                                <input type="text" class="form-control" name="noKECAMATAN" value="<?= $petugas['noKECAMATAN']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">No Peserta</label>
                                <input type="text" class="form-control" name="NOMOR_PESERTA" value="<?= $petugas['NOMOR_PESERTA']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">NIK</label>
                                <input type="text" class="form-control" name="NIK_NIP" value="<?= $petugas['NIK_NIP']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Nama</label>
                                <input type="text" class="form-control" name="NAMA" value="<?= $petugas['NAMA']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Jenis Kelamin</label>
                                <input type="text" class="form-control"name="JENIS_KELAMIN" value="<?= $petugas['JENIS_KELAMIN']; ?>" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Pendidikan</label>
                                <input type="text" class="form-control" name="PENDIDIKAN" value="<?= $petugas['PENDIDIKAN']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Tempat Lahir</label>
                                <input type="text" class="form-control" name="TEMPAT_LAHIR" value="<?= $petugas['TEMPAT_LAHIR']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Tanggal Lahir</label>
                            <input type="date" class="form-control"name="TANGGAL_LAHIR" value="<?= $petugas['TANGGAL_LAHIR']; ?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Status Perkawinan</label>
                                <input type="text" class="form-control" name="STATUS_PERKAWINAN" value="<?= $petugas['STATUS_PERKAWINAN']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Pekerjaan</label>
                            <input type="text" class="form-control" name="PEKERJAAN" value="<?= $petugas['PEKERJAAN']; ?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Pengalaman Survei BPS</label>
                            <input type="text" class="form-control" name="PENGALAMAN_SURVEI_BPS" value="<?= $petugas['PENGALAMAN_SURVEI_BPS']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <input type="text" class="form-control" name="ALAMAT" value="<?= $petugas['ALAMAT']; ?>" required>
                        </div>

                       

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Desa</label>
                                <input type="text" class="form-control" name="DESA" value="<?= $petugas['DESA']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Kecamatan</label>
                            <input type="text" class="form-control" name="KECAMATAN" value="<?= $petugas['KECAMATAN']; ?>" required>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Kabupaten</label>
                                <input type="text" class="form-control" name="KABUPATEN" value="<?= $petugas['KABUPATEN']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">No Hp</label>
                                <input type="text" class="form-control" name="NOMOR_HP" value="<?= $petugas['NOMOR_HP']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">No WA</label>
                                <input type="text" class="form-control" name="NOMOR_WA" value="<?= $petugas['NOMOR_WA']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kesan dan Pesan</label>
                            <input type="text" class="form-control" name="KESAN_DAN_PESAN" value="<?= $petugas['KESAN_DAN_PESAN']; ?>" required>
                        </div>
                       
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Penampilan</label>
                                <input type="text" class="form-control" name="PENAMPILAN" value="<?= $petugas['PENAMPILAN']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Komunikasi</label>
                                <input type="text" class="form-control" name="KOMUNIKASI" value="<?= $petugas['KOMUNIKASI']; ?>" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Nilai</label>
                                <input type="text" class="form-control" name="NILAI" value="<?= $petugas['NILAI']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Kepemilikan HP</label>
                                <input type="text" class="form-control" name="KEPEMILIKAN_HP" value="<?= $petugas['KEPEMILIKAN_HP']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Spesifikasi Android</label>
                                <input type="text" class="form-control" name="SPESIFIKASI_ANDROID" value="<?= $petugas['SPESIFIKASI_ANDROID']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Operasi Google Maps</label>
                                <input type="text" class="form-control" name="OPERASI_GOOGLE_MAPS" value="<?= $petugas['OPERASI_GOOGLE_MAPS']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Gambar</label>
                                <input type="text" class="form-control" name="GAMBAR" value="<?= $petugas['GAMBAR']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom03">E</label>
                                <input type="text" class="form-control" name="E" value="<?= $petugas['E']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">I</label>
                                <input type="text" class="form-control" name="I" value="<?= $petugas['I']; ?>" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">S</label>
                                <input type="text" class="form-control" name="S" value="<?= $petugas['S']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">N</label>
                                <input type="text" class="form-control" name="N" value="<?= $petugas['N']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom03">T</label>
                                <input type="text" class="form-control" name="T" value="<?= $petugas['T']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">F</label>
                                <input type="text" class="form-control" name="F" value="<?= $petugas['F']; ?>" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">J</label>
                                <input type="text" class="form-control" name="J" value="<?= $petugas['J']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">P</label>
                                <input type="text" class="form-control" name="P" value="<?= $petugas['P']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom03">Huruf 1</label>
                                <input type="text" class="form-control" name="huruf1" value="<?= $petugas['huruf1']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Huruf 2</label>
                                <input type="text" class="form-control" name="huruf2" value="<?= $petugas['huruf2']; ?>" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Huruf 3</label>
                                <input type="text" class="form-control" name="huruf3" value="<?= $petugas['huruf3']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Huruf 4</label>
                                <input type="text" class="form-control" name="huruf4" value="<?= $petugas['huruf4']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Rekomendasi Hasil MBTI</label>
                                <input type="text" class="form-control" name="REKOMENDASI_HASIL_MBTI" value="<?= $petugas['REKOMENDASI_HASIL_MBTI']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Psikolog Prov</label>
                                <input type="text" class="form-control" name="PSIKOLOG_PROV" value="<?= $petugas['PSIKOLOG_PROV']; ?>" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Evaluasi KSK</label>
                                <input type="text" class="form-control" name="EVALUASI_KSK" value="<?= $petugas['EVALUASI_KSK']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Hasil Akhir</label>
                                <input type="text" class="form-control" name="HASIL_AKHIR" value="<?= $petugas['HASIL_AKHIR']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Lulus Pemetaan</label>
                                <input type="text" class="form-control" name="LULUS_PEMETAAN" value="<?= $petugas['LULUS_PEMETAAN']; ?>" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Keterangan</label>
                                <input type="text" class="form-control" name="KETERANGAN" value="<?= $petugas['KETERANGAN']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Nilai Pendalaman</label>
                                <input type="text" class="form-control" name="NILAI_PENDALAMAN" value="<?= $petugas['NILAI_PENDALAMAN']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Nilai Pengamatan</label>
                                <input type="text" class="form-control" name="NILAI_PENGAMATAN" value="<?= $petugas['NILAI_PENGAMATAN']; ?>" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Jumlah Error</label>
                                <input type="text" class="form-control" name="JUMLAH_ERROR" value="<?= $petugas['JUMLAH_ERROR']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Psikotes</label>
                                <input type="text" class="form-control" name="PSIKOTES" value="<?= $petugas['PSIKOTES']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Umur</label>
                                <input type="text" class="form-control" name="UMUR" value="<?= $petugas['UMUR']; ?>" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom06">Tanggal Rekrutmen Ujian MBTI</label>
                                <input type="date" class="form-control" name="TANGGAL_REKRUTMEN_UJIAN_MBTI" value="<?= $petugas['TANGGAL_REKRUTMEN_UJIAN_MBTI']; ?>" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>Simpan</button>
                                <a href="" class="btn btn-sm btn-danger">Kembali</a>
                    </form>
                </div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

                    </div>
                </div>
            </div>
            <!-- Content Row -->
            <div class="row">


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <!-- <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer> -->
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->


<?= $this->endSection(); ?>