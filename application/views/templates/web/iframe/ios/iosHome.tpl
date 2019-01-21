<style type="text/css">
    img{
           height: 100% !important;
           width: 100% !important;
           object-fit: cover;
    }
     .navbar-inner
    {
        height:145% !important;
    }
    .headerImage
    {
        padding-left: 58px;
        height: 33px ! important;
        width: 163px ! important;
        margin-top:-3px;
    }

</style>
<div class="view view-main">
    <div class="navbar vHeaderColor">
        <img class="headerImage" src="{$base_url}assets/theme/web/images/iphoneheader1.png" style="">
        <div class="navbar-inner">
            <div class="left">
                <a href="" class="open-panel link icon-only"><i class="icon icon-bars"></i>
                </a>
            </div>
            <div class="center sliding pg-hd">{ucfirst($singleRecord.vName)}</div>
            <div class="right">
                <a href="#" class="link icon-only"><i class="icon icon-bars-cart"></i></a>
            </div>
        </div>
    </div>
    <div class="pages navbar-through toolbar-through" style="margin-top: 30px ! important;">
        <div data-page="index" class="page vBodyColor">
            <div class="page-content">
            	<!-- <div class="home-slier-row">&nbsp;</div> -->
                    <div class="home-search-bar">
                        <input class="inp-search" type="search" id="mySearch" placeholder="Filter items">
                    </div>
                    <h2 class="home-cont-part-hd">Our popular products</h2>
                    <div style="clear:both;"></div>
                    <div class="ks-grid">
                        <div class="content-block">
                            <div class="row">
                                {foreach $shopsProduct as $value}
                                    <div class="col-50 home-grid-50">
                                        <div class="home-product-pic" style="height:145px !important;">
                                            <a href="{$base_url_shops}iosProductDetails/{$value->id}">
                                                <img src="{$value->image->src}" alt=""/>
                                            </a>
                                        </div>
                                        <div class="home-prduct-name-price-row">
                                            <h3>{$value->title}</h3>
                                                {foreach $value->variants as $variantsValue}
                                                    <h4>$ {$variantsValue->price}</h4>
                                                {/foreach}
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                    </div>
                    <div class="content-block">
                        <div class="row">
                            <div class="col-80 view-item-btn">
                                <a href="{$base_url_shops}iosHome" class="vButtonColor vButtonFontColor button button-big ">View all Items</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>