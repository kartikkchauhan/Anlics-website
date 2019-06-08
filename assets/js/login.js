function loginNow(){

	var email=$("#email").val();
	var password=$("#password").val();

	$.ajax({
		type : "POST",
		url : "home/loginProcess",
		data : { "email" : email, "password" : password },
		success : function(data)
		{
			
			if(data == "TRUE")
			{
				window.location.replace("user/");
			}
			else
			{
				$("#output").html(data);
			}
		}
	})
}