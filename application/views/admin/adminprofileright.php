				
				<div class="col-lg-10">
					<div class="row col-lg-offset-4">
						<h2 class="col-lg-offset-1">ADMIN PROFILE</h2>
						<p>&nbsp;&nbsp;Hello Admin here you can update your profile details...</p>
					</div><br>
					<?php
					if(isset($adminInfo))
					{
					foreach ($adminInfo as $info):
					?>
					<!-- PROFILE NAME-->
					<div class="row col-lg-offset-1">
						<div class="col-lg-5">
							<span style="font-weight: bold; font-size: 22px;">Name:</span> <span style="font-size: 20px;"><?= $info->fullName ?></span>
						</div>

						<div class="col-lg-7">
							<button id="edit_name" class="btn btn-primary col-lg-offset-9">EDIT</button>	
						</div>
					</div>

					<div id="editname" class="row col-lg-offset-1"><br>
						<div class="col-lg-5">
							<input type="text" name="username" placeholder="Enter Your New Name" style="width: 80%; height: 35px; padding-left: 10px; border: 2px solid #337AB7;"><br>
							<button class="btn btn-primary" style="margin-top: 8px;">Save</button>
						</div>

						<div class="col-lg-7">
							<span id="removename" class="fa fa-remove text-primary col-lg-offset-9" style="font-size: 20px; cursor: pointer;"></span>
						</div>
					</div><br>
					<!-- END OF PROFILE NAME-->

					<!-- PROFILE EMAIL -->
					<div class="row col-lg-offset-1">
						<div class="col-lg-5">
							<span style="font-weight: bold; font-size: 22px;">Email:</span> <span style="font-size: 20px;"><?= $info->email ?></span>
						</div>

						<div class="col-lg-7">
							<button id="edit_email" class="btn btn-primary col-lg-offset-9">EDIT</button>	
						</div>
					</div>

					<div id="editemail" class="row col-lg-offset-1"><br>
						<div class="col-lg-5">
							<input type="text" name="username" placeholder="Enter Your New Email" style="width: 80%; height: 35px; padding-left: 10px; border: 2px solid #337AB7;"><br>
							<button class="btn btn-primary" style="margin-top: 8px;">Save</button>
						</div>

						<div class="col-lg-7">
							<span id="removeemail" class="fa fa-remove text-primary col-lg-offset-9" style="font-size: 20px; cursor: pointer;"></span>
						</div>
					</div><br>
					<!-- END OF PROFILE EMAIL -->
					<div class="row col-lg-offset-1" style="margin-bottom: 20px">
						<div class="col-lg-12">
							<span style="font-weight: bold; font-size: 22px;">User Name:</span> <span style="font-size: 20px;"><?= $info->userName ?></span>
						</div>
					</div>
					<!-- PROFILE PHONE -->
					<div class="row col-lg-offset-1">
						<div class="col-lg-5">
							<span style="font-weight: bold; font-size: 22px;">Phone:</span> <span style="font-size: 20px;"><?= $info->phone ?></span>
						</div>

						<div class="col-lg-7">
							<button id="edit_phone" class="btn btn-primary col-lg-offset-9">EDIT</button>	
						</div>
					</div>

					<div id="editphone" class="row col-lg-offset-1"><br>
						<div class="col-lg-5">
							<input type="text" name="username" placeholder="Enter Your New Phone" style="width: 80%; height: 35px; padding-left: 10px; border: 2px solid #337AB7;"><br>
							<button class="btn btn-primary" style="margin-top: 8px;">Save</button>
						</div>

						<div class="col-lg-7">
							<span id="removephone" class="fa fa-remove text-primary col-lg-offset-9" style="font-size: 20px; cursor: pointer;"></span>
						</div>
					</div><br>
					<!-- END OF PROFILE PHONE -->

					<!-- PROFILE PHOTO -->
					<div class="row col-lg-offset-1">
						<div class="col-lg-5">
							<span style="font-weight: bold; font-size: 22px;">Profile Photo:</span> <img src="<?= base_url('uploads/admin/'.$info->photo) ?>" style="width: 26%; height: 100px; border-radius: 50%;">
						</div>

						<div class="col-lg-7">
							<button id="edit_photo" class="btn btn-primary col-lg-offset-9" style="margin-top: 35px">EDIT</button>	
						</div>
					</div>

					<div id="editphoto" class="row col-lg-offset-1" style="margin-top: 5px;"><br>
						<div class="col-lg-5">
							<form style="border: 2px solid #337AB7; background-color: #fff;">
								<input type="file" name="">
							</form>
							<button class="btn btn-primary" style="margin-top: 8px;">Save</button>
						</div>

						<div class="col-lg-7">
							<span id="removephoto" class="fa fa-remove text-primary col-lg-offset-9" style="font-size: 20px; cursor: pointer;"></span>
						</div>
					</div>
					<!-- END OF PROFILE PHOTO -->

					<!-- PROFILE PASSWORD -->
					<div class="row col-lg-offset-1">
						<div class="col-lg-5">
							<span style="font-weight: bold; font-size: 22px;">Password</span>
						</div>

						<div class="col-lg-7">
							<button id="edit_password" class="btn btn-primary col-lg-offset-9">EDIT</button>	
						</div>
					</div>

					<div id="editpassword" class="row col-lg-offset-1" style="margin-top: 5px;"><br>
						<div class="col-lg-5">
							<input type="password" name="oldPassword" placeholder="Enter Your Current Password" style="width: 80%; height: 35px; padding-left: 10px; border: 2px solid #337AB7;">
							<input type="password" name="newPassword" placeholder="Enter Your New Password" style="width: 80%; height: 35px; padding-left: 10px; border: 2px solid #337AB7; margin-top: 5px;"><br>
							<button type="submit" class="btn btn-primary" style="margin-top: 8px;">Save</button>
						</div>

						<div class="col-lg-7">
							<span id="removepassword" class="fa fa-remove text-primary col-lg-offset-9" style="font-size: 20px; cursor: pointer;"></span>
						</div>
					</div>
					<!-- END OF PROFILE PASSWORD -->
					<?php
					endforeach;
					}
					?>
				</div> <!-- end of right area -->