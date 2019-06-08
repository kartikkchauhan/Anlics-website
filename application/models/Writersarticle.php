<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Writersarticle extends CI_Model 
{

	public function insertData($data,$title,$category,$subCategory,$file)
	{
		$date=date("d F Y h:i:sa");
		$writerId=$this->session->userdata('writerId');

		$info = array(
			'data' => $data,
			'writerId' =>$writerId,
			'date' =>$date,
			'title'=>$title,
			'categoryName' => $category,
			'subCategoryName' => $subCategory,
			'banner' => $file,
	  	);

		$status=$this->db->insert('writerspost',$info);
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function getArticle($writerId)
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('writerId',$writerId)
						->order_by('postId','DESC')
						->get();

			return $query->result();
		
	}

	public function getArticles()
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->join('contentwriter','writerspost.writerId = contentwriter.writerId')
						->order_by('postId','DESC')
						->get();

			return $query->result();
		
	}

	public function getThatArticle($writerId,$postId)
	{

		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('writerId', $writerId)
						->where('postId', $postId)
						->get();

			return $query->result();
		
	}

	public function updateData1($data,$title,$category,$subCategory,$file,$postId)
	{
		$date=date("d F Y h:i:sa");
		$writerId=$this->session->userdata('writerId');

		$info = array(
			'data' => $data,
			'writerId' =>$writerId,
			'date' =>$date,
			'title'=>$title,
			'categoryName' => $category,
			'subCategoryName' => $subCategory,
			'banner' => $file,
	  	);

		$status=$this->db->set($info)
						->where('postId',$postId)
						->where('writerId',$this->session->userdata('writerId'))
						->update('writerspost');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function updateData2($data,$title,$category,$subCategory,$postId)
	{
		$date=date("d F Y h:i:sa");
		$writerId=$this->session->userdata('writerId');

		$info = array(
			'data' => $data,
			'writerId' =>$writerId,
			'date' =>$date,
			'title'=>$title,
			'categoryName' => $category,
			'subCategoryName' => $subCategory,
	  	);

		$status=$this->db->set($info)
						->where('postId',$postId)
						->where('writerId',$this->session->userdata('writerId'))
						->update('writerspost');
		if($status)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}

	public function getCareer()
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('categoryName','CAREER')
						->join('contentwriter','writerspost.writerId = contentwriter.writerId')
						->limit(4)
						->order_by('date','DESC')
						->get();

			return $query->result();
		
	}

	public function getTechnologies()
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('categoryName','TECHNOLOGIES')
						->join('contentwriter','writerspost.writerId = contentwriter.writerId')
						->limit(4)
						->order_by('date','DESC')
						->get();

			return $query->result();
		
	}

	public function getGadgets()
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('categoryName','GADGETS')
						->join('contentwriter','writerspost.writerId = contentwriter.writerId')
						->limit(4)
						->order_by('date','DESC')
						->get();

			return $query->result();
		
	}

	public function getAuto()
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('categoryName','AUTOMOBILES')
						->join('contentwriter','writerspost.writerId = contentwriter.writerId')
						->limit(4)
						->order_by('date','DESC')
						->get();

			return $query->result();
		
	}

	public function getTour()
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('categoryName','TOUR & TRAVELS')
						->join('contentwriter','writerspost.writerId = contentwriter.writerId')
						->limit(4)
						->order_by('date','DESC')
						->get();

			return $query->result();
		
	}

	public function getEntertainment()
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('categoryName','ENTERTAINMENT')
						->join('contentwriter','writerspost.writerId = contentwriter.writerId')
						->limit(4)
						->order_by('date','DESC')
						->get();

			return $query->result();
		
	}

	public function getFoods()
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('categoryName','FOODS')
						->join('contentwriter','writerspost.writerId = contentwriter.writerId')
						->limit(4)
						->order_by('date','DESC')
						->get();

			return $query->result();
		
	}

	public function getSports()
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('categoryName','SPORTS')
						->join('contentwriter','writerspost.writerId = contentwriter.writerId')
						->limit(4)
						->order_by('date','DESC')
						->get();

			return $query->result();
		
	}

	public function getPhotos()
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('categoryName','PHOTOS')
						->join('contentwriter','writerspost.writerId = contentwriter.writerId')
						->limit(4)
						->order_by('date','DESC')
						->get();

			return $query->result();
		
	}

	public function getHealth()
	{
		$query=$this->db
						->select('*')
						->from('writerspost')
						->where('categoryName','HEALTH & FITNESS')
						->join('contentwriter','writerspost.writerId = contentwriter.writerId')
						->limit(4)
						->order_by('date','DESC')
						->get();

			return $query->result();
		
	}
}