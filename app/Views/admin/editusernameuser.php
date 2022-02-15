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

            <form action="/admin/manage/update/username/<?= $penilai['NO_URUT']; ?>" method="post">
                <div class="card" style="width: 25rem;">
                    <div class="card-header">
                        <b>Edit Username</b>
                    </div>
                    <div class="card-body">
                        <div align="left">
                            <a>Kode Petugas</a>
                        </div>
                        <input type="text" class="form-control" id= "password" name = "KODE_PETUGAS" autofocus value="<?= $penilai['KODE_PETUGAS']; ?>" readonly>
                        <br>
                        <div align="left">
                            <a>Nama Petugas</a>
                        </div>
                        <input type="text" class="form-control" id= "password_confirm" name = "NAMA" autofocus value="<?= $penilai['NAMA']; ?>">
                        <br>
                        <button type="submit" class="btn btn-primary btn-sm">
                                Simpan</button>
                        <a href = "/manage/account/pencacah" class = "btn btn-sm btn-danger">Kembali</a>
                    </div>
                </div>
            </form>
        </div>

                <?= $this->endSection(); ?>