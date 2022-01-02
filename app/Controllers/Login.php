<?php

namespace App\Controllers;
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
   	$query = $this->loginModel->validate();
	if($query){  //if user validation return true after validation
		//	print_r($query['login_type']);exit;
			if($query['login_type'] == "admin"):
				$this->session->set_userdata($query);
				//echo $query['login_type'];
				redirect("index.php/login/index");
			elseif($query['login_type'] == "student"):
				//echo $query['login_type'];
				$this->session->set_userdata($query);
			redirect("index.php/singleStudentControllers");
			elseif(($query['login_type'] == 3)||($query['login_type'] == 2)):
				//echo $query['login_type'];
				//echo "t";
				$this->session->set_userdata($query);
				redirect("index.php/singleTeacherControllers");
			elseif($query['login_type'] == 1):
			//print_r($query['login_type']);exit;
			$this->session->set_userdata($query);
			redirect("index.php/login/index");
			else:
				redirect("index.php/login/index");
			endif;
		}
		else{ // if user not validate the credential ....
			redirect("index.php/homeController/index/authFalse");
		}
	}
    	//print_r($this->request->getVar());
        //return view('beforelogin/login');
   }
		
    
	
}
