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
                                        <th scope="col">No Urut</th>
                                        <th scope="col">Kode Mitra</th>
                                        <th scope="col">No Kecamatan</th>
                                        <th scope="col">No Peserta</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Nama</th>                                        
                                        <th scope="col">Detail</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pencacah as $i => $pc) : ?>
                                        <tr>
                                            <th scope="row"><?= $i + 1;?></th>
                                            <td><?= $pc['Kode_Mitra']; ?></td>
                                            <td><?= $pc['noKecamatan']; ?></td>
                                            <td><?= $pc['NOMOR_PESERTA']; ?></td>
                                            <td><?= $pc['NIK']; ?></td>
                                            <td><?= $pc['NAMA']; ?></td>
                                            <td align="center">
                                                <a href="/admin/data-detail/<?= $pc['No_Urut'];?>" class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></a>
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