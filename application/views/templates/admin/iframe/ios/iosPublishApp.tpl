 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <title>{ucfirst($pagename)}</title>
        <link rel="stylesheet" href="{$base_url}assets/theme/web/iframe/ios/css/framework7.ios.min.css">
        <link rel="stylesheet" href="{$base_url}assets/theme/web/iframe/ios/css/framework7.ios.colors.min.css">
        <link rel="stylesheet" href="{$base_url}assets/theme/web/iframe/ios/css/framework7-icons.css">
        <link rel="stylesheet" href="{$base_url}assets/theme/web/iframe/ios/css/kitchen-sink.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
        <style type="text/css">
            .vHeaderColor
            {
                height:68px;
                border-radius: 20px 20px 0 0 !important;
               -moz-border-radius: 20px 20px 0 0 !important;
               -webkit-border-radius: 20px 20px 0 0 !important;
               -o-border-radius: 20px 20px 0 0 !important;
                background:{$singleRecord.vHeaderColor};
            }
            .vBodyColor
            {
                background:{$singleRecord.vBodyColor};   
            }
            .vButtonColor
            {
                background:{$singleRecord.vButtonColor};      
            }

            .vButtonFontColor
            {
                color:{$singleRecord.vButtonFontColor};
            }
            .vThemeColor
            {
                background:{$singleRecord.vThemeColor} !important;     
            }
            .vLogo
            {
                background: url('{$singleRecord.vLogo}') no-repeat left top !important;
                width: 54px;
                height: 43px;
            }
            .vlogo-p
            {
                color: black;
                margin-left: 91px;
                margin-top: -40px;
            }


        </style>
    </head>
    <body>  
    {if $base_url eq 'http://192.168.1.201/bizeazy/'}
        {assign var="base_url_shops" value="{$base_url}admin/Shops/ShopsDetailView/{$singleRecord.iShopId}/"}
    {elseif $base_url eq 'http://bizeazy.coderspreview.com/'}
        {assign var="base_url_shops" value="{$base_url}admin/Shops/ShopsDetailView/{$singleRecord.iShopId}/"}
    {else}
        {assign var="base_url_shops" value="{$base_url}ShopifyApp/iosAndroidPublishApps/ios/"}
    {/if}
    <div class="statusbar-overlay"></div>
    <div class="panel-overlay"></div>
    <div class="panel panel-left panel-cover layout-dark" style="border-radius: 24px !important;">
        <div class="vHeaderColor content-block username-bg-nav">
        	<div><img src="{$base_upload}user.png" style="height: 55px !important; width: 60px !important;"></div> <p class="vlogo-p"> Collections </p><div style="clear:both;"></div>
        </div>
        <div class="list-block">
          <ul>     
                {foreach $shop_navs as $value}
                    {if !$childShop_navs}
                        <li>
                            <a href="{$base_url_shops}{$value.vHandle}" class="item-content item-link close-panel">
                                <div class="item-title">{ucfirst($value.vName)}</div>
                            </a>
                        </li>
                    {else}
                        <li {foreach $childShop_navs as $value1}{if $value.iShopNavId eq $value1.iParentId} class="accordion-item" {/if} {/foreach}>
                            <a href="{$base_url_shops}{$value.vHandle}" class="item-content item-link {if $value.iParentId neq '0' } close-panel {/if}">
                                <div class="item-title">{$value.vName}</div>
                            </a>
                            {foreach $childShop_navs as $value1}
                                {if $value.iShopNavId eq $value1.iParentId}
                                    <div class="accordion-item-content">
                                        <div class="content-block">
                                            <ul class="my-add-dp-nv">
                                                <li>
                                                    <a href="{$base_url_shops}{$value1.vHandle}" class="item-content item-link close-panel">
                                                        <div class="item-title">{$value1.vName}</div>
                                                    </a>
                                                </li> 
                                            </ul>
                                        </div>
                                    </div>
                                {/if}
                            {/foreach}
                        </li>
                    {/if}
                {/foreach}
            </ul>
        </div>
    </div>
    <div class="views">
        {include file=$filename}

    </div>
        <script type="text/javascript" src="{$base_url}assets/theme/web/iframe/ios/js/framework7.min.js"></script>
        <script type="text/javascript" src="{$base_url}assets/theme/web/iframe/ios/js/kitchen-sink.js"></script>
    </body>
</html>