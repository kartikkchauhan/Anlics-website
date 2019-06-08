<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userarticles extends CI_Model 
{

	public function getUserArticles()
	{
		$userId=$this->session->userdata('userId');

		$query=$this->db
						->select('*')
						->from('article')
						->where('userId',$userId)
						->order_by('articleId','DESC')
						->get();

		return $query->result();
		
	}


	public function getArticleDetail($articleId)
	{
		$userId=$this->session->userdata('userId');

		$query=$this->db
						->select('*')
						->from('article')
						->where('userId',$userId)
						->where('articleId',$articleId)
						->get();

		return $query->result();
		
	}



}