setInterval(function() {
		$('#err_message_area').fadeOut("slow");
}, 5000);

function formValidate() {  
	var emailStatus = 0;
	
	emailStatus = check_email();
	if(emailStatus==0) 
	{
		return false;
	}
	else
	{
		$('#frmforgotPassword').submit();
	}
}