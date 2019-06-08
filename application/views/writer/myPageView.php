<!--BODY SECTION  -->	
<div class="row" style="border:1px solid #F2F2F2; margin-top: 0px;">
	<?php
	foreach ($article as $info):
	?>
	<h1 style="text-align: center;"><?= $info->title ?></h1>
	<div class="col-lg-12" style="margin-top: 50px;">
		<div class="row">
			<div class="image" style="text-align: center;">
				<img src="<?= base_url('uploads/articles/'.$info->banner) ?>" style="height: 500px; width: 80%; border: 2px solid;margin-top: 20px; ">
			</div>
		</div>
	</div> 
	<div class="col-lg-12" style="margin-top: 20px;margin-bottom: 50px;">
		<div class="row">
			<div class="col-lg-12">
				<span style="font-family: Rosarivo;"> <strong><?= $info->data ?></strong> </span>
			</div>
		</div>
	</div>
	<?php
		endforeach;
	?>

</div>
<!--BODY SECTION END  -->
