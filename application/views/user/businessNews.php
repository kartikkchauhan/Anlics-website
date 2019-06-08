
<?php include('userHeader.php'); ?>


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
	
	<?php include ('businessNewsList.php'); ?>


	<?php include ('userRightSide.php');?>
	
</div>
<!--BODY SECTION END  -->


<?php include("userFooter.php");?>
