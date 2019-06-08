<div class="col-lg-10">
					<div class="row col-lg-offset-0" style="margin-top: 30px; margin-left: 30px;">
						<h4><a href="<?= base_url('admin/admin_dashboard') ?>" style="color: #3479B6; text-decoration: none;">Home</a> / <a href="<?= base_url('admin/content_writer') ?>" style="color: #3479B6; text-decoration: none;">Content Writter</a> / View Writter</h4>
					</div>
					<div class="row" style="margin-left: 1px;">
						<div class="col-lg-5">
							<div class="row" style="margin-left: 15px;">
								<h1>VIEW WRITTER</h1>
							</div>
						</div>
					</div><br> <!-- ROW 1 -->

					<div class="row col-lg-offset-0 img-rounded" style="background-color: #3479B6;">
						<div class="col-lg-2">
							<h4 class="text-center" style="color: #fff;">DATE / TIME</h4>
						</div>
						<div class="col-lg-2">
							<h4 class="text-center" style="color: #fff;">WRITTER NAME</h4>
						</div>
						<div class="col-lg-4">
							<h4 class="col-lg-offset-1" style="color: #fff;">WRITTER EMAIL ADDRESS</h4>
						</div>
						<div class="col-lg-2">
							<h4 class="col-lg-offset-2" style="color: #fff;">IP ADDRESS</h4>
						</div>
						<div class="col-lg-2">
							<h4 class="col-lg-offset-2" style="color: #fff;">ACTION</h4>
						</div>
					</div>

				<!-- main row area -->
					<div class="row col-lg-offset-0" style="height: 378px; overflow-x: hidden; overflow-y: scroll;">
						<div id="username" class="row col-lg-offset-0" style="margin-top: 5px;">
							<div class="col-lg-2 text-center">
								<h4>6-2-18 10:00 A.M</h4><br>
							</div>
							<div class="col-lg-2">
								<p class="col-lg-offset-1" style="font-size: 18px;">Kartik Chauhan</p>
							</div>
							<div class="col-lg-4 col-lg-offset-0">
								<p class="col-lg-offset-1" style="font-size: 18px;">kartikchauhan100@gmail.com</p>
							</div>
							<div class="col-lg-2">
								<p class="col-lg-offset-2" style="font-size: 18px;">103.23.33.01</p>
							</div>
							<div class="col-lg-2">
								<img id="sendmsg" src="<?= base_url('uploads/dummy/message.png')?>" class="col-lg-offset-1" title="Send Message" style="width: 30px; height: 30px; cursor: pointer;">
								<span id="remove" class="fa fa-remove col-lg-offset-4" style="font-size: 20px; color: red; cursor: pointer;" title="Deactivate Account"></span>
							</div>
						</div> <!-- ROW 1.1 -->

						<div id="msgbox" class="col-lg-offset-2" style="width: 50%; height: 250px;">
							<div class="row"><br>
								<textarea class="col-lg-offset-1" style="width: 83%; height: 150px; border: 2px solid #3479B6; padding-left: 10px; padding-top: 10px;" placeholder="Send Message..."></textarea>
							</div>
							<div class="row">
								<div class="col-lg-5">
									<button id="send" class="btn btn-primary pull-right" style="margin-top: 5px; margin-right: 40px;">Send Message <span class="fa fa-send"></span>
									</button>
								</div>
								<div class="col-lg-6">
									<button id="cancel" class="btn btn-primary" style="margin-top: 5px; margin-left: 190px;">Cancel <span class="fa fa-remove"></span>
									</button>
								</div>
							</div> <!-- SEND MESSAGE AREA -->
						</div> <!-- SEND MESSAGE AREA -->

						<div id="close" class="row col-lg-offset-3" style="width: 50%; height: 100px;"><br>
							<div class="well" style="width: 83%; height: 100px;">
								<p style="color: green; font-size: 15px;">Are you sure you want to Deactivate Account ?</p>
								<button id="confirmuser" class="btn btn-primary col-lg-offset-7">Confirm</button>
								<button id="canceluser" class="btn btn-primary pull-right">Cancel</button>
							</div>
						</div> <!-- DEACTIVATE ACCOUNT AREA -->
					</div> <!-- end of main row area -->

				</div> <!-- end of right area -->