<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="theme-color" content="{$singleRecord.vThemeColor}">

        <title>{ucfirst($pagename)}</title>
        <link rel="stylesheet" href="{$base_url}assets/theme/web/iframe/android/css/framework7.material.min.css">
        <link rel="stylesheet" href="{$base_url}assets/theme/web/iframe/android/css/framework7.material.colors.min.css">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{$base_url}assets/theme/web/iframe/android/css/material-icons.css">
        <link rel="stylesheet" href="{$base_url}assets/theme/web/iframe/android/css/kitchen-sink.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">

        <style type="text/css">
            .list-block ul::before,.list-block ul::after
            {
                background-color:transparent !important;
            }
            .vHeaderColor 
            {
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
                background:{$singleRecord.vThemeColor}  !important;     
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
            .active-state
            {
                display: block ! important;
            }
             .pg-hd
            {
                font-size:14px !important;
            }

        </style>
    </head>
    <body>
    {if $base_url eq 'http://192.168.1.201/bizeazy/'}
        {assign var="base_url_shops" value="{$base_url}admin/Shops/ShopsDetailView/{$singleRecord.iShopId}/"}
    {elseif $base_url eq 'http://bizeazy.coderspreview.com/'}
        {assign var="base_url_shops" value="{$base_url}admin/Shops/ShopsDetailView/{$singleRecord.iShopId}/"}
    {else}
        {assign var="base_url_shops" value="{$base_url}ShopifyApp/iosAndroidPublishApps/android/"}
    {/if}
    <div class="statusbar-overlay"></div>
    <div class="panel-overlay"></div>
    <div class="vThemeColor panel panel-left panel-cover">
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
                       <li {foreach $childShop_navs as $value1}{if $value.iShopNavId eq $value1.iParentId} class="accordion-item" {/if}  {/foreach}>
                            <a href="{$base_url_shops}{$value.vHandle}" class="item-content item-link  {if $value.iParentId neq '0' } close-panel {/if}">
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
        <script type="text/javascript" src="{$base_url}assets/theme/web/iframe/android/js/framework7.min.js"></script>
        <script type="text/javascript" src="{$base_url}assets/theme/web/iframe/android/js/kitchen-sink.js"></script>
    </body>
</html>