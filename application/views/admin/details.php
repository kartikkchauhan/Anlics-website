<div class="col-lg-10" style="margin-top: 70px;margin-bottom: 70px;" id="main">
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

			<p>
			<?= anchor(base_url('admin/acceptIt/'.$article->articleId),"<button class='btn btn-primary'>Accept</button>") ?>
			<?= anchor(base_url('admin/deleteIt/'.$article->articleId),"<button class='btn btn-primary'>Delete</button>") ?>
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
			
			<p>
			<?= anchor(base_url('admin/acceptIt/'.$article->articleId),"<button class='btn btn-primary'>Accept</button>") ?>
			<?= anchor(base_url('admin/deleteIt/'.$article->articleId),"<button class='btn btn-primary'>Delete</button>") ?>
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
</div>