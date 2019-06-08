
$(document).ready(function(){
	$(window).load(function(){
		$('#editname').hide();
		$('#editemail').hide();
		$('#editphone').hide();
		$('#editphoto').hide();
		$('#editpassword').hide();
	});

//-- NAME AREA --//
	$('#edit_name').click(function(){
		$('#edit_name').hide();
		$('#editname').show(500);
	});

	$('#removename').click(function(){
		$('#editname').hide(500);
		$('#edit_name').show();
	});

//-- EMAIL AREA --//
	$('#edit_email').click(function(){
		$('#edit_email').hide();
		$('#editemail').show(500);
	});

	$('#removeemail').click(function(){
		$('#editemail').hide(500);
		$('#edit_email').show();
	});

//-- PHONE AREA --//
	$('#edit_phone').click(function(){
		$('#edit_phone').hide();
		$('#editphone').show(500);
	});

	$('#removephone').click(function(){
		$('#editphone').hide(500);
		$('#edit_phone').show();
	});

//-- PROFILE PHOTO AREA --//
	$('#edit_photo').click(function(){
		$('#edit_photo').hide();
		$('#editphoto').show(500);
	});

	$('#removephoto').click(function(){
		$('#editphoto').hide(500);
		$('#edit_photo').show();
	});

	//-- PROFILE PASSWORD AREA --//
	$('#edit_password').click(function(){
		$('#edit_password').hide();
		$('#editpassword').show(500);
	});

	$('#removepassword').click(function(){
		$('#editpassword').hide(500);
		$('#edit_password').show();
	});

});