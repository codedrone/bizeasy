function checkName(vName){
    
    if($.trim(vName) !=''){
        $('#err_name_area').hide();
        return 1;
    }
    else {
        $('#err_name_area').show();
        $('#lblnameerrmsg').html('Please enter Name.');
        return 0;
    }
}

function checkHandleName(vHandle){
    
    if($.trim(vHandle) !=''){
        $('#err_handle_area').hide();
        return 1;
    }
    else {
        $('#err_handle_area').show();
        $('#lblhandleerrmsg').html('Please enter shop handle name.');
        return 0;
    }
}

function checkParentName(iParentId){
   
    if($.trim(iParentId) !=''){
        $('#err_parent_area').hide();
        return 1;
    }
    else {
        $('#err_parent_area').show();
        $('#lblparenterrmsg').html('Please select parent name.');
        return 0;
    }
}

function checkNavName(eNavType){
    
    if($.trim(eNavType) !=''){
        $('#err_nav_area').hide();
        return 1;
    }
    else {
        $('#err_nav_area').show();
        $('#lblnaverrmsg').html('Please select page type.');
        return 0;
    }
}
function checkMessage(tMessage){
    if($.trim(tMessage) !=''){
        
        $('#err_message_area').hide();
        return 1;
    }
    else {
        $('#err_message_area').show();
        $('#lblmessagerrmsg').html('Please Enter Message .');
        return 0;
    }
}
function checkTitle(tTitle){
    if($.trim(tTitle) !=''){
        
        $('#err_title_area').hide();
        return 1;
    }
    else {
        $('#err_title_area').show();
        $('#lbltitlerrmsg').html('Please Enter Title .');
        return 0;
    }
}
function checkEmail(email)
{   
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