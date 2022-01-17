<?= $this->extend('pencacah/template'); ?>
<?= $this->section('content'); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?= $this->include('navbar'); ?>
        <!-- End of Topbar -->

        <?php if (session()->get('success')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
        

        <div align="center">

            <form action="/pencacah/homeData/" method="post" id="formcari">
                <div class="card" style="width: 25rem;">
                    <div class="card-header">
                        <b>Masukkan Kode Mitra</b>
                    </div>
                    <div class="card-body">
                        <div align="left">
                            <a>Kode Mitra:</a>
                        </div>
                        <input class="form-control" type="text" name="Kode_Mitra" onchange="setKode(event)" placeholder="Kode Mitra" aria-label="default input example" required>
                        <br>
                        <input class="btn btn-outline-primary" type="submit" value="Selanjutnya">
                    </div>
                </div>
            </form>
        </div>



        <script>
            function setKode(e) {
                const uri = "/pencacah/homeData/";
                const formcari = document.querySelector("#formcari");
                formcari.action = uri + e.target.value;
            }
        </script>


<?= $this->endSection(); ?>