
<?php include('header.php'); ?>


<!--BODY SECTION  -->
<script type="text/javascript">
	$(window).load(function() {
	    $("#login").addClass("nav-link");
	    $("#registration").addClass("");
		$("#registrationBody").hide();
	    $("#loginBody").hide();
	});
</script>
<div class="row">
	
	<?php include ('ukNewsList.php'); ?>


	<?php include ('rightSide.php');?>
	
</div>
<!--BODY SECTION END  -->


<?php include("footer.php");?>
