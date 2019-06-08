<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	 
	public function index()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');
		


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();
		$data2=$this->writersarticle->getCareer();
		$data3=$this->writersarticle->getTechnologies();
		$data4=$this->writersarticle->getGadgets();
		$data5=$this->writersarticle->getAuto();
		$data6=$this->writersarticle->getTour();
		$data7=$this->writersarticle->getEntertainment();
		$data8=$this->writersarticle->getFoods();
		$data9=$this->writersarticle->getSports();
		$data10=$this->writersarticle->getPhotos();
		$data11=$this->writersarticle->getHealth();

		$this->load->view('home',['articles'=>$article,'anlicsArticle'=>$data,'career'=>$data2,'tech'=>$data3,'gadgets'=>$data4,'auto'=>$data5,'tour'=>$data6,'entertainment'=>$data7,'foods'=>$data8,'sports'=>$data9,'photos'=>$data10,'health'=>$data11]);
	}

	public function loginProcess()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required|alpha_dash');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");

		if($this->form_validation->run() === TRUE)
		{
			$email=$this->input->post('email');
			$password=md5($this->input->post('password'));
			
			$this->load->model('loginprocess');
			$status=$this->loginprocess->checkUser($email,$password);
			if($status)
			{
				$this->load->library('session');
				$this->session->set_userdata('userId',$status);
				//return redirect(base_url('user/'));
				echo "TRUE";
			}
			else
			{
				echo "user Not registered";
			}
		}
		else
		{
			echo validation_errors();
		}
	}

	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullName','Full Name','required');
		$this->form_validation->set_rules('phone','Phone No','required|numeric|max_length[10]|min_length[10]');
		$this->form_validation->set_rules('registerEmail','Email','required|valid_email|is_unique[users.userEmail]');
		$this->form_validation->set_rules('registerPassword','Password','required|alpha_dash');
		$this->form_validation->set_error_delimiters("<p style='color:red;'>", "</p>");
		
		if($this->form_validation->run() === TRUE)
		{
			$fullName=$this->input->post('fullName');
			$phone=$this->input->post('phone');
			$email=$this->input->post('registerEmail');
			$password=md5($this->input->post('registerPassword'));

			$this->load->model('registerprocess');
			$status=$this->registerprocess->registerUser($fullName,$phone,$email,$password);

			if($status === TRUE)
			{
				echo "<p style='color:green;'>User Registered Sucessfully.</p>";
			}
			else
			{
				echo "<p style='color:red;'>error in registering user.</p>";
			}
		}
		else
		{
			echo validation_errors();
		}
	}

	public function fullDetail($articleId)
	{
		$this->load->model('showarticledetails','details');
		$articleDetail=$this->details->getDetails($articleId);
		$commentDetail=$this->details->getComment($articleId);

		$this->load->helper('form');
		$this->load->view('articleDetail',['articleDetail'=>$articleDetail,'commentDetail'=>$commentDetail]);
	}

	public function fullDetails($articleId)
	{
		$this->load->model('showarticledetails','details');
		$articleDetail=$this->details->getDetails2($articleId);
		$commentDetail=$this->details->getComments($articleId);

		$this->load->helper('form');
		$this->load->view('anlicsArticle',['articleDetail'=>$articleDetail,'commentDetail'=>$commentDetail]);
	}

	public function fastLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required|alpha_dash');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");

		if($this->form_validation->run() === TRUE)
		{
			$email=$this->input->post('email');
			$password=md5($this->input->post('password'));
			$articleId=$this->input->post('articleId');

			$this->load->model('loginprocess');
			$status=$this->loginprocess->checkUser($email,$password);
			if($status)
			{
				$this->load->library('session');
				$this->session->set_userdata('userId',$status);
				return redirect(base_url('user/fullDetails/'.$articleId));
			}
			else
			{
				return redirect(base_url('home/fullDetail/'.$articleId));
			}
		}
		else
		{
			echo validation_errors();
		}
	}

	public function fastLogin2()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required|alpha_dash');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");

		if($this->form_validation->run() === TRUE)
		{
			$email=$this->input->post('email');
			$password=md5($this->input->post('password'));
			$articleId=$this->input->post('postId');

			$this->load->model('loginprocess');
			$status=$this->loginprocess->checkUser($email,$password);
			if($status)
			{
				$this->load->library('session');
				$this->session->set_userdata('userId',$status);
				return redirect(base_url('user/fullDetail/'.$articleId));
			}
			else
			{
				return redirect(base_url('home/fullDetails/'.$articleId));
			}
		}
		else
		{
			echo validation_errors();
		}
	}
	public function news()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('news',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function worldNews()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('worldNews',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function usaNews()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('usaNews',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function ukNews()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('ukNews',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function indiaNews()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('indiaNews',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function politics()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('politicsNews',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function business()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('businessNews',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function education()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('education',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function oneDayExam()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('oneDayExam',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function govermentJobs()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('govermentJobs',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function careerGuide()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('careerGuide',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function entertainment()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('entertainment',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function hollywood()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('hollywood',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function bollywood()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('bollywood',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function tollywood()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('tollywood',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function tvShows()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('tvShows',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function review()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('review',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function technology()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('technology',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function gadgets()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('gadgets',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function automobiles()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('automobiles',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function tour_travels()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('tour_travels',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function foods()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('foods',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function sports()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('sports',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function photos()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('photos',['articles'=>$article,'anlicsArticle'=>$data]);
	}
	
	public function health_fitness()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('health_fitness',['articles'=>$article,'anlicsArticle'=>$data]);
	}
	
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('userId'))
		return redirect(base_url('user'));
	}
}
