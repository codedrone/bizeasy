setInterval(function() {
		$('#err_message_area').fadeOut("slow");
}, 5000);

function formValidate() {  
	var passwordStatus = emailStatus = 0;
	emailStatus = check_email();
	passwordStatus = check_password(); 
	
	if(passwordStatus==0 || emailStatus==0) 
	{
		return false;
	}
	else
	{
		$('#frmlogin').submit();
	}
}