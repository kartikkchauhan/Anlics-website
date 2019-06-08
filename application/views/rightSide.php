	<div class="col-lg-4" style="margin-top: 60px">
		<div class="row col-lg-12">
		
		<ul class="nav nav-tabs" style="margin-top: 10px;">
			
			<!--Javascript for on click function to hide and view login & registration -->
			<script type="text/javascript">
				$(document).ready(function(){

					$("#login").click(function(){
						$("#registration").removeClass("nav-link active show").addClass("nav-link");
				        $("#login").addClass("nav-link active show");
						$("#registrationBody").hide();
				        $("#loginBody").show();
		        	});

		        	$("#registration").click(function(){
			    		$("#login").removeClass("nav-link active show").addClass("nav-l				ink");
				        $("#registration").addClass("nav-link active show");
						$("#loginBody").hide();
				        $("#registrationBody").show();
		        	});

		        	$("#closeLogin").click(function() {
					    $("#login").removeClass("nav-link active show");
					    $("#registration").addClass("");
						$("#registrationBody").hide();
					    $("#loginBody").hide();
					});

					$("#closeRegister").click(function() {
					    $("#login").removeClass("nav-link active show");
					    $("#registration").addClass("");
						$("#registrationBody").hide();
					    $("#loginBody").hide();
					});
				})
			</script>
			<!--Javascript for on click function to hide and view login & registration End -->
		  <li class="nav-item col-lg-6" style="cursor: pointer;">
		    <a class="nav-link" data-toggle="tab" id="login" style="font-size: 12px" ><strong>LOGIN</strong></a>
		  </li>
		  <li class="nav-item col-lg-6" style="cursor: pointer;">
		    <a class="nav-link" data-toggle="tab" id="registration" style="font-size: 12px"><strong>REGISTER NOW</strong></a>
		  </li>
		</ul>


		<!-- login Body -->
		<div id="loginBody" class="" style="font-size: 12px">
			
			<?php echo form_open(''); ?>
			  	<fieldset>
				    <legend style="color: #337AB7">Login Now <i class="fa fa-close" id="closeRegister" style="float: right;cursor: pointer;"></i></legend>
				    <div id="output" style="color: red"></div>
				    <div class="form-group">
				      <label for="email">Email address</label>
				      <input type="email" class="form-control col-lg-8" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
				    </div>
				    <div class="form-group">
				      <label for="password">Password</label>
				      <input type="password" class="form-control col-lg-8" name="password" id="password" placeholder="Password">
				    </div>
			    </fieldset>
			    <button type="button" class="btn btn-primary" style="margin-top: 5px;" onclick="loginNow();">Login</button>
		 	</form>
		 	<hr>
		</div>
		<!-- login Body End -->

		<!-- login Body -->
		<div id="registrationBody">

			<?php echo form_open(''); ?>
			  <fieldset>
			    <legend style="color: #337AB7">Register Now <i class="fa fa-close" id="closeLogin" style="float: right;cursor: pointer;"></i></legend>
			    <div id="outPut"></div>
			    <div class="form-group">
			      <label for="fullName">Full Name</label>
			      <input type="text" class="form-control col-lg-8" id="fullName" aria-describedby="emailHelp" placeholder="Enter Full Name">
			    </div>
			    <div class="form-group">
			      <label for="phone">Phone</label>
			      <input type="email" class="form-control col-lg-8" id="phone" aria-describedby="emailHelp" placeholder="Enter Phone">
			    </div>
			    <div class="form-group">
			      <label for="email">Email address</label>
			      <input type="email" class="form-control col-lg-8" id="registerEmail" aria-describedby="emailHelp" placeholder="Enter email">
			    </div>
			    <div class="form-group">
			      <label for="password">Password</label>
			      <input type="password" class="form-control col-lg-8" id="registerPassword" placeholder="Password">
			    </div>
			    </fieldset>
			    <button type="button" class="btn btn-primary" style="margin-top: 5px;" id="register" onclick="registerNow();">Register</button>
		 	</form>
		 	<hr>
		</div>
		<!-- Registration Body End -->
	
		<div class="col-lg-12">
			
			<div style="height: auto;overflow-x: hidden; border: 0px; border-radius: 20px">
				<div class="row col-lg-12">
					<div style="margin-top: 10px;"><h1 style="font-size: 14px">USERS STORIES</h1></div>
				</div>
				
				<?php
					foreach (array_slice($articles, 0,10) as $article) {
					if($article->type ==="1")
					{

				?>
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin: 0px 0px 10px 0px; padding: 5px;">
					<div class="col-lg-4" style="padding-right: 0px; padding-left: 0px;">
						<img src="<?= base_url('uploads/articles/'.$article->image1) ?>" style="width: 100%;">
					</div>
					<div class="col-lg-8">
						<?= anchor(base_url('home/fullDetail/'.$article->articleId),$article->title) ?>
					</div>
				</div>
				<?php
					}
					else if ($article->type ==="2") 
					{
				?>
				
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin: 0px 0px 10px 0px; padding: 5px;">
					<div class="col-lg-4" style="padding-right: 0px; padding-left: 0px;">
						<video style="width: 100%; ">
						  	<source src="<?= base_url('uploads/articles/videos/'.$article->video) ?>" type="video/mp4">
						  	<source src="<?= base_url('uploads/articles/videos/'.$article->video) ?>.ogg" type="video/ogg">
						</video>
					</div>
					<div class="col-lg-8">
						<?= anchor(base_url('home/fullDetail/'.$article->articleId),$article->title) ?>
					</div>
				</div>
				<?php
					}

					}
				?>
			</div>
		</div>
		
		
	</div>