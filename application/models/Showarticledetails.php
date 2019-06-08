<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showarticledetails extends CI_Model 
{

	public function getDetails($articleId)
	{
		$query=$this->db
						->select('*')
						->from('article')
						->where('articleId',$articleId)
						->where('verification','1')
						->join('users', 'article.userId = users.userId')
						->order_by('articleId','DESC')
						->get();

			return $query->result();
		
	}

	public function getDetails2($articleId)
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('postId',$articleId)
						->join('contentwriter', 'writerspost.writerId = contentwriter.writerId')
						->get();

			return $query->result();
		
	}



	public function getComment($articleId)
	{
		$query=$this->db
						->select('*')
						->from('comments')
						->where('articleId',$articleId)
						->join('users', 'comments.userId = users.userId')
						->order_by('articleId','DESC')
						->get();

			return $query->result();
		
	}

	public function getComments($articleId)
	{
		$query=$this->db
						->select('*')
						->from('writer_comments')
						->where('articleId',$articleId)
						->join('users', 'writer_comments.userId = users.userId')
						->order_by('commentId','DESC')
						->get();

			return $query->result();
		
	}

}