				<div class="col-lg-2">
					<div class="row" style="background-color: #EDEDED;">
						<center>
							<img src="<?= base_url('uploads/dummy/user.png') ?>" class="well" style="border-radius: 50%; width: 150px; height: 150px; margin: 5px; border: 10px solid #3579B5;">
							<h2 class="text-center" style="color: #3579B5; margin: 5px;">Kartik Chauhan</h2>
							<p class="text-center">Welcome to Anlics Technologies Admin Pannel</p>
							<a href="<?= base_url('admin/adminprofile') ?>">
							<span class="fa fa-user-o" title="Profile" style="font-size: 20px;"></span>
							</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<span class="fa fa-cog" title="Setting" style="font-size: 20px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="<?= base_url('admin/logout') ?>">
							<span class="fa fa-power-off" title="Logout" style="font-size: 20px;"></span></a>
						</center>
					</div> <!-- ROW 1 -->
					
					<div id="sidemenu" class="row">
						<ul>
							<li><a href="<?= base_url('admin/admin_dashboard') ?>"><span class="fa fa-dashboard"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin Dashboard</a></li>
							<li><a href="<?= base_url('admin/manage_article') ?>"><span class="fa fa-book"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage Article&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
							</li>
							<li><a href="<?= base_url('admin/useractivity') ?>"><span class="fa fa-users"></span>&nbsp;&nbsp;&nbsp;&nbsp;User Activity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
							<li><a href="<?= base_url('admin/manage_admin') ?>"><span class="fa fa-id-badge"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage Admins&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
							<li><a href="<?= base_url('admin/content_writer') ?>"><span class="fa fa-street-view"></span>&nbsp;&nbsp;&nbsp;&nbsp;Content Writter&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
						</ul>
					</div> <!-- ROW 2 -->
				</div> <!-- end of left area -->