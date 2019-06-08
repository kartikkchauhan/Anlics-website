				<div class="col-lg-10">
					<div class="row col-lg-offset-0" style="margin-top: 30px; margin-left: 30px;">
						<h4><a href="<?= base_url('admin/admin_dashboard') ?>" style="color: #3479B6; text-decoration: none;">Home</a> / <a href="<?= base_url('admin/manage_article') ?>" style="color: #3479B6; text-decoration: none;">Manage Articles</a> / All Articles</h4>
					</div>
					<div class="row" style="margin-left: 1px;">
						<div class="col-lg-5">
							<div class="row" style="margin-left: 15px;">
								<h1>ALL ARTICLES</h1>
							</div>
						</div>
					</div><br> <!-- ROW -->

					<div class="row col-lg-offset-0 img-rounded" style="background-color: #3479B6;">
						<div class="col-lg-1">
							<h4 class="text-center" style="color: #fff;">ID</h4>
						</div>
						<div class="col-lg-2">
							<h4 class="text-center" style="color: #fff;">IMAGE / VIDEO</h4>
						</div>
						<div class="col-lg-7">
							<h4 class="col-lg-offset-3" style="color: #fff;">TITLE</h4>
						</div>
						<div class="col-lg-2">
							<h4 style="color: #fff;">STATUS</h4>
						</div>
					</div> <!-- ROW 1 -->

				<!-- main row area -->
					<div class="row" style="height: 378px; overflow-x: hidden; overflow-y: scroll;">
					<?php
					if(count($allarticles))
					{
					foreach ($allarticles as $info): 
					?>
						<div class="row col-lg-offset-0" style="margin-top: 5px;">
							<div class="col-lg-1 text-center" style="height: 120px;">
								<h4><?= $info->articleId ?></h4><br>
							</div>
							<div class="col-lg-2">
								<img src="<?= base_url('uploads/dummy/user.png')?>" style="width: 150px; height: 118px; border-radius: 10%;">
							</div>
							<div class="col-lg-7 col-lg-offset-0" style="height: 120px;">
								<h4><?= $info->title ?></h4>
							</div>
							<?php
							if($info->verification =="1")
							{
							?>
							<div class="col-lg-2">
								<div style="float: left; margin-top: 5px; margin-right: 5px; width: 10px; height: 10px; border-radius: 50%; background-color: #00ED00;">
								</div><b>Active</b>
							</div>
							<?php
							}
							else
							{
							?>
							<div class="col-lg-2">
								<div style="float: left; margin-top: 5px; margin-right: 5px; width: 10px; height: 10px; border-radius: 50%; background-color: red;">
								</div><b>Pending</b>
							</div>
							<?php
							}
							?>
						</div> <!-- ROW 2 -->

					<?php
					endforeach;
					}	
					else
					{
					?>
						<div class="row col-lg-offset-0" style="margin-top: 5px;">
							<h2 style="text-align: center;">No records found.</h2>
						</div> <!-- ROW 3 -->
					<?php
					}
					?>
					</div> <!-- end of main row area -->
				</div> <!-- end of right area -->