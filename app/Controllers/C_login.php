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
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_user'      => $data['id_user'],
                    'username'     => $data['username'],
                    'firstname'     => $data['firstname'],
                    'lastname'     => $data['lastname'],
                    'email'        => $data['email'],
                    'role'        => $data['role'],
                    'logged_in'    => TRUE
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

    public function profile(){
        
		helper(['form']);
		$model = new M_user();
		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'firstname' => 'required|min_length[3]|max_length[20]',
				'lastname' => 'required|min_length[3]|max_length[20]',
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
					'firstname' => $this->request->getPost('firstname'),
					'lastname' => $this->request->getPost('lastname'),
					'email' => $this->request->getPost('email'),
				];
				if ($this->request->getPost('password') != '') {
					$newData['password'] = $this->request->getPost('password');
				}
				//Edit sessions
				session()->set('firstname', $this->request->getPost('firstname'));
				$model->save($newData);
				session()->setFlashdata('success', 'Data berhasil diubah');
				return redirect()->to('/pencacah');
			}
		}
		$data['user'] = $model->where('id_user', session()->get('id_user'))->first();
        // $data['user'] = $this->$model->find(session()->get('id_user'));
        // dd($data);
		echo view('auth/editpassword', $data);
    }
}
