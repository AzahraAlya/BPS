<?php

namespace App\Controllers;
use App\Models\M_petugas;


class C_Pencacah extends BaseController{
    public function __construct()
    {
        
        $this->petugas = new M_petugas();
    }
    public function index()
    {
        $session = session();
		// $M_pencacah = model("M_pencacah");
		$M_petugas = model("M_petugas");
		// $M_user = model("M_user");
		$M_nilai = model("M_nilai");
		// $M_pegawai = model("M_pegawai");
		// $M_kecamatan = model("M_kecamatan");
       
        // $jumlahUser = $this->user->CountAllResults();
        if ($session->get('role') == 3) { //role 3 = admin
            return view('admin/dashboard',[
				// 'pencacah' => $M_pencacah->findAll(),
				'nilai' => $M_nilai->findAll(),
				// 'pegawai' => $M_user->findAll(),
				// 'nilaipgw' => $M_pegawai->findAll(),
				'validation' => \Config\Services::validation(),
                // 'jumlahUser'=> $jumlahUser,
                'jumlahAdmin' => $M_petugas->like('role','0')->findAll(),
                'jumlahNonAdmin'=>$M_petugas->like('role','1' )->findAll(),
                'jumlahpenilai'=>$M_petugas->like('role','2')->findAll(),
            ]);
            
        }else if($session->get('role') == 2){
            return view('pengawas/dashboard',[ // role 2 = pengawas
                'pencacah'=> $M_petugas->where('NO_URUT', session()->get('NO_URUT'))->first(),
				'validation' => \Config\Services::validation(),
            ]);

        
        }else if ($session->get('role') == 0) {
			return view('pencacah/home',[
				'pencacah'=> $M_petugas->where('NO_URUT', session()->get('NO_URUT'))->first(),
			]
		); // role 0 = mitra
		} else {
            return view('pencacah/nonpegawai',[ //role 1 = non pns
				'pegawai'=> $M_petugas->where('NO_URUT', session()->get('NO_URUT'))->first(),
				
			]
		);
               
                // 'cart'=> $this->cartdb->where('user_id', session()->get('user_id'))->findAll(),
       
        }
    }

	public function pencacah(){
		$model = model("M_pencacah");
		$data['pencacah'] = $model->where('No_Urut', session()->get('No_Urut'))->first();
		return view('pencacah/editprofile', $data);
	}

    public function homeData($kode)
	{
		$M_pencacah = model("M_pencacah");
		$data = [
			'validation' => \Config\Services::validation(),
			'pencacah' => $M_pencacah->getPencacahdata($kode),
			//'kode' => $this->request->getVar('Kode_Mitra'),
		];
		return view('pencacah/edit', $data);


		// 	// return view('pencacah/data');
	}

	public function update($NO_URUT)
	{
		helper(['swal_helper']);
		$M_pencacah = model("M_petugas");
		$M_pencacah->save([
			'NO_URUT' => $NO_URUT,
			'KODE_MITRA' => $this->request->getVar('Kode_Mitra'),
			'noKECAMATAN'=> $this->request->getVar('noKECAMATAN'),
			'NOMOR_PESERTA' => $this->request->getVar('NOMOR_PESERTA'),
			'NIK_NIP'=> $this->request->getVar('NIK_NIP'),
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
		]);

		set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
		return redirect()->to(base_url('/dashboard'));
	}


    public function detail($NO_URUT)
	{
		$M_petugas = model("M_petugas");
		$data = [
			'validation' => \Config\Services::validation(),
			'pencacah' => $M_petugas->getPencacah($NO_URUT),
		];
		return view('pengawas/pencacahdetail', $data);
	}

    public function profile(){
        
		helper(['form']);
		//$model = new M_pencacah();
        $model = model("M_pencacah");
		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				
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
				session()->setFlashdata('success', 'Password berhasil diubah');
				return redirect()->to('/pencacah/editprofile');
			}
		}
		$data['pencacah'] = $model->where('No_Urut', session()->get('No_Urut'))->first();
		echo view('pencacah/setting', $data);
    }

	public function editprofile(){
		$model = model("M_petugas");
		$data['pencacah'] = $model->where('NO_URUT', session()->get('NO_URUT'))->first();
		return view('pencacah/editprofile', $data);
	}


	public function profilpegawai(){
		$model = model("M_user");
		$data['penilai'] = $model->where('id_user', session()->get('id_user'))->first();
		return view('pencacah/profile_pegawai', $data);
	}

	public function saveprofilepegawai($id_user){
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
		return redirect()->to(base_url('/profilpegawai'));

	}
}