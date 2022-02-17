<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Database Petugas.xls");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No Urut</th>
                                        <th scope="col">Kode Petugas</th>
                                        <th scope="col">Nomor Kecamatan</th>
                                        <th scope="col">Nomor Peserta</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Tempat Lahir</th>                                        
                                        <th scope="col">Tanggal Lahir</th> 
                                        <th scope="col">Pendidikan</th>
                                        <th scope="col">Status Perkawinan</th>
                                        <th scope="col">Pekerjaan</th>
                                        <th scope="col">Pengalaman Survei BPS</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Desa</th>
                                        <th scope="col">Kecamatan</th>
                                        <th scope="col">Kabupaten</th>
                                        <th scope="col">Nomor HP</th>
                                        <th scope="col">Nomor WA</th>
                                        <th scope="col">Kesan dan Pesan</th>
                                        <th scope="col">Penampilan</th>
                                        <th scope="col">Komunikasi</th>
                                        <th scope="col">Nilai</th>
                                        <th scope="col">Kepemilikan HP</th>
                                        <th scope="col">Spesifikasi Android</th>
                                        <th scope="col">Operasi Google Maps</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">E</th>
                                        <th scope="col">I</th>
                                        <th scope="col">S</th>
                                        <th scope="col">N</th>
                                        <th scope="col">T</th>
                                        <th scope="col">F</th>
                                        <th scope="col">J</th>
                                        <th scope="col">P</th>
                                        <th scope="col"> </th>
                                        <th scope="col"> </th>
                                        <th scope="col"> </th>
                                        <th scope="col"> </th>
                                        <th scope="col">Rekomendasi Hasil MBTI</th>
                                        <th scope="col">Psikolog Prov</th>
                                        <th scope="col">Evaluasi KSK</th>
                                        <th scope="col">Hasil Akhir</th>
                                        <th scope="col">Lulus Pemetaan</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Nilai Pendalaman</th>
                                        <th scope="col">Nilai Pengamatan</th>
                                        <th scope="col">Jumlah Error</th>
                                        <th scope="col">Psikotes</th>
                                        <th scope="col">Umur</th>
                                        <th scope="col">Tanggal Rekrutmen Ujian MBTI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($admin as $i => $adm) : ?>
                                        <tr>
                                            <th scope="row"><?= $i + 1;?></th>
                                            <td><?= $adm["KODE_PETUGAS"]; ?></td>
                                            <td><?= $adm["noKECAMATAN"]; ?></td>
                                            <td><?= $adm["NOMOR_PESERTA"]; ?></td>
                                            <td><?= $adm["NIK_NIP"]; ?></td>
                                            <td><?= $adm["NAMA"]; ?></td>
                                            <td><?= $adm["JENIS_KELAMIN"]; ?></td>
                                            <td><?= $adm["TEMPAT_LAHIR"]; ?></td>
                                            <td><?= $adm["TANGGAL_LAHIR"]; ?></td>
                                            <td><?= $adm["PENDIDIKAN"]; ?></td>
                                            <td><?= $adm["STATUS_PERKAWINAN"]; ?></td>
                                            <td><?= $adm["PEKERJAAN"]; ?></td>
                                            <td><?= $adm["PENGALAMAN_SURVEI_BPS"]; ?></td>
                                            <td><?= $adm["ALAMAT"]; ?></td>
                                            <td><?= $adm["DESA"]; ?></td>
                                            <td><?= $adm["KECAMATAN"]; ?></td>
                                            <td><?= $adm["KABUPATEN"]; ?></td>
                                            <td><?= $adm["NOMOR_HP"]; ?></td>
                                            <td><?= $adm["NOMOR_WA"]; ?></td>
                                            <td><?= $adm["KESAN_DAN_PESAN"]; ?></td>
                                            <td><?= $adm["PENAMPILAN"]; ?></td>
                                            <td><?= $adm["KOMUNIKASI"]; ?></td>
                                            <td><?= $adm["NILAI"]; ?></td>
                                            <td><?= $adm["KEPEMILIKAN_HP"]; ?></td>
                                            <td><?= $adm["SPESIFIKASI_ANDROID"]; ?></td>
                                            <td><?= $adm["OPERASI_GOOGLE_MAPS"]; ?></td>
                                            <td><?= $adm["GAMBAR"]; ?></td>
                                            <td><?= $adm["E"]; ?></td>
                                            <td><?= $adm["I"]; ?></td>
                                            <td><?= $adm["S"]; ?></td>
                                            <td><?= $adm["N"]; ?></td>
                                            <td><?= $adm["T"]; ?></td>
                                            <td><?= $adm["F"]; ?></td>
                                            <td><?= $adm["J"]; ?></td>
                                            <td><?= $adm["P"]; ?></td>
                                            <td><?= $adm["huruf1"]; ?></td>
                                            <td><?= $adm["huruf2"]; ?></td>
                                            <td><?= $adm["huruf3"]; ?></td>
                                            <td><?= $adm["huruf4"]; ?></td>
                                            <td><?= $adm["REKOMENDASI_HASIL_MBTI"]; ?></td>
                                            <td><?= $adm["PSIKOLOG_PROV"]; ?></td>
                                            <td><?= $adm["EVALUASI_KSK"]; ?></td>
                                            <td><?= $adm["HASIL_AKHIR"]; ?></td>
                                            <td><?= $adm["LULUS_PEMETAAN"]; ?></td>
                                            <td><?= $adm["KETERANGAN"]; ?></td>
                                            <td><?= $adm["NILAI_PENDALAMAN"]; ?></td>
                                            <td><?= $adm["NILAI_PENGAMATAN"]; ?></td>
                                            <td><?= $adm["JUMLAH_ERROR"]; ?></td>
                                            <td><?= $adm["PSIKOTES"]; ?></td>
                                            <td><?= $adm["UMUR"]; ?></td>
                                            <td><?= $adm["TANGGAL_REKRUTMEN_UJIAN_MBTI"]; ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
    </body>
</html>