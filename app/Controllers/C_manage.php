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
            'firstname'      => 'required|min_length[3]|max_length[64]',
            'lastname'      => 'required|min_length[3]|max_length[64]',
            'username'      => 'required|min_length[3]|max_length[64]|is_unique[user.username]',
            'email'         => 'required|min_length[3]|max_length[64]|valid_email|is_unique[user.email]',
            'password'      => 'required|min_length[3]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $data = [
                'username'  => $this->request->getVar('username'),
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'firstname'  => $this->request->getVar('firstname'),
                'lastname'  => $this->request->getVar('lastname'),
                'email'     => $this->request->getVar('email'),
                'role'      => 2
            ];
            $this->M_user->save($data);
            return redirect()->to('/manage/account');
        } else {
            $validation = $this->validator;
            $session->setFlashdata('error', $validation->listErrors());
        }
    }

}
