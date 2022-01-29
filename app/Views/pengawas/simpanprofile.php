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
                        Form Edit Pencacah
                    </div>
                    <div class="card-body">
                   
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Nama</label>
                            <input type="text" class="form-control" name="nama_petugas" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom02">NIK</label>
                            <input type="text" class="form-control" name="nik" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jk" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tmp_lahir" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Pendidikan</label>
                            <input type="text" class="form-control" name="pendidikan" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Status Perkawinan</label>
                            <input type="text" class="form-control" name="status_perkawinan" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Pekerjaan</label>
                            <input type="text" class="form-control" name="pendidikan" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Simpan</button>
                        
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
                        <?php if (!empty(session()->getFlashdata('swal_icon'))){ ?>
                            Swal.fire(
                            'Berhasil',
                            'Data berhasil diubah',
                            'success'
                            )
                        <?php } ?>
                    </script>

<?= $this->endSection(); ?>