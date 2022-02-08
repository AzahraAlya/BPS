<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?= $this->include('navbar'); ?>
        <!-- End of Topbar -->

                <div class="container">
                <div align="center">

            <form action="/admin/manage/update/<?= $user['NO_URUT']; ?>" method="post">
                <div class="card" style="width: 25rem;">
                    <div class="card-header">
                        <b>Ganti Password</b>
                    </div>
                    <div class="card-body">
                        <div align="left">
                            <a>Password</a>
                        </div>
                        <input type="text" class="form-control" id= "password" name = "password" autofocus value="<?= $user['password']; ?>">
                        <br>
                        <button type="submit" class="btn btn-primary btn-sm">
                                Simpan</button>
                        <a href = "/manage/account" class = "btn btn-sm btn-danger">Kembali</a>
                    </div>
                </div>
            </form>
        </div>

                <?= $this->endSection(); ?>