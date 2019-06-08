<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postarticle extends CI_Model 
{

	public function uploadIt1($title,$description,$type,$img1)
	{
		$date=date("d F Y");
		$time=date("h:i:sa");
		$userId=$this->session->userdata('userId');

		$info = array(
			'title' => $title,
			'description' =>$description, 
			'userId' => $userId,
			'type' => $type,
			'image1' => $img1,
			'image2' => '0',
			'image3' => '0',
			'image4' => '0',
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->insert('article',$info);
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function uploadIt2($title,$description,$type,$img1,$img2)
	{
		$date=date("d F Y");
		$time=date("h:i:sa");
		$userId=$this->session->userdata('userId');
		
		$info = array(
			'title' => $title,
			'description' =>$description, 
			'userId' => $userId,
			'type' => $type,
			'image1' => $img1,
			'image2' => $img2,
			'image3' => '0',
			'image4' => '0',
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->insert('article',$info);
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function uploadIt3($title,$description,$type,$img1,$img3)
	{
		$date=date("d F Y");
		$time=date("h:i:sa");
		$userId=$this->session->userdata('userId');

		$info = array(
			'title' => $title,
			'description' =>$description, 
			'userId' => $userId,
			'type' => $type,
			'image1' => $img1,
			'image2' => '0',
			'image3' => $img3,
			'image4' => '0',
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->insert('article',$info);
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function uploadIt4($title,$description,$type,$img1,$img4)
	{
		$date=date("d F Y");
		$time=date("h:i:sa");
		$userId=$this->session->userdata('userId');

		$info = array(
			'title' => $title,
			'description' =>$description, 
			'userId' => $userId,
			'type' => $type,
			'image1' => $img1,
			'image2' => '0',
			'image3' => '0',
			'image4' => $img4,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->insert('article',$info);
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function uploadIt5($title,$description,$type,$img1,$img2,$img3)
	{
		$date=date("d F Y");
		$time=date("h:i:sa");
		$userId=$this->session->userdata('userId');

		$info = array(
			'title' => $title,
			'description' =>$description, 
			'userId' => $userId,
			'type' => $type,
			'image1' => $img1,
			'image2' => $img2,
			'image3' => $img3,
			'image4' => '0',
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->insert('article',$info);
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function uploadIt6($title,$description,$type,$img1,$img3,$img4)
	{
		$date=date("d F Y");
		$time=date("h:i:sa");
		$userId=$this->session->userdata('userId');

		$info = array(
			'title' => $title,
			'description' =>$description, 
			'userId' => $userId,
			'type' => $type,
			'image1' => $img1,
			'image2' => '0',
			'image3' => $img3,
			'image4' => $img4,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->insert('article',$info);
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function uploadIt7($title,$description,$type,$img1,$img2,$img4)
	{
		$date=date("d F Y");
		$time=date("h:i:sa");
		$userId=$this->session->userdata('userId');

		$info = array(
			'title' => $title,
			'description' =>$description, 
			'userId' => $userId,
			'type' => $type,
			'image1' => $img1,
			'image2' => $img2,
			'image3' => '0',
			'image4' => $img4,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->insert('article',$info);
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function uploadIt8($title,$description,$type,$img1,$img2,$img3,$img4)
	{
		$date=date("d F Y");
		$time=date("h:i:sa");
		$userId=$this->session->userdata('userId');

		$info = array(
			'title' => $title,
			'description' =>$description, 
			'userId' => $userId,
			'type' => $type,
			'image1' => $img1,
			'image2' => $img2,
			'image3' => $img3,
			'image4' => $img4,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->insert('article',$info);
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function uploadVideo($title,$description,$type,$videoName)
	{
		$date=date("d F Y");
		$time=date("h:i:sa");
		$userId=$this->session->userdata('userId');

		$info = array(
			'title' => $title,
			'description' =>$description, 
			'userId' => $userId,
			'type' => $type,
			'video'=> $videoName,
			'date' => $date,
			'time' => $time,
	  	);

		$status=$this->db->insert('article',$info);
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