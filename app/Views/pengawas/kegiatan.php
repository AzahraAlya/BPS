<?= $this->extend('pengawas/template'); ?>
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
                <h1 class="h3 mb-2 text-gray-800">Daftar Pencacah</h1>
                
                <!-- <a href="/buku/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a> -->
                <!-- DataTales Example -->
                <div class="card mt-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Pencacah</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Mitra</th>
                                        <th scope="col">Kegiatan</th>
                                        <th scope="col">Tanggal Dinilai</th>
                                                                          
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    
                                foreach ($kegiatan as $i => $pc) : ?>
                                        <tr>
                                            
                                            <td><?= $pc['nama']; ?></td>
                                            <td><?= $pc['nama_kegiatan']; ?></td>
                                            <td><?= date("l, d F Y",strtotime($pc['created_at'])); ?></td>
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