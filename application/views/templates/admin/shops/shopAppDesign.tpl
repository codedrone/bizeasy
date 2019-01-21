<div class="bizeazy-col3" style="margin-left: -26px;">
    <div class="row" id="emulatorPhone">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card-mini" >
                <div class="card-header">
                    <div class="card-title text-center" style="height:610px;">
                        <div class="phone-outer-wrap" >
                            <div class="common-phone phoneView" id="ios" style="margin-right: -329px !important">
                                <iframe class="iosIframe" src="{$base_url}admin/Shops/ShopsDetailView/{$singleRecord.iShopId}/iosHome" frameborder="0" scrolling="no" style="height: 94% !important;"></iframe>
                                <!-- <div class="statusbar"></div> -->
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