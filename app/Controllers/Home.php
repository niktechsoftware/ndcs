<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
    	$data['validation'] =0;
        return view('beforelogin/login',$data);
    }
	public function dashboard()
	{
	    return view('welcome_message');
	}
}
