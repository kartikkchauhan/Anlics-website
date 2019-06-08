<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminarticles extends CI_Model 
{

	public function liveArticle()
	{
		$query=$this->db
						->select('*')
						->from('article')
						->where('verification','1')
						->join('users', 'article.userId = users.userId')
						->order_by('articleId','DESC')
						->get();

			return $query->result();
		
	}

	public function articleRequest()
	{
		$query=$this->db
						->select('*')
						->from('article')
						->where('verification','0')
						->join('users', 'article.userId = users.userId')
						->order_by('articleId','DESC')
						->get();

			return $query->result();
		
	}

	public function allArticles()
	{
		$query=$this->db
						->select('*')
						->from('article')
						->join('users', 'article.userId = users.userId')
						->order_by('articleId','DESC')
						->get();

			return $query->result();
		
	}

	public function getDetails($articleId)
	{
		$query=$this->db
						->select('*')
						->from('article')
						->where('articleId',$articleId)
						->join('users', 'article.userId = users.userId')
						->get();

			return $query->result();
		
	}

	public function acceptIt($articleId)
	{
		$query=$this->db
						->set('verification','1')
						->where('articleId',$articleId)
						->update('article');

			if($query)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		
	}

	public function deleteIt($articleId)
	{
		$query=$this->db
						->where('articleId',$articleId)
						->delete('article');

			if($query)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		
	}

	public function adminDetails()
	{
		$adminId=$this->session->userdata('adminId');
		$query=$this->db
						->select('*')
						->from('admin')
						->where('adminId',$adminId)
						->get();

			return $query->result();
		
	}

	public function useractivity()
	{
		$query=$this->db
						->select('*')
						->from('users')
						->get();

			return $query->result();
		
	}
}