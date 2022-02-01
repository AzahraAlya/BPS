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
        <div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pengelolaan Pengawas</h4>
                    <form class="forms-sample" action="/admin/manage/accounts/save" method="post">
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-2 col-form-label">Nama Petugas</label>
                            <div class="col-sm-10">
                                <input type="text" minLength="4" class="form-control " name="nama_petugas" placeholder="Nama Petugas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-2 col-form-label">NIP</label>
                            <div class="col-sm-10">
                                <input type="text" minLength="4" class="form-control " name="nik" placeholder="NIP" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" minLength="4" class="form-control " name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-2 col-form-label">Confirmation Password</label>
                            <div class="col-sm-10">
                                <input type="password" minLength="4" class="form-control " name="confpassword" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                           
                            <div class="col-sm-9">
                            <input type="hidden" class="form-control form-control-lg" name="role" placeholder="Email" value = 2>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-sm btn-primary mr-2">Submit</button>
                        <a href = "/manage/account" class="btn btn-sm btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

        <!-- End of Main Content -->

        <?= $this->endSection(); ?>