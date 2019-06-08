<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Writer extends CI_Controller {

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('writer/dashboard');
	}
	public function postArticle()
	{
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required|is_unique[writerspost.title]');
		
		if($this->form_validation->run() === TRUE)
		{
		
		
			$data=$this->input->post('my_article');
			$title=$this->input->post('title');
			$category=$this->input->post('category');
			$subCategory=$this->input->post('subCategory');
	
			$config=[
				'upload_path' => './uploads/articles/',
				'allowed_types' => 'jpeg|png|jpg|gif',
				'max_filename' => 50,
			];
			$this->load->library('upload', $config);
	
			if ($this->upload->do_upload('banner')) 
			{
				$file=$this->upload->data('file_name');
	
				$this->load->model('writersarticle');
	
				$status=$this->writersarticle->insertData($data,$title,$category,$subCategory,$file);
	
				if($status)
				{
					$responce="<p style='color: Green; text-align:center'><strong>Your Story is published.</strong></p>";
					$this->load->helper('form');
					$this->load->view('writer/dashboard',compact('responce'));
				}
				else
				{
					$responce="<p style='color: red; text-align:center'><strong>Error <br> Check and try again</strong></p>";
					$this->load->helper('form');
					$this->load->view('writer/dashboard',compact('responce'));
				}
			}
			else
			{
				$responce="<p style='color: red; text-align:center'>Unable to upload your Banner Image.<br><strong>Check and try again</strong></p>";
				$this->load->helper('form');
				$this->load->view('writer/dashboard',compact('responce'));
			}
			
		}
		else
		{
			$responce="<p style='color: red; text-align:center'>Title name Already exists.<br><strong>Check and try again</strong></p>";
				$this->load->helper('form');
				$this->load->view('writer/dashboard',compact('responce'));
		}
	}

	public function editPage()
	{
		$this->load->helper('form');
		$this->load->model('writersarticle');
		$writerId=$this->session->userdata('writerId');
		$data=$this->writersarticle->getArticle($writerId);

		$this->load->view('writer/editPage',['article'=>$data]);
	}

	public function pageEditor($postId)
	{
		$this->load->helper('form');
		$this->load->model('writersarticle');
		$writerId=$this->session->userdata('writerId');
		$data=$this->writersarticle->getThatArticle($writerId,$postId);

		$this->load->view('writer/editor',['article'=>$data]);
	}

	public function updateArticle()
	{
	


		$data=$this->input->post('my_article');
		$title=$this->input->post('title');
		$category=$this->input->post('category');
		$subCategory=$this->input->post('subCategory');
		$postId=$this->input->post('postId');
		$writerId=$this->session->userdata('writerId');

		$config=[
			'upload_path' => './uploads/articles/',
			'allowed_types' => 'jpeg|png|jpg|gif',
			'max_filename' => 50,
		];
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('banner')) 
		{
			$file=$this->upload->data('file_name');

			$this->load->model('writersarticle');

			$status=$this->writersarticle->updateData1($data,$title,$category,$subCategory,$file,$postId);

			if($status)
			{
				$responce="<p style='color: Green; text-align:center'><strong>Your Story is Updated.</strong></p>";
				$this->load->helper('form');
				$this->load->model('writersarticle');
				$data=$this->writersarticle->getArticle($writerId);

				$this->load->view('writer/editPage',['article'=>$data,'responce'=>$responce]);
			}
			else
			{
				$responce="<p style='color: red; text-align:center'><strong>Error <br> Check and try again</strong></p>";
				$this->load->helper('form');
				$this->load->model('writersarticle');
				$data=$this->writersarticle->getArticle($writerId);

				$this->load->view('writer/editPage',['article'=>$data,'responce'=>$responce]);
			}
		}
		else
		{
			$this->load->model('writersarticle');

			$status=$this->writersarticle->updateData2($data,$title,$category,$subCategory,$postId);

			if($status)
			{
				$responce="<p style='color: Green; text-align:center'><strong>Your Story is Updated.</strong></p>";
				$this->load->helper('form');
				$this->load->model('writersarticle');
				$data=$this->writersarticle->getArticle($writerId);

				$this->load->view('writer/editPage',['article'=>$data,'responce'=>$responce]);
			}
			else
			{
				$responce="<p style='color: red; text-align:center'><strong>Error <br> Check and try again</strong></p>";
				$this->load->helper('form');
				$this->load->model('writersarticle');
				$data=$this->writersarticle->getArticle($writerId);

				$this->load->view('writer/editPage',['article'=>$data,'responce'=>$responce]);
			}
		}
		
		
		
		
	}

	public function pageList()
	{
		$this->load->helper('form');
		$this->load->model('writersarticle');
		$writerId=$this->session->userdata('writerId');
		$data=$this->writersarticle->getArticle($writerId);

		$this->load->view('writer/myPages',['article'=>$data]);
	}

	public function pageViewer($postId)
	{
		$this->load->model('writersarticle');
		$writerId=$this->session->userdata('writerId');
		$data=$this->writersarticle->getThatArticle($writerId,$postId);

		$this->load->view('writer/pageView',['article'=>$data]);
	}

	public function logout()
	{
		$this->session->unset_userdata('writerId');

		return redirect(base_url('writer/'));
	}


	public function __construct()
	{
		parent::__construct();
		if( ! $this->session->userdata('writerId'))
		return redirect(base_url('writerlogin/'));
	}
}