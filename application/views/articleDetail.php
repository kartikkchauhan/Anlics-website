
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=1946438052278401&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="row">
	<?php include ('detail.php'); ?>
</div>

<!--BODY SECTION END  -->

<?php include('footer.php'); ?>
