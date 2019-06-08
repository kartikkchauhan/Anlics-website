<div class="col-lg-12" style="margin-top: 70px;margin-bottom: 70px;" id="main">
	<div class="row" style="border:1px solid #DDDDDD">
		<?php
			if(count($articleDetail))
			{
			foreach (array_slice($articleDetail, 0,1) as $article) 
			{

		?>
		<div class="col-lg-12">
			<h1 style="font-family: sofia;text-align:center"><?= $article->title ?></h1>
			<div class="col-lg-12 ">
				<div class="text-left col-lg-6">
					<b>BY : </b> <span class="text-info"><?= $article->userName ?> </span>
				</div>
				<div class="text-right col-lg-6">
					<span class="text-info"><?= $article->date?> </span>
				</div>
			</div>

			<p style="text-align: center;"><strong style="font-size: 15px">Share on:</strong>
			<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://anlics.com/home/fullDetails/<?= $article->postId ?>&amp;src=sdkpreparse"><i class="fa fa-facebook" title="Facebook" style="font-size: 30px; color: #4267B2;cursor: pointer;margin-left: 15px;"></i> </a>
			<a href="https://plus.google.com/share?url=http://www.anlics.com/home/fullDetails/<?= $article->postId ?>" onclick="javascript:window.open(this.href,
  			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
			<i class="fa fa-google-plus" title="Google Plus" style="font-size: 30px; color: red;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			<a class="twitter-share-button"
			  href="https://twitter.com/intent/tweet?url=http://www.anlics.com/home/fullDetails/<?= $article->postId ?>" data-size="large" target="_blank">
			<i class="fa fa-twitter" title="Twitter" style="font-size: 30px; color: #17BF63;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			</p>

			<p style="text-align: center;"><img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 500px; width: 80%; border: 2px solid;margin-top: 20px; "></p>
			
			<p style="font-family: 'Rosarivo'; font-size: 20px;margin-top: 30px;">	
				<?= $article->data ?>
			</p>
		</div>
		<?php
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
					<img src="<?=base_url('uploads/users/'.$comment->userImg)?>" style="height: 40px; width: 40px; border-radius: 20px;cursor: pointer;" title="<?= $comment->userName ?>">
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
						<?php
							foreach($result as $img):
						?>
						<img src="<?=base_url('uploads/users/'.$img->userImg)?>" style="height: 40px; width: 40px; border-radius: 20px;cursor: pointer;" title="kartik Chauhan">
						<?php
							endforeach;
						?>
					</div>

					<div class="col-lg-6">
						<?php echo form_open('user/postComments'); ?>
							<?php foreach ($articleDetail as $cmnt): ?>
							<input type="text" name="comment" style="height: 80px; border-radius: 20px;width: 100%;background-color: #F2F2F2;text-align: center;padding-top: 10px; ">
							<div><?php echo form_error('comment'); ?></div>
								<input type="hidden" name="articleId" value="<?= $cmnt->postId ?>">
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
