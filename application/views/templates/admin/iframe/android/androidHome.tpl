<style type="text/css">
    img{
            height: 110px !important;
           width: 91px !important;
    }
</style>
<div class="view view-main">
    <div class="navbar vHeaderColor">
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
    <div class="pages navbar-through toolbar-through">
        <div data-page="index" class="page vBodyColor">
            <div class="page-content" style="margin-top: 53px !important;">
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
                                 <div class="home-product-pic" style="height:131px !important;">
                                    <a href="{$base_url}ShopifyApp/iosAndroidPublishApps/android/androidProductDetails/{$value->id}">
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
                </div>
                <div class="content-block">
                    <div class="row">
                        <div class="col-80 view-item-btn">
                            <a href="{$base_url}ShopifyApp/iosAndroidPublishApps/android/androidHome" class="vButtonColor vButtonFontColor button button-big">View all Items</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
