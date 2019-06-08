<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<?= link_tag('assets/css/adminStyle.css')?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  	<script type="text/javascript" src="<?=base_url('assets/js/useractivity.js')?>"></script>
  	<script type="text/javascript" src="<?=base_url('assets/js/updateadmin.js')?>"></script>
  	<script type="text/javascript" src="<?=base_url('assets/js/adminprofile.js')?>"></script>
</head>
<body style="overflow-x: hidden;">
	<!-- admin header area -->
		
	<div class="container-fluid">
				<nav class="navbar navbar-fixed-top" style="font-size: 16px;">
				  <div class="navbar-header col-lg-2">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapseIt">
				    <span class="fa fa-align-justify" style="font-size:20px; color: white;"></span>
				  	</button>
				    <a class="navbar-brand" href="#anlics" style="font-size: 30px; margin-left: 30px;">ANLICS</a>
				  </div>

				  <div class="collapse navbar-collapse col-lg-10" id="collapseIt">
				    <ul class="nav navbar-nav">
				      <li class="dropdown">
				        <a class="dropbtn">News</a>
				        <button class="dropdown-content">
				         <a href="#">News1</a>
				         <a href="#">News2</a>
				         <a href="#">News3</a>
				        </button>
				      </li>
				      <li class="dropdown">
				        <a class="dropbtn">Videos</a>
				        <button class="dropdown-content">
				         <a href="#">News1</a>
				         <a href="#">News2</a>
				         <a href="#">News3</a>
				        </button>
				      </li>
				      <li class="dropdown">
				        <a class="dropbtn">Education</a>
				        <button class="dropdown-content">
				         <a href="#">News1</a>
				         <a href="#">News2</a>
				         <a href="#">News3</a>
				        </button>
				      </li>
				      <li class="dropdown">
				        <a class="dropbtn">Technologies</a>
				        <button class="dropdown-content">
				         <a href="#">News1</a>
				         <a href="#">News2</a>
				         <a href="#">News3</a>
				        </button>
				      </li>
				      <li class="dropdown">
				        <a class="dropbtn">Gadgets</a>
				        <button class="dropdown-content">
				         <a href="#">News1</a>
				         <a href="#">News2</a>
				         <a href="#">News3</a>
				        </button>
				      </li>
				      <li class="dropdown">
				        <a class="dropbtn">More</a>
				        <button class="dropdown-content">
				         <a href="#">My Profile</a>
				         <a href="#">My Article</a>
				         <a href="#">Logout</a>
				        </button>
				      </li>
				    </ul>

				  </div>
				</nav> <!-- end of admin navbar area -->