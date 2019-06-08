
<?php include('userHeader.php'); ?>

<!--BODY SECTION  -->	
<div class="row" style="border:1px solid #F2F2F2; margin-top: 70px;">
	<h1 style="text-align: center;">My Articles</h1>
	<?php if (isset($responce)) 
		{	
			echo $responce;
		}
	?>
	<div class="col-lg-12">
	<?php
	foreach ($article as $info):
		if($info->type == "1")
		{
	?>
	<?= form_open_multipart(base_url('user/updateArticle')); ?>
		<input type="hidden" name="type" value="<?= $info->type ?>">
		<input type="hidden" name="articleId" value="<?= $info->articleId ?>">
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-3">
				<strong style="font-size: 25px">Article Id</strong>
			</div>
			<div class="col-lg-12">
				<input type="text" name="" id="" class="form-control" value="<?= $info->articleId ?>" style="height: 50px; width: 90%" disabled>
			</div>
		</div>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-1">
				<strong style="font-size: 25px">Title</strong>
			</div>
			<div class="col-lg-12">
				<input type="text" name="title" id="title" class="form-control" placeholder="Add title Maximum Length 150 Allowed" value="<?= $info->title ?>" style="height: 50px; width: 90%" maxlength="150">
				<?php echo form_error('title'); ?>
			</div>
		</div>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-2">
				<strong style="font-size: 25px">Description</strong>
			</div>
			<div class="col-lg-12">
				<textarea name="description" id="description" class="form-control" placeholder="Add Description Maximum Length 800 Allowed" value="" style="height: 180px; width: 90%" maxlength="1000">
					<?= $info->description ?>
				</textarea>
				<?php echo form_error('description'); ?>
			</div>
		</div>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-3">
				<img src="<?=base_url('uploads/articles/'.$info->image1)?>" alt="" height="200px" width="100%">
				<label>Image 1</label><input type="file" accept="image/*" class="form-control" name="image1">
			</div>
			<div class="col-lg-3">
				<img src="<?=base_url('uploads/articles/'.$info->image2)?>" alt="" height="200px" width="100%">
				<label> Add Image 2</label>(optional)<input type="file" accept="image/*" class="form-control" name="image2">
			</div>
			<div class="col-lg-3">
				<img src="<?=base_url('uploads/articles/'.$info->image3)?>" alt="" height="200px" width="100%">
				<label>Add Image 3</label>(optional)<input type="file" accept="image/*" class="form-control" name="image3">
			</div>
			<div class="col-lg-3">
				<img src="<?=base_url('uploads/articles/'.$info->image4)?>" alt="" height="200px" width="100%">
				<label>Add Image 4</label>(optional)<input type="file" accept="image/*" class="form-control" name="image4">
			</div>
			
		</div>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-12">
				<center><button class="btn btn-primary" type="Submit" style="width: 30%">Update It !!</button></center>
			</div>
		</div>
	</form>
	<?php
	}
	else if($info->type == "2")
	{
	?>
	<?= form_open_multipart(base_url('user/updateVideoArticle')); ?>
		<input type="hidden" name="type" value="<?= $info->type ?>">
		<input type="hidden" name="articleId" value="<?= $info->articleId ?>">
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-3">
				<strong style="font-size: 25px">Article Id</strong>
			</div>
			<div class="col-lg-12">
				<input type="text" name="" id="" class="form-control" value="<?= $info->articleId ?>" style="height: 50px; width: 90%" disabled>
			</div>
		</div>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-1">
				<strong style="font-size: 25px">Title</strong>
			</div>
			<div class="col-lg-12">
				<input type="text" name="title" id="title" class="form-control" placeholder="Add title Maximum Length 150 Allowed" value="<?= $info->title ?>" style="height: 50px; width: 90%" maxlength="150">
				<?php echo form_error('title'); ?>
			</div>
		</div>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-2">
				<strong style="font-size: 25px">Description</strong>
			</div>
			<div class="col-lg-12">
				<textarea name="description" id="description" class="form-control" placeholder="Add Description Maximum Length 800 Allowed" value="" style="height: 180px; width: 90%" maxlength="1000">
					<?= $info->description ?>
				</textarea>
				<?php echo form_error('description'); ?>
			</div>
		</div>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-3">
				<video style="height: 200px; width: 100%;" controls>
				  	<source src="<?= base_url('uploads/articles/videos/'.$info->video) ?>" type="video/mp4">
				  	<source src="<?= base_url('uploads/articles/videos/'.$info->video) ?>.ogg" type="video/ogg">
				</video>
				<label>Update Video</label><input type="file" accept="video/*" class="form-control" name="videoData">
			</div>
		</div>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-12">
				<center><button class="btn btn-primary" type="Submit" style="width: 30%">Update It !!</button></center>
			</div>
		</div>
	</form>
	<?php
	}
	endforeach;
	?>
	
</div>

</div>
<!--BODY SECTION END  -->


<?php include("userFooter.php");?>
