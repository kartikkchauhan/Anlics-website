<!DOCTYPE html>
<html>
<head>
  <title>Anlics</title>
  <link rel="shortcut icon" href="<?= base_url('uploads/dummy/user.png') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="News Website, Technologies, Cars, Bike, Automobiles, Software, Hardware" />
  <?= link_tag('assets/css/navbar.css') ?>
  <?= link_tag('assets/css/popUpLogin.css')?>
  <link href='https://fonts.googleapis.com/css?family=Rosarivo' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/profileFunctions.js')?>"></script>
</head>
<body>

<!--HEAD SECTION  -->
<nav class="navbar navbar-fixed-top" style="font-size: 10px; ">
  <div class="container-fluid">
  <div class="navbar-header col-lg-1">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapseIt">
    <span class="fa fa-align-justify" style="font-size:20px; color: white;"></span>
  </button>
    <a class="navbar-brand" href="<?= base_url();?>" style="font-size: 30px">Salnaguide</a>
  </div>

  <div class="collapse navbar-collapse col-lg-11" id="collapseIt">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('user/news') ?>">NEWS</a>
        <button class="dropdown-content">
         <a href="<?= base_url('user/worldNews') ?>">WORLD</a>
         <a href="<?= base_url('user/usaNews') ?>">USA</a>
         <a href="<?= base_url('user/ukNews') ?>">UK</a>
         <a href="<?= base_url('user/indiaNews') ?>">INDIA</a>
         <a href="<?= base_url('user/politics') ?>">POLITICS</a>
         <a href="<?= base_url('user/business') ?>">BUSINESS</a>
        </button>
      </li>
      <li class="dropdown">
        <a class="dropbtn">VIDEOS</a>
        <button class="dropdown-content">
         <a href="#">COMEDY</a>
         <a href="#">FUNNY</a>
         <a href="#">MUSIC</a>
         <a href="#">MOVIES</a>
        </button>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('user/education') ?>">CAREER</a>
        <button class="dropdown-content">
         <a href="<?= base_url('user/oneDayExam') ?>">ONE DAY EXAMS</a>
         <a href="<?= base_url('user/govermentJobs') ?>">GOVERMENT JOBS</a>
         <a href="<?= base_url('user/careerGuide') ?>">CAREER GUIDE</a>
        </button>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('user/technology') ?>">TECHNOLOGIES</a>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('user/gadgets') ?>">GADGETS</a>
        <button class="dropdown-content">
         <a href="#">ENTERTAINMENT</a>
         <a href="#">COMPUTING</a>
         <a href="#">COMMUNICATION</a>
         <a href="#">LIFESTYLE</a>
         <a href="#">HOME</a>
         <a href="#">CAMERAS</a>
         <a href="#">HEALTH</a>
        </button>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('user/automobiles') ?>">AUTOMOBILES</a>
        <button class="dropdown-content">
         <a href="#">TWO-WHEELER</a>
         <a href="#">THREE-WHEELER</a>
         <a href="#">FOUR-WHEELER</a>
         <a href="#">SIX-WHEELER</a>
         <a href="#">EIGHT-WHEELER & MORE</a>
        </button>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('user/tour_travels') ?>">TOUR & TRAVELS</a>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('user/entertainment') ?>">ENTERTAINMENT</a>
        <button class="dropdown-content">
         <a href="<?= base_url('user/hollywood') ?>">HOLLYWOOD</a>
         <a href="<?= base_url('user/bollywood') ?>">BOLLYWOOD</a>
         <a href="<?= base_url('user/tollywood') ?>">TOLLYWOOD</a>
         <a href="<?= base_url('user/tvShows') ?>">TV SHOWS</a>
         <a href="<?= base_url('user/review') ?>">REVIEWS</a>
        </button>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('user/foods') ?>">FOODS</a>
        <button class="dropdown-content">
         <a href="#">MEXICAN</a>
         <a href="#">ITALIAN CUISINE</a>
         <a href="#">INDIAN</a>
         <a href="#">THAI</a>
         <a href="#">GREEK CUISINE</a>
         <a href="#">GREEK CUISINE</a>
         <a href="#">CHINESE</a>
         <a href="#">JAPANESE</a>
         <a href="#">AMERICAN</a>
         <a href="#">FRENCH</a>
         <a href="#">SPANISH CUISINE</a>
        </button>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('user/sports') ?>">SPORTS</a>
        <button class="dropdown-content">
         <a href="#">CRICKET</a>
         <a href="#">FOOTBALL</a>
         <a href="#">HOCKEY</a>
         <a href="#">GOLF</a>
         <a href="#">BASKETBALL</a>
         <a href="#">OTHER</a>
        </button>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('user/photos') ?>">PHOTOS</a>
        <button class="dropdown-content">
         <a href="#">WILDLIFE</a>
         <a href="#">SPORTS</a>
         <a href="#">FASHION</a>
         <a href="#">NATURE</a>
         <a href="#">WEDDING</a>
        </button>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('user/health_fitness') ?>">HEALTH & FITNESS</a>
        <button class="dropdown-content">
         <a href="#">GYM</a>
         <a href="#">EXCERSISES</a>
         <a href="#">YOGA</a>
         <a href="#">DIET PLAN</a>
        </button>
      </li>
      <li class="dropdown">
        <a class="dropbtn">MORE</a>
      </li>
      <li class="dropdown">
        <?php
        $userId=$this->session->userdata('userId');
          $query=$this->db
            ->select('userImg')
            ->from('users')
            ->where('userId', $userId)
            ->get();

            $result=$query->result();
            foreach($result as $img):
        ?>
        <div class="dropbtnimg"><img src="<?= base_url('uploads/users/'.$img->userImg) ?>" style="width: 50px; height: 50px; border-radius: 50%; margin-left: 20px;"></div>
        <?php
          endforeach;
        ?>
         <button class="dropdown-content" style="left: auto;right: 0;margin-right: -10px;">
         <a href="<?= base_url('user/userProfile') ?>">My Profile</a>
         <a href="<?= base_url('user/userArticles')?>">My Article</a>
         <a href="<?= base_url('user/logout')?>">Logout</a>
        </button>
      </li>
    </ul>

  </div>
</div>
</nav>
<div class="container">
<!--HEAD SECTION END  -->