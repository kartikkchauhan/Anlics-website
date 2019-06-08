<!--BODY SECTION  -->	
<div class="row" style="border:1px solid #F2F2F2; margin-top: 0px;">
	<h1 style="text-align: center;">My Pages</h1>
	<?php if (isset($responce)) 
		{	
			echo $responce;
		}
	?>
	<div class="col-lg-12" style="margin-top: 50px;">
		<div class="row">
			<div class="col-lg-2" style="text-align: center;">
				<span style="font-family: Rosarivo;"> <h3>Page ID</h3> </span>
			</div>
			<div class="col-lg-7" style="text-align: center;">
				<span style="font-family: Rosarivo;"> <h3>Page Title</h3> </span>
			</div>
			<div class="col-lg-3" style="text-align: center;">
				<span style="font-family: Rosarivo;"> <h3>Action</h3> </span>
			</div>
		</div>
	</div> 
	<?php
	foreach ($article as $info):
	?>
	<div class="col-lg-12" style="margin-top: 20px;margin-bottom: 50px;">
		<div class="row">
			<div class="col-lg-2" style="text-align: center;">
				<span style="font-family: Rosarivo;"> <strong><?= $info->postId ?></strong> </span>
			</div>
			<div class="col-lg-7" style="text-align: center;">
				<span style="font-family: Rosarivo;"> <strong><?= $info->title ?></strong> </span>
			</div>
			<div class="col-lg-3" style="text-align: center;">
				<?= anchor(base_url('writer/pageViewer/'.$info->postId),"<button type='button' class='btn btn-primary' id=''>View</button>") ?>
			</div>
		</div>
	</div>
	<?php
		endforeach;
	?>

</div>
<!--BODY SECTION END  -->
