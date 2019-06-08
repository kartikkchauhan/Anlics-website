<!DOCTYPE html>
<html>
<head>
  <title>Anlics</title>
  <link rel="shortcut icon" href="<?= base_url('uploads/dummy/user.png') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="News Website, Technologies, Cars, Bike, Automobiles, Software, Hardware" />

  <?= link_tag('assets/css/navbar.css') ?>
  <link href='https://fonts.googleapis.com/css?family=Rosarivo' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>

<!--HEAD SECTION  -->
<nav class="navbar navbar-fixed-top" style="font-size: 11px; ">
  <div class="container-fluid">
  <div class="navbar-header col-lg-1">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="fa fa-align-justify" style="font-size:20px; color: white;"></span>
  </button>
    <a class="navbar-brand" href="<?= base_url('writer/');?>" style="font-size: 30px">Anlics</a>
  </div>

  <div class="collapse navbar-collapse col-lg-11" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('writer/')?>">CREATE PAGE</a>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('writer/editPage')?>">EDIT PAGE</a>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('writer/pageList')?>">MY PAGES</a>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="<?= base_url('writer/logout')?>">LOGOUT</a>
      </li>
    </ul>

  </div>
</div>
</nav>
<div class="container">
<!--HEAD SECTION END  -->