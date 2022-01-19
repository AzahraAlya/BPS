<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/startbootstrap/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/startbootstrap/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- <link href="/assets/startbootstrap/css/dboard.css" rel="stylesheet"> -->

    <!-- <link href="/assets/startbootstrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="/assets/startbootstrap/vendor/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/assets/startbootstrap/vendor/datatables/searchBuilder.dataTables.min.css">
    <link rel="stylesheet" href="/assets/startbootstrap/vendor/datatables/dataTables.dateTime.min.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Evaluasi Kinerja<sup>bps</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Sidebar -->
        <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#adminUtilities" aria-expanded="true" aria-controls="adminUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Admin</span>
                </a>
                <div id="adminUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="/admin/print">Data Penilaian Mitra</a>
                        <!-- <a class="collapse-item" href="/admin/data-penilaian">Data Penilaian Mitra</a> -->
                        <!-- <a class="collapse-item" href="/admin/tambah-mitra">Tambah Data Mitra Baru</a> -->
                        <a class="collapse-item" href="/admin/kegiatan">Data Kegiatan</a>
                        <a class="collapse-item" href="/admin/mitra-lengkap">Data Mitra Lengkap</a>
                       
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/manage/account">
                    <i class="fas fa-user-cog"></i>
                    <span>Manage Account</span></a>
            </li>
        <!-- Content Wrapper -->
    </ul>
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
            <!-- Content Row -->
            <div class="row">


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

            <!-- Bootstrap core JavaScript-->
            <script src="/assets/startbootstrap/vendor/jquery/jquery.min.js"></script>
            <script src="/assets/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="/assets/startbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="/assets/startbootstrap/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="/assets/startbootstrap/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="/assets/startbootstrap/js/demo/chart-area-demo.js"></script>
            <script src="/assets/startbootstrap/js/demo/chart-pie-demo.js"></script>

            <!-- <script src="/assets/startbootstrap/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="/assets/startbootstrap/vendor/datatables/dataTables.bootstrap4.min.js"></script> -->

            <script src="/assets/startbootstrap/vendor/datatables/jquery-3.5.1.js"></script>
            <script src="/assets/startbootstrap/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="/assets/startbootstrap/vendor/datatables/dataTables.searchBuilder.min.js"></script>
            <script src="/assets/startbootstrap/vendor/datatables/dataTables.dateTime.min.js"></script>
            <!-- Page level custom scripts -->
           <!-- <script src="/assets/startbootstrap/js/demo/datatables-demo.js"></script> -->

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
        </div>
    </div>

</body>

</html>