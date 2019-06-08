function registerNow(){

	var fullName=$("#fullName").val();
	var phone=$("#phone").val();
	var registerEmail=$("#registerEmail").val();
	var registerPassword=$("#registerPassword").val();

	$.ajax({
		type : "POST",
		url : "home/register",
		data : { "fullName" : fullName, "phone" : phone, "registerEmail" : registerEmail, "registerPassword" : registerPassword },
		success : function(data)
		{
			
			$("#fullName").val('');
			$("#phone").val('');
			$("#registerEmail").val('');
			$("#registerPassword").val('');
			$("#outPut").html(data);
		}
	})
}