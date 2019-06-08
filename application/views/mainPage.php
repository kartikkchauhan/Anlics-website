<div class="container" style="margin-top: 40px;">
   <div class="row">
      <div class="col-lg-8">
         <div class="row">
		  <?php
			foreach (array_slice($anlicsArticle, 0,1) as $article)
			{

		  ?>
		<div class="col-lg-12" style="text-align: center;">
			
			<p>
				<img src="<?= base_url('uploads/articles/'.$article->banner)?>" style="height: 320px; width: 100%; border: 0px solid;margin-top: 20px; ">
			</p>
			
		   </div>
		   <?php
		}
		   ?>
	     </div>
      
      </div>
      
      <div class="col-lg-4">
      <h1 class="txt"><?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?></h1>
			
				<b>BY : </b> <span class="text-info"><?= $article->userName ?> </span>
				<div itemprop="description" class="digg-story__description entry-content js--digg-story__description">
"Handset, Charger, Charging / Data Cable, Headset, Quick Guide, SIM Door Key"
</div>

                                
				
				
			<div style="margin: 17px 0px 0px 0px;">
			
			
			<p><strong style="font-size: 15px">Share on:</strong>
			
			<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://salnaguide.com/home/fullDetails/<?= $article->postId ?>&amp;src=sdkpreparse"><i class="fa fa-facebook" title="Facebook" style="font-size: 30px; color: #4267B2;cursor: pointer;margin-left: 15px;"></i> </a>
			<a href="https://plus.google.com/share?url=http://www.salnaguide.com/home/fullDetails/<?= $article->postId ?>" onclick="javascript:window.open(this.href,
  			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
			<i class="fa fa-google-plus" title="Google Plus" style="font-size: 30px; color: red;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			<a class="twitter-share-button"
			  href="https://twitter.com/intent/tweet?url=http://www.salnaguide.com/home/fullDetails/<?= $article->postId ?>" data-size="large" target="_blank">
			<i class="fa fa-twitter" title="Twitter" style="font-size: 30px; color: #17BF63;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			</p>
			</div>
      
      
      </div>
      
     
   
   
   </div>

</div>



   <div class="container">
      <div class="row">
         <div class="col-lg-4">
            <?php 
		if(count($anlicsArticle))
		{
		foreach (array_slice($anlicsArticle, 1,1) as $article)
		{
		?>
					<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 196px; width: 100%; border: 2px solid; margin-bottom: 14px;">
				
				<p class="tur"><?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?></p>
				
					<b>BY : </b> <span class="text-info"><?= $article->userName ?> </span>
				
			
				
			
		<?php 
		}
		}
		else
		{
		?>
			
		<?php		
		}
	 	?>
	 	
	 	<div style="margin-top:10px;">
	 	<p><strong style="font-size: 15px">Share on:</strong>
			
			<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://salnaguide.com/home/fullDetails/<?= $article->postId ?>&amp;src=sdkpreparse"><i class="fa fa-facebook" title="Facebook" style="font-size: 30px; color: #4267B2;cursor: pointer;margin-left: 15px;"></i> </a>
			<a href="https://plus.google.com/share?url=http://www.salnaguide.com/home/fullDetails/<?= $article->postId ?>" onclick="javascript:window.open(this.href,
  			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
			<i class="fa fa-google-plus" title="Google Plus" style="font-size: 30px; color: red;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			<a class="twitter-share-button"
			  href="https://twitter.com/intent/tweet?url=http://www.salnaguide.com/home/fullDetails/<?= $article->postId ?>" data-size="large" target="_blank">
			<i class="fa fa-twitter" title="Twitter" style="font-size: 30px; color: #17BF63;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			</p>
			</div>
         </div>
         
         
         <div class="col-lg-4">
            <?php 
		if(count($anlicsArticle))
		{
		foreach (array_slice($anlicsArticle, 2,3) as $article)
		{
		?>
					<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 196px; width: 100%; border: 2px solid;    margin-bottom: 14px; ">
				
				<p class="tur"><?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?></p>
				
					<b>BY : </b> <span class="text-info"><?= $article->userName ?> </span>
				
			
				
			
		<?php 
		}
		}
		
	 	?>
	 	<div style="margin-top:10px;">
	 	<p><strong style="font-size: 15px">Share on:</strong>
			
			<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://salnaguide.com/home/fullDetails/<?= $article->postId ?>&amp;src=sdkpreparse"><i class="fa fa-facebook" title="Facebook" style="font-size: 30px; color: #4267B2;cursor: pointer;margin-left: 15px;"></i> </a>
			<a href="https://plus.google.com/share?url=http://www.salnaguide.com/home/fullDetails/<?= $article->postId ?>" onclick="javascript:window.open(this.href,
  			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
			<i class="fa fa-google-plus" title="Google Plus" style="font-size: 30px; color: red;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			<a class="twitter-share-button"
			  href="https://twitter.com/intent/tweet?url=http://www.salnaguide.com/home/fullDetails/<?= $article->postId ?>" data-size="large" target="_blank">
			<i class="fa fa-twitter" title="Twitter" style="font-size: 30px; color: #17BF63;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			</p>
			</div>
	 	
         </div>
         <div class="col-lg-4">
            <?php 
		if(count($anlicsArticle))
		{
		foreach (array_slice($anlicsArticle, 0,1) as $article)
		{
		?>
					<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 196px; width: 100%; border: 2px solid;     margin-bottom: 14px;">
				
				<p class="tur"><?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?></p>
				
					<b>BY : </b> <span class="text-info"><?= $article->userName ?> </span>
				
			
				
			
		<?php 
		}
		}
		else
		{
		?>
			
		<?php		
		}
	 	?>
	 	
	 	
	 	<div style="margin-top:10px;">
	 	<p><strong style="font-size: 15px">Share on:</strong>
			
			<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://salnaguide.com/home/fullDetails/<?= $article->postId ?>&amp;src=sdkpreparse"><i class="fa fa-facebook" title="Facebook" style="font-size: 30px; color: #4267B2;cursor: pointer;margin-left: 15px;"></i> </a>
			<a href="https://plus.google.com/share?url=http://www.salnaguide.com/home/fullDetails/<?= $article->postId ?>" onclick="javascript:window.open(this.href,
  			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
			<i class="fa fa-google-plus" title="Google Plus" style="font-size: 30px; color: red;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			<a class="twitter-share-button"
			  href="https://twitter.com/intent/tweet?url=http://www.salnaguide.com/home/fullDetails/<?= $article->postId ?>" data-size="large" target="_blank">
			<i class="fa fa-twitter" title="Twitter" style="font-size: 30px; color: #17BF63;cursor: pointer;margin-left: 15px;"></i> 
			</a>
			</p>
			</div>
         </div>
      </div>
   
   </div>

			<div id="myCarousel" class="carousel slide">
			     <div class="carousel-inner">
			        <div class="item">
			         <img src="http://salnaguide.com/uploads/articles/vivo_v91.PNG" class="img-responsive">
			         </div>
			         
			         <div class="item">
			         <img src="http://salnaguide.com/uploads/articles/vivo_v91.PNG" class="img-responsive">
			         </div>
			         
			         <div class="item">
			         <img src="http://salnaguide.com/uploads/articles/vivo_v91.PNG" class="img-responsive">
			         </div>
			    
			     </div>
			
			</div>
			


<div class="col-lg-12" style="margin-top: 70px;" id="main">
<h1 style="font-size: 14px;">VIDEOS</h1>
	<div class="row" style=" margin-top: 10px;overflow: hidden;">
		<div class="col-lg-12" style="text-align: center; margin-top: 0px; margin-bottom: 0px; ">
			<!-- VIDEOS -->
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                        </div>
                </div>
             
	</div>

</div>

<div class="col-lg-12" style="margin-top: 70px;" id="main">

	<div class="row" style=" margin-top: 10px;overflow: hidden;">
	   <div class="col-lg-8" style="border-right: 1px solid #d0cece;">
	   <h3>MOST STORIES</h2>	
	     <div class="col-lg-6">
            <?php 
		if(count($anlicsArticle))
		{
		foreach (array_slice($anlicsArticle, 1,5) as $article)
		{
		?>
					<img src="<?= base_url('uploads/articles/'.$article->banner) ?>" style="height: 196px; width: 100%; border: 2px solid; margin-bottom: 14px;">		
		<?php 
		}
		}
		else
		{
		?>
			
		<?php		
		}
	 	?>
         </div>
         
         
         <div class="col-lg-6">
            <?php 
		if(count($anlicsArticle))
		{
		foreach (array_slice($anlicsArticle, 1,5) as $article)
		{
		?>
			<p class="tur"><?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?></p>
				
					<b>BY : </b> <span class="text-info"><?= $article->userName ?> </span>
					
					<div style="margin-bottom: 127px;">&nbsp;</div>
				
		<?php 
		}
		}
		else
		{
		?>
			
		<?php		
		}
	 	?>
         </div>
	</div>		
           
                
                
                
            
                
          <div class="col-lg-4">
                <h3>UPCOMMING NEWS</h3>
                
            <?php 
		if(count($anlicsArticle))
		{
		foreach (array_slice($anlicsArticle, 1,5) as $article)
		{
		?>
				
				<p class="tur"><?= anchor(base_url('home/fullDetails/'.$article->postId),$article->title) ?></p>
				
					<b>BY : </b> <span class="text-info"><?= $article->userName ?> </span>
					<div style="margin-bottom:10px;">&nbsp;</div>
				
		<?php 
		}
		}
		else
		{
		?>
			
		<?php		
		}
	 	?>
         </div>
			
     </div>
     
     
             
	

</div>



