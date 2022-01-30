<?php

namespace App\Controllers;

use App\Models\M_user;

class C_login extends BaseController
{
    protected $M_user;
	public function index()
	{
        helper(['form']);
        echo view('auth/login');
		// return view('auth/login');
	}

    public function auth()
    {
        $session = session();
        $model = new M_user();
        $username = $this->request->getVar('nik');
        $password = $this->request->getVar('password');
        $data = $model->where('nik', $username)->first();
        if($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_user'      => $data['id_user'],
                    'role'        => $data['role'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('wrongPassword', 'wrongPassword');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('usernameNotFound', 'usernameNotFound');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    public function logoutpencacah()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login_mitra');
    }

    public function profile(){
        
		helper(['form']);
		$model = new M_user();
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
					'id_user' => session()->get('id_user'),
				];
				if ($this->request->getPost('password') != '') {
					$newData['password'] = $this->request->getPost('password');
				}
				$model->save($newData);
				session()->setFlashdata('success', 'Data berhasil diubah');
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
        $M_pencacah = model("M_pencacah");

        $username = $this->request->getVar('Kode_Mitra');
        $password = $this->request->getVar('password');
        $data = $M_pencacah->where('Kode_Mitra', $username)->first();
        if($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'No_Urut' => $data['No_Urut']
                ];
                $session->set($ses_data);
                return view('pencacah/home',[
                    'pencacah' => $M_pencacah->getUser($ses_data),
                ]);
            } else {
                $session->setFlashdata('wrongPassword', 'wrongPassword');
                return redirect()->to('/login_mitra');
            }
        } else {
            $session->setFlashdata('usernameNotFound', 'usernameNotFound');
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
