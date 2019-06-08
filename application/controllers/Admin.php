<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/admin');
	}


	public function admin_dashboard()
	{
		redirect(base_url('admin/'));
	}

	public function manage_article()
	{
		$this->load->view('admin/managearticle');
	}

	public function useractivity()
	{
		$this->load->model('adminarticles');
		$data=$this->adminarticles->useractivity();
		$this->load->view('admin/useractivity',['data'=>$data]);
	}

	public function manage_admin()
	{
		$this->load->view('admin/manageadmin');
	}

	public function content_writer()
	{
		$this->load->helper('form');
		$this->load->view('admin/contentwritter');
	}

	public function adminprofile()
	{
		$this->load->model('adminarticles');
		$data=$this->adminarticles->adminDetails();
		$this->load->view('admin/adminprofile',['adminInfo'=>$data]);
	}

	public function live_article()
	{
		$this->load->model('adminarticles');
		$data=$this->adminarticles->liveArticle();
		$this->load->view('admin/livearticles',['livearticles' => $data]);
	}

	public function article_request()
	{
		$this->load->model('adminarticles');
		$data=$this->adminarticles->articleRequest();
		$this->load->view('admin/articlesrequest',['articlesrequest' => $data]);
	}

	public function all_articles()
	{
		$this->load->model('adminarticles');
		$data=$this->adminarticles->allArticles();
		$this->load->view('admin/allarticles',['allarticles' => $data]);
	}

	public function view_admin()
	{
		$this->load->view('admin/viewadmin');
	}

	public function update_admin()
	{
		$this->load->view('admin/updateadmin');
	}

	public function view_writer()
	{
		$this->load->view('admin/viewwritter');
	}

	public function update_writer()
	{
		$this->load->view('admin/updatewritter');
	}

	public function logout()
	{
		$this->session->unset_userdata('adminId');
		return redirect(base_url('adminout/login'));
	}

	public function fullDetail($articleId)
	{
		$this->load->model('adminarticles','details');
		$articleDetail=$this->details->getDetails($articleId);

		$this->load->helper('form');
		$this->load->view('admin/getArticle',['articleDetail'=>$articleDetail]);
	}

	public function acceptIt($articleId)
	{
		$this->load->model('adminarticles','details');
		$status=$this->details->acceptIt($articleId);

		if($status)
		{
			redirect(base_url('admin/article_request'));
		}
		else
		{
			redirect(base_url('admin/article_request'));
		}
	}

	public function deleteIt($articleId)
	{
		$this->load->model('adminarticles','details');
		$status=$this->details->deleteIt($articleId);

		if($status)
		{
			redirect(base_url('admin/article_request'));
		}
		else
		{
			redirect(base_url('admin/article_request'));
		}
	}

	public function addWriter()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('writerName','Writer Name','required|is_unique[contentwriter.userName]');
		$this->form_validation->set_rules('writerEmail','Email','required|valid_email|is_unique[contentwriter.email]');
		$this->form_validation->set_rules('writerPassword','Password','required|alpha_dash');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");

		if($this->form_validation->run() === TRUE)
		{
			$name=$this->input->post('writerName');
			$email=$this->input->post('writerEmail');
			$password=md5($this->input->post('writerPassword'));
			
			$this->load->model('registerprocess');
			$status=$this->registerprocess->registerWriter($name,$email,$password);
			if($status)
			{
				
				$messge = array('msg' => 'Writer Registered Sucessfully','class' => 'alert alert-success fade in');
				$this->session->set_flashdata('item', $messge);

				redirect('admin/content_writer');

			}
			else
			{
				$messge = array('msg' => 'Failed To Register Writer','class' => 'alert alert-danger fade in');
				$this->session->set_flashdata('item', $messge);

				redirect('admin/content_writer');
			}
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('admin/contentwritter');
		}

	}



	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('adminId'))
		return redirect(base_url('adminout/login'));
	}
}