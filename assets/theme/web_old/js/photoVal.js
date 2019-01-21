function logoVal() { 
    var string = $('#file').val();
    if($.trim(string) == ''){
        $('#error1').hide();
        $('.msgformat1').hide();
        $('#err_photo_area').hide();
        $('#lblphotoerrmsg').hide(); 

        $('#lblphotoerrmsg') .html('');
        return 1;
    }
    else
    {
        var a = $.trim(string.substring(string.lastIndexOf('.') + 1).toLowerCase());
        if(a != 'jpg'  ||a != 'JPG' ||a != 'jpeg' ||a != 'JPEG' ||a != 'png' || a != '')
        {
            $('#error1').show();
            $('.msgformat1').show();
            $('#err_photo_area').show();
            $('#lblphotoerrmsg').show();
            $('#errmsg1').hide();
            $('#lblphotoerrmsg').html('File must be in image format.');
            return 0;
     
        }
        else{
            $('#error1').hide();
            $('.msgformat1').hide();
            $('#err_photo_area').hide();
            $('#lblphotoerrmsg').hide();   
            $('#lblphotoerrmsg') .html('');
            return 1;
        }
    }
}

function screenVal(file2){
    var b = $.trim(file1.substring(file1.lastIndexOf('.') + 1).toLowerCase());
    if(b == 'jpg'  ||b == 'JPG' ||b == 'jpeg' ||b == 'JPEG' ||b == 'png' || b==''){
        alert(b);
        $('#error2').hide();
        $('.msgformat2').hide();
        $('#err_photo_area2').hide();
        $('#lblphotoerrmsg2').hide();    
        return 1;
    }
    else{
        if(b != 'jpg'  ||b != 'JPG' ||b != 'jpeg' ||b != 'JPEG' ||b != 'png' || b!=''){
            $('#error2').show();
            $('.msgformat2').show();
            $('#err_photo_area2').show();
            $('#lblphotoerrmsg2').show();
            $('#errmsg2').hide();
            $('#lblphotoerrmsg2').html('File must be in image format.');
            file2.value = '';
            return 0;
        }
        else{
            $('#error2').hide();
            $('.msgformat2').hide();
            $('#err_photo_area2').hide();
            $('#lblphotoerrmsg2').hide();    
            return 1;
        }
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
                $('#error2').show();
                $('.msgformat2').show();
                $('#err_photo_area2').show();
                $('#lblphotoerrmsg2').show();
                $('#errmsg2').hide();
                $('#lblphotoerrmsg2').html('Image size should not be greater than 6 MB');
                return 0;
            }
        else
        {
            $('#error2').hide();
            $('.msgformat2').hide();
            $('#err_photo_area2').hide();
            $('#lblphotoerrmsg2').hide();    
            return 1;
        }
       
    }
    else{
        $('#error2').show();
        $('.msgformat2').show();
        $('#err_photo_area2').show();
        $('#lblphotoerrmsg2').show();
        $('#errmsg2').hide();
        $('#lblphotoerrmsg2').html('File must be in image format.');
    }
}

function checkImageValidation() {   
    var string = $('#vLogo').val();
    if($.trim(string) != ''){
        $('#err_photo_area').hide();
        $('#lblphotoerrmsg').hide();    
        return 1;
    }
    else
    {
        $('#err_photo_area').show();
        $('#lblphotoerrmsg').html('Please select Icon.');
        return 0;
    }
}