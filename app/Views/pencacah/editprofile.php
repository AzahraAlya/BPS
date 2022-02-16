<?= $this->extend('pencacah/template'); ?>
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

            <?php if (session()->get('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('pesan') ?>
                </div>
            <?php endif; ?>
            
                <div class="card mt-3">
                    <div class="card-header">
                        <p class="h5 text-center font-weight-bold">Edit Profil</p>
                    </div>
                    <div class="card-body">

                        <form action="/pencacah/update/<?= $pencacah['NO_URUT']; ?>" method="POST">

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Kode Mitra</label>
                                    <input type="text" class="form-control" name="KODE_PETUGAS" value="<?= $pencacah['KODE_PETUGAS']; ?>" readonly>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">No Kecamatan</label>
                                    <select name="noKECAMATAN" class="form-control" required>
                                        <?php
                                        if ($pencacah['noKECAMATAN'] == "10") { ?>
                                            <option value="010" selected>010-Pardasuka</option>
                                            <option value="020">020-Ambarawa</option>
                                            <option value="030">030-Pagelaran</option>
                                            <option value="040">040-Pringsewu</option>
                                            <option value="050">050-Gadingrejo</option>
                                            <option value="060">060-Sukoharjo</option>
                                            <option value="070">070-Banyumas</option>
                                            <option value="080">080-Adiluwih</option>
                                            <option value="090">090-Pagelaran Utara</option>
                                        <?php } else if ($pencacah['noKECAMATAN'] == "20"){ ?>
                                            <option value="010">010-Pardasuka</option>
                                            <option value="020" selected>020-Ambarawa</option>
                                            <option value="030">030-Pagelaran</option>
                                            <option value="040">040-Pringsewu</option>
                                            <option value="050">050-Gadingrejo</option>
                                            <option value="060">060-Sukoharjo</option>
                                            <option value="070">070-Banyumas</option>
                                            <option value="080">080-Adiluwih</option>
                                            <option value="090">090-Pagelaran Utara</option>
                                        <?php } else if ($pencacah['noKECAMATAN'] == "30"){ ?>
                                            <option value="010">010-Pardasuka</option>
                                            <option value="020">020-Ambarawa</option>
                                            <option value="030" selected>030-Pagelaran</option>
                                            <option value="040">040-Pringsewu</option>
                                            <option value="050">050-Gadingrejo</option>
                                            <option value="060">060-Sukoharjo</option>
                                            <option value="070">070-Banyumas</option>
                                            <option value="080">080-Adiluwih</option>
                                            <option value="090">090-Pagelaran Utara</option>
                                        <?php }else if($pencacah['noKECAMATAN'] == "40"){ ?>
                                            <option value="010">010-Pardasuka</option>
                                            <option value="020">020-Ambarawa</option>
                                            <option value="030">030-Pagelaran</option>
                                            <option value="040" selected>040-Pringsewu</option>
                                            <option value="050">050-Gadingrejo</option>
                                            <option value="060">060-Sukoharjo</option>
                                            <option value="070">070-Banyumas</option>
                                            <option value="080">080-Adiluwih</option>
                                            <option value="090">090-Pagelaran Utara</option>
                                        <?php }else if ($pencacah['noKECAMATAN'] == "50"){ ?>
                                            <option value="010">010-Pardasuka</option>
                                            <option value="020">020-Ambarawa</option>
                                            <option value="030">030-Pagelaran</option>
                                            <option value="040">040-Pringsewu</option>
                                            <option value="050"selected>050-Gadingrejo</option>
                                            <option value="060">060-Sukoharjo</option>
                                            <option value="070">070-Banyumas</option>
                                            <option value="080">080-Adiluwih</option>
                                            <option value="090">090-Pagelaran Utara</option>  
                                        <?php }else if ($pencacah['noKECAMATAN'] == "60"){ ?>
                                            <option value="010">010-Pardasuka</option>
                                            <option value="020">020-Ambarawa</option>
                                            <option value="030">030-Pagelaran</option>
                                            <option value="040">040-Pringsewu</option>
                                            <option value="050">050-Gadingrejo</option>
                                            <option value="060"selected>060-Sukoharjo</option>
                                            <option value="070">070-Banyumas</option>
                                            <option value="080">080-Adiluwih</option>
                                            <option value="090">090-Pagelaran Utara</option>  
                                        <?php }else if ($pencacah['noKECAMATAN'] == "70"){ ?>
                                            <option value="010">010-Pardasuka</option>
                                            <option value="020">020-Ambarawa</option>
                                            <option value="030">030-Pagelaran</option>
                                            <option value="040">040-Pringsewu</option>
                                            <option value="050">050-Gadingrejo</option>
                                            <option value="060">060-Sukoharjo</option>
                                            <option value="070"selected>070-Banyumas</option>
                                            <option value="080">080-Adiluwih</option>
                                            <option value="090">090-Pagelaran Utara</option>
                                        <?php }else if ($pencacah['noKECAMATAN'] == "80"){ ?>
                                            <option value="010">010-Pardasuka</option>
                                            <option value="020">020-Ambarawa</option>
                                            <option value="030">030-Pagelaran</option>
                                            <option value="040">040-Pringsewu</option>
                                            <option value="050">050-Gadingrejo</option>
                                            <option value="060">060-Sukoharjo</option>
                                            <option value="070">070-Banyumas</option>
                                            <option value="080" selected>080-Adiluwih</option>
                                            <option value="090">090-Pagelaran Utara</option>
                                        <?php }else { ?>
                                            <option value="010">010-Pardasuka</option>
                                            <option value="020">020-Ambarawa</option>
                                            <option value="030">030-Pagelaran</option>
                                            <option value="040">040-Pringsewu</option>
                                            <option value="050">050-Gadingrejo</option>
                                            <option value="060">060-Sukoharjo</option>
                                            <option value="070">070-Banyumas</option>
                                            <option value="080">080-Adiluwih</option>
                                            <option value="090"selected>090-Pagelaran Utara</option>
                                        <?php }
                                        ?>
                                    </select>
                                   

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
                                    <div class="small">*diisi dengan nama lengkap</div>
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
                                    <select name="PENDIDIKAN" class="form-control" required>
                                        <?php
                                        if ($pencacah['PENDIDIKAN'] == "S1/S2") { ?>
                                            <option value="S1/S2" selected>S1/S2</option>
                                            <option value="SLTA">SLTA</option>
                                            <option value="D1/D2">D1/D2</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                        <?php } else if ($pencacah['PENDIDIKAN'] == "SLTA"){ ?>
                                            <option value="S1/S2">S1/S2</option>
                                            <option value="SLTA"selected>SLTA</option>
                                            <option value="D1/D2">D1/D2</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                        <?php } else if ($pencacah['PENDIDIKAN'] == "D1/D2"){ ?>
                                            <option value="S1/S2">S1/S2</option>
                                            <option value="SLTA">SLTA</option>
                                            <option value="D1/D2" selected>D1/D2</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                        <?php }else if ($pencacah['PENDIDIKAN'] == "D3"){ ?>
                                            <option value="S1/S2">S1/S2</option>
                                            <option value="SLTA">SLTA</option>
                                            <option value="D1/D2">D1/D2</option>
                                            <option value="D3" selected>D3</option>
                                            <option value="S1">S1</option>
                                        <?php }else { ?>
                                            <option value="D1/D2">D1/D2</option>
                                            <option value="S1/S2">S1/S2</option>
                                            <option value="SLTA">SLTA</option>
                                            <option value="D3">D3</option>
                                            <option value="S1" selected>S1</option>
                                        <?php }
                                        ?>
                                    </select>
                                  
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
                                <div class="small">*jika tidak ada isikan "tidak ada"</div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Alamat</label>
                                <input type="text" class="form-control" name="ALAMAT" value="<?= $pencacah['ALAMAT']; ?>" required>
                                <div class="small">*diisikan alamat lengkap RT/RW</div>
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
                            

                        </form>

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
            'Berhasil Disimpan',
            'success'
        )
    <?php } ?>
</script>

<?= $this->endSection(); ?>