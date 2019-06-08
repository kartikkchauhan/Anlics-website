<div class="col-lg-10">
					<div class="row col-lg-offset-0">
						<div class="col-lg-4 well" style="background-color: #3479B6; color: #fff; height: 125px;">
							<div class="row col-lg-offset-2">
								<h3>CREATE ADMIN</h3>
							</div>
						</div>

						<a href="<?= base_url('admin/view_admin') ?>" style="color: #3479B6; text-decoration: none;"><div class="col-lg-4 well" style="background-color: #F1F1F1; color: #3479B6; border: 2px solid #D9D9D9; height: 125px;">
							<div class="row col-lg-offset-3">
								<h3>VIEW ADMIN</h3>
							</div>
						</div></a>

						<a href="<?= base_url('admin/update_admin') ?>" style="color: #fff; text-decoration: none;"><div class="col-lg-4 well" style="background-color: #3479B6; color: #fff; height: 125px;">
							<div class="row col-lg-offset-2">
								<h3>UPDATE ADMIN</h3>
							</div>
						</div></a>
					</div> <!-- ROW 1 -->

					<div class="row" style="margin-top: 20px; height: 440px;"><br>
						<div class="row col-lg-offset-0">
							<div class="col-lg-5 col-lg-offset-0">
								<span style="font-size: 20px;">Admin Name&nbsp;</span><input type="text" name="admin_name" id="admin_name" placeholder="Enter your name..." style="width: 70%; height: 40px; border: 2px solid #3479B6; padding-left: 5px;" />
							</div>
							<div class="col-lg-6">
								<span style="font-size: 20px;">Email Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="admin_name" id="admin_name" placeholder="Enter your email..." style="width: 60%; height: 40px; border: 2px solid #3479B6; padding-left: 5px;" />
							</div>
						</div><br><br>

						<div class="row col-lg-offset-0">
							<div class="col-lg-5 col-lg-offset-0">
								<span style="font-size: 20px;">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="admin_name" placeholder="Enter your password..." style="width: 70%; height: 40px; border: 2px solid #3479B6; padding-left: 5px;" />
							</div>
							<div class="col-lg-6">
								<span style="font-size: 20px;">Confirm Password </span><input type="text" name="admin_name" placeholder="Confirm your password..." style="width: 60%; height: 40px; border: 2px solid #3479B6; padding-left: 5px;" />
							</div>
						</div><br>

						<div class="row col-lg-offset-8">
							<button class="btn btn-primary" style="margin-left: 113px;">Create Account</button>
						</div>
					</div> <!-- ROW 2 -->

				</div> <!-- end of right area -->