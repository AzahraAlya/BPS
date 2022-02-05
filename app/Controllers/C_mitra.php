<?php

namespace App\Controllers;

use App\Models\M_pencacah;

class C_Mitra extends BaseController
{

	public function tambah(){
        $M_pencacah = model("M_pencacah");
        $M_kecamatan = model("M_kecamatan");
        $id_mitra = $M_pencacah->id_KodeMitra();

        $data = [
			'id_mitra' => $id_mitra,
            'kecamatan' => $M_kecamatan->findAll(),
		];
		return view('admin/tambah_mitra',$data);
	}

	public function store(){
		$data = [
			'Kode_Mitra' => $this->request->getVar('Kode_Mitra'),
			'noKecamatan'=> $this->request->getVar('noKecamatan'),
			'NOMOR_PESERTA' => $this->request->getVar('NOMOR_PESERTA'),
			'NIK'=> $this->request->getVar('NIK'),
			'NAMA'=> $this->request->getVar('NAMA'),
			'JENIS_KELAMIN'=> $this->request->getVar('JENIS_KELAMIN'),
			'TEMPAT_LAHIR'=> $this->request->getVar('TEMPAT_LAHIR'),
			'TANGGAL_LAHIR'=> $this->request->getVar('TANGGAL_LAHIR'),
			'PENDIDIKAN'=> $this->request->getVar('PENDIDIKAN'),
			'STATUS_PERKAWINAN'=> $this->request->getVar('STATUS_PERKAWINAN'),
			'PEKERJAAN'=> $this->request->getVar('PEKERJAAN'),
			'PENGALAMAN_SURVEI_BPS'=> $this->request->getVar('PENGALAMAN_SURVEI_BPS'),
			'ALAMAT'=> $this->request->getVar('ALAMAT'),
			'DESA'=> $this->request->getVar('DESA'),
			'KECAMATAN'=> $this->request->getVar('KECAMATAN'),
			'KABUPATEN'=> $this->request->getVar('KABUPATEN'),
			'NOMOR_HP'=> $this->request->getVar('NOMOR_HP'),
			'NOMOR_WA'=> $this->request->getVar('NOMOR_WA'),
			'KESAN_DAN_PESAN' => $this->request->getVar('KESAN_DAN_PESAN'),
			'PENAMPILAN' => $this->request->getVar('PENAMPILAN'),
			'KOMUNIKASI'=> $this->request->getVar('KOMUNIKASI'),
			'NILAI' => $this->request->getVar('NILAI'),
			'KEPEMILIKAN_HP' => $this->request->getVar('KEPEMILIKAN_HP'),
			'SPESIFIKASI_ANDROID' => $this->request->getVar('SPESIFIKASI_ANDROID'),
			'OPERASI_GOOGLE_MAPS'=> $this->request->getVar('OPERASI_GOOGLE_MAPS'),
			'GAMBAR' => $this->request->getVar('GAMBAR'),
			'E' => $this->request->getVar('E'),
			'I' => $this->request->getVar('I'),
			'S' => $this->request->getVar('S'),
			'N' => $this->request->getVar('N'),
			'T' => $this->request->getVar('T'),
			'F' => $this->request->getVar('F'),
			'J' => $this->request->getVar('J'),
			'P' => $this->request->getVar('P'),
			'huruf1' => $this->request->getVar('huruf1'),
			'huruf2' => $this->request->getVar('huruf2'),
			'huruf3' => $this->request->getVar('huruf3'),
			'huruf4' => $this->request->getVar('huruf4'),
			'Rekomendasi_Hasil_MBTI' => $this->request->getVar('Rekomendasi_Hasil_MBTI'),
			'Psikolog_Prov' => $this->request->getVar('Psikolog_Prov'),
			'Evaluasi_KSK' => $this->request->getVar('Evaluasi_KSK'),
			'HASIL_AKHIR' => $this->request->getVar('HASIL_AKHIR'),
			'LULUS_PEMETAAN' => $this->request->getVar('LULUS_PEMETAAN'),
			'Keterangan' => $this->request->getVar('Keterangan'),
			'NILAI_PENDALAMAN' => $this->request->getVar('NILAI_PENDALAMAN'),
			'NILAI_PENGAMATAN' => $this->request->getVar('NILAI_PENGAMATAN'),
			'JUMLAH_ERROR' => $this->request->getVar('JUMLAH_ERROR'),
			'PSIKOTES' => $this->request->getVar('PSIKOTES'),
			'Umur' => $this->request->getVar('Umur'),
			'Tanggal_Rekrutment_Ujian_MBTI' => $this->request->getVar('Tanggal_Rekrutment_Ujian_MBTI'),
		];
		$M_pencacah = model("M_pencacah");
		$M_pencacah->insert($data);
		return redirect()->to(base_url('/dashboard'));
	}


	public function lengkap(){
		$M_pencacah = model("M_pencacah");
		$data = [
			'pencacah' => $M_pencacah->findAll(),
		];
		return view('admin/data-lengkap',$data);
	}

	public function detailLengkap($No_Urut){
		$M_pencacah = model("M_pencacah");
		$data = [
			'pencacah' => $M_pencacah->getPencacah($No_Urut),
		];
		return view('admin/detail-lengkap',$data);
	}

	public function delete($No_Urut)
	{
		$M_pencacah = model("M_pencacah");
		$M_pencacah->delete($No_Urut);
		return redirect()->to(base_url('/admin/mitra-lengkap'));
	}
}
