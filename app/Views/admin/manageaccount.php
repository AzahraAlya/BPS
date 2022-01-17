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
        <div class="content-wrapper">
        <div class="container">
        <a href="/manage/accounts/data">
            <button type="button" class="btn btn-primary">
                <i class="mdi mdi-account-plus"></i>
                Add admin
            </button>
        </a>
        <br> <br>
        <div class="card mt-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Pengelolaan Akun</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($admin as $i => $pc) : ?>
                                    <tr>
                                        <td><?= $id++; ?></td>
                                        <td><?= $a['username']; ?></td>
                                        <td><?= $a['fullname']; ?></td>
                                        <td><?= $a['email']; ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

        <!-- End of Main Content -->

        <?= $this->endSection(); ?>