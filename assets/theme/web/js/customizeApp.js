 var _URL = window.URL || window.webkitURL;
 var logoValidationStatus=0;
 var splshscreenValidationStatus=0;
    $("#vLogo").change(function (e) {
        var file, img;
        var fileInput = document.getElementById('vLogo');
        var vLogo =  $('#vLogo').val();
        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function () {
               if (this.width > 72 || this.height > 72) {
                    $('#error1').show();
                    $('#errmsghide').hide();
                    $('#err_photo_area').show();
                    $('.validationimg').show();
                    $('#errmsg').hide();
                    $('#lblphotoerrmsg').show();
                    $('#lblphotoerrmsg').html('Your logo is too big, it must be 72*72 PX');
                    logoValidationStatus=1;
                }
                else
                {
                 logoValidationStatus=0;   
                }
             };
            img.src = _URL.createObjectURL(file);
        }
        if ($.trim(vLogo) == '') {
            $('#errmsghide').hide();
            $('#error1').hide();
            $('.msgformat1').hide();
            $('#err_photo_area').hide();
            $('#lblphotoerrmsg').hide();    
            return 1;  
        }
        else
        {
            var filePath = fileInput.value;
            var file = fileInput.files;
            var FileName = file.name;
            var allowedExtensions = /(\.jpg|\.JPG|\.jpeg|\.JPEG|\.png|\.gif)$/i;
            var file1 = document.getElementById("vLogo").files[0];
            if(!allowedExtensions.exec(filePath)){
                $('#error1').show();
                $('.msgformat1').show();
                $('#err_photo_area').show();
                $('.validationimg').show();
                $('#errmsg').hide();
                $('#errmsghide').hide();
                $('#lblphotoerrmsg').show();
                $('#lblphotoerrmsg').html('File must be in image format.');
                // fileInput.value = '';
                return 0;
            } 
            
           else
            {
                $('#errmsghide').hide();
                $('#error1').hide();
                $('.msgformat1').hide();
                $('#err_photo_area').hide();
                $('#lblphotoerrmsg').hide();    
                return 1;
            }
        }
       
});

    $("#vSplash").change(function (e) {
        var file, img;
        var fileInput = document.getElementById('vSplash');
        var vSplash =  $('#vSplash').val();
        
        if ($.trim(vSplash) == '') {
            $('#error2').hide();
            $('#errmsghide1').hide();
            $('.msgformat2').hide();
            $('#err_photo_area2').hide();
            $('#lblphotoerrmsg2').hide();    
            return 1;
        }
        else
        {
            var fileInput2 = document.getElementById('vSplash');
            var filelength = fileInput2.files.length;
            
            var allowedExtensions2 = /(\.jpg|\.JPG|\.jpeg|\.JPEG|\.png|\.gif)$/i;
            for (var i = 0; i < fileInput2.files.length; i++) {
                var file = fileInput2.files[i];

                var FileName = file.name;
                
                var FileExt = FileName.substr(FileName.lastIndexOf('.') + 1);
                if ((file = this.files[i])) {
                        img = new Image();
                        img.onload = function () {
                           if (this.width > 480 || this.height > 800) {
                                 $('#error2').show();
                                $('.msgformat2').hide();
                                $('#err_photo_area2').show();
                                $('#errmsghide1').hide();
                                $('#lblphotoerrmsg2').show();
                                $('.validationimg1').show();
                                $('#errmsg2').hide();
                                $('#lblphotoerrmsg2').html('Your logo is too big, it must be 800*480 PX');
                                splshscreenValidationStatus=1;
                            }
                            else
                            {
                             splshscreenValidationStatus=0;   
                            }
                         };
                        img.src = _URL.createObjectURL(file);
                    }
                if(!allowedExtensions2.exec(FileName)){
                    $('#error2').show();
                    $('.msgformat2').show();
                    $('#errmsghide1').hide();
                    $('#err_photo_area2').show();
                    $('#lblphotoerrmsg2').show();
                    $('.validationimg1').show();
                    $('#errmsg2').hide();
                    $('#lblphotoerrmsg2').html("Sorry, " + FileName + " is invalid.");
                    // file.value = '';
                    return 0;
                }
                else{
                    $('#error2').hide();
                    $('.msgformat2').hide();
                    $('#errmsghide1').hide();
                    $('#err_photo_area2').hide();
                    $('#lblphotoerrmsg2').hide();    
                    return 1;
                }
                
            }
        }
       
});
 function UpdateShops(base_url)
    {
            var iShopId = $('#iShopId').val();
            var vHeaderColor = $('#vHeaderColor').val();
            var vBodyColor = $('#vBodyColor').val();
            var customizeApp = base_url+"ShopifyApp/customizeApp";
            $.ajax({
                    url:customizeApp,
                    type:"POST",
                    data:{ "iShopId": iShopId, "vHeaderColor": vHeaderColor,"vBodyColor": vBodyColor},
                    success:function(data){
                        $('iframe').each(function() {
                                    this.contentWindow.location.reload(true);
                            });
                    }
                });
    } 
    function addShopsMenu(base_url)
    {       
        var nameStatus = handleStatus = 0;
        var iShopId = $('#iShopId').val();
        var vName = $('#vName').val();
        var vHandle = $('#vHandle').val();
        var iParentId = $('#iParentId').val();
        var iShopNavId = $('#iShopNavId').val();
        nameStatus = checkName(vName);
        // handleStatus = checkHandleName(vHandle);
        if(nameStatus==0){
                return false;
            } 
        else{
            
            var logoStatus= splshscreen=0;
            logoStatus=logoValidation();
            splshscreen=screenValidation("fieldObj");
            if(logoStatus==0 || splshscreen==0){
                return false;
            } 
            else{
                var logoStatus= splshscreen=0;
                var vLogo =  $('#vLogo').val();
                var vSplash =  $('#vSplash').val();
                if ($.trim(vLogo) != '') {
                    logoStatus=logoValidation();
                }
                else
                {
                  logoStatus=1;   
                }
                if ($.trim(vSplash) != '') {
                    splshscreen=screenValidation("fieldObj");
                }
                else
                {
                  splshscreen=1;   
                }
               
                if(logoStatus==0 || splshscreen==0){
                    return false;
                } 
                else{
                    $('#AddMenu').hide();
                    $('#showList').hide();
                    $('#create_update_template_frm').submit();
                }  
                
            } 
        }
    }
    function displayLogo()
    {
        $('#displayLogo').css({ "opacity":"1","background": "rgba(0, 0, 0, 0.5)"});
        $('#displayLogo').show();
        
    }
    function displaySplash()
    {
        $('#displaySplash').css({ "opacity":"1","background": "rgba(0, 0, 0, 0.5)"});
        $('#displaySplash').show();
    
    }
    function removeLogo(image,base_url)
    {
    	$("#displayLogo").css("display", "none"); 
        $("#displaySplash").css("display", "none");  
        var folderName="shops";
        var iShopId = $('#iShopId').val();
        var removeLogo = base_url+"ShopifyApp/removeImage";
            $.ajax({
                    url:removeLogo,
                    type:"POST",
                    data:{ "image": image, "iShopId": iShopId, "folderName": folderName},
                    success:function(data){
                        location.reload();
                    }
                });  

    }
    function listMenu(){
        $('#showList').show();
        $('#showList').css({ "opacity":"1","background": "rgba(0, 0, 0, 0.5)"});
        
    }
    
    function createMenu()    {
       $('#AddMenu').show();
       $('#AddMenu').css({ "opacity":"1","background": "rgba(0, 0, 0, 0.5)"});
        
    }
    function disable()
    {
    	$("#AddMenu").css("display", "none");
    	location.reload();    	
    }
    function disableMenu()    {
      $("#displaySplash").css("display", "none");    
      $("#AddMenu").css("display", "none");    
      $("#showList").css("display", "none");    
      $("#displayLogo").css("display", "none");    
        // $(document.documentElement).css('overflow', 'auto');
    }
    function ios()   {
        $('#ios').show();
        $('#android').hide();
    }
    function android()    {
        $('#ios').hide();
        $('#android').show();
    }
    function setHeaderColor(picker) {
        document.getElementById("vHeaderColor").value = "#"+picker;
        $('iframe').contents().find('.vHeaderColor').css('background-color', '#'+picker);

        // document.getElementsByTagName('body')[0].style.color = '#' + picker.toString()
    }
    function setBodyColor(picker) {
        $('iframe').contents().find('.vBodyColor').css('background-color', '#'+picker);
        document.getElementById("vBodyColor").value = "#"+picker;
    }
    function setButtonColor(picker) {
        document.getElementById("vButtonColor").value = "#"+picker;
        $('iframe').contents().find('.vButtonColor').css('background-color', '#'+picker);

        // document.getElementsByTagName('body')[0].style.color = '#' + picker.toString()
    }
    function setButtonFontColorColor(picker) {
        $('iframe').contents().find('.vButtonFontColor').css('color', '#'+picker);
        document.getElementById("vButtonFontColor").value = "#"+picker;
    }
    jQuery(document).ready(function () {
        $(".username-bg-nav").css("background-color", "{$singleRecord.vHeaderColor}");
        $(".inner-phone").css("background-color", "{$singleRecord.vBodyColor}");
        jQuery('header').headshrinker({ fontSize: "13px", mobileMenu: true });
    });

    $(function() {
        $('.file').change(function(){
            $(this).siblings('.text').text(this.value || 'Nothing selected')
        });

    });

    
    function logoValidation(){
        var fileInput = document.getElementById('vLogo');
        var vLogo =  $('#vLogo').val();
        var imgWidth = $('#vLogo').width();
        var imgHeight = $('#vLogo').height();
        // alert(imgHeight+"---------"+imgWidth);
        if ($.trim(vLogo) == '') {
            $('#errmsghide').hide();
            $('#error1').hide();
            $('.msgformat1').hide();
            $('#err_photo_area').hide();
            $('#lblphotoerrmsg').hide();    
            return 1;  
        }
       
        else
        {
            var filePath = fileInput.value;
            var file = fileInput.files;
            var FileName = file.name;
            var allowedExtensions = /(\.jpg|\.JPG|\.jpeg|\.JPEG|\.png|\.gif)$/i;
            var file1 = document.getElementById("vLogo").files[0];
            if(!allowedExtensions.exec(filePath)){
                $('#error1').show();
                $('.msgformat1').show();
                $('#err_photo_area').show();
                $('.validationimg').show();
                $('#errmsg').hide();
                $('#errmsghide').hide();
                $('#lblphotoerrmsg').show();
                $('#lblphotoerrmsg').html('File must be in image format.');
                // fileInput.value = '';
                return 0;
            } 
            
           else
            {
                $('#errmsghide').hide();
                $('#error1').hide();
                $('.msgformat1').hide();
                $('#err_photo_area').hide();
                $('#lblphotoerrmsg').hide();    
                return 1;
            }
        }
    }

    function screenValidation(fieldObj){
        var vSplash =  $('#vSplash').val();
        if ($.trim(vSplash) == '') {
            $('#error2').hide();
            $('#errmsghide1').hide();
            $('.msgformat2').hide();
            $('#err_photo_area2').hide();
            $('#lblphotoerrmsg2').hide();    
            return 1;
        }
        else
        {
            var fileInput2 = document.getElementById('vSplash');
            var filelength = fileInput2.files.length;
            
            var allowedExtensions2 = /(\.jpg|\.JPG|\.jpeg|\.JPEG|\.png|\.gif)$/i;
            for (var i = 0; i < fileInput2.files.length; i++) {
    		    var file = fileInput2.files[i];

    		    var FileName = file.name;
    		    
    		    var FileExt = FileName.substr(FileName.lastIndexOf('.') + 1);
        		
                if(!allowedExtensions2.exec(FileName)){
    	            $('#error2').show();
    	            $('.msgformat2').show();
    	            $('#err_photo_area2').show();
    	            $('#lblphotoerrmsg2').show();
    	            $('.validationimg1').show();
    	            $('#errmsg2').hide();
                    $('#errmsghide1').hide();
    	            $('#lblphotoerrmsg2').html("Sorry, " + FileName + " is invalid.");
    	            // file.value = '';
    	            return 0;
    	        }
               /* else if( width == 400 && height == 300 ) {
                {
                    $('#error2').show();
                    $('#err_photo_area2').show();
                    $('#lblphotoerrmsg2').show();
                    $('.validationimg1').show();
                    $('#errmsg2').hide();
                    $('#lblphotoerrmsg2').html('File Size must be 1 MB.');
                    // fileInput.value = '';
                    return 0;
                }*/   
                 else if (file.size >= 1024000) {
                    $('#error2').show();
                    $('#err_photo_area2').show();
                    $('#lblphotoerrmsg2').show();
                    $('.validationimg1').show();
                    $('#errmsg2').hide();
                    $('#errmsghide1').hide();
                    $('#lblphotoerrmsg2').html('File Size must be 1 MB.');
                    // fileInput.value = '';
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
	}
    function formValidation()
    {
        if(splshscreenValidationStatus==1 || logoValidationStatus==1){
            return false;
        } 
        else{
           $('#create_update_template_frm').submit();
        }  
     } 
    function editMenu(iShopNavId,vName,iParentId,vHandle)
    {
        $('#showList').hide();
        $('#AddMenu').show();
        $('#AddMenu').css({ "opacity":"1","background": "rgba(0, 0, 0, 0.5)"});
        document.getElementById("iShopNavId").value = iShopNavId;
        document.getElementById("vName").value = vName;
        document.getElementById("iParentId").value = iParentId;
        document.getElementById("vHandle").value = vHandle;

    }	
    function removeMenu(iShopNavId,base_url)
    {
        $('#showList').hide();
    	var url = base_url+"ShopifyApp/removeMenu";
        $.ajax({
            url:url,
            type:"POST",
            data:{ "iShopNavId": iShopNavId},
            success:function(data){
                location.reload();
            }
        }); 
    }

    