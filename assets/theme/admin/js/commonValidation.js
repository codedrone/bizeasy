function homeEmailvalidation()
{
    var vEmail = $('#email').val();

	if($.trim(vEmail) == ''){
        $('#err_con_email').show();
        $('#lbl_con_email_errmsg').html('Please Enter Email. ');
        return 1;


    }
    else
    {
        var pattern = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
        var validpattern = pattern.test(vEmail);
        if(!validpattern)
        {
            $('#err_con_email').show();
            $('#lbl_con_email_errmsg').html('Please enter your correct email id.');
            return 1;

        }
        else 
        {
            $('#err_con_email').hide();
            return 0;

        }
    }

}
function check_oldpassword()
{
	var oldpass=$('#oldpass').val();
	var newpass=$('#vPassword').val();
	if(oldpass!='')
	{
		$('#err_oldpass_area').hide();
		return 1;
		
	}
	else
	{
		$('#err_oldpass_area').show();
		$('#lbloldpasserrmsg').html('Please enter old password.');
		return 0;
	}
}
function check_retypepassword()
{
	var newpass=$('#vPassword').val();
	var repass=$('#retypepass').val();
	if(repass!='')
	{
		if(newpass != repass)
		{
		$('#err_retypepass_area').show();
		$('#lblretypepasserrmsg').html('Password is not match with new password');
		return 0;
		}
		else{
		$('#err_retypepass_area').hide();
		return 1;
		}
	}
	else
	{
		$('#err_retypepass_area').show();
		$('#lblretypepasserrmsg').html('Retype new password.');
		return 0;
	}

}

function checkOldNewpassword()
        {
            var oldpass=$('#oldpass').val();
            var newpass=$('#vPassword').val();
            var len=newpass.length;
            if(newpass!='')
            {
                if(len<6)
                {   
                    $('#err_password_area').show();
                    $('#lblpassworderrmsg').html('Please enter more then six digit.');
                    return 0;
                }
                else if(oldpass == newpass)
                {
                    $('#err_password_area').show();
                    $('#lblpassworderrmsg').html('Old Password & New Password are same');
                    return 0;
                }
                else{
                    $('#err_password_area').hide();
                    return 1;
                }
            }
            else
            {
                $('#err_password_area').show();
                $('#lblpassworderrmsg').html('Please enter New Password.');
                return 0;
            }
        }
function checkProviderGroup(){
	var status = $('#tProviderIds').val();
	if($.trim(status) !=''){
		$('#err_providergroup_area').hide();
		return 1;
	}
	else {
		$('#err_providergroup_area').show();
		$('#lblprovidergroupmsg').html('Please select your provider group.');
		return 0;
	}
}

function check_pwd(){
	var password = $('#vPassword').val();
	var len=password.length;
	if(password!=''){
		if(len<6)
		{	
			$('#password_err_block').show();
			$('#lblpassworderrmsg').html('Password must be greater than 6 alphanumeric characters.');
			return 0;
		}
		$('#password_err_block').hide();
		return 1;
	}
	else {
		$('#password_err_block').show();
		$('#lblpassworderrmsg').html('Please enter password.');
		return 0;
	}
}
function check_ckeditor_description(){
	var editorData = CKEDITOR.instances.tEmailMessage.getData();
	if($.trim(editorData)!=''){
		return 1;
	}
	else {
		return 0;
	}	
}
function check_confirm_pwd()
{
	var password = $('#vPassword').val();
	var conpwd = $('#vConpwd').val();
	//var len=conpwd.length;
	if(conpwd!='')
	{
		if(password != conpwd)
		{	
			$('#conpwd_err_block').show();
			$('#lblconpwderrmsg').html('Password and confirm password does not match');
			return 0;
		}
		$('#conpwd_err_block').hide();
		return 1;
	}
	else
	{
		$('#conpwd_err_block').show();
		$('#lblconpwderrmsg').html('Please enter confirm password.');
		return 0;
	}
}
function check_phone_no()
{
	var no = $('#vNo').val();
	if(no!='')
	{
		var no_regex = new RegExp(/^\d{10}$/i);
		var validpattern = no_regex.test(no);
		if(!validpattern)
		{
			$('#no_err_block').show();
			$('#lblnoerrmsg').html('Please enter 10 digit number');
			return 0;
		}
		else
		{
			$('#no_err_block').hide();
			return 1;
		}
	}
	else
	{
		$('#no_err_block').show();
		$('#lblnoerrmsg').html('Please enter phone no.');
		return 0;
	}
}
function check_birthdate()
{
	var date_input=$('input[name="dDateOfBirth"]').val();
	if(date_input=='')
	{
		$('#date_err_block').show();
			$('#lbldateerrmsg').html('Please Select Date.');
			return 0;
	}
	else
	{
		$('#date_err_block').hide();
		return 1;
	}
}
function check_price()
{
	var string=$('#dPrice').val();
	
	if($.trim(string) == ''){

		$('#err_price_area').show();
		$('#lblpricemsg').html('Please select price.');
		return 0;
	}
	else {
		var strRegex = new RegExp(/^[0-9]*$/);
		var validstr = strRegex.test(string);
		if(!validstr){
			$('#err_price_area').show();
			$('#lblpricemsg').html('Please enter only digit.');
			return 0;
		}
		else
		{
			$('#err_price_area').hide();
			
			return 1;
		}
		
	}
}

function check_city_validation() {

	var string=$('#tTitle').val();

	if($.trim(string) != ''){
		
	
		var strRegex = new RegExp(/^[a-zA-Z ]*$/);
		var validstr = strRegex.test(string);
		if(!validstr){
			$('#err_city_area').show();
			$('#lblcityerrmsg').html('Please enter correct city.');
			return 0;
		}
		else {
			if(string.length>=2 && string.length<=256)
			{
				$('#err_city_area').hide();
				$('#lblcityerrmsg').html('');
				return 1;
			}
			else
			{
				$('#err_city_area').show();
				$('#lblcityerrmsg').html('City name between 2 to 256 characters');
				return 0;
				
			}
		}
		}
	
	else {
		$('#err_city_area').show();
		$('#lblcityerrmsg').html('Please enter city.');
		return 0;
	}

	// body...
}

function check_country_validation() {	
	var string = $('#iCountryId').val();
	if($.trim(string) != ''){
		$('#err_country_area').hide();
		$('#lblcountryerrmsg').hide();    
        return 1;
	}
	else
	{
    	$('#err_country_area').show();
       	$('#lblcountryerrmsg').html('Please select country.');
		return 0;
	}
}
function check_state_validation() {	
	var string = $('#iStateId').val();
	if($.trim(string) != ''){
		$('#err_state_area').hide();
		$('#lblstateerrmsg').hide();    
        return 1;
	}
	else
	{
    	$('#err_state_area').show();
       	$('#lblstateerrmsg').html('Please select state.');
		return 0;
	}
}

function pickupProviderValidation() {	
	var string = $('#iProviderId').val();
	if($.trim(string) != ''){
		$('#err_provider_area').hide();
		$('#lblprovidererrmsg').hide();    
        return 1;
	}
	else
	{
    	$('#err_provider_area').show();
       	$('#lblprovidererrmsg').html('Please select pickup provider.');
		return 0;
	}

}
function deliverProviderValidation() {	
	var string = $('#deliverProviderId').val();
	if($.trim(string) != ''){
		$('#err_deliver_area').hide();
		$('#lbldelivererrmsg').hide();    
        return 1;
	}
	else
	{
    	$('#err_deliver_area').show();
       	$('#lbldelivererrmsg').html('Please select deliver provider.');
		return 0;
	}
}

function pickupProviderGrpValidation() {
	var string = $('#PickupProviderGrpId').val();
	if($.trim(string) != ''){
		$('#err_pickup_area').hide();
		$('#lblpickupgrperrmsg').hide();    
        return 1;
	}
	else
	{
    	$('#err_pickup_area').show();
       	$('#lblpickupgrperrmsg').html('Please select pickup provider group.');
		return 0;
	}	
	
}
function deliverProviderGrpValidation() {	
	var string = $('#deliverProviderGrpId').val();
	if($.trim(string) != ''){
		$('#err_delivergrp_area').hide();
		$('#lbldelivergrperrmsg').hide();    
        return 1;
	}
	else
	{
    	$('#err_delivergrp_area').show();
       	$('#lbldelivergrperrmsg').html('Please select deliver provider group.');
		return 0;
	}	
}

function check_email()
{	
	var email = $('#vEmail').val();
	if($.trim(email) !='')
	{
		var pattern = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
		var validpattern = pattern.test(email);
		if(!validpattern)
		{
			$('#err_email_area').show();
			$('#lblemailiderrmsg').html('Please enter your correct email id.');
			return 0;
		}
		else 
		{
			$('#err_email_area').hide();
			return 1;
		}
	}
	else
	{
		$('#err_email_area').show();
		$('#lblemailiderrmsg').html('Please enter your email id.');
		return 0;
	}
}
function check_password(){
	var password = $.trim($('#vPassword').val());
	var pattern =  /^[a-zA-Z0-9]{8,}$/;
	var validpattern = pattern.test(password);
	var len=password.length;
	if(password != ''){
		 if(len<6){
        	$('#err_password_area').show();
            $('#lblpassworderrmsg').html("Password must be 8 characters long including uppercase , lowercase and symbol.");
           	return 0;
        }
		else {
			$('#err_password_area').hide();
			return 1;
		}
	}
	else {
		$('#err_password_area').show();
		$('#lblpassworderrmsg').html('Please enter password.');
		return 0;
	}
}
function check_confirm_password()
{
	var password = $.trim($('#vPassword').val());
	var confirmPassword = $.trim($('#vConPassword').val());
	var pattern =  /^[a-zA-Z0-9]{6,}$/;
	var validpatternConfirm = pattern.test(confirmPassword);
	var validpattern = pattern.test(password);
	if(password != '' || confirmPassword!=''){
		if(!validpattern && !validpatternConfirm)   
		{   
			$('#err_password_area').show();
			$('#lblpassworderrmsg').html('Password must be greater than 6 alphanumeric characters.');
			return 0;
		}
		else
		{
			if(password!=confirmPassword)
			{
				$('#err_conpassword_area').show();
				$('#lblconpassworderrmsg').html('Password and confirm password does not match');
				return 0;
			}
			else {
					$('#err_password_area').hide();
					$('#err_conpassword_area').hide();

					return 1;
				}
		}
	}
	else {
		$('#err_password_area').show();
		$('#lblpassworderrmsg').html('Please enter password.');
		return 0;
	}
}
function check_phone(){
	var phone = $.trim($('#vPhoneNo').val());
	var pattern =  /^[0-9]{10,12}$/;
	var validpattern = pattern.test(phone);
	if(phone != ''){
		if(!validpattern)   
		{   
			$('#err_phone_area').show();
			$('#lblfphoneerrmsg').html('Phone No between 10 to 12 alphanumeric characters.');
			return 0;
		}
		else {
			$('#err_phone_area').hide();
			return 1;
		}
	}
	else {
		$('#err_phone_area').show();
		$('#lblfphoneerrmsg').html('Please enter phone number.');
		return 0;
	}
}

function check_emapty_password(){
	var password = $.trim($('#vPassword').val());

	if(password != ''){
		$('#err_password_area').hide();
		return 1;
	}
	else {
		$('#err_password_area').show();
		$('#lblpassworderrmsg').html('Please enter your password.');
		return 0;
	}
}
function check_remember_me(){
	var checkbox_2 = $('#checkbox_2').val();
		
	if($.trim(checkbox_2).checked){
		$('#err_checkbox_area').hide();
		return 1;
	}
	else {
		$('#err_checkbox_area').show();
		$('#lblcheckBox').html('Please keep Me looged in.');
		return 0;
	}
}
function check_fname_validation() {
	var string = $('#vFirstName').val();
	if($.trim(string) != ''){
		var strRegex = new RegExp(/^[a-zA-Z()]+$/);
		var validstr = strRegex.test(string);
		if(!validstr){

			$('#err_fname_area').show();
			$('#lblfnameerrmsg').html('Please enter your correct firstname.');
			return 0;
		}
		else {
			$('#err_fname_area').hide();
			$('#lblfnameerrmsg').html('');
			return 1;
		}
	}
	else {
		$('#err_fname_area').show();
		$('#lblfnameerrmsg').html('Please enter your firstname.');
		return 0;
	}
}
function check_lname_validation() {	
	var string = $('#vLastName').val();
	if($.trim(string) != ''){
		var strRegex = new RegExp(/^[a-zA-Z()]+$/);
		var validstr = strRegex.test(string);
		if(!validstr){
			$('#err_lname_area').show();
			$('#lbllnameerrmsg').html('Please enter your correct lastname.');
			return 0;
		}
		else {
			$('#err_lname_area').hide();
			$('#lbllnameerrmsg').html('');
			return 1;
		}
	}
	else {
		$('#err_lname_area').show();
		$('#lbllnameerrmsg').html('Please enter your lastname.');
		return 0;
	}
}
function check_status(){
	var status = $('#eStatus').val();
	if($.trim(status) !=''){
		$('#err_status_area').hide();
		return 1;
	}
	else {
		$('#err_status_area').show();
		$('#lblstatuserrmsg').html('Please select your status.');
		return 0;
	}
}

function check_Order(){
	var status = $('#iOrder').val();
	if($.trim(status) !=''){
		$('#err_order_area').hide();
		return 1;
	}
	else {
		$('#err_order_area').show();
		$('#lblordermsg').html('Please select your order of menu.');
		return 0;
	}
}

function checkIconName() {
	var string = $('#tIcon').val();
	if($.trim(string) != ''){
	    if(string.length>=2 && string.length<=256)
		{
			$('#err_icon_area').hide();
			$('#lbliconerrmsg').html('');
			return 1;
		}
		else
		{
			$('#err_icon_area').show();
			$('#lbliconerrmsg').html('icon class name between 2 to 256 characters');
			return 0;
			
		}
	
	}
	else {
		$('#err_icon_area').show();
		$('#lbliconerrmsg').html('Please enter icon class name.');
		return 0;
	}
}

function check_role(){
	var status = $('#eUserType').val();
	if($.trim(status) !=''){
		$('#err_role_area').hide();
		return 1;
	}
	else {
		$('#err_role_area').show();
		$('#lblrolermsg').html('Please select your role.');
		return 0;
	}
}

function checkLabelValidation() {
	var string = $('#tLabel').val();
	if($.trim(string) != ''){
		var strRegex = new RegExp(/^[a-zA-Z {._}]*$/);
		var validstr = strRegex.test(string);
		if(!validstr){

			$('#err_label_area').show();
			$('#lbllabelerrmsg').html('Please enter correct label.');
			return 0;
		}
		else {
			if(string.length>=2 && string.length<=256)
			{
				$('#err_label_area').hide();
				$('#lbllabelerrmsg').html('');
				return 1;
			}
			else
			{
				$('#err_label_area').show();
				$('#lbllabelerrmsg').html('Label between 2 to 256 characters');
				return 0;
				
			}
		}
	}
	else {
		$('#err_label_area').show();
		$('#lbllabelerrmsg').html('Please enter Label.');
		return 0;
	}
}

function check_name_validation() {
	var string = $('#vName').val();
	if($.trim(string) != ''){
		var strRegex = new RegExp(/^[a-zA-Z {.}]*$/);
		var validstr = strRegex.test(string);
		if(!validstr){

			$('#err_uname_area').show();
			$('#lblunameerrmsg').html('Please enter correct name.');
			return 0;
		}
		else {
			if(string.length>=2 && string.length<=256)
			{
				$('#err_uname_area').hide();
				$('#lblunameerrmsg').html('');
				return 1;
			}
			else
			{
				$('#err_uname_area').show();
				$('#lblunameerrmsg').html('Name between 2 to 256 characters');
				return 0;
				
			}
		}
	}
	else {
		$('#err_uname_area').show();
		$('#lblunameerrmsg').html('Please enter name.');
		return 0;
	}
}

function checkVehicleBrand() {
	var string = $('#tVehicleBrand').val();
	if($.trim(string) != ''){
		var strRegex = new RegExp(/^[a-zA-Z ]*$/);
		var validstr = strRegex.test(string);
		if(!validstr){

			$('#err_vehiclebrand_area').show();
			$('#lblvehiclebranderrmsg').html('Please enter correct vehicle brand name.');
			return 0;
		}
		else {
			if(string.length>=2 && string.length<=256)
			{
				$('#err_vehiclebrand_area').hide();
				$('#lblvehiclebranderrmsg').html('');
				return 1;
			}
			else
			{
				$('#err_vehiclebrand_area').show();
				$('#lblvehiclebranderrmsg').html('Vehicle brand name between 2 to 256 characters');
				return 0;
				
			}
		}
	}
	else {
		$('#err_vehiclebrand_area').show();
		$('#lblvehiclebranderrmsg').html('Please enter vehicle brand name.');
		return 0;
	}
}

function check_role_validation() {	
	var string = $('#iRoleId').val();
	if($.trim(string) != ''){
		$('#err_role_area').hide();
		$('#lblroleerrmsg').html('');
		return 1;
	
	}
	else {
		$('#err_role_area').show();
		$('#lblroleerrmsg').html('Please select role.');
		return 0;
	}
}
function check_group_validation() {	
	var string = $('#iGroupId').val();
	if($.trim(string) != ''){
		$('#err_group_area').hide();
		$('#lblgrouperrmsg').html('');
		return 1;
	
	}
	else {
		$('#err_group_area').show();
		$('#lblgrouperrmsg').html('Please select group.');
		return 0;
	}
}

function checkDeliverValidation() {	
	var string = $('#DeliveryType').val();
	if($.trim(string) != ''){
		$('#err_role_area').hide();
		$('#lblroleerrmsg').html('');
		return 1;
	
	}
	else {
		$('#err_role_area').show();
		$('#lblroleerrmsg').html('Please select deliver job type.');
		return 0;
	}
}
function checkPickupValidation() {	
	var string = $('#PickupType').val();
	if($.trim(string) != ''){
		$('#err_PickupType_area').hide();
		$('#lblgrouperrmsg').html('');
		return 1;
	
	}
	else {
		$('#err_PickupType_area').show();
		$('#lblPickupTypeerrmsg').html('Please select pickup job type.');
		return 0;
	}
}
function check_title_validation() {	
	var string = $('#tTitle').val();
	if($.trim(string) != ''){
		// var strRegex = new RegExp(/^[a-zA-Z0-9_ -]*$/);
			// / // var strRegex = new RegExp(/^[a-zA-Z!@#\$%]{2,256}$/);
		var strRegex = new RegExp(/^[a-zA-Z0-9_ -&]*$/);
		
		var validstr = strRegex.test(string);
		if(!validstr){
			$('#err_title_area').show();
			$('#lbltitleerrmsg').html('Title between 2 to 256 characters.');
			return 0;
		}
		else {
			if(string.length>=2 && string.length<=256)
			{
				$('#err_title_area').hide();
				$('#lbltitleerrmsg').html('');
				return 1;
			}
			else
			{
				$('#err_title_area').show();
				$('#lbltitleerrmsg').html('Title between 2 to 256 characters');
				return 0;
				
			}
		}
	}
	else {
		$('#err_title_area').show();
		$('#lbltitleerrmsg').html('Please enter title.');
		return 0;
	}
}
function checkTitleValidation() {	
	var string = $('#tTitle').val();
	if($.trim(string) != ''){
		var strRegex = new RegExp(/^[a-zA-Z_ -&]*$/);
		
		var validstr = strRegex.test(string);
		if(!validstr){
			$('#err_title_area').show();
			$('#lbltitleerrmsg').html('Please enter correct title name.');
			return 0;
		}
		else {
			if(string.length>=2 && string.length<=256)
			{
				$('#err_title_area').hide();
				$('#lbltitleerrmsg').html('');
				return 1;
			}
			else
			{
				$('#err_title_area').show();
				$('#lbltitleerrmsg').html('Title must between 2 to 256 characters');
				return 0;
				
			}
		}
	}
	else {
		$('#err_title_area').show();
		$('#lbltitleerrmsg').html('Please enter title.');
		return 0;
	}
}
function check_code_validation() {	
	var string = $('#vCode').val();
	var strRegex = new RegExp(/^[^\\s]+$/);
	var validstr = strRegex.test(string);
	if($.trim(string) != ''){
		
		if(!validstr){
			$('#err_code_area').show();
			$('#lblcodeerrmsg').html('Please enter correct code name.');
			return 0;
		}
		else{
				$('#err_code_area').Hide();
				return 1;
		}
	}
	else {
		$('#err_code_area').show();
		$('#lblcodeerrmsg').html('Please enter code.');
		return 0;
	}
}

function checkClassName() {
	var string = $('#vClass').val();
	if($.trim(string) != ''){
			if(string.length>=2 && string.length<=256)
			{
				$('#err_class_area').hide();
				$('#lblclasserrmsg').html('');
				return 1;
			}
			else
			{
				$('#err_class_area').show();
				$('#lblclasserrmsg').html('Class Name between 2 to 256 characters');
				return 0;
				
			}
	}
	else {
		$('#err_class_area').show();
		$('#lblclasserrmsg').html('Please enter class name.');
		return 0;
	}
}

function check_title() {
	var string = $('#tTitle').val();
	if($.trim(string) != ''){
		var strRegex = new RegExp(/^[a-zA-Z ]*$/);
		var validstr = strRegex.test(string);
		if(!validstr){

			$('#err_title_area').show();
			$('#lbltitleerrmsg').html('Please enter correct title name.');
			return 0;
		}
		else {
			if(string.length>=2 && string.length<=256)
			{
				$('#err_title_area').hide();
				$('#lbltitleerrmsg').html('');
				return 1;
			}
			else
			{
				$('#err_title_area').show();
				$('#lbltitleerrmsg').html('Title between 2 to 256 characters');
				return 0;
				
			}
		}
	}
	else {
		$('#err_title_area').show();
		$('#lbltitleerrmsg').html('Please enter title.');
		return 0;
	}
}
function checkQuestion(str)
{
	var que=$('#tQuestion').val();
	if(que!='')
	{
		$('#err_question_area').hide();
		return 1;
	}
	else{
			$('#err_question_area').show();
			$('#lblquestionerrmsg').html('Please enter question.');
			return 0;
	}
}
	
function checkDescription(){
	var editorData = CKEDITOR.instances.tDescription.getData();
	if($.trim(editorData)!=''){
		$('#tDescription').removeClass('inputbordererr');
		$('#errDescriptionArea').hide();
		return 1;
	}
	else {
		$('#tDescription').addClass('inputbordererr');
		$('#lbldescriptionmsg').html('Please enter description.');
		$('#errDescriptionArea').show();
		return 0;
	}	
}
function checkContent(){
	var editorData = CKEDITOR.instances.tDescription.getData();
	if($.trim(editorData)!=''){
		$('#tDescription').removeClass('inputbordererr');
		$('#errDescriptionArea').hide();
		return 1;
	}
	else {
		$('#tDescription').addClass('inputbordererr');
		$('#lbldescriptionmsg').html('Please enter content.');
		$('#errDescriptionArea').show();
		return 0;
	}	
}
function checkEmailMessage(){
	var editorData = CKEDITOR.instances.tDescription.getData();
	if($.trim(editorData)!=''){
		$('#tDescription').removeClass('inputbordererr');
		$('#errDescriptionArea').hide();
		return 1;
	}
	else {
		$('#tDescription').addClass('inputbordererr');
		$('#lbldescriptionmsg').html('Please enter EmailMessage.');
		$('#errDescriptionArea').show();
		return 0;
	}	
}
function check_description(){
	var editorData = CKEDITOR.instances.tContent.getData();
	if($.trim(editorData)!=''){
		$('#tContent').removeClass('inputbordererr');
		$('#err_description_area').hide();
		return 1;
	}
	else {
		$('#tContent').addClass('inputbordererr');
		$('#lbldescriptionerrmsg').html('Please enter description.');
		$('#err_description_area').show();
		return 0;
	}	
}
function check_validsound(status)
{
	var a = $.trim(status.substring(status.lastIndexOf('.') + 1).toLowerCase());
	if(a == 'mp3'  ||a == 'MP3' ||a == 'm4a' ||a == 'M4A' ||a == 'wave' ||a == 'WAVE'){
        $('.msgformat1').hide();
		$('#err_sound_area').hide();
        return 1;
   		}
    else{
    	if(a=='')
    	{
    		$('#err_sound_area').show();
	       	$('#lblsounderrmsg').html('Please select sound file.');
	       	return 0;
    	}
    	else
    	{
    		$('.msgformat1').show();
	    	$('#err_sound_area').show();
	       	$('#lblsounderrmsg').html('Please select valid sound file.');
			return 0;
    	}
   	}
}
function checkValidPhoto(status)
{
	var a = $.trim(status.substring(status.lastIndexOf('.') + 1).toLowerCase());
	if(a == 'jpg'  ||a == 'JPG' ||a == 'jpeg' ||a == 'JPEG' ||a == 'png'){
        $('.msgformat1').hide();
		$('#err_photo_area').hide();
		$('#lblphotoerrmsg').hide();    
        return 1;
	}
	else{
    	$('.msgformat1').show();
    	$('#err_photo_area').show();
    	$('#lblphotoerrmsg').show();
       	$('#lblphotoerrmsg').html('Error while uploading.');
		return 0;
   	}
}

function check_image_validation() {	
	var string = $('#vIcon').val();
	if($.trim(string) != ''){
		$('#err_photo_area').hide();
		$('#lblphotoerrmsg').hide();    
        return 1;
	}
	else
	{
    	$('#err_photo_area').show();
       	$('#lblphotoerrmsg').html('Please select icon.');
		return 0;
	}
}

function check_photo_validation() {	
	var string = $('#vPhoto').val();
	if($.trim(string) != ''){
		$('#err_vPhoto_area').hide();
		$('#lblvphotoerrmsg').hide();    
        return 1;
	}
	else
	{
    	$('#err_vPhoto_area').show();
       	$('#lblvphotoerrmsg').html('Please select photo.');
		return 0;
	}
}

function checkPhotoValidation(id) {	
	//var string = $('#vIcon').val();
	if($.trim(id) != ''){
		$('#err_photo_area').hide();
		$('#lblphotoerrmsg').hide();    
        return 1;
	}
	else
	{
    	$('#err_photo_area').show();
       	$('#lblphotoerrmsg').html('Please select photo.');
		return 0;
	}
}


function check_fromname_validation() {
	var string = $('#vFromName').val();
	if($.trim(string) != ''){
		var strRegex = new RegExp(/^[a-zA-Z()0-9& -_]+$/);
		var validstr = strRegex.test(string);

		if(!validstr){
			$('#err_FormName_area').show();
			$('#lblFormNameerrmsg').html('Please enter your correct FromName.');
			return 0;
		}
		else {
			$('#err_FormName_area').hide();
			$('#lblFormNameerrmsg').html('');
			return 1;
		}
	}
	else {
		$('#err_FormName_area').show();
		$('#lblFormNameerrmsg').html('Please enter your FromName.');
		return 0;
	}
}
function check_EmailSubject_validation() {
	var string = $('#vEmailSubject').val();
	if($.trim(string) != ''){
			$('#err_EmailSubject_area').hide();
			$('#lblEmailSubjecterrmsg').html('');
			return 1;
	}
	else {
		$('#err_EmailSubject_area').show();
		$('#lblEmailSubjecterrmsg').html('Please enter your subject.');
		return 0;
	}
}
function checkEmailSubject() {
	var string = $('#vEmailSubject').val();
	if($.trim(string) != ''){
			$('#errSubjectArea').hide();
			$('#lblsubjecterrmsg').html('');
			return 1;
	}
	else {
		$('#errSubjectArea').show();
		$('#lblsubjecterrmsg').html('Please enter your subject.');
		return 0;
	}
}
function check_FromEmail()
{	
	var email = $('#vFromEmail').val();
	if($.trim(email) !='')
	{
		var pattern = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
		var validpattern = pattern.test(email);
		if(!validpattern)
		{
			$('#err_FromEmail_area').show();
			$('#lblFromEmailerrmsg').html('Please enter your correct email id.');
			return 0;
		}
		else 
		{
			$('#err_FromEmail_area').hide();
			return 1;
		}
	}
	else
	{
		$('#err_FromEmail_area').show();
		$('#lblFromEmailerrmsg').html('Please enter your email id.');
		return 0;
	}
}
function check_emailMessage(){
	var editorData = CKEDITOR.instances.tEmailMessage.getData();
	if($.trim(editorData)!=''){
		$('#tEmailMessage').removeClass('inputbordererr');
		$('#err_tmessage_area').hide();
		return 1;
	}
	else {
		$('#tEmailMessage').addClass('inputbordererr');
		$('#lbltmessageerrmsg').html('Please enter message.');
		$('#err_tmessage_area').show();
		return 0;
	}	
}

function check_menu_validation(){
	var status = $('#iMenuId').val();
	if($.trim(status) !=''){
		$('#err_menu_area').hide();
		return 1;
	}
	else {
		$('#err_menu_area').show();
		$('#lblmenuerrmsg').html('Please select access rights.');
		return 0;
	}
}
function check_country(){
	var country = $('#iCountryId').val();
	if($.trim(country)!=''){
			$('#err_country_area').hide();
			$('#lblcountryerrmsg').html('');
			return 1;
	}
	else {
		$('#err_country_area').show();
		$('#lblcountryerrmsg').html('Please select country.');
		return 0;
	}
}
function check_state(){
	var state = $('#iStateId').val();
	if($.trim(state)!=''){
		$('#err_state_area').hide();
			$('#lblstateerrmsg').html('');
			return 1;
	}
	else {
		$('#err_state_area').show();
		$('#lblstateerrmsg').html('Please select state.');
		return 0;
	}
}
function check_city(){
	var city = $('#iCityId').val();
	
	if($.trim(city)!=''){
		$('#err_city_area').hide();
			$('#lblcityerrmsg').html('');
			return 1;
	}
	else {
		$('#err_city_area').show();
		$('#lblcityerrmsg').html('Please select city.');
		return 0;
	}
}
function check_EndDate(){
	var vEndDate = $('#vEndDate').val();
	
	if($.trim(vEndDate)!=''){
		$('#err_todt_area').hide();
			$('#lbltodterrmsg').html('');
			return 1;
	}
	else {
		$('#err_todt_area').show();
		$('#lbltodterrmsg').html('Please Enter EndDate.');
		return 0;
	}
}

function checkBirthdate(){
	var vStartDate = $('#dDateOfBirth').val();
	
	if($.trim(dDateOfBirth)!=''){
		$('#err_birthdate_area').hide();
			$('#lblbirthdaterrmsg').html('');
			return 1;
	}
	else {
		$('#err_birthdate_area').show();
		$('#lblbirthdaterrmsg').html('Please Enter StartDate.');
		return 0;
	}
}

function check_StartDate(){
	var vStartDate = $('#vStartDate').val();
	
	if($.trim(vStartDate)!=''){
		$('#err_formdt_area').hide();
			$('#lblfromdterrmsg').html('');
			return 1;
	}
	else {
		$('#err_formdt_area').show();
		$('#lblfromdterrmsg').html('Please Enter StartDate.');
		return 0;
	}
}

function checkNricFrontPhoto(frontstatus)
{	
	var id=document.getElementById(frontstatus);
	var val =id.value;
	var a = $.trim(val.substring(val.lastIndexOf('.') + 1).toLowerCase());

	if(a == 'jpg'  ||a == 'JPG' ||a == 'jpeg' ||a == 'JPEG' ||a == 'png'){

	        var size = parseFloat(id.files[0].size/1024).toFixed(2);
	        if(size>6000)
	        {
	        	$('.msgformat1').show();
		    	$('#err_VehicleNRIC_area').show();
		       	$('#lblVehicleNRICerrmsg').html('Image size should not be greater than 6 MB');
				return 0;
	        }
		else
		{
			 $('.msgformat1').hide();
			$('#err_VehicleNRIC_area').hide();
			$('#lblVehicleNRICerrmsg').hide();    
	        return 1;
		}
       
	}
	else{
    	$('.msgformat1').show();
    	$('#err_VehicleNRIC_area').show();
       	$('#lblVehicleNRICerrmsg').html('File must be smaller than 4MB.');
		return 0;
   	}
}
 
function checkNricFrontValidation() {	
	var string = $('#tVehicleNRICFront').val();
	if($.trim(string) != ''){
		$('#err_VehicleNRIC_area').hide();
		$('#lblVehicleNRICerrmsg').hide();    
        return 1;
	}
	else
	{
    	$('#err_VehicleNRIC_area').show();
       	$('#lblVehicleNRICerrmsg').html('Please select NRIC Front hoto.');
		return 0;
	}
}

function checkNricBackPhoto(backstatus)
{	
	var id=document.getElementById(backstatus);
	var val =id.value;
	var a = $.trim(val.substring(val.lastIndexOf('.') + 1).toLowerCase());

	if(a == 'jpg'  ||a == 'JPG' ||a == 'jpeg' ||a == 'JPEG' ||a == 'png'){

	        var size = parseFloat(id.files[0].size/1024).toFixed(2);
	        if(size>6000)
	        {
	        	$('.msgformat1').show();
		    	$('#err_vehicleNRICback_area').show();
		       	$('#lbltVehicleNRICBackerrmsg').html('Image size should not be greater than 6 MB');
				return 0;
	        }
		else
		{
			 $('.msgformat1').hide();
			$('#err_vehicleNRICback_area').hide();
			$('#lbltVehicleNRICBackerrmsg').hide();    
	        return 1;
		}
       
	}
	else{
    	$('.msgformat1').show();
    	$('#err_vehicleNRICback_area').show();
       	$('#lbltVehicleNRICBackerrmsg').html('File must be smaller than 4MB.');
		return 0;
   	}
}

function checkNricBackValidation() {	
	var string = $('#tVehicleNRICBack').val();
	if($.trim(string) != ''){
		$('#err_vehicleNRICback_area').hide();
		$('#lbltVehicleNRICBackerrmsg').hide();    
        return 1;
	}
	else
	{
    	$('#err_vehicleNRICback_area').show();
       	$('#lbltVehicleNRICBackerrmsg').html('Please select NRIC Back Photo.');
		return 0;
	}
}

function checkValidPhoto(status)
{	
	var id=document.getElementById(status);
	var val =id.value;
	var a = $.trim(val.substring(val.lastIndexOf('.') + 1).toLowerCase());

	if(a == 'jpg'  ||a == 'JPG' ||a == 'jpeg' ||a == 'JPEG' ||a == 'png'){

	        var size = parseFloat(id.files[0].size/1024).toFixed(2);
	        if(size>6000)
	        {
	        	$('.msgformat1').show();
		    	$('#err_photo_area').show();
		       	$('#lblphotoerrmsg').html('Image size should not be greater than 6 MB');
				return 0;
	        }
		else
		{
			 $('.msgformat1').hide();
			$('#err_photo_area').hide();
			$('#lblphotoerrmsg').hide();    
	        return 1;
		}
       
	}
	else{
    	$('.msgformat1').show();
    	$('#err_photo_area').show();
       	$('#lblphotoerrmsg').html('File must be smaller than 4MB.');
		return 0;
   	}
}

function checkImageValidation() {	
	var string = $('#vPhoto').val();
	if($.trim(string) != ''){
		$('#err_photo_area').hide();
		$('#lblphotoerrmsg').hide();    
        return 1;
	}
	else
	{
    	$('#err_photo_area').show();
       	$('#lblphotoerrmsg').html('Please select Photo.');
		return 0;
	}
}
function check_empty_validation(str){
	var ans = $.trim(str);
	if(ans == ''){
		return 0;
	}
	else {
		return 1;
	}

}
function checkValidImage(status)
{	
	var a = $.trim(status.substring(status.lastIndexOf('.') + 1).toLowerCase());
	if(a == 'jpg'  ||a == 'JPG' ||a == 'jpeg' ||a == 'JPEG' ||a == 'png'){
        $('.msgformat1').hide();
		$('#err_tPhoto_area').hide();
		$('#lbltPhotoerrmsg').hide();    
        return 1;
	}
	else if(a==''){
		$('#err_tPhoto_area').hide();
		$('#lbltPhotoerrmsg').hide();    
        return 1;	
   	}
   	else
   	{    	
   		$('.msgformat1').show();
    	$('#err_tPhoto_area').show();
    	$('#lbltPhotoerrmsg').show();
       	$('#lbltPhotoerrmsg').html('Error while uploading.');
		return 0;
	}
}