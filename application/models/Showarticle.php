<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showarticle extends CI_Model 
{

	public function getArticle()
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

}