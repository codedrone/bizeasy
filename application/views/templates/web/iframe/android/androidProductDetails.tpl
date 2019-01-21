<style type="text/css">
    img {
           height: 150px !important;
           width: 178px !important
    }
</style>
{foreach $shopsProduct as $value}
    {if $value->id eq $productsId}
        <div class="view view-main">
            <div class="pages navbar-fixed">
                <div data-page="index" class="page vBodyColor">
                    <div class="navbar vHeaderColor">
                         <div class="navbar-inner">
                            <div class="left">
                                <a href="{$base_url_shops}androidHome" class="link icon-only"><i class="icon icon-bars back-page"></i></a>
                            </div>
                            <div class="center pg-hd">{ucfirst({$value->title})}</div>
                            <div class="right">
                                <a href="#" class="link icon-only add-inner-inc">
                                    <i class="icon icon-bars-cart like-inc-add"></i>
                                </a>
                                <a href="#" class="link icon-only add-inner-inc">
                                    <i class="icon icon-bars-cart share-inc-add"></i>
                                </a>
                                <a href="#" class="link icon-only add-inner-inc">
                                    <i class="icon icon-bars-cart" style="padding: 11px ! important;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="page-content" style="margin-top: 53px !important;">
                        <div class="ks-grid">
                            <div class="content-block">
                                <div class="row btn-head-row">
                                    <div class="col-50 btn-col-50new">
                                        <a href="{$base_url_shops}androidWishlist/{$productsId}" class="vButtonColor vButtonFontColor button button-big ">Add to wishlist</a>
                                    </div>
                                    <div class="col-50 btn-col-50new">
                                        <a href="{$base_url_shops}androidCheckout/{$productsId}" class="vButtonColor vButtonFontColor button button-big ">Add to cart</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-100 tablet-50 home-grid-100">
                                    	<div class="home-product-pic">
                                           <div data-pagination=".swiper-pagination" data-loop="true" class="swiper-container swiper-init ks-demo-slider swiper-container-horizontal">
                                                <div class="swiper-pagination color-pink"></div>
                                                <div class="swiper-wrapper">
                                                    {foreach $value->images as $imagesValue}
                                                      <div class="swiper-slide"><img src="{$imagesValue->src}" class="swiper-lazy"></div>
                                                    {/foreach}
                                                </div>
                                            </div>
                                        </div>
                                       <div class="home-prduct-name-price-row">
                                            <div class="row no-gutter">
                                                <div class="col-66 detail-col66"><h3 class="slide-hd-tg">{$value->title}</h3>
                                                </div>
                                                {foreach $value->variants as $variantsValue}
                                                    <div class="col-33 detail-col33">$ {$variantsValue->price}</div>
                                                {/foreach}
                                            </div>        
                                        </div>
                                    </div>
                                    <div class="col-100 tablet-50 home-grid-100 home-no-bg">
                                        <h4 class="detail-hd-two">Description</h4>
                                        <p class="detail-prg-two">{$value->body_html}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-block">
                            <div class="row">
                                <div class="col-80 qty-item-row" style="width:87% !important;">
                                	<form id='myform' method='POST' action='#' class="numbo">
                                        <input type='button' value='-' class='qtyminus' field='quantity' />
                                        <input type='text' name='quantity' value='1' class='qty' / style="width:156px !important;">
                                        <input type='button' value='+' class='qtyplus' field='quantity' />
                                    </form>
                                </div>
                            </div>
                            <div class="content-block">
                                <div class="row">
                                    <div class="col-80 view-item-btn"><a href="$base_url_shops}androidCheckout/{$productsId}" class="vButtonColor vButtonFontColor button button-big ">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   {/if}
{/foreach}
    