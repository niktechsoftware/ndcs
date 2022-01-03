<?php namespace App\Models;
use CodeIgniter\Model;
class LoginModel extends Model{
	
	protected $table = "login_table";
	protected $allowedFields = ['id','username','password','status','login_type','email','fsd'];
	
	
	
	
	
	
}
