<div class="col-lg-8" style="margin-top: 70px;" id="main">

	<h1 style="font-size: 22px;">BUSINESS</h1>
	<div class="row" style="margin-top: 10px;border:1px solid #DDDDDD; height: auto;">
		<?php 
		if(count($anlicsArticle))
		{
		foreach ($anlicsArticle as $article)
		{

		if($article->categoryName == "NEWS" && $article->subCategoryName=="BUSINESS")	
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
</div>