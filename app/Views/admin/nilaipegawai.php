<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?= $this->include('navbar'); ?>
        <!-- End of Topbar -->
        <div class="container">
                <div class="card mt-3">
                        <div class="card-header">
                            Form Penilaian Pegawai
                        </div>
                    <div class="card-body">
                    <form action="/admin/store-nilaipegawai" method="POST">  
                        <div class="card-body">


                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Kode Pegawai</label>
                            <input type="text" class="form-control" name="nip" autofocus value="<?= $pegawai['nik']; ?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom04">Nama</label>
                            <input type="text" class="form-control"name="nama_pegawai" autofocus value="<?= $pegawai['nama_petugas']; ?>" readonly>
                            </div>
                        </div>
                        <!-- tampilan -->
                        <br/><div class="form-row">
                            <div class="col-md-6 mb-3">    
                            <label for="validationCustom03">Nama Penilai</label>
                            <input type="text" class="form-control" id= "nama_penilai" name = "nama_penilai">
                            
                            </div>
                            
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom04">Nama Kegiatan</label>
                            <select name="nama_kegiatan" class="form-control" required>
                                    <option value="">-Pilih Kegiatan-</option>
                                    <?php
                                        foreach($kegiatan as $data){?>
                                            <option value="<?= $data['nama_kegiatan'];?>"><?= $data['nama_kegiatan'];?></option>   
                                        <?php }?>
                            </select>
                            
                            </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom05">Volume Beban Kerja</label>
                            <input type="text" class="form-control" id= "beban" name = "beban">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput" class="form-label">Status Keberadaan dan Partisipasi Mitra</label><br/>
                                <input type="radio" name="status" id="options" value="Aktif">Aktif<br/>
                                <input type="radio" name="status" id="options" value="Tidak Aktif">Tidak Aktif<br/>
                            </div>
                        </div>
                            <!-- Halaman Berikutnya -->

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Bagaimana penguasaan konsep dan definisi Mitra ketika melaksanakan kegiatan pencacahan di lapangan?</label></br>
                                <input type="radio" name="que1" id="options" value="1"> 1<br/>
                                <input type="radio" name="que1" id="options" value="2"> 2<br/>
                                <input type="radio" name="que1" id="options" value="3"> 3<br/>
                                <input type="radio" name="que1" id="options" value="4"> 4<br/>
                                <input type="radio" name="que1" id="options" value="5"> 5
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Bagaimana teknik wawancara yang dilakukan Mitra, jika dilihat dari segi probing (mencari jawaban dengan pertanyaan lain yang berkaitan/mendekati)?</label>
                                <input type="radio" name="que2" id="options" value="1"> 1<br/>
                                <input type="radio" name="que2" id="options" value="2"> 2<br/>
                                <input type="radio" name="que2" id="options" value="3"> 3<br/>
                                <input type="radio" name="que2" id="options" value="4"> 4<br/>
                                <input type="radio" name="que2" id="options" value="5"> 5    
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tingkat ketepatan waktu Mitra dalam menyelesaikan tugas/target yang diberikan?</label></br>
                                <input type="radio" name="que3" id="options" value="1"> 1<br/>
                                <input type="radio" name="que3" id="options" value="2"> 2<br/>
                                <input type="radio" name="que3" id="options" value="3"> 3<br/>
                                <input type="radio" name="que3" id="options" value="4"> 4<br/>
                                <input type="radio" name="que3" id="options" value="5"> 5
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tingkat respon komunikasi yang dilakukan bersama Mitra ketika dihubungi/dibutuhkan?</label></br>
                                <input type="radio" name="que4" id="options" value="1"> 1<br/>
                                <input type="radio" name="que4" id="options" value="2"> 2<br/>
                                <input type="radio" name="que4" id="options" value="3"> 3<br/>
                                <input type="radio" name="que4" id="options" value="4"> 4<br/>
                                <input type="radio" name="que4" id="options" value="5"> 5
                            </div>

                            <div class="mb-3">
                                <label for="que5" class="form-label">Apa saja kelebihan Mitra ini? </label><br/>
                                    
                                    <input type="checkbox" name="que5[]" value="Disiplin" id="defaultCheck1">Disiplin<br/>
                                    <input type="checkbox" name = "que5[]" value="Smart" id="defaultCheck2">Smart<br/>
                                    <input type="checkbox" name = "que5[]" value="Teliti" id="defaultCheck3">Teliti<br/>
                                    <input type="checkbox" name = "que5[]" value="Sabar" id="defaultCheck4">Sabar<br/>
                                    <input type="checkbox" name = "que5[]" value="Tekun" id="defaultCheck5">Tekun<br/>
                                    <label class="form-label">Lainnya </label><br/>
                                    <input type="text" class="form-control col-md-6 mb-3" name = "que5[]">   
                                </label>
                            </div>

                            <div class="mb-3">
                                <label for="que6" class="form-label">Apa saja kekurangan Mitra ini? </label><br/>
                                    
                                    <input type="checkbox" name="que6[]" value="Tidak punya kendaraan" id="defaultCheck1">Tidak punya kendaraan<br/>
                                    <input type="checkbox" name = "que6[]" value="Malas" id="defaultCheck2">Malas<br/>
                                    <input type="checkbox" name = "que6[]" value="Ceroboh" id="defaultCheck3">Ceroboh<br/>
                                    <input type="checkbox" name = "que6[]" value="Lambat Berhitung" id="defaultCheck4">Lambat Berhitung<br/>
                                    <input type="checkbox" name = "que6[]" value="Sulit bergaul" id="defaultCheck5">Sulit bergaul<br/>
                                    <label class="form-label">Lainnya </label><br/>
                                    <input type="text" class="form-control col-md-6 mb-3" name = "que6[]">  
                                </label>
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Catatan</label>
                                <input type="text" class="form-control col-md-6 mb-3"  name = "catatan">
                            </div>
                        
            
           
                            <button type="btn" class="btn btn-primary" name="btn-simpan">
                                Simpan</button>
                                </div>  
                        </form>
                    </div>
                </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
               $('input[name="status"]').on('change',function()
               {
                   $('input[name="que1"]').attr('disabled',this.value!="Aktif")
                   $('input[name="que2"]').attr('disabled',this.value!="Aktif")
                   $('input[name="que3"]').attr('disabled',this.value!="Aktif")
                   $('input[name="que4"]').attr('disabled',this.value!="Aktif")
                   $('input[name="que5[]"]').attr('disabled',this.value!="Aktif")
                   $('input[name="que6[]"]').attr('disabled',this.value!="Aktif")
                   $('input[name="catatan"]').attr('disabled',this.value!="Aktif")

               });
           </script>
        <?= $this->endSection(); ?>