<div class="col-lg-12" style="margin-top: 70px;margin-bottom: 70px;" id="main">
	<?php if (isset($responce)) {	echo $responce; } ?>
	<div class="row" style="border:1px solid #DDDDDD">
		<?php
			if(count($articleDetail))
			{
			foreach (array_slice($articleDetail, 0,1) as $article) {
			if($article->type ==="1")
			{

		?>
		<div class="col-lg-12" style="text-align: center;">
			<h1 style="font-family: sofia;"><?= $article->title ?></h1>
			<div class="col-lg-12 ">
				<div class="text-left col-lg-6">
					<b>BY : </b> <span class="text-info"><?= $article->userName ?> </span>
				</div>
				<div class="text-right col-lg-6">
					<span class="text-info"><?= $article->date?> </span>
				</div>
			</div>

			<p><strong style="font-size: 15px">Share on:</strong>
			<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://anlics.com/home/fullDetail/<?= $article->articleId ?>&amp;src=sdkpreparse"><i class="fa fa-facebook" title="Facebook" style="font-size: 30px; color: #4267B2;cursor: pointer;margin-left: 15px;"></i> </a>
			<a href="https://plus.google.com/share?url=http://www.anlics.com/home/fullDetail/<?= $article->articleId ?>" onclick="javascript:window.open(this.href,
  			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
			<i class="fa fa-google-plus" title="Google Plus" style="font-size: 30px; color: red;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			<a class="twitter-share-button"
			  href="https://twitter.com/intent/tweet?url=http://www.anlics.com/home/fullDetail/<?= $article->articleId ?>" data-size="large" target="_blank">
			<i class="fa fa-twitter" title="Twitter" style="font-size: 30px; color: #17BF63;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			</p>

			<p><img src="<?= base_url('uploads/articles/'.$article->image1) ?>" style="height: 500px; width: 80%; border: 2px solid;margin-top: 20px;"></p>
			
			<p style="font-family: 'Rosarivo'; font-size: 18px;margin-top: 30px;">	
				<?= $article->description ?>
			</p>
			<?php
			if($article->image2 !== "0")
			{
			?>
			<p><img src="<?= base_url('uploads/articles/'.$article->image2) ?>" style="height: 500px; width: 80%; border: 2px solid;margin-top: 20px; "></p>
			<?php
			}	
			?>
			<?php
			if($article->image3 !== "0")
			{
			?>
			<p><img src="<?= base_url('uploads/articles/'.$article->image3) ?>" style="height: 500px; width: 80%; border: 2px solid;margin-top: 20px; "></p>
			<?php
			}
			?>
			<?php
			if($article->image4 !== "0")
			{
			?>
			<p><img src="<?= base_url('uploads/articles/'.$article->image2) ?>" style="height: 500px; width: 80%; border: 2px solid;margin-top: 20px; "></p>
			<?php
			}	
			?>
		</div>
		<?php
		}
		else if($article->type === "2")
		{
		?>
			<div class="col-lg-12" style="text-align: center;">
			<h1 style="font-family: sofia;"><?= $article->title ?></h1>
			<div class="col-lg-12 ">
				<div class="text-left col-lg-6">
					<b>BY : </b> <span class="text-info"><?= $article->userName ?> </span>
				</div>
				<div class="text-right col-lg-6">
					<span class="text-info"><?= $article->date?> </span>
				</div>
			</div>
			
			<p><strong style="font-size: 15px">Share on:</strong>
			<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://anlics.com/home/fullDetail/<?= $article->articleId ?>&amp;src=sdkpreparse"><i class="fa fa-facebook" title="Facebook" style="font-size: 30px; color: #4267B2;cursor: pointer;margin-left: 15px;"></i> </a>
			<a href="https://plus.google.com/share?url=http://www.anlics.com/home/fullDetail/<?= $article->articleId ?>" onclick="javascript:window.open(this.href,
  			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
			<i class="fa fa-google-plus" title="Google Plus" style="font-size: 30px; color: red;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			<a class="twitter-share-button"
			  href="https://twitter.com/intent/tweet?url=http://www.anlics.com/home/fullDetail/<?= $article->articleId ?>" data-size="large" target="_blank">
			<i class="fa fa-twitter" title="Twitter" style="font-size: 30px; color: #17BF63;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			</p>

			<p>
				<video style="height: 500px; width: 80%; border: 0px solid;margin-top: 20px; " controls>
				  	<source src="<?= base_url('uploads/articles/videos/'.$article->video) ?>" type="video/mp4">
				  	<source src="<?= base_url('uploads/articles/videos/'.$article->video) ?>.ogg" type="video/ogg">
				</video>
			</p>

			<p style="font-family: 'Rosarivo'; font-size: 20px; margin-top: 30px;">
				<?= $article->description ?>
			</p>
		</div>
		<?php
		}
		}
		}
		else
		{
		?>
		<p style="font-family: 'Rosarivo'; font-size: 20px; margin-top: 30px;">
				No record found.
			</p>
		<?php
		}
		?>
	</div>
	<div class="row">
		<h3>Comments</h3>
		<div class="col-lg-12" style="border:1px solid #DDDDDD">
			<?php
			if(count($commentDetail))
			{
			foreach ($commentDetail as $comment) 
			{
			?>
			<div class="row" style="margin-top: 30px; margin-bottom: 20px;">
				<div class="col-lg-1">
					<img src="<?=base_url('uploads/users/'.$comment->userImg)?>" style="height: 40px; width: 40px; border-radius: 20px;cursor: pointer;" title="<?= $comment->userName?>">
				</div>

				<div class="col-lg-6">
					<div style="min-height: 40px; max-height: auto;border-radius: 20px;width: 100%;background-color: #F2F2F2;text-align: center;padding-top: 10px; ">
						<?= $comment->comment ?>
					</div>
				</div>
			</div>
			<?php
			}
			}
			else
			{
			?>
			<div class="row" style="margin-top: 30px; margin-bottom: 20px;">
				<div class="col-lg-12">
					<div style="min-height: 40px; max-height: auto;border-radius: 20px;width: 100%;background-color: #F2F2F2;text-align: center;padding-top: 10px; ">
						<p style="font-size: 20px">No comments on this article till now.</p>
					</div>
				</div>
			</div>
			<?php
			}
			?>
			<div class="row" style="margin-top: 70px; margin-bottom: 30px;">
				<center>
					<div class="col-lg-1">
						<?php foreach ($articleDetail as $cmnt): ?>
						<img src="<?=base_url('uploads/users/'.$cmnt->userImg)?>" style="height: 40px; width: 40px; border-radius: 20px;cursor: pointer;" title="kartik Chauhan">
					</div>

					<div class="col-lg-6">
						<?php echo form_open('user/postComment'); ?>
							<input type="text" name="comment" style="height: 80px; border-radius: 20px;width: 100%;background-color: #F2F2F2;text-align: center;padding-top: 10px; ">
							<div><?php echo form_error('comment'); ?></div>
								<input type="hidden" name="articleId" value="<?= $cmnt->articleId ?>">
							<?php endforeach ?>
							<button type="submit" class="btn btn-primary" style="margin-top: 10px;">
								Comment 
							</button>
						</form>
						
					</div>
				</center>
			</div>
		</div>
	</div>
</div>