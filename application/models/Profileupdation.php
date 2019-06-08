<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profileupdation extends CI_Model 
{

	public function nameUpdate($name,$userId)
	{
		$status=$this->db->set(['userName'=>$name])
							->where('userId',$userId)
				 			->update('users');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function updateVerification($userId)
	{
		$status=$this->db->set(['emailVerification'=>'1'])
							->where('userId',$userId)
				 			->update('users');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function emailUpdate($userId,$email)
	{
		$status=$this->db->set(['userEmail'=>$email])
							->where('userId',$userId)
				 			->update('users');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function phoneUpdate($newPhone,$userId)
	{
		$status=$this->db->set(['userPhone'=>$newPhone])
							->where('userId',$userId)
				 			->update('users');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function photoUpdate($userId,$img)
	{
		$status=$this->db->set(['userImg'=>$img])
							->where('userId',$userId)
				 			->update('users');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function passwordUpdate($oldPassword,$newPassword,$userId)
	{
		$query=$this->db->where(['userPassword'=>$oldPassword])
				 			->get('users');
		if($query->num_rows() === 1)
		{
			$status=$this->db->set(['userPassword'=>$newPassword])
							->where('userId',$userId)
				 			->update('users');
			if($status)
			{
				return TRUE;
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

}