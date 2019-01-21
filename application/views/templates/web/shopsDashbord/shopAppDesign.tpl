<div class="bizeazy-col3" style="margin-left: -26px;">
    <div class="app-icons">
         <div class="theme-switch" style="margin-left: -11px;">
            <div class="bizeazy-android-inc-btn common-bizeazy-android">
                <a target="_blank"  onclick="return android();">
                    <svg aria-hidden="true" data-prefix="fab" data-icon="android" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 648 712" class="svg-inline--fa fa-android fa-w-14 fa-5x">
                        <path fill="currentColor" d="M89.6 204.5v115.8c0 15.4-12.1 27.7-27.5 27.7-15.3 0-30.1-12.4-30.1-27.7V204.5c0-15.1 14.8-27.5 30.1-27.5 15.1 0 27.5 12.4 27.5 27.5zm10.8 157c0 16.4 13.2 29.6 29.6 29.6h19.9l.3 61.1c0 36.9 55.2 36.6 55.2 0v-61.1h37.2v61.1c0 36.7 55.5 36.8 55.5 0v-61.1h20.2c16.2 0 29.4-13.2 29.4-29.6V182.1H100.4v179.4zm248-189.1H99.3c0-42.8 25.6-80 63.6-99.4l-19.1-35.3c-2.8-4.9 4.3-8 6.7-3.8l19.4 35.6c34.9-15.5 75-14.7 108.3 0L297.5 34c2.5-4.3 9.5-1.1 6.7 3.8L285.1 73c37.7 19.4 63.3 56.6 63.3 99.4zm-170.7-55.5c0-5.7-4.6-10.5-10.5-10.5-5.7 0-10.2 4.8-10.2 10.5s4.6 10.5 10.2 10.5c5.9 0 10.5-4.8 10.5-10.5zm113.4 0c0-5.7-4.6-10.5-10.2-10.5-5.9 0-10.5 4.8-10.5 10.5s4.6 10.5 10.5 10.5c5.6 0 10.2-4.8 10.2-10.5zm94.8 60.1c-15.1 0-27.5 12.1-27.5 27.5v115.8c0 15.4 12.4 27.7 27.5 27.7 15.4 0 30.1-12.4 30.1-27.7V204.5c0-15.4-14.8-27.5-30.1-27.5z" class="">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="bizeazy-ios-inc-btn common-bizeazy-ios">
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
<div class="row" id="emulatorPhone">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card-mini" >
            <div class="card-header">
                <div class="card-title text-center" style="height:610px;">
                    <div class="phone-outer-wrap" >
                        <div class="phoneView common-phone" id="ios">
                            <iframe class="iosIframe" src="{$base_url}ShopifyApp/iosAndroidPublishApps/ios/iosHome" frameborder="0" scrolling="no" style="height: 606px !important; "></iframe>
                            <!-- <div class="statusbar"></div> -->
                        </div>
                        <div class="androidView common-phone " id="android" style="margin-top: 110px !important; margin-left: -34px !important;">
                            <iframe class ="androidFrame" src="{$base_url}ShopifyApp/iosAndroidPublishApps/android/androidHome" frameborder="0" scrolling="no" style="width: 327px !important; height: 606px !important;"></iframe>
                            <div class="statusbar anddroid-statusbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

        
</div>
<link rel="stylesheet" type="text/css" href="{$base_url}assets/theme/web/css/developer.css">
<script type="text/javascript">
    $('#ios').show();
    $('#android').hide();
    function ios()   {
        $('#ios').show();
        $('#android').hide();
    }
    function android()    {
        $('#ios').hide();
        $('#android').show();
    }
</script>