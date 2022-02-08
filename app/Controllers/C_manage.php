<?php

namespace App\Controllers;

use App\Models\M_user;

class C_manage extends BaseController
{
    protected $M_user;
    public function __construct()
    {
        $this->M_user = new M_user();
    }

	public function index()
	{
        return view('admin/add_admin');
	}

    public function save()
	{
        $session = session();
        helper(['form']);
        $rules = [
            'nama_petugas'      => 'required|min_length[3]|max_length[64]',
            'nik'      => 'required|min_length[3]|max_length[64]',
            'password'      => 'required|min_length[3]|max_length[200]',
            'confpassword'  => 'matches[password]',
            'role'      => 'required|min_length[1]|max_length[2]',
        ];

        if ($this->validate($rules)) {
            $data = [
                'nama_petugas'  => $this->request->getVar('nama_petugas'),
                'nik'  => $this->request->getVar('nik'),
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                // 'firstname'  => $this->request->getVar('firstname'),
                // 'lastname'  => $this->request->getVar('lastname'),
                // 'email'     => $this->request->getVar('email'),
                'role'      => $this->request->getVar('role'),
            ];
            $this->M_user->save($data);
            return redirect()->to('/manage/account');
        } else {
            $validation = $this->validator;
            $session->setFlashdata('error', $validation->listErrors());
        }
    }

    //edit password pencacah oleh admin
    public function editPassword($NO_URUT){
        
        $M_petugas = model("M_petugas");
		$data = [
			'user' => $M_petugas->getUser($NO_URUT),
		];
        return view('admin/edit_password',$data);
    }
    public function manageaccount(){
		
		$data = [
            'admin' => $this->M_petugas->where('role !=', 0)->findAll(),
        ];

		return view('admin/manageaccount',$data);
	}

    //simpan hasil edit password pencacah
    public function updatePassword($NO_URUT){
        $M_petugas = model("M_petugas");
        $M_petugas->save([
            'NO_URUT' => $NO_URUT,
			'password'=>$this->request->getPost('password')
		]);
		return redirect()->to(base_url('/manage/account/pencacah'));
    }

    //delete akun pencacah
    public function deletePencacah($No_Urut){
            $M_pencacah = model("M_pencacah");
            $M_pencacah->delete($No_Urut);
            return redirect()->to('/manage/account/pencacah');
        }   
    
    //edit password penilai oleh admin
    public function editPasswordPenilai($NO_URUT){

        $M_petugas = model("M_petugas");
		$data = [
			'user' => $M_petugas->getPetugas($NO_URUT),
		];
        return view('admin/editpw_penilai',$data);
    }

    //delete akun penilai
    public function delete($NO_URUT)
    {
          $M_petugas = model("M_petugas");
          $M_petugas->delete($NO_URUT);
          return redirect()->to('/manage/account');
    } 

     //simpan hasil edit password penilai
     public function updatePasswordPenilai($NO_URUT){
        $M_petugas = model("M_petugas");
        $M_petugas->save([
            'NO_URUT' => $NO_URUT,
			'password'=>$this->request->getPost('password')
		]);
		return redirect()->to(base_url('/manage/account'));
    }
}
