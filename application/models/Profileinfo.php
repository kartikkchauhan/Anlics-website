<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profileinfo extends CI_Model 
{

	public function getProfileData($userId)
	{
		$query=$this->db
						->select('*')
						->from('users')
						->where('userId', $userId)
						->get();

			return $query->result();
		
	}

}