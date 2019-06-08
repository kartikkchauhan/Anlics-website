				<div class="col-lg-10">
					<div class="row" style="margin-top: 30px; margin-left: 30px;">
						<h4><a href="<?= base_url('admin/admin_dashboard') ?>" style="color: #3479B6; text-decoration: none;">Home</a> / <a href="<?= base_url('admin/manage_article') ?>" style="color: #3479B6; text-decoration: none;">Manage Articles</a> / Live Articles</h4>
					</div>
					<div class="row" style="margin-left: 1px;">
						<div class="col-lg-4">
							<div class="row" style="margin-left: 15px;">
								<h1>LIVE ARTICLES</h1>
							</div>
						</div>
					</div><br> <!-- ROW 1 -->

					<div class="row col-lg-offset-0 img-rounded" style="background-color: #3479B6;">
						<div class="col-lg-1">
							<h4 class="text-center" style="color: #fff;">ID</h4>
						</div>
						<div class="col-lg-2">
							<h4 class="text-center" style="color: #fff;">IMAGE / VIDEO</h4>
						</div>
						<div class="col-lg-6">
							<h4 class="col-lg-offset-4" style="color: #fff;">TITLE</h4>
						</div>
						<div class="col-lg-3">
							<h4 class="col-lg-offset-3" style="color: #fff;">BY USER</h4>
						</div>
					</div>

				<!-- main row area -->
					<div class="row col-lg-offset-0" style="height: 378px; overflow-x: hidden; overflow-y: scroll;">
					<?php
					if(count($livearticles))
					{
					foreach ($livearticles as $info): 
					?>
						<div class="row col-lg-offset-0" style="margin-top: 5px;">
							<div class="col-lg-1 text-center" style="height: 120px;">
								<h4><?= $info->articleId ?></h4><br>
							</div>
							<div class="col-lg-2">
								<img src="<?= base_url('uploads/dummy/user.png')?>" style="width: 150px; height: 118px; border-radius: 10%;">
							</div>
							<div class="col-lg-6 col-lg-offset-0" style="height: 120px;">
								<h4><?= $info->title ?></h4>
							</div>
							<div class="col-lg-3 col-lg-offset-0">
								<div class="row col-lg-offset-0">
									<h4><?= $info->userName ?></h4>
								</div>
								<div class="row col-lg-offset-0">
									<h4><?= $info->userEmail ?></h4>
								</div>
								<div class="row col-lg-offset-0">
									<h4><?= $info->date ?></h4>
								</div>
							</div>
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