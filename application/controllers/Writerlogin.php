<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Writerlogin extends CI_Controller {

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('writer/login');
	}
	public function loginNow()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('userName','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");

		if($this->form_validation->run() === TRUE)
		{
			$userName=$this->input->post('userName');
			$password=md5($this->input->post('password'));
			
			$this->load->model('loginprocess');
			$status=$this->loginprocess->checkWriter($userName,$password);
			if($status)
			{
				$this->load->library('session');
				$this->session->set_userdata('writerId',$status);
				return redirect(base_url('writer/'));
			}
			else
			{
				$responce="<p style='color: red; text-align:center'>Username or Password you have entered is not correct.<br><strong>Check and try again</strong></p>";
				$this->load->helper('form');
				$this->load->view('writer/login',compact('responce'));

			}
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('writer/login');
		}
	}

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('writerId'))
		return redirect(base_url('writer/'));
	}
}