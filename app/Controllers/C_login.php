<?php

namespace App\Controllers;

use App\Models\M_pencacah;
use App\Models\M_user;

class C_login extends BaseController
{
    protected $M_user;
	public function index()
	{
        helper(['form']);
        // echo view('auth/login');
		return view('auth/login');
	}

    public function auth()
    {
        $session = session();
        $model = new M_user();
        $username = $this->request->getVar('nik');
        $password = $this->request->getVar('password');
        $data = $model->where('nik', $username)->first();

        if($username==NULL){
            $session->setFlashdata('pesan', 'username anda salah');
            return redirect()->to('/login');
        }
        if($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_user'      => $data['id_user'],
                    'role'        => $data['role'],
                    'login'         => TRUE
                ];
                $session->set($ses_data);
                session()->setFlashdata('pesan', 'berhasil login');
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('pesan', 'password anda salah');
                return redirect()->to('/login');
            }
        } 
        else {
            $session->setFlashdata('pesan', 'username tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function logoutpencacah()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function profile(){
        $session = session();
        helper(['swal_helper']);
		helper(['form']);
		$model = new M_user();
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
					'id_user' => session()->get('id_user'),
				];
				if ($this->request->getPost('password') != '') {
					$newData['password'] = $this->request->getPost('password');
				}
				$model->save($newData);
				set_notifikasi_swal('success', 'Berhasil','Password Berhasil Diubah');
				return redirect()->to('/dashboard');
			}
		}
		$data['user'] = $model->where('id_user', session()->get('id_user'))->first();
        // $data['user'] = $this->$model->find(session()->get('id_user'));
        // dd($data);
		echo view('auth/editpassword', $data);
    }

    public function login_mitra(){

        return view('auth/login_mitra');
    }

    public function mitra_auth(){

        $session = session();
        $model = new M_pencacah();
        $username = $this->request->getVar('Kode_Mitra');
        $password = $this->request->getVar('password');
        $data = $model->where('Kode_Mitra', $username)->first();

        if($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'No_Urut'      => $data['No_Urut'],
                    'login' => TRUE
                ];
                $session->set($ses_data);
                session()->setFlashdata('pesan', 'berhasil login');
                return redirect()->to('/pencacah');
			    
            } else {
                $session->setFlashdata('pesan', 'password anda salah');
                return redirect()->to('/login_mitra');
            }
        } else {
            $session->setFlashdata('pesan', 'username tidak ditemukan');
            return redirect()->to('/login_mitra');
        }
        
    }

    public function coba(){
        $M_pencacah = model("M_pencacah");

        $data = [
            'pencacah' => $M_pencacah->where('No_Urut', session()->get('No_Urut'))->first()
        ];
        return view('pencacah/edit',$data);
    }
    
}
