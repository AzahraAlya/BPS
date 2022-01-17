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
        helper(['form']);
		$data = [
            'admin' => $this->M_user->where('role', 2)->findAll(),
        ];

        return view('admin/manageaccount', $data);
	}


}
