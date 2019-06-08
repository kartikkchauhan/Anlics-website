<div class="col-lg-12">
	<?php if(isset($responce)){ echo $responce; }?>
	<center><h1>PAGE EDITOR</h1></center>
	<?php foreach ($article as $info): ?>
	<?= form_open_multipart('writer/updateArticle');?>
	<input type="hidden" name="postId" value="<?= $info->postId ?>">
	<div style="margin-bottom: 20px;">
		<label style="font-size: 20px">TITLE</label>
		<input type="text" name="title" class="form-control" placeholder="Enter Your Story title." value="<?=$info->title?>">
	</div>
	<div class="row" style="margin-bottom: 20px">
		<div class="col-lg-6">
			<select class="form-control" style="width: 50%" name="category">
				<option selected><?= $info->categoryName ?></option>
				<optgroup></optgroup>
				<option>SELECT CATEGORY</option>
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
				<option selected><?= $info->subCategoryName ?></option>
				<optgroup></optgroup>
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
			<img src="<?= base_url('uploads/articles/'. $info->banner) ?>" height="100px" width="15%">
			<input type="file" name="banner" accept="Image/*" class="form-control" style="width: 50%">
		</div>
	</div>
	<textarea spellcheck="" style="height: 1000px;width: 100%" name="my_article">
		<?= $info->data ?>
	</textarea>
	<input type="submit" style="margin-top: 10px" class="btn btn-primary" name="submit" value="Publish">
	<?= form_close();?>
	<?php endforeach ?>
<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
<script>
		CKEDITOR.replace( 'my_article' );
	</script>
</div>