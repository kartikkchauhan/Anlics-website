<div class="col-lg-8" style="margin-top: 70px;" id="main">
	<div class="row" style="border:1px solid #DDDDDD">
		<?php
			foreach (array_slice($anlicsArticle, 0,1) as $article)
			{

		?>
		<div class="col-lg-12" style="text-align: center;">
			<h1 style="font-family: sofia;"><?= anchor(base_url('user/fullDetail/'.$article->postId),$article->title) ?></h1>
			<div class="col-lg-12 ">
				<div class="text-left col-lg-6">
					<b>BY : </b> <span class="text-info"><?= $article->userName ?> </span>
				</div>
				<div class="text-right col-lg-6">
					<span class="text-info"><?= $article->date?> </span>
				</div>
			</div>
			<p>
				<img src="<?= base_url('uploads/articles/'.$article->banner)?>" style="height: 300px; width: 80%; border: 0px solid;margin-top: 20px; ">
			</p>
			<p><strong style="font-size: 15px">Share on:</strong>
			<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://anlics.com/user/fullDetail/<?= $article->postId ?>&amp;src=sdkpreparse"><i class="fa fa-facebook" title="Facebook" style="font-size: 30px; color: #4267B2;cursor: pointer;margin-left: 15px;"></i> </a>
			<a href="https://plus.google.com/share?url=http://www.anlics.com/user/fullDetail/<?= $article->postId ?>" onclick="javascript:window.open(this.href,
  			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
			<i class="fa fa-google-plus" title="Google Plus" style="font-size: 30px; color: red;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			<a class="twitter-share-button"
			  href="https://twitter.com/intent/tweet?url=http://www.anlics.com/user/fullDetail/<?= $article->postId ?>" data-size="large" target="_blank">
			<i class="fa fa-twitter" title="Twitter" style="font-size: 30px; color: #17BF63;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			</p>
		</div>
		<?php
		}
		?>
	</div>
	
	<h1 style="font-size: 14px;">VIDEOS</h1>
	<div class="row" style="border:1px solid #DDDDDD; margin-top: 10px;overflow: hidden; height:250px">
		<div class="col-lg-12" style="text-align: center; margin-top: 0px; margin-bottom: 0px; ">
			<?php
			foreach ($articles as $article) {
			if($article->type === "2")
			{

			?>
			<div class="col-lg-4">
				<div class="row col-lg-12" style="">
					<video style="height: 200px; width: 100%; border: 0px solid;"  controls>
				  	<source src="<?= base_url('uploads/articles/videos/'.$article->video) ?>" type="video/mp4">
				  	<source src="<?= base_url('uploads/articles/videos/'.$article->video) ?>.ogg" type="video/ogg">
					</video>
				</div>
				
				<div class="row col-lg-12" style="width: 100%;text-overflow: ellipsis;">
					<p><?= anchor(base_url('user/fullDetails/'.$article->articleId),$article->title) ?></p>
				</div>
			</div>
			<?php
			}
			}
			?>

		</div>
	</div>
	<h1 style="font-size: 14px;">LATEST NEWS</h1>
	<div class="row" style="margin-top: 10px;border:1px solid #DDDDDD; height: auto;">
		<?php 
		if(count($anlicsArticle))
		{
		foreach (array_slice($anlicsArticle, 0,10) as $article)
		{
		?>
			<div class="col-lg-12" style="margin-top: 10px; margin-bottom: 10px;">
				<div class="col-lg-4">
					<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 150px; width: 100%; border: 2px solid; ">
				</div>
				<div class="col-lg-8">
				<p style=""><?= anchor(base_url('user/fullDetail/'.$article->postId),$article->title) ?></p>
				</div>
			</div>
			<div class="col-lg-12 ">
				<div class="text-center col-lg-6">
					<b>BY : </b> <span class="text-info"><?= $article->userName ?> </span>
				</div>
				<div class="text-right col-lg-6">
					<span class="text-info"><?= $article->date?> </span>
				</div>
				<hr>
			</div>
		<?php 
		}
		}
		else
		{
		?>
			<div class="col-lg-12" style="text-align: center;margin-top: 10px; margin-bottom: 10px;">
				<div class="col-lg-12">
				<p style="font-family: 'Rosarivo'; font-size: 20px;">No records Found</p>
				</div>
			</div>
		<?php		
		}
	 	?>
	</div>
	<div class=" text-right"><span class="text-info" style="cursor: pointer;color: black"></span></div>
</div>