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
            <!-- /.content-header -->
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Daftar Kegiatan</h1>
                
                <!-- <a href="/buku/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a> -->
                <!-- DataTales Example -->
                <div class="container">
                <div align="center">
            <form action="/kegiatan/update/<?= $kegiatan['id_kegiatan']; ?>" method="POST">
                <div class="card" style="width: 25rem;">
                    <div class="card-header">
                        <b>Edit Nama Kegiatan </b>
                    </div>
                    <div class="card-body">
                        <div align="left">
                            <a>Nama Kegiatan:</a>
                        </div>
                        <input type="text" class="form-control" id= "nama_kegiatan" name = "nama_kegiatan" autofocus value="<?= $kegiatan['nama_kegiatan']; ?>" required>
                        <br>
                        <button type="btn" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>Simpan</button>
                    </div>
                </div>
            </form>
                </div>
                </div>
            </div>
            <!-- Content Row -->
            <div class="row">


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?= $this->endSection(); ?>