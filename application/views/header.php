<!DOCTYPE html>
<html>
<head>
  <title>Salnaguide</title>
  <link rel="shortcut icon" href="<?= base_url('uploads/dummy/user.png') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="News Website, Technologies, Cars, Bike, Automobiles, Software, Hardware" />

  <?= link_tag('assets/css/navbar.css') ?>
  <?= link_tag('assets/css/popUpLogin.css')?>
  <link href='https://fonts.googleapis.com/css?family=Rosarivo' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
  <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/register.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/login.js') ?>"></script>
  
  
  
</head>
<body>

<!--HEAD SECTION  -->
<nav class="navbar navbar-fixed-top" style="font-size: 11px; ">
  <div class="container-fluid">
  <div class="navbar-header col-lg-2">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="fa fa-align-justify" style="font-size:20px; color: white;"></span>
  </button>
    <a class="navbar-brand" href="<?= base_url();?>" style="font-size: 30px"><img src="<? echo base_url('assets/img/logo.png');?>"/></a>
  </div>

  <div class="collapse navbar-collapse col-lg-10" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('home/news') ?>">NEWS</a>
        
      </li>
      
      <li class="nav-item dropdown news">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REVIEWS
        </a>
        <div class="dropdown-menu mega-menu dropdown-content" aria-labelledby="navbarDropdown">
          <div class="row">
	           <div class="col-md-2">
	                <a href="#"><h4>Smartphones</h4></a>
	           	<a href="#">Phone Plans</a>
	           	<a href="#">Camera Phones</a>
	           	<a href="#">Small Phones</a>
	           	<a href="#">Phablets</a>
	           	<a href="#">Unlocked Phones</a>
	           	<a href="#">Battery Life Rankings</a>
	           </div>
	           
	           <div class="col-md-2">
	                <a href="#"><h4>Web Security</h4></a>
	           	<a href="#">Antivirus</a>
	           	<a href="#">Identity Theft</a>
	           	<a href="#">Password Managers</a>
	           	<a href="#">VPN Services</a>
	           	<a href="#">Cloud Backup</a>
	           	<a href="#">Online Fax</a>
	           </div>
	           
	           <div class="col-md-2">
	                <a href="#"><h4>Gift Ideas</h4></a>
	           	<a href="#">Drones</a>
	           	<a href="#">Kindles</a>
	           	<a href="#">Photo Books</a>
	           	<a href="#">iPhone Lenses</a>
	           	<a href="#">3D Printers</a>
	           	<a href="#">Gifts Under $20</a>
	           </div>
	           <div class="col-md-2">
	                <a href="#"><h4>Parenting</h4></a>
	           	<a href="#">Baby Monitors</a>
	           	<a href="#">Kid Trackers</a>
	           	<a href="#">Phone Monitoring</a>
	           	<a href="#">Family Phone Plans</a>
	           	<a href="#">Robot Kits</a>
	           	<a href="#">Kids Tablets</a>
	           </div>
	           
	           <div class="col-md-2">
	                <a href="#"><h4>Networking</h4></a>
	           	<a href="#">Cable Modems</a>
	           	<a href="#">Routers</a>
	           	<a href="#">Wi-Fi Extenders</a>
	           	<a href="#">All-in-One PCs</a>
	           	<a href="#">Mini PCs</a>
	           	<a href="#">All-in-One Printers</a>
	           </div>
	           <div class="col-md-2">
	                <a href="#"><h4>Laptops</h4></a>
	           	<a href="#">Gaming</a>
	           	<a href="#">College</a>
	           	<a href="#">Business</a>
	           	<a href="#">Tablets</a>
	           	<a href="#">2-in-1s</a>
	           	<a href="#">Chromebooks</a>
	           </div>
          </div>
          
          <div class="row">
	           <div class="col-md-2">
	                <a href="#"><h4>Gaming</h4></a>
	           	<a href="#">Desktops</a>
	           	<a href="#">Monitors</a>
	           	<a href="#">Headsets</a>
	           	<a href="#">Keyboards</a>
	           	<a href="#">Gamepads</a>
	           	<a href="#">Mice</a>
	           </div>
	           
	           <div class="col-md-2">
	                <a href="#"><h4>TVs</h4></a>
	           	<a href="#">Antennas</a>
	           	<a href="#">Media Players</a>
	           	<a href="#">Streaming Video</a>
	           	<a href="#">Live TV Streaming</a>
	           	<a href="#">Soundbars</a>
	           	<a href="#">Remotes</a>
	           </div>
	           
	           <div class="col-md-2">
	                <a href="#"><h4>Audio</h4></a>
	           	<a href="#"><p>Soundbars</p></a>
	           	<a href="#"><p>Bluetooth Speakers</p></a>
	           	<a href="#"><p>Smart Speakers</p></a>
	           	<a href="#"><p>Headphones</p></a>
	           	<a href="#"><p>Earbuds</p></a>
	           	<a href="#"><p>Wireless Earbuds</p></a>
	           </div>
	           <div class="col-md-2">
	                <a href="#"><h4>Smart Home</h4></a>
	           	<a href="#">Security Cameras</a>
	           	<a href="#">Thermostats</a>
	           	<a href="#">Smart Locks</a>
	           	<a href="#">Smart Lights</a>
	           	<a href="#">Video Doorbells</a>
	           	<a href="#">Robot Vacuums</a>
	           </div>
	           
	           <div class="col-md-2">
	                <a href="#"><h4>Cameras</h4></a>
	           	<a href="#">DSLRs</a>
	           	<a href="#">Routers</a>
	           	<a href="#">Mirrorless</a>
	           	<a href="#">Bridge Cameras</a>
	           	<a href="#">Point and Shoots</a>
	           	<a href="#">360 Cameras</a>
	           	<a href="#">Action Cameras</a>
	           </div>
	           <div class="col-md-2">
	                <a href="#"><h4>Wearables</h4></a>
	           	<a href="#">Smartwatches</a>
	           	<a href="#">Fitness Trackers</a>
	           	<a href="#">Sport Watches</a>
	           	<a href="#">VR Headsets</a>
	           	<a href="#">Sport Earbuds</a>
	           	<a href="#">Key Finders</a>
	           </div>
          </div>
        
        </div>
      </li>
      <li class="dropdown">
        <a class="dropbtn">VIDEOS</a>
        
      </li>
      
      <li class="nav-item dropdown news">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          OTHERS
        </a>
        <div class="dropdown-menu mega-menu dropdown-content" aria-labelledby="navbarDropdown" style="width: 724px;
    margin: 0px 0px 0px -214px;">
          <div class="row">
	           <div class="col-md-6">
	                <a href="#"><h4>Sports</h4></a>
	           	<a href="#">Football</a>
	           	<a href="#">Cricket</a>
	           	
	           </div>
	           
	           <div class="col-md-6">
	                <a href="#"><h4>CAREER</h4></a>
	           	<a href="<?= base_url('home/education') ?>">CAREER</a>
	           	<a href="#">Education</a>
	           	
	           </div>
	      
          </div>
        </div>
      </li>
      
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('home/technology') ?>">TECHNOLOGIES</a>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('home/gadgets') ?>">GADGETS</a>
        
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('home/automobiles') ?>">AUTOMOBILES</a>
       
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('home/tour_travels') ?>">TOUR & TRAVELS</a>
      </li>
      

      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('home/health_fitness') ?>">HEALTH & FITNESS</a>
       
      </li>
     
      
    </ul>

  </div>
</div>
</nav>
<div class="container">
<!--HEAD SECTION END  -->