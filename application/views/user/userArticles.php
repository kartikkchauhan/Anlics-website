
<?php include('userHeader.php'); ?>

<!--BODY SECTION  -->	
<div class="row" style="border:1px solid #F2F2F2; margin-top: 70px;">
	<h1 style="text-align: center;">My Articles</h1>
	<?php if (isset($responce)) 
		{	
			echo $responce;
		}
	?>
	<div class="col-lg-12" style="margin-top: 50px;">
		<div class="row">
			<div class="col-lg-2" style="text-align: center;">
				<span style="font-family: Rosarivo;"> <h3>Article ID</h3> </span>
			</div>
			<div class="col-lg-7" style="text-align: center;">
				<span style="font-family: Rosarivo;"> <h3>Article Title</h3> </span>
			</div>
			<div class="col-lg-3" style="text-align: center;">
				<span style="font-family: Rosarivo;"> <h3>Action</h3> </span>
			</div>
		</div>
	</div> 
	<?php
	foreach ($articles as $info):
	?>
	<div class="col-lg-12" style="margin-top: 20px;margin-bottom: 50px;">
		<div class="row">
			<div class="col-lg-2" style="text-align: center;">
				<span style="font-family: Rosarivo;"> <strong><?= $info->articleId ?></strong> </span>
			</div>
			<div class="col-lg-7" style="text-align: center;">
				<span style="font-family: Rosarivo;"> <strong><?= $info->title ?></strong> </span>
			</div>
			<div class="col-lg-3" style="text-align: center;">
				<?= anchor(base_url('user/fullDetails/'.$info->articleId),"<button type='button' class='btn btn-primary' id=''>View</button>") ?>
				<?= anchor(base_url('user/editDetails/'.$info->articleId),"<button type='button' class='btn btn-primary' id=''>Edit</button>") ?>
				<?= anchor(base_url('user/fullDetails/'.$info->articleId),"<button type='button' class='btn btn-primary' id=''>Delete</button>") ?>
			</div>
		</div>
	</div>
	<?php
		endforeach;
	?>

</div>
<!--BODY SECTION END  -->


<?php include("userFooter.php");?>
