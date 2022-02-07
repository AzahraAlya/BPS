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
                <h1 class="h3 mb-2 text-gray-800">Daftar Pegawai</h1>
                
                <!-- <a href="/buku/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a> -->
                <!-- DataTales Example -->
                <div class="card mt-3">
                    <div class="card-header py-3">
                        <!-- <h6 class="m-0 font-weight-bold text-primary">Daftar Pencacah</h6> -->
                        <a href="/admin/penilaianpegawai" class="btn btn-primary float-right">Lihat Penilaian </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <!-- <th scope="col">NIP</th> -->
                                        <th scope="col">Pekerjaan</th>
                                        <th scope="col">Detail</th>                                 
                                        <th scope="col">Hapus</th>                                 
                                        <th scope="col">Penilaian</th>                                 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pegawai as $i => $pc) : ?>
                                        <tr>
                                            <th scope="row"><?= $i + 1;?></th>
                                            <td><?= $pc['nama_petugas']; ?></td>
                                           
                                            <td><?= $pc['pekerjaan']; ?></td>
                                            <td align="center">
                                                <a href="/admin/detailpegawai/<?= $pc['id_user'];?>" class="btn btn-sm btn-warning me-1"><i class="fas fa-eye"></i></a>
                                            </td>
                                            <td align="center">
                                                <form action="/admin/hapuspegawai/<?= $pc['id_user']; ?>" method="post" class="d-inline">
                                                    <input type="hidden" name = "_method" value = "DELETE" />
                                                    <button type ="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?');"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                            <td align="center">
                                                <a href="/admin/nilaipegawai/<?= $pc['id_user'];?>" class="btn btn-sm btn-success"><i class="fas fa-calculator"></i></a>
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