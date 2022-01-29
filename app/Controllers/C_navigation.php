<?php

namespace App\Controllers;

class C_navigation extends BaseController
{
	public function index()
	{
		return view('guest/guest');
	}

    public function gHome()
    {
      
        return view('guest/guest');
        // dd($data);
    }
}
