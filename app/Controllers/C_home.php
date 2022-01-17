<?php

namespace App\Controllers;

use App\Models\M_user;
use App\Models\M_pencacah;

class C_home extends BaseController
{
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
            return view('admin/ad_pencacah',[
				'pencacah' => $M_pencacah->findAll(),
				'validation' => \Config\Services::validation(),
                'jumlahUser'=> $jumlahUser,
                'jumlahAdmin' => $this->user->like('role','0')->countAllResults(),
                'jumlahNonAdmin'=>$this->user->like('role','1')->countAllResults(),
            ]);
        } else {
            return view('pencacah/home');
               
                // 'cart'=> $this->cartdb->where('user_id', session()->get('user_id'))->findAll(),
       
        }
    }
    
	
}
