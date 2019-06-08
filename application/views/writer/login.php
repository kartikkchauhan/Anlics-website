<!DOCTYPE html>
<html>
<head>
	<title>Writer @ Anlics</title>
	<link rel="shortcut icon" href="<?= base_url('uploads/dummy/user.png') ?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body style="overflow: hidden;">
	<div class="container" style="background-color: #337AB7; height: 720px;">
		<div class="row">
			<?= form_open(base_url('writerlogin/loginNow')); ?>
			<div class="col-lg-6 col-lg-offset-3" style="margin-top: 100px;background-color: white;border-radius: 10%">
				<?php if(isset($responce)){ echo $responce; } ?>
				<center>
				<img src="<?= base_url('uploads/dummy/user.png')?>" style="height: 150px; width: 30%;margin-top: 30px">
				<h1>Writers Login</h1>
				<h5>Login here to get In.</h5>
				</center>
				<div class="row">
					<div class="col-lg-12">
						<label>Username</label>
					</div>
					<div class="col-lg-12">
						<input type="text" class="form-control" name="userName" placeholder="Enter Username" required>
					</div>
					<div><?= form_error('userName');?></div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label>Password</label>
					</div>
					<div class="col-lg-12">
						<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
					</div>
					<div><?= form_error('password');?> </div>
				</div>
				<div class="row" style="margin-bottom: 30px">
					<div class="col-lg-6">
						<button class="btn btn-primary" type="submit" style="width: 30%; margin-top: 10px">Login</button>
					</div>
					<div class="col-lg-6 text-right">
						<p style="padding-top: 15px"><span>Forget</span> <a href="#">Password ?</a></p>
					</div>
				</div>
				<?= form_close(); ?>
			</div>
		</div>
	</div>
</body>
</html>