$(document).ready(function(){

	$(window).load(function(){
		$('#msgbox').hide();
		$('#close').hide();
	});

	$('#sendmsg').click(function(){
		$('#msgbox').show(500);
		$('sendmsg').hide(500);
	});

	$('#send').click(function(){
		$('#username').show(500);
		$('#msgbox').hide(500);
	});

	$('#cancel').click(function(){
		$('#username').show(500);
		$('#msgbox').hide(500);
	});


	$('#remove').click(function(){
		$('#close').show(500);
		$('#username').hide(500);
	});

	$('#confirmuser').click(function(){
		$('#username').show(500);
		$('#close').hide(500);
	});

	$('#canceluser').click(function(){
		$('#username').show(500);
		$('#close').hide(500);
	});
});