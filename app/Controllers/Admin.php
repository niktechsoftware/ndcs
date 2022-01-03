<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
    	return view('welcome_message');
    }
	public function dashboard()
	{
	    return view('welcome_message');
	}
}
