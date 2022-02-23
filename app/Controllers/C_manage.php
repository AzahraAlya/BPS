<?php

namespace App\Controllers;

use App\Models\M_petugas;
use App\Models\M_user;

class C_manage extends BaseController
{
    protected $M_user;
    public function __construct()
    {
       
        $this->M_petugas = new M_petugas();
    }

	public function index()
	{
        $model = model("M_petugas");
		$id_petugas = $model->id_KodePetugas();
	
		$data = [
			'id_petugas' => $id_petugas,
		];
        return view('admin/add_admin', $data);
	}

    public function user()
	{
        $model = model("M_petugas");
		$id_petugas = $model->id_KodePetugas();
	
		$data = [
			'id_petugas' => $id_petugas,
		];
        return view('admin/add_user', $data);
	}

    public function save()
	{
        helper(['swal_helper']);
        $session = session();
        helper(['form']);
        $rules = [
            'NAMA'      => 'required|min_length[3]|max_length[64]',
            'KODE_PETUGAS'      => 'required|min_length[3]|max_length[64]',
            'password'      => 'required|min_length[3]|max_length[200]',
            'password_confirm'  => 'matches[password]',
            'role'      => 'required|min_length[1]|max_length[2]',
        ];

        if ($this->validate($rules)) {
            $data = [
                'NAMA'  => $this->request->getVar('NAMA'),
                'KODE_PETUGAS'  => $this->request->getVar('KODE_PETUGAS'),
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'password_confirm'  => $this->request->getVar('password_confirm'),
                'role'      => $this->request->getVar('role'),
            ];
            $this->M_petugas->insert($data);
            set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
            return redirect()->to('/manage/account');
        } else {
            $validation = $this->validator;
            $session->setFlashdata('error', $validation->listErrors());
        }
    }

    public function saveuser()
	{
        helper(['swal_helper']);
        $session = session();
        helper(['form']);
        $rules = [
            'NAMA'      => 'required|min_length[3]|max_length[64]',
            'KODE_PETUGAS'      => 'required|min_length[3]|max_length[64]',
            'password'      => 'required|min_length[3]|max_length[200]',
            'password_confirm'  => 'matches[password]',
        ];

        if ($this->validate($rules)) {
            $data = [
                'NAMA'  => $this->request->getVar('NAMA'),
                'KODE_PETUGAS'  => $this->request->getVar('KODE_PETUGAS'),
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'password_confirm'  => $this->request->getVar('password_confirm'),
                'role'      => 0,
            ];
            $this->M_petugas->insert($data);
            set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
            return redirect()->to('/manage/account/pencacah');
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
    // public function manageaccount(){
		
	// 	$data = [
    //         'admin' => $this->M_petugas->where('role !=', 3)->findAll(),
    //     ];

	// 	return view('admin/manageaccount',$data);
	// }

    //simpan hasil edit password pencacah
    public function updatePassword($NO_URUT){
        helper(['swal_helper']);
        $M_petugas = model("M_petugas");
        $rules = [
            'password'      => 'required|min_length[3]|max_length[200]',
            'password_confirm'  => 'matches[password]',
        ];
        if ($this->validate($rules)) {
            $data = [
                'NO_URUT' => $NO_URUT,
                'password'  =>$this->request->getPost('password'),
                'password_confirm'      => $this->request->getVar('password_confirm'),
            ];
            $this->M_petugas->save($data);
            set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
		    return redirect()->to(base_url('/manage/account/pencacah'));
        } else {
            return view('admin/errorpage');
        }
		
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
        helper(['swal_helper']);
        $rules = [
            'password'      => 'required|min_length[3]|max_length[200]',
            'password_confirm'  => 'matches[password]',
        ];
        if ($this->validate($rules)) {
            $data = [
                'NO_URUT' => $NO_URUT,
                'password'=>$this->request->getPost('password'),
                'password_confirm'      => $this->request->getVar('password_confirm'),
            ];
            $this->M_petugas->save($data);
            set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
		    return redirect()->to(base_url('/manage/account'));
        } else {
            return view('admin/errorpage');
        }
        
    }

    public function editNamaPenilai($NO_URUT){
        
        $M_petugas = model("M_petugas");
		$data = [
			'penilai' => $M_petugas->getPetugas($NO_URUT),
		];
        return view('admin/editusername',$data);
        
    }

    public function updateNamaPenilai($NO_URUT){
        helper(['swal_helper']);
        $M_user = model("M_petugas");
		$M_user->save([
			'NO_URUT' => $NO_URUT,
            'NAMA' => $this->request->getVar('NAMA'),
            
		]);
        set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
		return redirect()->to(base_url('/manage/account'));
    }

    public function editNamaUser($NO_URUT){
        
        $M_petugas = model("M_petugas");
		$data = [
			'penilai' => $M_petugas->getPetugas($NO_URUT),
		];
        return view('admin/editusernameuser',$data);
        
    }

    public function updateNamaUser($NO_URUT){
        helper(['swal_helper']);
        $M_user = model("M_petugas");
		$M_user->save([
			'NO_URUT' => $NO_URUT,
            'NAMA' => $this->request->getVar('NAMA'),
            
		]);
        set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
		return redirect()->to(base_url('/manage/account/pencacah'));
    }

}
