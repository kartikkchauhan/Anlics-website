
<?php include('userHeader.php'); ?>

<!--BODY SECTION  -->	
<div class="row" style="border:1px solid #F2F2F2; margin-top: 70px;">
	<h1 style="text-align: center;">Edit Profile</h1>
	<?php if (isset($responce)) 
	{	
		echo $responce;
	} 

	foreach ($profileInfo as $profile):
	?>
	<div class="col-lg-12" style="margin-top: 50px;margin-bottom: 50px;">
		<div class="row">
			<div class="col-lg-8" style="text-align: left;">
				<label style="font-size: 20px;">Name:</label> <span style="font-family: Rosarivo;"> <?= $profile->userName ?> </span>
			</div>
			<div class="col-lg-4" style="text-align: right">
				<button type="button" class="btn btn-primary" id="nameEdit">Edit</button>
			</div>
		</div>
		<div class="row" id="editName" style="margin-top: 20px;">
			<div class="col-lg-8" style="text-align: left;">
				<?= form_open('user/updateName'); ?>
					<span style="font-family: Rosarivo;"> 
						<input type="text" name="name" id="name" class="form-control" style="width: 50%" placeholder="Enter Your New Name">
					</span>
					<button type="submit" class="btn btn-primary" id="saveName" style="margin-top: 5px;">Save</button>

				<?= form_close(); ?>
			</div>
			<div class="col-lg-4" style="text-align: right">
				<span class="fa fa-close" id="closeName" style="font-size: 20px;cursor: pointer;color: #337AB7;"></span>
			</div>
		</div>




		<div class="row" style="margin-top: 20px;">
			<div class="col-lg-8" style="text-align: left;">
				<label style="font-size: 20px;">Email:</label> <span style="font-family: Rosarivo;"><?= $profile->userEmail ?> </span>
			</div>
			<div class="col-lg-4" style="text-align: right">
				<button type="button" class="btn btn-primary" id="emailEdit">Edit</button>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;" id="editEmail">
				<div class="col-lg-8" style="text-align: left;">
					<?= form_open('user/verifyEmail'); ?>
						<span style="font-family: Rosarivo;">
							<input type="email" name="newEmail" class="form-control" style="width: 50%" placeholder="Enter Your New Email"> 
						</span>
						<button type="submit" class="btn btn-primary" style="margin-top: 5px;">Save</button>
					</form>
				</div>
			<div class="col-lg-4" style="text-align: right">
				<span class="fa fa-close" id="closeEmail" style="font-size: 20px;cursor: pointer;color: #337AB7;"></span>
			</div>
		</div>




		<div class="row" style="margin-top: 20px;">
			<div class="col-lg-8" style="text-align: left;">
				<label style="font-size: 20px;">Phone:</label> <span style="font-family: Rosarivo;"> <?= $profile->userPhone ?> </span>
			</div>
			<div class="col-lg-4" style="text-align: right">
				<button type="button" class="btn btn-primary" id="phoneEdit">Edit</button>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;" id="editPhone">
			<div class="col-lg-8" style="text-align: left;">
				<?= form_open('user/updatePhone');?>
					<span>
						<input type="phone" name="newPhone" class="form-control" style="width: 50%" placeholder="Enter Your New Phone"> 
					</span>
					<button type="submit" class="btn btn-primary" style="margin-top: 5px;">Save</button>
				</form>
			</div>
			<div class="col-lg-4" style="text-align: right">
				<span class="fa fa-close" id="closePhone" style="font-size: 20px;cursor: pointer;color: #337AB7;"></span>
			</div>
		</div>




		<div class="row" style="margin-top: 20px;">
			<div class="col-lg-8" style="text-align: left;">
				<label style="font-size: 20px;">Profile Photo:</label> <span style="font-family: Rosarivo;"> <img src="<?= base_url('uploads/users/'.$profile->userImg) ?>" style="border-radius: 40px;" height="80px" width="12%"> </span>
			</div>
			<div class="col-lg-4" style="text-align: right">
				<button type="button" class="btn btn-primary" id="photoEdit">Edit</button>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;" id="editPhoto">
			<div class="col-lg-8" style="text-align: left;">
				<?= form_open_multipart('user/updatePhoto');?>
					<input type="file" accept="image/*" class="form-control" name="image">
					<button type="submit" class="btn btn-primary" style="margin-top: 5px;">Save</button>
				<?= form_close();?>
			</div>
			<div class="col-lg-4" style="text-align: right">
				<span class="fa fa-close" id="closePhoto" style="font-size: 20px;cursor: pointer;color: #337AB7;"></span>
			</div>
		</div>



		<div class="row" style="margin-top: 20px;">
			<div class="col-lg-8" style="text-align: left;">
				<label style="font-size: 20px;">Password</label>
			</div>
			<div class="col-lg-4" style="text-align: right">
				<button type="button" class="btn btn-primary" id="passwordEdit">Edit</button>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;" id="editPassword">
			<div class="col-lg-8" style="text-align: left;">
				<?= form_open('user/updatePassword');?>
				<span>
					<input type="password" name="oldPassword" class="form-control" style="width: 50%;margin-bottom: 6px;" placeholder="Enter Your Current Password">
					<input type="password" name="newPassword" class="form-control" style="width: 50%" placeholder="Enter Your New Password">
				</span>
				<button type="submit" class="btn btn-primary" style="margin-top: 5px;">Save</button>
				<?= form_close();?>
			</div>
			<div class="col-lg-4" style="text-align: right">
				<span class="fa fa-close" id="closePassword" style="font-size: 20px;cursor: pointer;color: #337AB7;"></span>
			</div>
		</div>
		<?php
			endforeach;
		?>
	</div>

</div>
<!--BODY SECTION END  -->


<?php include("userFooter.php");?>
