<?php

namespace App\Controllers;
use App\Models\LoginModel;
use CodeIgniter\Controller;

class Login extends BaseController
{
    public function login_check()
    {
   helper('form','url');
   $validation  = \Config\Services::validation();
   $check = $this->validate([
   "user-name"=>'required',
   "password"=>'required'
   ]);
   if(!$check){
   	return view('beforelogin/login',['validation'=>$this->validator]);
   }else{
	   	$modelobj= new LoginModel();
	   	$modelobj->where("username",$this->request->getVar("user-name"));
	  	$modelobj->where("password",$this->request->getVar("password"));
	    $result =$modelobj->get();
	   //print_r($result->getResult());
	 
   		if($result->getResult()){
   			$session = session();
   			$session->set("username",$result->getRow()->username);
   			$session->set("fsd",$result->getRow()->fsd);
   			$session->set("id",$result->getRow()->id);
   			$session->set("email",$result->getRow()->id);
   			$session->set("login_type",$result->getRow()->login_type);
   			if($result->getRow()->login_type == 1){
   				return redirect()->to('Admin');
   			}
   		}else{
   			return view('beforelogin/login',['validation'=>$this->validator]);
   		}
    	//print_r($this->request->getVar());
        //return view('beforelogin/login');
   }
    }	
    
	
}
