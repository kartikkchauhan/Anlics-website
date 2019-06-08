				
				<script type="application/javascript">
					/** After windod Load */
					$(window).bind("load", function() {
					  window.setTimeout(function() {
					    $(".alert").fadeTo(500, 0).slideUp(500, function(){
					        $(this).remove();
					    });
					}, 4000);
					});
				</script>
				<div class="col-lg-10">
					<div class="row col-lg-offset-0">
						<div class="col-lg-4 well" style="background-color: #3479B6; color: #fff; height: 125px;">
							<div class="row col-lg-offset-2">
								<h3>CREATE WRITTER</h3>
							</div>
						</div>

						<a href="<?= base_url('admin/view_writer') ?>" style="color: #3479B6; text-decoration: none;"><div class="col-lg-4 well" style="background-color: #F1F1F1; color: #3479B6; border: 2px solid #D9D9D9; height: 125px;">
							<div class="row col-lg-offset-3">
								<h3>VIEW WRITTER</h3>
							</div>
						</div></a>

						<a href="<?= base_url('admin/update_writer') ?>" style="color: #fff; text-decoration: none;"><div class="col-lg-4 well" style="background-color: #3479B6; color: #fff; height: 125px;">
							<div class="row col-lg-offset-2">
								<h3>UPDATE WRITTER</h3>
							</div>
						</div></a>
					</div> <!-- ROW 1 -->


					<?php

						if ($this->session->flashdata('item')) {
						# code...

						$message=$this->session->flashdata('item');
					

					?>
					<div class="<?php echo $message['class'] ?>" style="text-align: center;"><?php echo $message['msg']; ?>

					</div>

					<?php
					}
					?>

					<?= form_open('admin/addWriter') ?>
					<div class="row" style="margin-top: 20px; height: 440px;"><br>
						<div class="row col-lg-offset-0">
							<div class="col-lg-5 col-lg-offset-0">
								<span style="font-size: 20px;">Writter Name&nbsp;</span><input type="text" name="writerName" id="admin_name" placeholder="Enter your name..." style="width: 70%; height: 40px; border: 2px solid #3479B6; padding-left: 5px;" />
								<?= form_error('writerName',"<p style='color:red;text-align:center'>",'</p>') ?>
							</div>
							<div class="col-lg-6">
								<span style="font-size: 20px;">Email Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="email" name="writerEmail" id="admin_name" placeholder="Enter your email..." style="width: 60%; height: 40px; border: 2px solid #3479B6; padding-left: 5px;" />
								<?= form_error('writerEmail',"<p style='color:red;text-align:center'>",'</p>') ?>
							</div>
						</div><br><br>

						<div class="row col-lg-offset-0">
							<div class="col-lg-5 col-lg-offset-0">
								<span style="font-size: 20px;">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="password" name="writerPassword" placeholder="Enter your password..." style="width: 70%; height: 40px; border: 2px solid #3479B6; padding-left: 5px;" />
								<?= form_error('writerPassword',"<p style='color:red;text-align:center'>",'</p>') ?>
							</div>
							
						</div><br>

						<div class="row col-lg-offset-8">
							<button class="btn btn-primary" style="margin-left: 113px;">Create Account</button>
						</div>
					</div> <!-- ROW 2 -->
					<?= form_close('') ?>

				</div> <!-- end of right area -->