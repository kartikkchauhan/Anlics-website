<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Model 
{

	public function postComment($comment,$articleId)
	{
		$date=date("d F Y");
		$time=date("h:i:sa");
		$userId=$this->session->userdata('userId');

		$info = array(
			'userId' => $userId,
			'articleId' =>$articleId,
			'comment' => $comment,
			'commentDate' => $date,
			'commentTime' => $time,
	  	);

		$status=$this->db->insert('comments',$info);
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function postComments($comment,$articleId)
	{
		$date=date("d F Y");
		$time=date("h:i:sa");
		$userId=$this->session->userdata('userId');

		$info = array(
			'userId' => $userId,
			'articleId' =>$articleId,
			'comment' => $comment,
			'commentDate' => $date,
			'commentTime' => $time,
	  	);

		$status=$this->db->insert('writer_comments',$info);
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