<div class="col-lg-12" style="margin-top: 10px;" id="main">
	<div class="row" style="margin-top: 10px;border:1px solid #DDDDDD; height: auto;">
		<div class="col-lg-3" style="height:400px;overflow: hidden;">
			<h1 style="font-size: 14px">CAREER</h1>
			<div style="height:380px;overflow-x: hidden;overflow-y: hidden;">
				<?php
					foreach ($career as $article) {
				?>
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin-top: 10px;">
					<div class="col-lg-4">
						<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 50px; width: 100%;margin-top: 20px;border-radius: 50%; ">
					</div>
					<div class="col-lg-8" style="padding-top: 25px;height: 50px;overflow: hidden;">
						<?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class=" text-right"><span class="text-info" style="cursor: pointer;color: black"></span></div>
		</div>
		<div class="col-lg-3" style="height:400px;overflow: hidden;">
			<h1 style="font-size: 14px">TECHNOLOGIES</h1>
			<div style="height:380px;overflow-x: hidden;overflow-y: hidden;">
				<?php
					foreach ($tech as $article) {

				?>
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin-top: 10px;">
					<div class="col-lg-4">
						<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 50px; width: 100%;margin-top: 20px;border-radius: 50%; ">
					</div>
					<div class="col-lg-8" style="padding-top: 25px;height: 50px;overflow: hidden;">
						<?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class=" text-right"><span class="text-info" style="cursor: pointer;color: black"> </span></div>
		</div>
		<div class="col-lg-3" style="height:400px;overflow: hidden;">
			<h1 style="font-size: 14px">GADGETS</h1>
			<div style="height:380px;overflow-x: hidden;overflow-y: hidden;">
				<?php
					foreach ($gadgets as $article) {
				?>
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin-top: 10px;">
					<div class="col-lg-4">
						<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 50px; width: 100%;margin-top: 20px;border-radius: 50%; ">
					</div>
					<div class="col-lg-8" style="padding-top: 25px;height: 50px;overflow: hidden;">
						<?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class=" text-right"><span class="text-info" style="cursor: pointer;color: black"> </span></div>
		</div>
		<div class="col-lg-3" style="height:400px;overflow: hidden;">
			<h1 style="font-size: 14px">AUTOMOBILES</h1>
			<div style="height:380px;overflow-x: hidden;overflow-y: hidden;">
				<?php
					foreach ($auto as $article) {
				?>
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin-top: 10px;">
					<div class="col-lg-4">
						<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 50px; width: 100%;margin-top: 20px;border-radius: 50%; ">
					</div>
					<div class="col-lg-8" style="padding-top: 25px;height: 50px;overflow: hidden;">
						<?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class=" text-right"><span class="text-info" style="cursor: pointer;color: black"> </span></div>
		</div>
	</div>
</div>

<div class="col-lg-12" style="margin-top: 10px;" id="main">
	<div class="row" style="margin-top: 10px;border:1px solid #DDDDDD; height: auto;">
		<div class="col-lg-3" style="height:400px;overflow: hidden;">
			<h1 style="font-size: 14px">TOUR & TRAVELS</h1>
			<div style="height:380px;overflow-x: hidden;overflow-y: hidden;">
				<?php
					foreach ($tour as $article) {
				?>
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin-top: 10px;">
					<div class="col-lg-4">
						<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 50px; width: 100%;margin-top: 20px;border-radius: 50%; ">
					</div>
					<div class="col-lg-8" style="padding-top: 25px;height: 50px;overflow: hidden;">
						<?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class=" text-right"><span class="text-info" style="cursor: pointer;color: black"> </span></div>
		</div>
		<div class="col-lg-3" style="height:400px;overflow: hidden;">
			<h1 style="font-size: 14px">ENTERTAINMENT</h1>
			<div style="height:380px;overflow-x: hidden;overflow-y: hidden;">
				<?php
					foreach ($entertainment as $article) {
				?>
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin-top: 10px;">
					<div class="col-lg-4">
						<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 50px; width: 100%;margin-top: 20px;border-radius: 50%; ">
					</div>
					<div class="col-lg-8" style="padding-top: 25px;height: 50px;overflow: hidden;">
						<?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class=" text-right"><span class="text-info" style="cursor: pointer;color: black"> </span></div>
		</div>
		<div class="col-lg-3" style="height:400px;overflow: hidden;">
			<h1 style="font-size: 14px">FOODS</h1>
			<div style="height:380px;overflow-x: hidden;overflow-y: hidden;">
				<?php
					foreach ($foods as $article) {
				?>
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin-top: 10px;">
					<div class="col-lg-4">
						<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 50px; width: 100%;margin-top: 20px;border-radius: 50%; ">
					</div>
					<div class="col-lg-8" style="padding-top: 25px;height: 50px;overflow: hidden;">
						<?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class=" text-right"><span class="text-info" style="cursor: pointer;color: black"> </span></div>
		</div>
		<div class="col-lg-3" style="height:400px;overflow: hidden;">
			<h1 style="font-size: 14px">SPORTS</h1>
			<div style="height:380px;overflow-x: hidden;overflow-y: hidden;">
				<?php
					foreach ($sports as $article) {
				?>
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin-top: 10px;">
					<div class="col-lg-4">
						<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 50px; width: 100%;margin-top: 20px;border-radius: 50%; ">
					</div>
					<div class="col-lg-8" style="padding-top: 25px;height: 50px;overflow: hidden;">
						<?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class=" text-right"><span class="text-info" style="cursor: pointer;color: black"> </span></div>
		</div>
	</div>
</div>

<div class="col-lg-12" style="margin-top: 10px;" id="main">
	<div class="row" style="margin-top: 10px;border:1px solid #DDDDDD; height: auto;">
		<div class="col-lg-6" style="height:400px;overflow: hidden;">
			<h1 style="font-size: 14px">PHOTOS</h1>
			<div style="height:380px;overflow-x: hidden;overflow-y: hidden;">
				<?php
					foreach ($photos as $article) {
				?>
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin-top: 10px;">
					<div class="col-lg-2">
						<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 50px; width: 100%;margin-top: 20px;border-radius: 50%; ">
					</div>
					<div class="col-lg-8" style="padding-top: 25px;height: 50px;overflow: hidden;">
						<?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class=" text-right"><span class="text-info" style="cursor: pointer;color: black"> </span></div>
		</div>
		<div class="col-lg-6" style="height:400px;overflow: hidden;">
			<h1 style="font-size: 14px">HEALTH & FITNESS</h1>
			<div style="height:380px;overflow-x: hidden;overflow-y: hidden;">
				<?php
					foreach ($health as $article) {
				?>
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin-top: 10px;">
					<div class="col-lg-2">
						<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 50px; width: 100%;margin-top: 20px;border-radius: 50%; ">
					</div>
					<div class="col-lg-10" style="padding-top: 25px;height: 50px;overflow: hidden;">
						<?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class=" text-right"><span class="text-info" style="cursor: pointer;color: black"> </span></div>
		</div>
	</div>
</div>