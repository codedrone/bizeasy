<link rel="stylesheet" type="text/css" href="{$base_url}assets/theme/web/css/vendor.css">
<link rel="stylesheet" type="text/css" href="{$base_url}assets/theme/web/css/flat-admin.css">
<link rel="stylesheet" type="text/css" href="{$base_url}assets/theme/web/css/main.css">
<style type="text/css">
   header{
        height: 61px ! important;
    }
    .phone
    {
        height: 450px !important;
    }
    .phone-android
    {
        height: 470px !important;
        width: 310px !important;
    }
    .phone iframe
    {
        width: 270px !important;
        margin-left: 29px !important;
        height: 395px !important;
    }
    .phone-android iframe
    {
        width: 280px !important;
        margin-left: 15px !important;
        height: 410px !important;
    }
</style>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card card-mini">
            <div class="card-header">
                <div class="card-title text-center" style="height:800px;">
                    <div class="phone-outer-wrap">
                        <div class="phone">
                            <iframe src="{$base_url}ShopifyApp/iosAndroidPublishApps" frameborder="0" scrolling="no"></iframe>
                            <div class="statusbar"></div>
                            <div class="theme-switch">
                                <a href="{$base_url}ShopifyApp/iosAndroidPublishApps/ios" target="_blank" class="active">
                                    <div class="theme-icon">
                                        <div class="logo-apple"></div><span>iOS</span>
                                    </div>
                                    <div class="fullscreen"><i></i><span>Fullscreen<br>Preview</span></div>
                                </a>
                                <a href="{$base_url}ShopifyApp/iosAndroidPublishApps/android" target="_blank" >
                                    <div class="theme-icon">
                                         <div class="logo-android"></div><span>Android</span>
                                    </div>
                                    <div class="fullscreen"><i></i><span>Fullscreen<br>Preview</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{$base_url}assets/theme/web/js/vendor-publish.js"></script>
<script type="text/javascript" src="{$base_url}assets/theme/web/js/app-publish.js"></script>
<script src="{$base_url}assets/theme/web/js/main-publish.js"></script>
