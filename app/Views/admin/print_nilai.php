<?= $this->extend('admin/template'); ?>
    <link rel="stylesheet" href="/assets/startbootstrap/vendor/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/assets/startbootstrap/vendor/datatables/searchBuilder.dataTables.min.css">
    <link rel="stylesheet" href="/assets/startbootstrap/vendor/datatables/dataTables.dateTime.min.css">
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
                    <p class="h5 text-center font-weight-bold">Data Penilaian Mitra</p>
                        <a href="/admin/excel" class="btn btn-outline-danger shadow float-right">Excel<i class="fa fa-file-excel"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No Urut</th>
                                        <th scope="col">Kode Mitra</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">No HP</th>                                        
                                        <th scope="col">Alamat</th> 
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
                                <?php foreach ($admin as $i => $adm) : ?>
                                        <tr>
                                            <th scope="row"><?= $i + 1;?></th>
                                            <td><?= $adm->kode_mitra; ?></td>
                                            <td><?= $adm->nama; ?></td>
                                            <td><?= $adm->nik; ?></td>
                                            <td><?= $adm->no_hp; ?></td>
                                            <td><?= $adm->alamat; ?></td>
                                            <td><?= $adm->nama_penilai; ?></td>
                                            <td><?= $adm->beban_kerja; ?></td>
                                            <td><?= $adm->status; ?></td>
                                            <td><?= $adm->que1; ?></td>
                                            <td><?= $adm->que2; ?></td>
                                            <td><?= $adm->que3; ?></td>
                                            <td><?= $adm->que4; ?></td>
                                            <td><?= $adm->que5; ?></td>
                                            <td><?= $adm->que6; ?></td>
                                            <td><?= $adm->catatan; ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <script src="/assets/startbootstrap/vendor/datatables/jquery-3.5.1.js"></script>
            <script src="/assets/startbootstrap/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="/assets/startbootstrap/vendor/datatables/dataTables.searchBuilder.min.js"></script>
            <script src="/assets/startbootstrap/vendor/datatables/dataTables.dateTime.min.js"></script>
           <script>
               $(document).ready(function() {
                    $('#example').DataTable( {
                        dom: 'Qlfrtip',
                        searchBuilder: {
                            columns: [9,10,11,12]
                        }
                    });
                });
           </script>
        <?= $this->endSection(); ?>