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

            <form action="/admin/store-kegiatan" method="post">
                <div class="card" style="width: 25rem;">
                    <div class="card-header">
                        <b>Masukkan Nama Kegiatan Baru</b>
                    </div>
                    <div class="card-body">
                        <div align="left">
                            <a>Nama Kegiatan:</a>
                        </div>
                        <input type="text" class="form-control" id= "nama_kegiatan" name = "nama_kegiatan" required>
                        <br>
                        <button type="submit" class="btn btn-primary btn-sm">
                                Simpan</button>
                        <a href = "/admin/kegiatan" class = "btn btn-sm btn-danger">Kembali</a>

                    </div>
                </div>
            </form>
        </div>

                <?= $this->endSection(); ?>