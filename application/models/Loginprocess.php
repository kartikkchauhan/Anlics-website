<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginprocess extends CI_Model 
{

	public function checkUser($email,$password)
	{
		$status=$this->db->where(['userEmail'=>$email,'userPassword'=>$password])
				 			->get('users');
		if($status->num_rows() === 1)
		{
			$date=date("d F Y h:i:sa");
			$ip=$this->input->ip_address();

			$query=$this->db
						->set('loginTime', $date)
						->set('ipAddress', $ip)
						->where('userId',$status->row()->userId)
						->update('users');

			if($query)
			{
				return $status->row()->userId;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}
		
	}

	public function checkWriter($userName,$password)
	{
		$status=$this->db->where(['userName'=>$userName,'password'=>$password])
				 			->get('contentwriter');
		if($status->num_rows() === 1)
		{
			return $status->row()->writerId;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function checkAdmin($userName,$password)
	{
		$status=$this->db->where(['userName'=>$userName,'password'=>$password])
				 			->get('admin');
		if($status->num_rows() === 1)
		{
			return $status->row()->adminId;
		}
		else
		{
			return FALSE;
		}
		
	}


}