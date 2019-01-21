function formValidation()
{
	var pw_status = conpwd_status = 0;
	pw_status = check_pwd(); 
	conpwd_status = check_confirm_pwd();
	if(pw_status == 0 || conpwd_status == 0) 
 	{
        return false;
    } 
    else {
    	
        $('#resetpassword_form').submit();
    }
}