<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registerprocess extends CI_Model 
{

	public function registerUser($fullName,$phone,$email,$password)
	{
		$date=date("Y-m-d");
		$time=date("h:i:sa");

		$info = array(
			'userName' => $fullName,
			'userPhone' =>$phone, 
			'userEmail' => $email,
			'userPassword' => $password,
			'registrationDate' => $date,
			'registrationTime' => $time,
	  	);

		$status=$this->db->insert('users',$info);
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function registerWriter($name,$email,$password)
	{
		
		$info = array(
			'userName' => $name,
			'email' => $email,
			'password' => $password,
	  	);

		$status=$this->db->insert('contentwriter',$info);
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

}