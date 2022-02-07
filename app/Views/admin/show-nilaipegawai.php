<?= $this->extend('admin/template'); ?>
    
<?= $this->section('content'); ?>
   
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
                <!-- <h1 class="h3 mb-2 text-gray-800">Daftar Pencacah</h1> -->
                
                <!-- <a href="/buku/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a> -->
                <!-- DataTales Example -->
                <div class="card mt-3">
                    <div class="card-header py-3">
                    <p class="h5 text-center font-weight-bold">Data Penilaian Pegawai</p>
                        <!-- <a href="#" class="btn btn-outline-danger shadow float-right">Excel<i class="fa fa-file-excel"></i></a> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Pegawai</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nama Penilai</th>
                                        <th scope="col">Volume Beban Kerja</th>
                                        <th scope="col">Status Partisipasi Mitra</th>
                                        <th scope="col">Penguasaan Konsep</th>
                                        <th scope="col">Teknik Wawancara</th>
                                        <th scope="col">Ketepatan Waktu</th>
                                        <th scope="col">Respon Komunikasi</th>
                                        <th scope="col">Kelebihan</th>
                                        <th scope="col">Kekurangan</th>
                                        <th scope="col">Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($pegawai as $i => $adm) : ?>
                                        <tr>
                                            <th scope="row"><?= $i + 1;?></th>
                                            <td><?= $adm['nip']; ?></td>
                                            <td><?= $adm['nama_pegawai']; ?></td>
                                            <td><?= $adm['nama_penilai']; ?></td>
                                            <td><?= $adm['beban']; ?></td>
                                            <td><?= $adm['status']; ?></td>
                                            <td><?= $adm['que1']; ?></td>
                                            <td><?= $adm['que2']; ?></td>
                                            <td><?= $adm['que3']; ?></td>
                                            <td><?= $adm['que4']; ?></td>
                                            <td><?= $adm['que5']; ?></td>
                                            <td><?= $adm['que6']; ?></td>
                                            <td><?= $adm['catatan']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        <?= $this->endSection(); ?>