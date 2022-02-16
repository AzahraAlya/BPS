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
                        <p class="h5 text-center font-weight-bold">Form Penilaian Pegawai</p>
                        <a href = "/admin/mitra-lengkap" class="btn btn-sm btn-primary me-1"><i class="fas fa-arrow-left"></i></a>
                            
                        </div>
                    <div class="card-body">
                    <form action="/admin/store-nilaipegawai" method="POST">  
                        <div class="card-body">


                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Kode Pegawai</label>
                            <input type="text" class="form-control" name="kode_mitra" autofocus value="<?= $petugas['KODE_PETUGAS']; ?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom04">Nama</label>
                            <input type="text" class="form-control" name="nama" autofocus value="<?= $petugas['NAMA']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">NIK</label>
                                    <input type="text" class="form-control" name="nik" autofocus value="<?= $petugas['NIK_NIP']; ?>" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Nomor HP</label>
                                    <input type="text" class="form-control" name="no_hp" autofocus value="<?= $petugas['NOMOR_HP']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="validationCustom02">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" autofocus value="<?= $petugas['ALAMAT']; ?>" readonly>
                                </div>
                            </div>

                            <br />
                        <!-- tampilan -->
                        <br/><div class="form-row">
                            <div class="col-md-6 mb-3">    
                            <label for="validationCustom03">Kode Penilai</label>
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
                                    <label for="validationCustom04">Bulan Kegiatan</label>
                                    <select name="bulan_kegiatan" class="form-control" required>
                                        <option value="">-Pilih Bulan Kegiatan-</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">Volume Beban Kerja</label>
                                    <input type="text" class="form-control" id= "beban_kerja" name = "beban_kerja">
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="formGroupExampleInput" class="form-label">Status Keberadaan dan Partisipasi Petugas</label><br/>
                                <input type="radio" name="status" id="options" value="Aktif">Aktif<br/>
                                <input type="radio" name="status" id="options" value="Tidak Aktif">Tidak Aktif<br/>
                            </div>
                        </div>
                            <!-- Halaman Berikutnya -->

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Bagaimana penguasaan konsep dan definisi Petugas ketika melaksanakan kegiatan pencacahan di lapangan?</label></br>
                                <input type="radio" name="que1" id="options" value="1"> 1<br/>
                                <input type="radio" name="que1" id="options" value="2"> 2<br/>
                                <input type="radio" name="que1" id="options" value="3"> 3<br/>
                                <input type="radio" name="que1" id="options" value="4"> 4<br/>
                                <input type="radio" name="que1" id="options" value="5"> 5
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Bagaimana teknik wawancara yang dilakukan Petugas, jika dilihat dari segi probing (mencari jawaban dengan pertanyaan lain yang berkaitan/mendekati)?</label>
                                <input type="radio" name="que2" id="options" value="1"> 1<br/>
                                <input type="radio" name="que2" id="options" value="2"> 2<br/>
                                <input type="radio" name="que2" id="options" value="3"> 3<br/>
                                <input type="radio" name="que2" id="options" value="4"> 4<br/>
                                <input type="radio" name="que2" id="options" value="5"> 5    
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tingkat ketepatan waktu Petugas dalam menyelesaikan tugas/target yang diberikan?</label></br>
                                <input type="radio" name="que3" id="options" value="1"> 1<br/>
                                <input type="radio" name="que3" id="options" value="2"> 2<br/>
                                <input type="radio" name="que3" id="options" value="3"> 3<br/>
                                <input type="radio" name="que3" id="options" value="4"> 4<br/>
                                <input type="radio" name="que3" id="options" value="5"> 5
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tingkat respon komunikasi yang dilakukan bersama Petugas ketika dihubungi/dibutuhkan?</label></br>
                                <input type="radio" name="que4" id="options" value="1"> 1<br/>
                                <input type="radio" name="que4" id="options" value="2"> 2<br/>
                                <input type="radio" name="que4" id="options" value="3"> 3<br/>
                                <input type="radio" name="que4" id="options" value="4"> 4<br/>
                                <input type="radio" name="que4" id="options" value="5"> 5
                            </div>

                            <div class="mb-3">
                                <label for="que5" class="form-label">Apa saja kelebihan Petugas ini? </label><br/>
                                    
                                    <input type="checkbox" name="que5[]" value="Disiplin" id="defaultCheck1">Disiplin<br/>
                                    <input type="checkbox" name = "que5[]" value="Smart" id="defaultCheck2">Smart<br/>
                                    <input type="checkbox" name = "que5[]" value="Teliti" id="defaultCheck3">Teliti<br/>
                                    <input type="checkbox" name = "que5[]" value="Sabar" id="defaultCheck4">Sabar<br/>
                                    <input type="checkbox" name = "que5[]" value="Tekun" id="defaultCheck5">Tekun<br/>
                                    <input type="checkbox" name = "que5[]" value="Memiliki koneksi/peran yang luas di masyarakat" id="defaultCheck6">Memiliki koneksi/peran yang luas di masyarakat<br />
                                    <label class="form-label">Lainnya </label><br/>
                                    <input type="text" class="form-control col-md-6 mb-3" name = "que5[]"> 
                                    <div class="small">*jika tidak ada isikan "tidak ada"</div><br />  
                                </label>
                            </div>

                            <div class="mb-3">
                                <label for="que6" class="form-label">Apa saja kekurangan Petugas ini? </label><br/>
                                    
                                    <input type="checkbox" name="que6[]" value="Tidak punya kendaraan" id="defaultCheck1">Tidak punya kendaraan<br/>
                                    <input type="checkbox" name = "que6[]" value="Malas" id="defaultCheck2">Malas<br/>
                                    <input type="checkbox" name = "que6[]" value="Ceroboh" id="defaultCheck3">Ceroboh<br/>
                                    <input type="checkbox" name = "que6[]" value="Lambat Berhitung" id="defaultCheck4">Lambat Berhitung<br/>
                                    <input type="checkbox" name = "que6[]" value="Sulit bergaul" id="defaultCheck5">Sulit bergaul<br/>
                                    <label class="form-label">Lainnya </label><br/>
                                    <input type="text" class="form-control col-md-6 mb-3" name = "que6[]">  
                                    <div class="small">*jika tidak ada isikan "tidak ada"</div><br />
                                </label>
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Catatan</label>
                                <input type="text" class="form-control col-md-6 mb-3"  name = "catatan">
                                <div class="small">*jika tidak ada isikan "tidak ada"</div><br />
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