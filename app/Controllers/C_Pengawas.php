<?php

namespace App\Controllers;
use App\Models\M_petugas;
use App\Models\M_pencacah;
use App\Models\M_kegiatan;


class C_Pengawas extends BaseController
{
	public function pengawas()
	{
		$M_petugas = model("M_petugas");
		$data = [
			//'pencacah' => $M_petugas->findAll(),
			'pencacah' => $M_petugas->where('role != 3')->findAll(),
			'validation' => \Config\Services::validation(),

		];
		return view('pengawas/daftar_pencacah',$data);
	}

	public function nilai($NO_URUT){

		$M_petugas = model("M_petugas");
		$M_kegiatan = model("M_kegiatan");
		$data = [
			'validation' => \Config\Services::validation(),
			'pencacah' => $M_petugas->getPencacah($NO_URUT),
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

	public function saveprofile($NO_URUT){
		helper(['swal_helper']);
		
		$M_petugas = model("M_petugas");
		$M_petugas->save([
			'NO_URUT' => $NO_URUT,
            'KODE_PETUGAS' => $this->request->getVar('KODE_PETUGAS'),
            'noKECAMATAN' => $this->request->getVar('noKECAMATAN'),
            'NOMOR_PESERTA' => $this->request->getVar('NOMOR_PESERTA'),
            'NIK_NIP' => $this->request->getVar('NIK_NIP'),
            'NAMA' => $this->request->getVar('NAMA'),
            'JENIS_KELAMIN' => $this->request->getVar('JENIS_KELAMIN'),
            'PENDIDIKAN' => $this->request->getVar('PENDIDIKAN'),
            'TEMPAT_LAHIR' => $this->request->getVar('TEMPAT_LAHIR'),
            'TANGGAL_LAHIR' => $this->request->getVar('TANGGAL_LAHIR'),
            'STATUS_PERKAWINAN' => $this->request->getVar('STATUS_PERKAWINAN'),
            'PEKERJAAN' => $this->request->getVar('PEKERJAAN'),
            'PENGALAMAN_SURVEI_BPS' => $this->request->getVar('PENGALAMAN_SURVEI_BPS'),
            'ALAMAT' => $this->request->getVar('ALAMAT'),
            'DESA' => $this->request->getVar('DESA'),
            'KECAMATAN' => $this->request->getVar('KECAMATAN'),
            'KABUPATEN' => $this->request->getVar('KABUPATEN'),
            'NOMOR_HP' => $this->request->getVar('NOMOR_HP'),
            'NOMOR_WA' => $this->request->getVar('NOMOR_WA'),
		]);

		set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
		return redirect()->to(base_url('/dashboard'));

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

	public function setting(){
		helper(['swal_helper']);
		helper(['form']);
		//$model = new M_pencacah();
        $model = model("M_petugas");
		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'password' => 'required|min_length[3]|max_length[20]',
				'password_confirm' => 'required|min_length[3]|max_length[20]',
			];

			if ($this->request->getPost('password') != '') {
				$rules['password'] = 'required|min_length[8]|max_length[255]';
				$rules['password_confirm'] = 'matches[password]';
			}

			if (!$this->validate($rules)) {
				$data['validation'] = $this->validator;
			} else {
				$newData = [
					'NO_URUT' => session()->get('NO_URUT'),
				];
				if ($this->request->getPost('password') != '') {
					$newData['password'] = $this->request->getPost('password');
				}
				//Edit sessions
				$model->save($newData);
				set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
				return redirect()->to('/pengawas');
			}
		}

		$data['pengawas'] = $model->where('NO_URUT', session()->get('NO_URUT'))->first();
        // $data['user'] = $this->$model->find(session()->get('id_user'));
        // dd($data);
		echo view('auth/editpassword_pengawas', $data);
    }

	public function editpengawas(){
		$model = new M_petugas();
		$data['pengawas'] = $model->where('NO_URUT', session()->get('NO_URUT'))->first();
		return view('auth/editpassword_pengawas',$data);
	}

}