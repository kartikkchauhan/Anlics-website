$(document).ready(function(){

	$(window).load(function() {
		$("#editName").hide();
	    $("#editEmail").hide();
	    $("#editPassword").hide();
	    $("#editPhone").hide();
	    $("#editPhoto").hide();
	});

	$("#nameEdit").click(function(){
		$("#editName").show(400);
		$("#nameEdit").hide();
	    $("#editEmail").hide();
	    $("#editPassword").hide();
	    $("#editPhone").hide();
	    $("#editPhoto").hide();
	});

	$("#emailEdit").click(function(){
		$("#editName").hide();
	    $("#editEmail").show(400);
	    $("#emailEdit").hide();
	    $("#editPassword").hide();
	    $("#editPhone").hide();
	    $("#editPhoto").hide();
	});

	$("#phoneEdit").click(function() {
	   $("#editName").hide();
	    $("#editEmail").hide();
	    $("#editPassword").hide();
	    $("#editPhone").show(400);
	    $("#phoneEdit").hide();
	    $("#editPhoto").hide();
	});

	$("#photoEdit").click(function() {
	    $("#editName").hide();
	    $("#editEmail").hide();
	    $("#editPassword").hide();
	    $("#editPhone").hide();
	    $("#photoEdit").hide();
	    $("#editPhoto").show(400);
	});

	$("#passwordEdit").click(function() {
	    $("#editName").hide();
	    $("#editEmail").hide();
	    $("#editPassword").show(400);
	    $("#editPhone").hide();
	    $("#editPhoto").hide();
	    $("#passwordEdit").hide();
	});

	//Closeing the div

	$("#closeName").click(function() {
	    $("#editName").hide(400);
	    $("#nameEdit").show();
	});

	$("#closeEmail").click(function() {
	    $("#editName").hide();
	    $("#editEmail").hide(400);
	    $("#editPassword").hide();
	    $("#editPhone").hide();
	    $("#editPhoto").hide();
	    $("#emailEdit").show();
	});

	$("#closePhone").click(function() {
	    $("#editName").hide();
	    $("#editEmail").hide();
	    $("#editPassword").hide();
	    $("#editPhone").hide(400);
	    $("#editPhoto").hide();
	    $("#phoneEdit").show();
	});

	$("#closePassword").click(function() {
	    $("#editName").hide();
	    $("#editEmail").hide();
	    $("#editPassword").hide(400);
	    $("#editPhone").hide();
	    $("#editPhoto").hide();
	    $("#passwordEdit").show();
	});

	$("#closePhoto").click(function() {
	    $("#editName").hide();
	    $("#editEmail").hide();
	    $("#editPassword").hide();
	    $("#editPhone").hide();
	    $("#editPhoto").hide(400);
	    $("#photoEdit").show();
	});

	//closing the div end here
})
