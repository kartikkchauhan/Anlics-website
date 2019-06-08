	<div class="col-lg-4" style="margin-top: 60px">
		
		<div class="col-lg-12" style="text-align: center; margin-bottom: 15px;margin-top: 10px;">
			<a href="<?= base_url('user/writeContent')?>"><strong style="font-size: 18px">WRITE CONTENTS <span class="fa fa-pencil-square-o"></span></strong></a>
		</div>
				<div class="col-lg-12">
			
			<div style="height: auto;overflow-x: hidden; border: 0px; border-radius: 20px">
				<div class="row col-lg-12">
					<div style="margin-top: 10px;"><h1 style="font-size: 14px">USERS STORIES</h1></div>
				</div>
				
				<?php
					foreach (array_slice($articles, 0,10) as $article) {
					if($article->type ==="1")
					{

				?>
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin: 0px 0px 10px 0px; padding: 5px;">
					<div class="col-lg-4" style="padding-right: 0px; padding-left: 0px;">
						<img src="<?= base_url('uploads/articles/'.$article->image1) ?>" style="width: 100%;">
					</div>
					<div class="col-lg-8">
						<?= anchor(base_url('user/fullDetails/'.$article->articleId),$article->title) ?>
					</div>
				</div>
				<?php
					}
					else if ($article->type ==="2") 
					{
				?>
				
				<div class="row col-lg-12" style="border: 1px solid #E5E5E5; margin: 0px 0px 10px 0px; padding: 5px;">
					<div class="col-lg-4" style="padding-right: 0px; padding-left: 0px;">
						<video style="width: 100%; ">
						  	<source src="<?= base_url('uploads/articles/videos/'.$article->video) ?>" type="video/mp4">
						  	<source src="<?= base_url('uploads/articles/videos/'.$article->video) ?>.ogg" type="video/ogg">
						</video>
					</div>
					<div class="col-lg-8">
						<?= anchor(base_url('user/fullDetails/'.$article->articleId),$article->title) ?>
					</div>
				</div>
				<?php
					}

					}
				?>
			</div>
		</div>

	</div>