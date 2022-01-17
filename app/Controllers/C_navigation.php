<?php

namespace App\Controllers;

class C_navigation extends BaseController
{
	public function index()
	{
		return view('guest/v_guest');
	}

    public function gHome()
    {
      
        return view('guest/v_guest');
        // dd($data);
    }
}
