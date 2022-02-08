<?php

namespace App\Controllers;
use App\Models\M_pencacah;
use App\Models\M_kegiatan;


class C_Pengawas extends BaseController
{
	public function pengawas()
	{
		$M_pencacah = model("M_pencacah");
		$data = [
			'pencacah' => $M_pencacah->findAll(),
			'validation' => \Config\Services::validation(),

		];
		return view('pengawas/daftar_pencacah',$data);
	}

	public function nilai($No_Urut){

		$M_pencacah = model("M_pencacah");
		$M_kegiatan = model("M_kegiatan");
		$data = [
			'validation' => \Config\Services::validation(),
			'pencacah' => $M_pencacah->getPencacahan($No_Urut),
			'kegiatan' => $M_kegiatan->findAll(),
		];
		return view('pengawas/nilai',$data);
	}

	public function store_nilai(){
		helper(['swal_helper']);
		$data = [
			'kode_mitra' => $this->request->getVar('kode_mitra'),
			'nama' => $this->request->getVar('nama'),
			'nik' => $this->request->getVar('nik'),
			'no_hp' => $this->request->getVar('no_hp'),
			'alamat' => $this->request->getVar('alamat'),
			'nama_penilai' => $this->request->getVar('nama_penilai'),
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
			'bulan_kegiatan' => $this->request->getVar('bulan_kegiatan'),
			'beban_kerja' => $this->request->getVar('beban_kerja'),
			'status' => $this->request->getVar('status'),
			'que1' => $this->request->getVar('que1'),
			'que2'=> $this->request->getVar('que2'),
			'que3'=> $this->request->getVar('que3'),
			'que4'=> $this->request->getVar('que4'),
			'que5' => implode(",",(array)$this->request->getVar('que5')),
			'que6' => implode(",",(array)$this->request->getVar('que6')),
			'catatan' => $this->request->getVar('catatan'),
		];
		$M_nilai = model("M_nilai");
		$M_nilai->insert($data);
		set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
		return redirect()->to(base_url('/pengawas'));
}

	public function penilaian(){
		$M_kegiatan = model("M_kegiatan");
		$data = [
			'kegiatan' => $M_kegiatan->findAll(),
		];
		return view('pengawas/penilaian',$data);
	}

	public function editprofile(){
		$model = model("M_petugas");
		$data['pencacah'] = $model->where('NO_URUT', session()->get('NO_URUT'))->first();
		return view('pengawas/editprofile', $data);
	}

	public function saveprofile($id_user){
		helper(['swal_helper']);
		
		$M_user = model("M_user");
		$M_user->save([
			'id_user' => $id_user,
            'nama_petugas' => $this->request->getVar('nama_petugas'),
            'nik' => $this->request->getVar('nik'),
            'jk' => $this->request->getVar('jk'),
            'tmp_lahir' => $this->request->getVar('tmp_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'status_perkawinan' => $this->request->getVar('status_perkawinan'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
		]);

		set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
		return redirect()->to(base_url('/editprofile'));

	}

	public function simpanprofile(){
		return view('pengawas/simpanprofile');
	}

	public function detailkegiatan($kode)
	{
		$M_nilai = model("M_nilai");
		// $kode = session()->get('Kode_Mitra');
		$data = [
			'validation' => \Config\Services::validation(),
			'kegiatan' => $M_nilai->getKegiatan($kode),
		];
		return view('pengawas/kegiatan', $data);
	}
	
	public function pegawai(){
		return view('pengawas/nonpegawai');
	}

}