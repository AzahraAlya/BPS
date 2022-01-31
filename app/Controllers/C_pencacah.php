<?php

namespace App\Controllers;
use App\Models\M_user;
use App\Models\M_pencacah;
use App\Models\M_kegiatan;


class C_Pencacah extends BaseController{
    public function __construct()
    {
        
        $this->user = new M_user();
    }
    public function index()
    {
        $session = session();
		$M_pencacah = model("M_pencacah");
	
       
        $jumlahUser = $this->user->CountAllResults();
        if ($session->get('role') == 0) {
            return view('admin/template',[
				'pencacah' => $M_pencacah->findAll(),
				'validation' => \Config\Services::validation(),
                'jumlahUser'=> $jumlahUser,
                'jumlahAdmin' => $this->user->like('role','0')->countAllResults(),
                'jumlahNonAdmin'=>$this->user->like('role','1')->countAllResults(),
                'jumlahpenilai'=>$this->user->like('role','2')->countAllResults(),
            ]);
            
        }else if($session->get('role') == 2){
            return view('pengawas/daftar_pencacah',[
                'pencacah' => $M_pencacah->findAll(),
				'validation' => \Config\Services::validation(),
                'jumlahUser'=> $jumlahUser,
                'jumlahAdmin' => $this->user->like('role','0')->countAllResults(),
                'jumlahNonAdmin'=>$this->user->like('role','1')->countAllResults(),
                'jumlahpenilai'=>$this->user->like('role','2')->countAllResults(),
            ]);

        
        } else {
            return view('pencacah/home');
               
                // 'cart'=> $this->cartdb->where('user_id', session()->get('user_id'))->findAll(),
       
        }
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

    public function detail($No_Urut)
	{
		$M_pencacah = model("M_pencacah");
		$data = [
			'validation' => \Config\Services::validation(),
			'pencacah' => $M_pencacah->getPencacah($No_Urut),
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
					'No_Urut' => session()->get('No_Urut'),
				];
				if ($this->request->getPost('password') != '') {
					$newData['password'] = $this->request->getPost('password');
				}
				//Edit sessions
				$model->save($newData);
				session()->setFlashdata('success', 'Data berhasil diubah');
				return redirect()->to('/login/mitra');
			}
		}
		$data['pencacah'] = $model->where('No_Urut', session()->get('No_Urut'))->first();
		echo view('pencacah/setting', $data);
    }

	public function editprofile(){
		$model = model("M_pencacah");
		$data['pencacah'] = $model->where('No_Urut', session()->get('No_Urut'))->first();
		return view('pencacah/editprofile', $data);
	}
}