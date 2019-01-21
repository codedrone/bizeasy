<!doctype html>
<html lang="en" style="background:rgb(238, 238, 238) none repeat scroll 0% 0%">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <title>Customize App</title>
        {include file="../shared/common_css.tpl" title="Common css"}
        {include file="../shared/common_top_js.tpl" title="Common top Js"}
        <style type="text/css">
            .jscolor
            { 
                height: 16px;
                width: 14px;
                padding: 0 !important;
                border: 1px solid #ccc;
                background: url({$base_url}assets/theme/web/images/arrow.gif) no-repeat top right;
                cursor: pointer;
                line-height: 16px;
                font-size: 0.75em;
                font-weight: bold;
                text-align: center;
                display: inline-block;margin-left: 10px;
                width: 255px !important;
                height: 76px !important;
                margin-left: 0px !important;
                float: right;
                font-size: 18px;
                color: #5f5f5f!important;
                font-weight: 500;
                border: 0px !important;
                text-align: left !important;
                padding-left: 12px !important;
                /*padding: 30px 0 0 12px !important;*/
            }
            .vSplash
            {
                width: 150px !important;
            }
            th
            {
                    background: black !important;
                    color: white !important;
                    font-family: bold !important;
             
            }

        </style>
        <link rel="stylesheet" type="text/css" href="{$base_url}assets/theme/web/css/developer.css">
    </head>
    <body style="background: #eee;">
        <header> 
            <a href="{$base_url}ShopifyApp/index">
                <img class="logo" src="{$shops_logo}" alt="Bizeazy" />
            </a>
            <h1 style="margin-top: -4px;margin-bottom: -5px;font-size: 17px !important;">{ucfirst($sessionData->shop->name)}</h1>
            <nav>
                <ul>
                    <li class="bizeazy-dropdown" style="top: 20px;"><a class="bizeazy-user-inc" href="#">{$sessionData->shop->shop_owner} <span></span></a>
                        <ul>
                           <!--  <li class="bizeazy-settings"><a href="#">Settings</a></li>
                            <li class="bizeazy-help"><a href="#">Help</a></li> -->
                            <li class="bizeazy"><a href="{$base_url}ShopifyApp/notification">Notification</a></li>
                            <li class="bizeazy"><a href="{$base_url}ShopifyApp/supportHelp">Help</a></li>
                            <li class="bizeazy"><a href="{$base_url}ShopifyApp/faq">FAQ</a></li>
                            <li class="bizeazy-logout"><a href="{$base_url}Authentication/signOut">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="bizeazy-full-row">
                <ol class="breadcrumb default square rsaquo sm">
                    <li><a href="{$base_url}ShopifyApp/index"><i class="fa fa-home"> Dashboard </i></a></li>
                    <li class="active">Customize App</li>
                </ol>
         </div>
        <form role="form" name="create_update_template_frm" id="create_update_template_frm" action="{$base_url}ShopifyApp/customizeApp" method='post' enctype="multipart/form-data">
            <input type="hidden" name="iShopId" id="iShopId" value="{$singleRecord.iShopId}">
            <div class="bizeazy-full-row">
                <div class="bizeazy-wrapper">
                    <div class="bizeazy-col3 bizeazy-side-space"  style="width:35.33% !important;">
                        {if {$singleRecord.vLogo} eq ''}
                        <div class="bizeazy-design-sec-box">
                               <div class="bizeazy-design-inc bizeazy-des-blue" ><img src="{$base_url}assets/theme/web/images/logo-design.png" alt="" style="height:100%;">
                                </div>
                                <div class="bizeazy-design-title">Upload Logo 
                                        <input type="file" class="file" id="vLogo" name="vLogo"  onchange="return logoValidation()"/>

                                    <span class="text" id="errmsg"></span>
                                    <!-- <span><img src="{$base_url}assets/theme/web/images/done.png" alt=""></span> -->
                                </div>
                            </div>
                            <span id="errmsghide">Please Upload logo 72*72 PX</span>
                            {else}
                            <div class="bizeazy-design-sec-box">
                                <div class="bizeazy-design-inc bizeazy-des-blue" ><img src="{$base_url}assets/theme/web/images/logo-design.png" alt="" style="height:100%;">
                                </div>
                                <div class="bizeazy-design-title" onclick="return displayLogo()">Upload Logo 
                                    <span><img src="{$singleRecord.vLogo}" alt="" style="height: 75px;width: 84px;margin-top: -22px;"></span>
                                </div>
                            </div>
                        {/if}
                        
                        <div id="error1" style="padding-top:10px;">
                            <span class="msgformat1" style="color: red;font-size:12px;display:none;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                            <p class="help-block1 errcolor" id="err_photo_area"><img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"><span class="errmsg1" id="lblphotoerrmsg" ></span></p>
                        </div>
                        {if {$singleRecord.vSplash1} eq ''} 
                            <div class="bizeazy-design-sec-box">
                                <div class="bizeazy-design-inc bizeazy-des-pink"><img src="{$base_url}assets/theme/web/images/splash-screen.png" alt=""></div>
                                    <div class="bizeazy-design-title">Select Splash Screen
                                        <input type="file" class="file" name="vSplash[]" id="vSplash"  onchange="return screenValidation(this)" multiple>
                                    </div>
                                </div>
                            <span id="errmsghide1">Please Upload Splash Screen 480*800 PX</span>
                            {else}
                            <div class="bizeazy-design-sec-box">
                                <div class="bizeazy-design-inc bizeazy-des-pink"><img src="{$base_url}assets/theme/web/images/splash-screen.png" alt=""></div>

                                    <div class="bizeazy-design-title" onclick="return displaySplash()">Select Splash 
                               
                                </div>
                            </div>

                            {/if}
                         <div id="error2">
                            <span class="msgformat2" style="color: red;font-size:12px;display:none;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                            <p class="help-block1 errcolor" id="err_photo_area2"><img class="validationimg1" src="{$base_url}assets/theme/admin/img/arrow.png"><span class="errmsg1" id="lblphotoerrmsg2" ></span></p>
                        </div>
                        <div class="bizeazy-design-sec-box" >
                            <div class="bizeazy-design-inc bizeazy-des-green" ><img src="{$base_url}assets/theme/web/images/select-header-color.png" alt=""></div>
                             <button class="jscolor { valueElement:'', onFineChange:'setHeaderColor(this)'}"  id="headerColor" value="{$singleRecord.vHeaderColor}" style="background-color: {$singleRecord.vHeaderColor} !important;">Select Header Color
                                    <input  type="hidden" id="vHeaderColor" name="vHeaderColor" value="{$singleRecord.vHeaderColor}" >
                             </button>
                        </div><!-- style="background:{$singleRecord.vHeaderColor} !important;"  -->
                        <div class="bizeazy-design-sec-box" >
                            <div class="bizeazy-design-inc bizeazy-des-yellow" ><img src="{$base_url}assets/theme/web/images/select-header-color.png" alt=""></div>
                            <button class="jscolor { valueElement:'chosen-value', onFineChange:'setBodyColor(this)'}"  id="bodyColor" value="{$singleRecord.vBodyColor}" style="background-color: {$singleRecord.vBodyColor} !important;">Select Body Color
                                <input name="vBodyColor" type="hidden" id="vBodyColor"  value="{$singleRecord.vBodyColor}">
                               
                            </button>
                        </div>
                        <div class="bizeazy-design-sec-box"  >
                            <div class="bizeazy-design-inc bizeazy-des-blue" ><img src="{$base_url}assets/theme/web/images/select-header-color.png" alt=""></div>
                            <button class="jscolor { valueElement:'chosen-value', onFineChange:'setButtonColor(this)'}"  id="buttonColor" value="{$singleRecord.vButtonColor}" style="background-color: {$singleRecord.vButtonColor} !important;" >Select Button Color
                                <input  type="hidden" id="vButtonColor" name="vButtonColor" value="{$singleRecord.vButtonColor}">
                                
                                </button>
                        </div>
                        <div class="bizeazy-design-sec-box" >
                            <div class="bizeazy-design-inc bizeazy-des-pink" ><img src="{$base_url}assets/theme/web/images/select-header-color.png" alt=""></div>
                            <button class="jscolor { valueElement:'chosen-value', onFineChange:'setButtonFontColorColor(this)'}"  id="bodyColor" value="{$singleRecord.vButtonFontColor}" style="background-color: {$singleRecord.vButtonFontColor} !important;">Select Button Font Color
                                <input name="vButtonFontColor" type="hidden" id="vButtonFontColor"  value="{$singleRecord.vButtonFontColor}">
                                
                                </button>
                        </div>
                        <div class="bizeazy-design-sec-box" style="cursor:pointer;">
                            <div class="bizeazy-design-inc bizeazy-des-magenta" onclick="return listMenu()"><img src="{$base_url}assets/theme/web/images/create-menu.png" alt=""></div>
                            <div class="bizeazy-design-title" onclick="return createMenu()">Create Your Menu</div>
                        </div>
                    </div>
                    <div class="bizeazy-col3">
                        <div class="row" id="emulatorPhone">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card-mini" >
                                    <div class="card-header">
                                        <div class="card-title text-center" style="height:610px;">
                                            <div class="phone-outer-wrap" >
                                                <div class="phone phoneView" id="ios">
                                                    <iframe class="iosIframe" src="{$base_url}ShopifyApp/iosAndroidPublishApps/ios/iosHome" frameborder="0" scrolling="no" style="height: 605px !important;" ></iframe>
                                                    <!-- <div class="statusbar"></div> -->
                                                </div>
                                                <div class="androidView phone " id="android" style="">
                                                    <iframe class ="androidFrame" src="{$base_url}ShopifyApp/iosAndroidPublishApps/android/androidHome" frameborder="0" scrolling="no" style="width: 283px; height:433px;"></iframe>
                                                    <div class="statusbar anddroid-statusbar"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- <img src="{$base_url}assets/theme/web/images/app-design-frame.png" alt=""> -->
                    </div>
                    <div class="bizeazy-col3" style="margin-left: -26px;">
                        <div class="theme-switch" style="margin-left: -11px;">
                           <div class="bizeazy-android-inc-btn">
                                <a target="_blank"  onclick="return android();">
                                    <svg aria-hidden="true" data-prefix="fab" data-icon="android" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 648 712" class="svg-inline--fa fa-android fa-w-14 fa-5x">
                                        <path fill="currentColor" d="M89.6 204.5v115.8c0 15.4-12.1 27.7-27.5 27.7-15.3 0-30.1-12.4-30.1-27.7V204.5c0-15.1 14.8-27.5 30.1-27.5 15.1 0 27.5 12.4 27.5 27.5zm10.8 157c0 16.4 13.2 29.6 29.6 29.6h19.9l.3 61.1c0 36.9 55.2 36.6 55.2 0v-61.1h37.2v61.1c0 36.7 55.5 36.8 55.5 0v-61.1h20.2c16.2 0 29.4-13.2 29.4-29.6V182.1H100.4v179.4zm248-189.1H99.3c0-42.8 25.6-80 63.6-99.4l-19.1-35.3c-2.8-4.9 4.3-8 6.7-3.8l19.4 35.6c34.9-15.5 75-14.7 108.3 0L297.5 34c2.5-4.3 9.5-1.1 6.7 3.8L285.1 73c37.7 19.4 63.3 56.6 63.3 99.4zm-170.7-55.5c0-5.7-4.6-10.5-10.5-10.5-5.7 0-10.2 4.8-10.2 10.5s4.6 10.5 10.2 10.5c5.9 0 10.5-4.8 10.5-10.5zm113.4 0c0-5.7-4.6-10.5-10.2-10.5-5.9 0-10.5 4.8-10.5 10.5s4.6 10.5 10.5 10.5c5.6 0 10.2-4.8 10.2-10.5zm94.8 60.1c-15.1 0-27.5 12.1-27.5 27.5v115.8c0 15.4 12.4 27.7 27.5 27.7 15.4 0 30.1-12.4 30.1-27.7V204.5c0-15.4-14.8-27.5-30.1-27.5z" class="">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                         <div class="bizeazy-ios-inc-btn">
                                <a  target="_blank" class="active" onclick="return ios();">
                                   <svg aria-hidden="true" data-prefix="fab" data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 648 712" class="svg-inline--fa fa-apple fa-w-14 fa-5x" >
                                        <path fill="currentColor" d="M247.2 137.6c-6.2 1.9-15.3 3.5-27.9 4.6 1.1-56.7 29.9-96.6 88-110.1 9.3 41.6-26.1 94.1-60.1 105.5zm121.3 72.7c6.4-9.4 16.6-19.9 30.6-31.7-22.3-27.6-48.1-44.3-85.1-44.3-35.4 0-65.2 18.2-87 18.2-18.5 0-51.9-16.1-84.5-16.1-69.6 0-106.5 68.1-106.5 139C36 354.2 95.7 480 156.2 480c23.8 0 45.2-18 73.5-18 29.3 0 52.8 17.2 80.3 17.2 46 0 88.6-77.5 102-119.7-46.8-14.3-84.4-90.2-43.5-149.2z" class="">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            
                    </div>
                </div>
            </div>
            <div class="bizeazy-full-row">
                <div class="bizeazy-wrapper">
                    <div class="bizeazy-save-btn-row">
                        <button type="button" class="bizeazy-save-continue-btn" onclick="return formValidation()">Save Continue</button> 
                    </div>
                </div>
            </div>
            <div aria-hidden="false" role="dialog" tabindex="-1" id="AddMenu" class="modal fade in" style="display: none; padding-right: 15px; overflow-x: hidden;overflow-y: auto;">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-right: -50px;margin-left: 50px;">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Mobile App Navigation</h3>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Navigation Name:</label>
                            <input type="hidden" class="form-control" id="iShopNavId" name="iShopNavId">
                            <input type="text" class="form-control" id="vName" name="vName">
                            <p class="help-block errcolor" id="err_name_area"><img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"><span id="lblnameerrmsg" class="errmsg"></span></p>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label" >Parent / Child :</label>
                            <select class="form-control txtboxheight" id="iParentId" name="iParentId" tabindex="2" style="margin-bottom:14px;">
                                <option value="0">Make It Parent </option>
                                {foreach from=$shop_navs  item=value}
                                    {if {$value.iParentId} eq '0'}
                                        <option value="{$value.iShopNavId}" >{$value.vName}</option>
                                    {/if}
                                {/foreach}
                                
                            </select>
                            <p class="help-block errcolor" id="err_parent_area"><img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"><span id="lblparenterrmsg" class="errmsg"></span></p>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label" style="margin-top:12px;">Collection / Page :</label>
                                <select class="form-control txtboxheight" id="vHandle" name="vHandle" tabindex="2" style="margin-bottom:14px;">
                                        {foreach from=$getCollection  item=value}
                                    <option value="{$value->handle}" >{$value->title}</option>
                                        {/foreach}
                                </select>
                                <p class="help-block errcolor" id="err_nav_area"><img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"><span id="lblnaverrmsg" class="errmsg"></span></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" onclick="return addShopsMenu('{$base_url}')">Save</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="close-modal" onclick="return disable()">Close</button>
                        
                    </div>
                </div>
            </div><!-- /.modal-dialog -->
        </div>

        </form>
       <div aria-hidden="false" role="dialog" tabindex="-1" id="displayLogo" class="modal fade in" style="display: none;padding-right: 15px; overflow-x: hidden;overflow-y: auto;">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-right: -50px;margin-left: 50px;">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Your App Logo</h3>
                    </div>
                    <div class="modal-body">
                        <center><img src="{$singleRecord.vLogo}"></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" id="close-modal" onclick="return removeLogo('vLogo','{$base_url}')">Remove</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="close-modal" onclick="return disableMenu()">Close</button>
                      
                    </div>
                </div>
            </div><!-- /.modal-dialog -->
            
        </div>
        <div aria-hidden="false" role="dialog" tabindex="-1" id="displaySplash" class="modal fade in" style="display: none;padding-right: 15px; overflow-x: hidden;overflow-y: auto;">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-right: -50px;margin-left: 50px;">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Your App Splash Screen</h3>
                    </div>
                    <div class="modal-body">
                        <center><img class="vSplash" src="{$singleRecord.vSplash1}">
                        <img class="vSplash"  src="{$singleRecord.vSplash2}">
                        <img  class="vSplash"  src="{$singleRecord.vSplash3}">
                        </center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" id="close-modal" onclick="return removeLogo('vSplash','{$base_url}')">Remove</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="close-modal" onclick="return disableMenu()">Close</button>
                      
                    </div>
                </div>
            </div><!-- /.modal-dialog -->
            
        </div>
        <div aria-hidden="false" role="dialog" tabindex="-1" id="showList" class="modal fade in" style="display: none;padding-right: 15px; overflow-x: hidden;overflow-y: auto;">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-right: -50px;margin-left: 50px;">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">List Menu</h3>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="admin_tbl">
                                <thead class="the-box dark full">
                                    <tr width="100%">
                                        <th  width="30%">Name</th>
                                        <th  width="30%">Handle</th>
                                        <th  width="30%">Menu Type</th>
                                        <th  width="5%">Edit</th>
                                        <th  width="5%">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach from=$shop_navs  item=value}
                                    <tr class="odd gradeX">
                                        <td>{$value.vName}</td>
                                        <td>{$value.vHandle}</td>
                                        <td>{$value.eNavType}</td>
                                        <td><a href="#" onclick="return editMenu('{$value.iShopNavId}','{$value.vName}','{$value.iParentId}','{$value.vHandle}')"><span class="glyphicon glyphicon-pencil oalg"></span></a></td>
                                        <td><a href="#"  onclick="return removeMenu('{$value.iShopNavId}','{$base_url}')" ><span class="glyphicon glyphicon-trash oalg"></span></a></td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="close-modal" onclick="return disableMenu()">Close</button>
                      
                    </div>
                </div>
            </div><!-- /.modal-dialog -->
            
        </div>
            {include file="../shared/commonShops_js.tpl" title="Common Bottom JS"}
<!-- {include file="../shared/common_bottom_js.tpl" title="Common Bottom js"} -->
<script src="{$base_url}assets/theme/web/js/commonValidationWeb.js"></script>
<script src="{$base_url}assets/theme/web/js/customizeApp.js"></script>
<script src="{$base_url}assets/theme/web/js/jquery-latest.min.js"></script> 
<script src="{$base_url}assets/theme/web/js/jquery.headshrinker.js"></script> 
<script>
    jQuery(document).ready(function () {
        $('#ios').show();
        $('#android').hide();
        jQuery('header').headshrinker({ fontSize: "13px", mobileMenu: true });   
    });
    // document.addEventListener("wheel", myFunction);


$(window).scroll(function(){
    var fromTop = $(window).scrollTop();
    if (fromTop<200) {
        $("#emulatorPhone").css('margin-top',fromTop);
    }
});
</script>


    