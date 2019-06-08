<div class="col-lg-12">
	<?php if(isset($responce)){ echo $responce; }?>
	<?= form_open_multipart('writer/postArticle');?>
	<div style="margin-bottom: 20px;">
		<label style="font-size: 20px">TITLE</label>
		<input type="text" name="title" class="form-control" placeholder="Enter Your Story title.">
	</div>
	<div class="row" style="margin-bottom: 20px">
		<div class="col-lg-6">
			<select class="form-control" style="width: 50%" name="category">
				<option>Category</option>
				<option>NEWS</option>
				<option>VIDEOS</option>
				<option>CAREER</option>
				<option>TECHNOLOGIES</option>
				<option>GADGETS</option>
				<option>AUTOMOBILES</option>
				<option>TOUR & TRAVELS</option>
				<option>ENTERTAINMENT</option>
				<option>FOODS</option>
				<option>SPORTS</option>
				<option>PHOTOS</option>
				<option>HEALTH & FITNESS</option>
			</select>
		</div>
		<div class="col-lg-6">
			<select class="form-control" style="width: 50%" name="subCategory">
				<option>Sub Category</option>
				<optgroup label="NEWS">
					<option>WORLD</option>
					<option>USA</option>
					<option>UK</option>
					<option>INDIA</option>
					<option>POLITICS</option>
					<option>BUSINESS</option>
				</optgroup>
				<optgroup label="VIDEOS">
					<option>COMEDY</option>
					<option>FUNNY</option>
					<option>MUSIC</option>
					<option>MOVIES</option>
				</optgroup>
				<optgroup label="EDUCATION">
					<option>ONE DAY EXAMS</option>
					<option>GOVERMENT JOBS</option>
					<option>CAREER GUIDE</option>
				</optgroup>
				<optgroup label="ENTERTAINMENT">
					<option>HOLLYWOOD</option>
					<option>BOLLYWOOD</option>
					<option>TOLLYWOOD</option>
					<option>TV SHOWS</option>
					<option>REVIEWS</option>
				</optgroup>
			</select>
		</div>
	</div>
	<div class="row" style="margin-bottom: 20px">
		<div class="col-lg-12">
			<label>Featured Image/Banner (of story)</label>
			<input type="file" name="banner" accept="Image/*" class="form-control" style="width: 50%">
		</div>
	</div>
	<textarea spellcheck="" style="height: 500px;width: 100%" name="my_article">
		
	</textarea>
	<input type="submit" style="margin-top: 10px" class="btn btn-primary" name="submit" value="Publish">
	<?= form_close();?>
<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
<script>
		CKEDITOR.replace( 'my_article' );
	</script>
</div>