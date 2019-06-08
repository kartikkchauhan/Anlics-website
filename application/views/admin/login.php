<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
	<!-- Admin area -->
		<div class="container-fluid" style="background-color: #3479B6;">
			<div class="container">
				<div class="row">
					<center><div class="col-lg-12" style="padding: 102px 100px;">
						<?= form_open('adminout/login_process');?>
							<?php if(isset($responce)) { echo $responce; }?>
							<img src="<?= base_url('uploads/dummy/user.png')?>" class="img-responsive" style="width: 100px; height: 100px; border-radius: 50%;">
							<h2 style="color: #fff;">ADMINISTRATOR</h2>
							<p style="color: #fff;">Please sign in to get access.</p>
							<input class="form-control" type="text" name="userName" id="username" placeholder="Username" style="width: 50%; height: 50px;" />
							<?= form_error('userName')?>
							<br>
							<input class="form-control" type="password" name="password" id="password" placeholder="Password" style="width: 50%; height: 50px;"/>
							<?= form_error('password')?>
							<br>
							<button class="btn btn-danger form-control" style="width: 50%; height: 50px; font-size: 20px;">Signin <span class="fa fa-user"></span></button><br><br>
							<p><a href="#password" style="color: #fff;">Forget Password?</a><p>
						</form>
					</div></center>
				</div>
			</div>
		</div>
	<!-- end of Admin area -->
</body>
</html>