<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
    <?= $this->include('navbar'); ?>


<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> -->
</div>
<?php if (session()->get('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->get('pesan') ?>
    </div>
<?php endif; ?>

<!-- Content Row -->
<div class="text-center">
        <h1 class="display-6">Selamat Datang Admin</h1>
    </div>
<br><br>
<div class="container">
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Mitra</div>
                        <?php $i=0; ?>
                        <?php foreach ($pencacah as $i => $agt) :
                            $i++;
                        endforeach;
                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $i; ?></div>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-green-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                           Mitra Yang Sudah Dinilai</div>
                        <?php $j=0; ?>
                        <?php foreach ($nilai as $j => $bk) :
                            $j++;
                        endforeach;
                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $j; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check-square fa-2x text-blue-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Pegawai
                        </div>
                        <?php $k=0; ?>
                        <?php foreach ($pegawai as $k => $pj) :
                            $k++;
                        endforeach;
                        ?>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $k; ?></div>
                            </div>
                            <div class="col-auto">

                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book-reader fa-2x text-red-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pegawai Yang Sudah Dinilai</div>
                        <?php $l=0; ?>
                        <?php foreach ($nilaipgw as $l => $km) :
                            $l++;
                        endforeach;
                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $l; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check-circle fa-2x text-yellow-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
        <!-- Earnings (Monthly) Card Example -->
      
</div>
</div>

</div>
</div>
</div>
<?= $this->endSection(); ?>                