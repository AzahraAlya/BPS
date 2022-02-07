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
                        Form Detail Pegawai
                    </div>
                    <div class="card-body">
                   
                    <form class="needs-validation" novalidate>
                        
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Nama</label>
                                <input type="text" class="form-control" name="nama_petugas" value="<?= $pegawai['nama_petugas']; ?>" readonly>
                               
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">NIP</label>
                                <input type="text" class="form-control" name="nik" value="<?= $pegawai['nik']; ?>" readonly>
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jk" value="<?= $pegawai['jk']; ?>" readonly>
                                
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tmp_lahir" value="<?= $pegawai['tmp_lahir']; ?>" readonly>
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Tanggal Lahir</label>
                                <input type="text" class="form-control" name="tgl_lahir" value="<?= $pegawai['tgl_lahir']; ?>" readonly>
                                
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Pendidikan</label>
                                <input type="text" class="form-control"name="pendidikan" value="<?= $pegawai['pendidikan']; ?>" readonly>
                                
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom05">Status Perkawinan</label>
                                <input type="text" class="form-control" name="status_perkawinan" value="<?= $pegawai['status_perkawinan']; ?>" readonly>
                                
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" value="<?= $pegawai['pekerjaan']; ?>" readonly>
                                
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