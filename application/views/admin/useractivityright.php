<div class="col-lg-10">
					<div class="row col-lg-offset-0" style="margin-top: 30px; margin-left: 30px;">
						<h4><a href="<?= base_url('admin/admin_dashboard') ?>" style="color: #3479B6; text-decoration: none;">Home</a> / User Activity</h4>
					</div>
					<div class="row" style="margin-left: 1px;">
						<div class="col-lg-5">
							<div class="row" style="margin-left: 15px;">
								<h1>USER ACTIVITY</h1>
							</div>
						</div>
					</div><br> <!-- ROW 1 -->

					<div class="row col-lg-offset-0 img-rounded" style="background-color: #3479B6;">
						<div class="col-lg-2">
							<h4 class="text-center" style="color: #fff;">DATE / TIME</h4>
						</div>
						<div class="col-lg-2">
							<h4 class="text-center" style="color: #fff;">USER NAME</h4>
						</div>
						<div class="col-lg-4">
							<h4 class="col-lg-offset-5" style="color: #fff;">EMAIL</h4>
						</div>
						<div class="col-lg-2">
							<h4 class="col-lg-offset-2" style="color: #fff;">IP ADDRESS</h4>
						</div>
						<div class="col-lg-2">
							<h4 class="col-lg-offset-1" style="color: #fff;">USER AREA</h4>
						</div>
					</div>

				<!-- main row area -->
				<div class="row col-lg-offset-0" style="height: 378px; overflow-x: hidden; overflow-y: scroll;">
				<?php
				if(count($data))
				{
				foreach ($data as $info):
				?>
					<div id="username" class="row col-lg-offset-0 text-center" style="margin-top: 5px;border-bottom: 1px solid black;">
						<div class="col-lg-2">
							<h4><?= $info->loginTime ?></h4><br>
						</div>
						<div class="col-lg-2 text-center">
							<p class="col-lg-offset-1" style="font-size: 18px;"><?= $info->userName ?></p>
						</div>
						<div class="col-lg-4 col-lg-offset-0 text-center">
							<p class="col-lg-offset-1" style="font-size: 18px;"><?= $info->userEmail ?></p>
						</div>
						<div class="col-lg-2 text-center">
							<p class="col-lg-offset-2" style="font-size: 18px;"><?= $info->ipAddress ?></p>
						</div>
						<?php
						if($info->emailVerification =="1")
						{
						?>
						<div class="col-lg-2">
							<b style="color: green">Verified</b>
						</div>
						<?php
						}
						else
						{
						?>
						<div class="col-lg-2">
							<b style="color: red">Pending</b>
						</div>
						<?php
						}
						?>
					</div><!-- ROW 1.1 -->
					
				<?php
				endforeach;
				}
				else
				{
				?>
				<h1 style="text-align: center;">No records found</h1>
				<?php
				
				}
				?>
				</div> <!-- end of main row area -->
				</div> <!-- end of right area -->