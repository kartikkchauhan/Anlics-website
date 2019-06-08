<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articleupdate extends CI_Model 
{
	public function updateArticle1($articleId,$title,$description,$userId)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle2($articleId,$title,$description,$userId,$img1)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image1' =>$img1,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle3($articleId,$title,$description,$userId,$img2)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image2' =>$img2,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle4($articleId,$title,$description,$userId,$img3)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image3' =>$img3,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle5($articleId,$title,$description,$userId,$img4)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image4' =>$img4,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle6($articleId,$title,$description,$userId,$img1,$img2)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image1' =>$img1,
			'image2' =>$img2,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle7($articleId,$title,$description,$userId,$img1,$img3)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image1' =>$img1,
			'image3' =>$img3,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle8($articleId,$title,$description,$userId,$img1,$img4)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image1' =>$img1,
			'image4' =>$img4,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle9($articleId,$title,$description,$userId,$img1,$img2,$img3)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image1' =>$img1,
			'image2' =>$img2,
			'image3' =>$img3,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle10($articleId,$title,$description,$userId,$img1,$img2,$img4)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image1' =>$img1,
			'image2' =>$img2,
			'image4' =>$img4,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle11($articleId,$title,$description,$userId,$img2,$img3)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image2' =>$img2,
			'image3' =>$img3,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle12($articleId,$title,$description,$userId,$img2,$img4)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image2' =>$img2,
			'image4' =>$img4,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle13($articleId,$title,$description,$userId,$img2,$img3,$img4)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image2' =>$img2,
			'image3' =>$img3,
			'image4' =>$img4,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle14($articleId,$title,$description,$userId,$img1,$img2,$img3,$img4)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'image1' =>$img1,
			'image2' =>$img2,
			'image3' =>$img3,
			'image4' =>$img4,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function updateArticle15($articleId,$title,$description,$userId,$videoName)
	{
		$date="Updated ". date("d F Y");
		$time="Updated ". date("h:i:sa");

		$info = array(
			'title' => $title,
			'description' =>$description,
			'video' =>$videoName,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->set($info)
						 ->where('articleId',$articleId)
						 ->where('userId',$userId)
			 			 ->update('article');
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
