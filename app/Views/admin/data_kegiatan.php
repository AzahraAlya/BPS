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
                <!-- Page Heading
                <h1 class="h3 mb-2 text-gray-800">Daftar Kegiatan</h1> -->
                
                <!-- <a href="/buku/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a> -->
                <!-- DataTales Example -->
                <div class="card mt-3">
                    <div class="card-header py-3">
                        <!-- <h6 class="m-0 font-weight-bold text-primary">Daftar Pencacah</h6> -->
                        <p class="h5 text-center font-weight-bold">Daftar Kegiatan</p>
                        <a href = "/dashboard" class="btn btn-sm btn-primary me-1"><i class="fas fa-arrow-left"></i></a>
                        <a href="/admin/tambah-kegiatan" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah Kegiatan</a>
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kegiatan</th>                                     
                                        <th scope="col">Aksi</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($kegiatan as $i => $kg) : ?>
                                        <tr>
                                            <th scope="row"><?= $i + 1;?></th>
                                            <td><?= $kg['nama_kegiatan']; ?></td>
                                            <td>
                                                <a href="/admin/edit/kegiatan/<?= $kg['id_kegiatan'];?>" class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></a>
                                                <form action="/admin/delete/kegiatan/<?= $kg['id_kegiatan']; ?>" method="post" class="d-inline">
                                                    <input type="hidden" name = "_method" value = "DELETE" />
                                                    <button type ="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?');"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
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