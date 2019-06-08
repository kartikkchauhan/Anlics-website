<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	 
	

	public function index()
	{
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

		$this->load->view('user/userHome',['articles'=>$article,'anlicsArticle'=>$data,'career'=>$data2,'tech'=>$data3,'gadgets'=>$data4,'auto'=>$data5,'tour'=>$data6,'entertainment'=>$data7,'foods'=>$data8,'sports'=>$data9,'photos'=>$data10,'health'=>$data11]);
	}

	public function logout()
	{
		$this->session->unset_userdata('userId');
		if(! $this->session->userdata('userId'))
		{
			return redirect(base_url(''));
		}
		else if ($this->session->userdata('userId')) 
		{
			return redirect(base_url('user'));
		}
	}
	public function writeContent()
	{
		$this->load->helper('form');
		$this->load->view('user/writePost');
	}
	public function postContent()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required|max_length[150]');
		$this->form_validation->set_rules('description','Description','required|max_length[1000]');
		$this->form_validation->set_error_delimiters("<p style='color:red;'>", "</p>");

		if($this->form_validation->run() === TRUE)
		{
			$title=$this->input->post('title');
			$description=$this->input->post('description');
			$type=$this->input->post('contentType');

			if($type === "1")
			{
				$config=[
					'upload_path' => './uploads/articles/',
					'allowed_types' => 'jpeg|png|jpg|gif',
					'max_filename' => '50',
				];

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image1')) 
				{
					$img1=$this->upload->data('file_name');

					$img2=$_FILES["image2"]["name"];
					$path2=$_FILES['image2']['tmp_name'];
					$target2="./uploads/articles/$img2";
					move_uploaded_file($path2,$target2);

					$img3=$_FILES["image3"]["name"];
					$path3=$_FILES['image3']['tmp_name'];
					$target3="./uploads/articles/$img3";
					move_uploaded_file($path3,$target3);

					$img4=$_FILES["image4"]["name"];
					$path4=$_FILES['image4']['tmp_name'];
					$target4="./uploads/articles/$img4";
					move_uploaded_file($path4,$target4);

					$this->load->model('postarticle');

					if($img1 && $img2==="" && $img3==="" && $img4==="")
					{
						$status = $this->postarticle->uploadIt1($title,$description,$type,$img1);

						if($status === TRUE)
						{
							$responce="<p style='color:green;font-size:20px;text-align:center;'>Article Submitted. <br>We are verifying your article it will only take 2 minutes.
								<br><strong>ThankYou for using Anlics </strong></p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}
						else
						{
							$responce="<p style='color:red; font-size:20px;'>Article Not Submitted</p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}

					}
					else if($img1 && $img2 && $img3==="" && $img4==="")
					{
						$status = $this->postarticle->uploadIt2($title,$description,$type,$img1,$img2);
						if($status === TRUE)
						{
							$responce="<p style='color:green;font-size:20px;text-align:center;'>Article Submitted. <br>We are verifying your article it will only take 2 minutes.
								<br><strong>ThankYou for using Anlics </strong></p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}
						else
						{
							$responce="<p style='color:red; font-size:20px;'>Article Not Submitted</p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}

					}
					else if($img1 && $img2==="" && $img3 && $img4==="")
					{
						$status = $this->postarticle->uploadIt3($title,$description,$type,$img1,$img3);
						if($status === TRUE)
						{
							$responce="<p style='color:green;font-size:20px;text-align:center;'>Article Submitted. <br>We are verifying your article it will only take 2 minutes.
								<br><strong>ThankYou for using Anlics </strong></p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}
						else
						{
							$responce="<p style='color:red; font-size:20px;'>Article Not Submitted</p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}

					}
					else if($img1 && $img2==="" && $img3==="" && $img4)
					{
						$status = $this->postarticle->uploadIt4($title,$description,$type,$img1,$img4);
						if($status === TRUE)
						{
							$responce="<p style='color:green;font-size:20px;text-align:center;'>Article Submitted. <br>We are verifying your article it will only take 2 minutes.
								<br><strong>ThankYou for using Anlics </strong></p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}
						else
						{
							$responce="<p style='color:red; font-size:20px;'>Article Not Submitted</p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}

					}
					else if($img1 && $img2 && $img3 && $img4==="")
					{
						$status = $this->postarticle->uploadIt5($title,$description,$type,$img1,$img2,$img3);
						if($status === TRUE)
						{
							$responce="<p style='color:green;font-size:20px;text-align:center;'>Article Submitted. <br>We are verifying your article it will only take 2 minutes.
								<br><strong>ThankYou for using Anlics </strong></p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}
						else
						{
							$responce="<p style='color:red; font-size:20px;'>Article Not Submitted</p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}

					}
					else if($img1 && $img2==="" && $img3 && $img4)
					{
						$status = $this->postarticle->uploadIt6($title,$description,$type,$img1,$img3,$img4);
						if($status === TRUE)
						{
							$responce="<p style='color:green;font-size:20px;text-align:center;'>Article Submitted. <br>We are verifying your article it will only take 2 minutes.
								<br><strong>ThankYou for using Anlics </strong></p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}
						else
						{
							$responce="<p style='color:red; font-size:20px;'>Article Not Submitted</p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}
					}
					else if($img1 && $img2 && $img3==="" && $img4)
					{
						$status = $this->postarticle->uploadIt7($title,$description,$type,$img1,$img2,$img4);
						if($status === TRUE)
						{
							$responce="<p style='color:green;font-size:20px;text-align:center;'>Article Submitted. <br>We are verifying your article it will only take 2 minutes.
								<br><strong>ThankYou for using Anlics </strong></p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}
						else
						{
							$responce="<p style='color:red; font-size:20px;'>Article Not Submitted</p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}
					}
					else if($img1 && $img2 && $img3 && $img4)
					{
						$status = $this->postarticle->uploadIt8($title,$description,$type,$img1,$img2,$img3,$img4);
						if($status === TRUE)
						{
							$responce="<p style='color:green;font-size:20px;text-align:center;'>Article Submitted. <br>We are verifying your article it will only take 2 minutes.
								<br><strong>ThankYou for using Anlics </strong></p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}
						else
						{
							$responce="<p style='color:red; font-size:20px;'>Article Not Submitted</p>";
							$this->load->helper('form');
							$this->load->view('user/writePost',compact('responce'));
						}
					}
					else
					{
						$responce="<p style='color:red; font-size:20px;'>error in uploading</p>";
						$this->load->helper('form');
						$this->load->view('user/writePost',compact('responce'));
					}
				}
				else
				{
					$uploadError=$this->upload->display_errors("<p style='color: red;'>", "</p>");
					$this->load->helper('form');
					$this->load->view('user/writePost',compact('uploadError'));
				}
				
			}
			else if($type === "2") 
			{

				$config=[
					'upload_path' => './uploads/articles/videos',
					'allowed_types' => 'avi|flv|wmv|gif|mov|mp4',
					'max_filename' => '50',
				];

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('videoData')) 
				{
					$videoName=$this->upload->data('file_name');
					$this->load->model('postarticle');
					$status = $this->postarticle->uploadVideo($title,$description,$type,$videoName);

					if($status === TRUE)
					{
						$responce="<p style='color:green;font-size:20px;text-align:center;'>Article Submitted.<br> We are verifying your article it will only take 2 minutes.
							<br><strong>ThankYou for using Anlics </strong></p>";
						$this->load->helper('form');
						$this->load->view('user/writePost',compact('responce'));
					}
					else
					{
						$responce="<p style='color:red; font-size:20px;'>Article Not Submitted</p>";
						$this->load->helper('form');
						$this->load->view('user/writePost',compact('responce'));
					}
				}
			}
			else
			{
				$this->load->helper('form');
				$this->load->view('user/writePost');
			}	

		}
		else
		{
			$this->load->helper('form');
			$this->load->view('user/writePost');
		}
	}
	public function fullDetails($articleId)
	{
		$this->load->model('showarticledetails','details');
		$articleDetail=$this->details->getDetails($articleId);
		$commentDetail=$this->details->getComment($articleId);

		$this->load->helper('form');
		$this->load->view('user/articleDetail',['articleDetail'=>$articleDetail,'commentDetail'=>$commentDetail]);
	}
	public function postComment()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('comment','Comment','required');

		if($this->form_validation->run() === TRUE)
		{
			$comment=$this->input->post('comment');
			$articleId=$this->input->post('articleId');

			$this->load->model('comment');
			$status=$this->comment->postComment($comment,$articleId);

			if ($status) 
			{
				return redirect(base_url('user/fullDetails/'.$articleId));
			}
			else
			{
				redirect(base_url('user/fullDetails/'.$articleId));
			}
		}
		else
		{
			redirect(base_url("user/fullDetails/".$this->input->post('articleId')));
		}
	}

	public function postComments()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('comment','Comment','required');

		if($this->form_validation->run() === TRUE)
		{
			$comment=$this->input->post('comment');
			$articleId=$this->input->post('articleId');

			$this->load->model('comment');
			$status=$this->comment->postComments($comment,$articleId);

			if ($status) 
			{
				return redirect(base_url('user/fullDetail/'.$articleId));
			}
			else
			{
				redirect(base_url('user/fullDetail/'.$articleId));
			}
		}
		else
		{
			redirect(base_url("user/fullDetail/".$this->input->post('articleId')));
		}
	}

	public function userProfile()
	{
		
		$userId=$this->session->userdata('userId');
		$this->load->model('profileinfo');
		$profileData=$this->profileinfo->getProfileData($userId);
		if($profileData)
		{
			$this->load->helper('form');
			$this->load->view('user/profile',['profileInfo'=>$profileData]);
		}
	}

	public function updateName()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required');

		if ($this->form_validation->run() === TRUE) 
		{
			$name=$this->input->post('name');
			$userId=$this->session->userdata('userId');

			$this->load->model('profileupdation');
			$status=$this->profileupdation->nameUpdate($name,$userId);

			if($status === TRUE)
			{
				$this->load->helper('form');
				$responce="<p style='color: Green;text-align:center;'>Your Name Updated Sucessfully.</p>";
				$this->load->model('profileinfo');
				$profileData=$this->profileinfo->getProfileData($userId);
				if($profileData)
				{
					$this->load->helper('form');
					$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
				}

			}
			else
			{
				$this->load->helper('form');
				$responce="<p style='color: red;text-align:center;'>Can't able to process your request at the moment.<br>Try again later.</p>";
				$this->load->model('profileinfo');
				$profileData=$this->profileinfo->getProfileData($userId);
				if($profileData)
				{
					$this->load->helper('form');
					$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
				}
			}
		}
		else
		{
			$this->load->model('profileinfo');
			$profileData=$this->profileinfo->getProfileData($userId);
			if($profileData)
			{
				$this->load->helper('form');
				$this->load->view('user/profile',['profileInfo'=>$profileData]);
			}
		}
	}

	public function verifyEmail()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('newEmail','Email','required|valid_email|is_unique[users.userEmail]');

		if ($this->form_validation->run() === TRUE) 
		{
			$email=$this->input->post('newEmail');
			$userId=$this->session->userdata('userId');
			$this->load->helper('email');
			if(valid_email($email))
			{
				$this->load->library('email');

				$this->email->from('12kartik00@gmail.com', 'Anlics');
				$this->email->to($email);
				$this->email->cc($email);
				$this->email->bcc($email);

				$this->email->subject('Email Test');
				$this->email->message('click on the url to Confirm Your Email on Anlics n/' . base_url('user/updateEmail/'.$userId));

				if($this->email->send())
				{
					$userId-$this->session->userdata('userId');
					$this->load->model('profileupdation');
					$status=$this->profileupdation->emailUpdate($userId,$email);

					if($status === TRUE)
					{
						$this->load->helper('form');
						$responce="<p style='color: green;text-align:center;'>Plesase check you email we have sent you an email on your entered email address.</p>";
						$this->load->model('profileinfo');
						$profileData=$this->profileinfo->getProfileData($userId);
						if($profileData)
						{
							$this->load->helper('form');
							$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
						}
					}
					else
					{
						$this->load->helper('form');
						$responce="<p style='color: red;text-align:center;'>Plesase check you email we have sent you an email on your entered email address.</p>";
						$this->load->model('profileinfo');
						$profileData=$this->profileinfo->getProfileData($userId);
						if($profileData)
						{
							$this->load->helper('form');
							$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
						}
					}

					
				}
				else
				{
					$this->load->helper('form');
					$responce="<p style='color: red;text-align:center;'>Unable to change your Email</p>";
					$this->load->model('profileinfo');
					$profileData=$this->profileinfo->getProfileData($userId);
					if($profileData)
					{
						$this->load->helper('form');
						$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
					}	
				}

			}
			else
			{
				$this->load->helper('form');
				$responce="<p style='color: red;text-align:center;'>Your Email is Not a valid Email.</p>";
				$this->load->model('profileinfo');
				$profileData=$this->profileinfo->getProfileData($userId);
				if($profileData)
				{
					$this->load->helper('form');
					$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
				}
			}
		}
		else
		{
			$this->load->helper('form');
			$responce="<p style='color: red;text-align:center;'>Error in your Email Feild.</p>";
			$this->load->model('profileinfo');
			$userId=$this->session->userdata('userId');
			$profileData=$this->profileinfo->getProfileData($userId);
			if($profileData)
			{
				$this->load->helper('form');
				$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
			}
		}

	}

	public function updateEmail($userId)
	{
		$this->load->model('profileupdation');
		$status=$this->profileupdation->updateVerification($userId);

		if ($status === TRUE) 
		{
			$this->load->helper('form');
			$responce="<p style='color: green;text-align:center;'>Your Email is Verified Now.</p>";
			$this->load->view('user/profile',compact('responce'));
			$this->load->model('profileinfo');
			$profileData=$this->profileinfo->getProfileData($userId);
			if($profileData)
			{
				redirect(base_url(''));
			}
		}
		else
		{
			$this->load->helper('form');
			$responce="<p style='color: red;text-align:center;'>Your Email is Verified Now.</p>";
			$this->load->model('profileinfo');
			$userId=$this->session->userdata('userId');
			$profileData=$this->profileinfo->getProfileData($userId);
			if($profileData)
			{
				$this->load->helper('form');
				$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
			}
		}
	}

	public function updatePhone()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('newPhone','Phone','required|numeric');

		if ($this->form_validation->run() === TRUE) 
		{
			$newPhone=$this->input->post('newPhone');
			$userId=$this->session->userdata('userId');

			$this->load->model('profileupdation');
			$status=$this->profileupdation->phoneUpdate($newPhone,$userId);

			if($status === TRUE)
			{
				$this->load->helper('form');
				$responce="<p style='color: Green;text-align:center;'>Your Phone Number Updated Sucessfully.</p>";
				$this->load->model('profileinfo');
				$profileData=$this->profileinfo->getProfileData($userId);
				if($profileData)
				{
					$this->load->helper('form');
					$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
				}
			}
			else
			{
				$this->load->helper('form');
				$responce="<p style='color: red;text-align:center;'>Can't able to process your request at the moment.<br>Try again later.</p>";
				$this->load->model('profileinfo');
				$profileData=$this->profileinfo->getProfileData($userId);
				if($profileData)
				{
					$this->load->helper('form');
					$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
				}
			}
		}
		else
		{
			$this->load->helper('form');
			$responce="<p style='color: red;text-align:center;'>Can't able to process your request at the moment.<br>Try again later.</p>";
			$this->load->model('profileinfo');
			$profileData=$this->profileinfo->getProfileData($userId);
			if($profileData)
			{
				$this->load->helper('form');
				$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
			}
		}
	}
	public function updatePhoto()
	{
		$config=[
			'upload_path'=>'./uploads/users/',
			'allowed_types'=>'jpeg|png|jpg|gif',
			'max_filename'=> 100,
		];

		$this->load->library('upload', $config);

		if($this->upload->do_upload('image')) 
		{
			$img=$this->upload->data('file_name');	
			$userId=$this->session->userdata('userId');

			$this->load->model('profileupdation');
			$status=$this->profileupdation->photoUpdate($userId,$img);

			if ($status === TRUE) 
			{
				$this->load->helper('form');
				$responce="<p style='color: green;text-align:center;'>Profile Photo Updated.</p>";
				$this->load->model('profileinfo');
				$profileData=$this->profileinfo->getProfileData($userId);
				if($profileData)
				{
					$this->load->helper('form');
					$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
				}
			}
			else
			{
				$this->load->helper('form');
				$responce="<p style='color: red;text-align:center;'>Profile Photo Updation Failed.</p>";
				$this->load->model('profileinfo');
				$profileData=$this->profileinfo->getProfileData($userId);
				if($profileData)
				{
					$this->load->helper('form');
					$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
				}
			}
		}
		else
		{
			$this->load->helper('form');
			$responce="<p style='color: red;text-align:center;'>Your Profile Photo Not Updated.</p>";
			$this->load->model('profileinfo');
			$profileData=$this->profileinfo->getProfileData($userId);
			if($profileData)
			{
				$this->load->helper('form');
				$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
			}
		}

	}

	public function updatePassword()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('oldPassword','Password','required|alpha_dash');
		$this->form_validation->set_rules('newPassword','New Password','required|alpha_dash');

		if ($this->form_validation->run() === TRUE) 
		{
			$oldPassword=md5($this->input->post('oldPassword'));
			$newPassword=md5($this->input->post('newPassword'));
			$userId=$this->session->userdata('userId');

			$this->load->model('profileupdation');
			$status=$this->profileupdation->passwordUpdate($oldPassword,$newPassword,$userId);

			if($status === TRUE)
			{
				$this->load->helper('form');
				$responce="<p style='color: Green;text-align:center;'>Your Password Changed Sucessfully.</p>";
				$this->load->model('profileinfo');
				$profileData=$this->profileinfo->getProfileData($userId);
				if($profileData)
				{
					$this->load->helper('form');
					$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
				}
			}
			else if($status === FALSE)
			{
				$this->load->helper('form');
				$responce="<p style='color: red;text-align:center;'>Enter The Correct Current Password.</p>";
				$this->load->model('profileinfo');
				$profileData=$this->profileinfo->getProfileData($userId);
				if($profileData)
				{
					$this->load->helper('form');
					$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
				}
			}
			else
			{
				$this->load->helper('form');
				$responce="<p style='color: red;text-align:center;'>Error in changing Your Password.</p>";
				$this->load->model('profileinfo');
				$profileData=$this->profileinfo->getProfileData($userId);
				if($profileData)
				{
					$this->load->helper('form');
					$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
				}
			}
		}
		else
		{
			$this->load->helper('form');
			$responce="<p style='color: red;text-align:center;'>Password feild can only Contain alphabets, numbers and dash.<br>Try again.</p>";
			$this->load->model('profileinfo');
			$profileData=$this->profileinfo->getProfileData($userId);
			if($profileData)
			{
				$this->load->helper('form');
				$this->load->view('user/profile',['profileInfo'=>$profileData,'responce'=>$responce]);
			}
		}
	}

	public function userArticles()
	{
		$this->load->model('userarticles');
		$articles=$this->userarticles->getUserArticles();
		if($articles)
		{
			$this->load->view('user/userArticles',['articles'=>$articles]);
		}
	}

	public function editDetails($articleId)
	{
		$this->load->model('userarticles');
		$article=$this->userarticles->getArticleDetail($articleId);
		if($article)
		{
			$this->load->helper('form');
			$this->load->view('user/userArticleDetail',['article'=>$article]);
		}
	}
	public function updateArticle()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required|max_length[150]');
		$this->form_validation->set_rules('description','Description','required|max_length[1000]');
		$this->form_validation->set_error_delimiters("<p style='color:red;'>", "</p>");
		
		if($this->form_validation->run() === TRUE)
		{
			$articleId=$this->input->post('articleId');
			$title=$this->input->post('title');
			$description=$this->input->post('description');
			$userId=$this->session->userdata('userId');

			$img1=$_FILES["image1"]["name"];
			$path1=$_FILES['image1']['tmp_name'];
			$target1="./uploads/articles/$img1";
			move_uploaded_file($path1,$target1);

			$img2=$_FILES["image2"]["name"];
			$path2=$_FILES['image2']['tmp_name'];
			$target2="./uploads/articles/$img2";
			move_uploaded_file($path2,$target2);

			$img3=$_FILES["image3"]["name"];
			$path3=$_FILES['image3']['tmp_name'];
			$target3="./uploads/articles/$img3";
			move_uploaded_file($path3,$target3);

			$img4=$_FILES["image4"]["name"];
			$path4=$_FILES['image4']['tmp_name'];
			$target4="./uploads/articles/$img4";
			move_uploaded_file($path4,$target4);

			if ($img1=="" && $img2 =="" && $img3=="" && $img4=="") 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle1($articleId,$title,$description,$userId);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1 && $img2 =="" && $img3=="" && $img4=="") 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle2($articleId,$title,$description,$userId,$img1);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1=="" && $img2 && $img3=="" && $img4=="") 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle3($articleId,$title,$description,$userId,$img2);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1=="" && $img2=="" && $img3 && $img4=="") 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle4($articleId,$title,$description,$userId,$img3);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1=="" && $img2=="" && $img3=="" && $img4) 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle5($articleId,$title,$description,$userId,$img4);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1 && $img2 && $img3=="" && $img4=="") 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle6($articleId,$title,$description,$userId,$img1,$img2);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1 && $img2=="" && $img3 && $img4=="") 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle7($articleId,$title,$description,$userId,$img1,$img3);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1 && $img2=="" && $img3=="" && $img4) 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle8($articleId,$title,$description,$userId,$img1,$img4);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1 && $img2 && $img3 && $img4=="") 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle9($articleId,$title,$description,$userId,$img1,$img2,$img3);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1 && $img2 && $img3=="" && $img4) 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle10($articleId,$title,$description,$userId,$img1,$img2,$img4);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1=="" && $img2 && $img3 && $img4=="") 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle11($articleId,$title,$description,$userId,$img2,$img3);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1=="" && $img2 && $img3=="" && $img4) 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle12($articleId,$title,$description,$userId,$img2,$img4);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1=="" && $img2 && $img3 && $img4) 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle13($articleId,$title,$description,$userId,$img2,$img3,$img4);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if ($img1 && $img2 && $img3 && $img4) 
			{
				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle14($articleId,$title,$description,$userId,$img1,$img2,$img3,$img4);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
		}	
		else if( ! $this->form_validation->run())
		{
			$articleId=$this->input->post('articleId');
			$this->load->model('userarticles');
			$article=$this->userarticles->getArticleDetail($articleId);
			if($article)
			{
				$this->load->helper('form');
				$this->load->view('user/userArticleDetail',['article'=>$article]);
			}
		}
	}

	public function updateVideoArticle()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required|max_length[150]');
		$this->form_validation->set_rules('description','Description','required|max_length[1000]');
		$this->form_validation->set_error_delimiters("<p style='color:red;'>", "</p>");
		
		if($this->form_validation->run() === TRUE)
		{
			$config=[
					'upload_path' => './uploads/articles/videos',
					'allowed_types' => 'avi|flv|wmv|gif|mov|mp4',
					'max_filename' => 50,
			];

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('videoData')) 
			{
				$videoName=$this->upload->data('file_name');
				$articleId=$this->input->post('articleId');
				$title=$this->input->post('title');
				$description=$this->input->post('description');
				$userId=$this->session->userdata('userId');

				$this->load->model('articleupdate');
				$article=$this->articleupdate->updateArticle15($articleId,$title,$description,$userId,$videoName);
				if($article)
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: green;text-align:center;'>Article Updated Sucessfully.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
				else
				{
					$this->load->model('userarticles');
					$article=$this->userarticles->getArticleDetail($articleId);
					if($article)
					{
						$responce="<p style='color: red;text-align:center;'>Error in updating your Article.</p>";
						$this->load->helper('form');
						$this->load->view('user/userArticleDetail',['article'=>$article,'responce'=>$responce]);
					}
				}
			}
			else if( ! $this->form_validation->run())
			{
				$articleId=$this->input->post('articleId');
				$this->load->model('userarticles');
				$article=$this->userarticles->getArticleDetail($articleId);
				if($article)
				{
					$this->load->helper('form');
					$this->load->view('user/userArticleDetail',['article'=>$article]);
				}
			}
		}
	}

	public function fullDetail($articleId)
	{
		$this->load->model('showarticledetails','details');
		$articleDetail=$this->details->getDetails2($articleId);
		$commentDetail=$this->details->getComments($articleId);

		$this->load->helper('form');
		$this->load->view('user/anlicsArticle',['articleDetail'=>$articleDetail,'commentDetail'=>$commentDetail]);
	}

		public function news()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/news',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function worldNews()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/worldNews',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function usaNews()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/usaNews',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function ukNews()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/ukNews',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function indiaNews()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/indiaNews',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function politics()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/politicsNews',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function business()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/businessNews',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function education()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/education',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function oneDayExam()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/oneDayExam',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function govermentJobs()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/govermentJobs',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function careerGuide()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/careerGuide',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function entertainment()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/entertainment',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function hollywood()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/hollywood',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function bollywood()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/bollywood',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function tollywood()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/tollywood',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function tvShows()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/tvShows',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function review()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/review',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function technology()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/technology',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function gadgets()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/gadgets',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function automobiles()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/automobiles',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function tour_travels()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/tour_travels',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function foods()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/foods',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function sports()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/sports',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function photos()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/photos',['articles'=>$article,'anlicsArticle'=>$data]);
	}
	
	public function health_fitness()
	{
		$this->load->helper('form');
		$this->load->model('showarticle');


		$article=$this->showarticle->getArticle();

		$this->load->model('writersarticle');
		$data=$this->writersarticle->getArticles();

		$this->load->view('user/health_fitness',['articles'=>$article,'anlicsArticle'=>$data]);
	}

	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('userId'))
		return redirect(base_url('home'));
	}
}