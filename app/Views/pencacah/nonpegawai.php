<?= $this->extend('pencacah/tmp'); ?>
<?= $this->section('content'); ?>

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?= $this->include('navbar'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container">
            <div class="card mt-3">
                <div class="card-header">
                <p class="h4 text-center font-weight-bold">Data Karyawan</p>
                </div>
                <div class="card-body">

                    <form class="needs-validation" novalidate>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-4">
                                <input type="text"  class="form-control-plaintext"  value="<?= $pegawai['nama_petugas'];?>" readonly>
                            </div>
                            <label for="staticEmail" class="col-sm-2 col-form-label">Kode Pegawai</label>
                            <div class="col-sm-4">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pegawai['nik'];?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-4">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pegawai['pekerjaan'];?>">
                            </div>
                            <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-4">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pegawai['jk'];?>">
                            </div>
                        </div>
                    </form>
                    <a href="/profilpegawai" class = "btn btn-sm btn-info">Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End of Main Content -->

<?= $this->endSection(); ?>