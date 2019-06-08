$(document).ready(function(){

	$(window).load(function(){
		$('#updateadmin').hide();
	});

	$('#UPDATE').click(function(){
		$('#updateadmin').show(500);
		$('#alladmin').hide(500);
	});

	$('#update').click(function(){
		$('#alladmin').show(500);
		$('#updateadmin').hide(500);
	});

	$('#cancel').click(function(){
		$('#alladmin').show(500);
		$('#updateadmin').hide(500);
	});
});