<div class="col-lg-12" style="margin-top: 70px;margin-bottom: 70px;" id="main">
	<div class="row" style="border:1px solid #DDDDDD">
		<?php
			if(count($articleDetail))
			{
			foreach (array_slice($articleDetail, 0,1) as $article) 
			{

		?>
		<div class="col-lg-12" >
			<h1 style="font-family: sofia;text-align:center;"><?= $article->title ?></h1>
			<div class="col-lg-12 ">
				<div class="text-left col-lg-6">
					<b>BY : </b> <span class="text-info"><?= $article->userName ?> </span>
				</div>
				<div class="text-right col-lg-6">
					<span class="text-info"><?= $article->date?> </span>
				</div>
			</div>

			<p style="text-align: center;"><strong style="font-size: 15px">Share on:</strong>
			<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://anlics.com/home/fullDetails/<?= $article->postId ?>&amp;src=sdkpreparse"><i class="fa fa-facebook" title="Facebook" style="font-size: 30px; color: #4267B2;cursor: pointer;margin-left: 15px;"></i> </a>
			<a href="https://plus.google.com/share?url=http://www.anlics.com/home/fullDetails/<?= $article->postId ?>" onclick="javascript:window.open(this.href,
  			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
			<i class="fa fa-google-plus" title="Google Plus" style="font-size: 30px; color: red;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			<a class="twitter-share-button"
			  href="https://twitter.com/intent/tweet?url=http://www.anlics.com/home/fullDetails/<?= $article->postId ?>" data-size="large" target="_blank">
			<i class="fa fa-twitter" title="Twitter" style="font-size: 30px; color: #17BF63;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			</p>

			<p style="text-align: center;"><img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 500px; width: 80%; border: 2px solid;margin-top: 20px;"></p>
			
			<p style="font-family: 'Rosarivo'; font-size: 20px;margin-top: 30px;">	
				<?= $article->data ?>
			</p>
		</div>
		<?php
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
	<div class="row">
		<h3>Comments</h3>
		<div class="col-lg-12" style="border:1px solid #DDDDDD">
			<?php
			if(count($commentDetail))
			{
			foreach ($commentDetail as $comment) 
			{
			?>
			<div class="row" style="margin-top: 30px; margin-bottom: 20px;">
				<div class="col-lg-1">
					<img src="<?=base_url('uploads/users/'.$comment->userImg)?>" style="height: 40px; width: 40px; border-radius: 20px;cursor: pointer;" title="<?= $comment->userName?>">
				</div>

				<div class="col-lg-6">
					<div style="min-height: 40px; max-height: auto;border-radius: 20px;width: 100%;background-color: #F2F2F2;text-align: center;padding-top: 10px; ">
						<?= $comment->comment ?>
					</div>
				</div>
			</div>
			<?php
			}
			}
			else
			{
			?>
			<div class="row" style="margin-top: 30px; margin-bottom: 20px;">
				<div class="col-lg-12">
					<div style="min-height: 40px; max-height: auto;border-radius: 20px;width: 100%;background-color: #F2F2F2;text-align: center;padding-top: 10px; ">
						<p style="font-size: 20px">No comments on this article till now.</p>
					</div>
				</div>
			</div>
			<?php
			}
			?>
			<div class="row col-lg-8" style="margin-bottom: 40px;">
				<button type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary" style="float: right">Click here to login and write your views on this article.</button>
			</div>
		</div>
	</div>
</div>
<div id="id01" class="modal">
	<?php echo form_open('home/fastLogin2','class="modal-content animate"'); ?>
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	      <img src="<?=base_url('uploads/dummy/user.png')?>" alt="Avatar" class="avatar">
	      <h3>Login Now</h3>
	    </div>

	    <div class="container" style="width: 40%;">
	    	<div class="row">
		      <label><b>Email</b></label>
		      <input type="email" placeholder="Enter Email Address" class="form-control" name="email"
		      id="email" required>
				<?php foreach ($articleDetail as $cmnt): ?>
					<input type="hidden" name="postId" value="<?= $cmnt->postId ?>">
				<?php endforeach ?>
	    	</div>
	    	<div class="row">
	    		<label><b>Password</b></label>
	      		<input type="password" placeholder="Enter Password" class="form-control" name="password" id="password" required>
	    	</div>
	      <input type="submit" class="btn btn-primary" style="margin-top: 10px;" value="Login Now">
	      <span class="psw">Forgot <a href="#">password?</a> or <a href="#">register now?</a></span>
	    </div>
    </form>
</div>