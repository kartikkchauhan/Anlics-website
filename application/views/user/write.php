<div class="col-lg-12" style="margin-top: 70px;border:1px solid #DDDDDD;margin-bottom: 50px; ">
	<h1 style="text-align:center;">Share Your Content on Anlics</h1>
	<?php if (isset($responce)) {	echo $responce; } ?>
	<?= form_open_multipart(base_url('user/postContent')); ?>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-1">
				<strong style="font-size: 25px">Title</strong>
			</div>
			<div class="col-lg-12">
				<input type="text" name="title" id="title" class="form-control" placeholder="Add title Maximum Length 150 Allowed" style="height: 50px; width: 90%" maxlength="150">
				<?php echo form_error('title'); ?>
			</div>
		</div>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-2">
				<strong style="font-size: 25px">Description</strong>
			</div>
			<div class="col-lg-12">
				<textarea name="description" id="description" class="form-control" placeholder="Add Description Maximum Length 800 Allowed" style="height: 180px; width: 90%" maxlength="1000"></textarea>
				<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
				<script>
				CKEDITOR.replace( 'description' );
				</script>
				<?php echo form_error('description'); ?>
			</div>
		</div>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-3">
				<strong style="font-size: 25px">Type of content</strong>
			</div>
			<div class="col-lg-11" style="margin-left: 20px;">
				<select class="form-control" style="width: 30%; height: 50px;" id="contentType" name="contentType">
					<option value="1" selected>IMAGE</option>
    				<option value="2">VIDEO</option>
				</select>
				
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#contentType").change(function(){
					if($("#contentType").val() == 2)
					{
						$("#imagePanel").hide();
						$("#videoPanel").show();
					}
					else if($("#contentType").val() == 1)
					{
						$("#imagePanel").show();
						$("#videoPanel").hide();
					}
				});

				$(window).load(function(){
					$("#imagePanel").show();
					$("#videoPanel").hide();
				})
			})
		</script>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;" id="imagePanel">
			<div class="col-lg-3">
				<strong style="font-size: 25px">Upload Images</strong>
			<?php if (isset($uploadError)) {	echo $uploadError; } ?>
			</div>
			<div class="col-lg-12" style="margin-left: 20px;width: 80%">
				<label>Image 1</label><input type="file" accept="image/*" class="form-control" name="image1">
			</div><br>
			<div class="col-lg-12" style="margin-left: 20px;width: 80%">
				<label>Image 2</label>(optional)<input type="file" accept="image/*" class="form-control" name="image2">
			</div><br>
			<div class="col-lg-12" style="margin-left: 20px;width: 80%">
				<label>Image 3</label>(optional)<input type="file" accept="image/*" class="form-control" name="image3">
			</div>
			<div class="col-lg-12" style="margin-left: 20px;width: 80%">
				<label>Image 4</label>(optional)<input type="file" accept="image/*" class="form-control" name="image4">
			</div>
		</div>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;" id="videoPanel">
			<div class="col-lg-3">
				<strong style="font-size: 25px">Upload Videos</strong>
			</div>
			<div class="col-lg-12" style="margin-left: 20px;width: 80%">
				<label>Video</label><input type="file" accept="video/*" class="form-control" name="videoData">
			</div>
		</div>
		<div class="row" style="margin-top: 70px; margin-bottom: 70px;">
			<div class="col-lg-12">
				<center><button class="btn btn-primary" type="Submit" style="width: 30%">Submit It !!</button></center>
			</div>
		</div>
	</form>
	
</div>