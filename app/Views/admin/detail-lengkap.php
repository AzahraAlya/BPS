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
                   
                    <form class="needs-validation" novalidate>
                        
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Kode Petugas</label>
                                <input type="text" class="form-control" name="Kode_Mitra" value="<?= $petugas['KODE_PETUGAS']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good! </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">No Kecamatan</label>
                                <input type="text" class="form-control" name="noKECAMATAN" value="<?= $petugas['noKECAMATAN']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">No Peserta</label>
                                <input type="text" class="form-control" name="NOMOR_PESERTA" value="<?= $petugas['NOMOR_PESERTA']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">NIK</label>
                                <input type="text" class="form-control" name="NIK" value="<?= $petugas['NIK_NIP']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Nama</label>
                                <input type="text" class="form-control" name="NAMA" value="<?= $petugas['NAMA']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Jenis Kelamin</label>
                                <input type="text" class="form-control"name="JENIS_KELAMIN" value="<?= $petugas['JENIS_KELAMIN']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Pendidikan</label>
                                <input type="text" class="form-control" name="PENDIDIKAN" value="<?= $petugas['PENDIDIKAN']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Tempat Lahir</label>
                                <input type="text" class="form-control" name="TEMPAT_LAHIR" value="<?= $petugas['TEMPAT_LAHIR']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Tanggal Lahir</label>
                            <input type="text" class="form-control"name="TANGGAL_LAHIR" value="<?= $petugas['TANGGAL_LAHIR']; ?>" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Status Perkawinan</label>
                                <input type="text" class="form-control" name="STATUS_PERKAWINAN" value="<?= $petugas['STATUS_PERKAWINAN']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Pekerjaan</label>
                            <input type="text" class="form-control" name="PEKERJAAN" value="<?= $petugas['PEKERJAAN']; ?>" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Pengalaman Survei BPS</label>
                            <input type="text" class="form-control" name="PENGALAMAN_SURVEI_BPS" value="<?= $petugas['PENGALAMAN_SURVEI_BPS']; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <input type="text" class="form-control" name="ALAMAT" value="<?= $petugas['ALAMAT']; ?>" readonly>
                        </div>

                       

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Desa</label>
                                <input type="text" class="form-control" name="DESA" value="<?= $petugas['DESA']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Kecamatan</label>
                            <input type="text" class="form-control" name="KECAMATAN" value="<?= $petugas['KECAMATAN']; ?>" readonly>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Kabupaten</label>
                                <input type="text" class="form-control" name="KABUPATEN" value="<?= $petugas['KABUPATEN']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">No Hp</label>
                                <input type="text" class="form-control" name="NOMOR_HP" value="<?= $petugas['NOMOR_HP']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">No WA</label>
                                <input type="text" class="form-control" name="NOMOR_WA" value="<?= $petugas['NOMOR_WA']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kesan dan Pesan</label>
                            <input type="text" class="form-control" name="KESAN_DAN_PESAN" value="<?= $petugas['KESAN_DAN_PESAN']; ?>" readonly>
                        </div>
                       
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Penampilan</label>
                                <input type="text" class="form-control" name="PENAMPILAN" value="<?= $petugas['PENAMPILAN']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Komunikasi</label>
                                <input type="text" class="form-control" name="KOMUNIKASI" value="<?= $petugas['KOMUNIKASI']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Nilai</label>
                                <input type="text" class="form-control" name="NILAI" value="<?= $petugas['NILAI']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Kepemilikan HP</label>
                                <input type="text" class="form-control" name="KEPEMILIKAN_HP" value="<?= $petugas['KEPEMILIKAN_HP']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Spesifikasi Android</label>
                                <input type="text" class="form-control" name="SPESIFIKASI_ANDROID" value="<?= $petugas['SPESIFIKASI_ANDROID']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Operasi Google Maps</label>
                                <input type="text" class="form-control" name="OPERASI_GOOGLE_MAPS" value="<?= $petugas['OPERASI_GOOGLE_MAPS']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Gambar</label>
                                <input type="text" class="form-control" name="GAMBAR" value="<?= $petugas['GAMBAR']; ?>" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom03">E</label>
                                <input type="text" class="form-control" name="E" value="<?= $petugas['E']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">I</label>
                                <input type="text" class="form-control" name="I" value="<?= $petugas['I']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">S</label>
                                <input type="text" class="form-control" name="S" value="<?= $petugas['S']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">N</label>
                                <input type="text" class="form-control" name="N" value="<?= $petugas['N']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom03">T</label>
                                <input type="text" class="form-control" name="T" value="<?= $petugas['T']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">F</label>
                                <input type="text" class="form-control" name="F" value="<?= $petugas['F']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">J</label>
                                <input type="text" class="form-control" name="J" value="<?= $petugas['J']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">P</label>
                                <input type="text" class="form-control" name="P" value="<?= $petugas['P']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom03">Huruf 1</label>
                                <input type="text" class="form-control" name="huruf1" value="<?= $petugas['huruf1']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Huruf 2</label>
                                <input type="text" class="form-control" name="huruf2" value="<?= $petugas['huruf2']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Huruf 3</label>
                                <input type="text" class="form-control" name="huruf3" value="<?= $petugas['huruf3']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Huruf 4</label>
                                <input type="text" class="form-control" name="huruf4" value="<?= $petugas['huruf4']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Rekomendasi Hasil MBTI</label>
                                <input type="text" class="form-control" name="Rekomendasi_Hasil_MBTI" value="<?= $petugas['REKOMENDASI_HASIL_MBTI']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Psikolog Prov</label>
                                <input type="text" class="form-control" name="Psikolog_Prov" value="<?= $petugas['PSIKOLOG_PROV']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Evaluasi KSK</label>
                                <input type="text" class="form-control" name="Evaluasi_KSK" value="<?= $petugas['EVALUASI_KSK']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Hasil Akhir</label>
                                <input type="text" class="form-control" name="HASIL_AKHIR" value="<?= $petugas['HASIL_AKHIR']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Lulus Pemetaan</label>
                                <input type="text" class="form-control" name="LULUS_PEMETAAN" value="<?= $petugas['LULUS_PEMETAAN']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Keterangan</label>
                                <input type="text" class="form-control" name="Keterangan" value="<?= $petugas['KETERANGAN']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Nilai Pendalaman</label>
                                <input type="text" class="form-control" name="NILAI_PENDALAMAN" value="<?= $petugas['NILAI_PENDALAMAN']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Nilai Pengamatan</label>
                                <input type="text" class="form-control" name="NILAI_PENGAMATAN" value="<?= $petugas['NILAI_PENGAMATAN']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Jumlah Error</label>
                                <input type="text" class="form-control" name="JUMLAH_ERROR" value="<?= $petugas['JUMLAH_ERROR']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Psikotes</label>
                                <input type="text" class="form-control" name="PSIKOTES" value="<?= $petugas['PSIKOTES']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Umur</label>
                                <input type="text" class="form-control" name="Umur" value="<?= $petugas['UMUR']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Tanggal Rekrutmen Ujian MBTI</label>
                                <input type="text" class="form-control" name="Tanggal_rekrutmen_Ujian_MBTI" value="<?= $petugas['TANGGAL_REKRUTMEN_UJIAN_MBTI']; ?>" readonly>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>

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