<style type="text/css">
    img {
           height: 250px !important;
           width: 400px !important;
    }
</style> 
{foreach $shopsProduct as $value}
    {if $value->id eq $productsId}
        <div class="view view-main">
            <div class="navbar vHeaderColor">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="{$base_url_shops}iosHome" class="link icon-only"><i class="icon icon-bars back-page"></i></a>
                    </div>
                       <div class="center sliding pg-hd">{ucfirst({$value->title})}</div>
                    <div class="right">
                        <a href="#" class="link icon-only add-inner-inc">
                            <i class="icon icon-bars-cart like-inc-add"></i>
                        </a>
                        <a href="#" class="link icon-only add-inner-inc">
                            <i class="icon icon-bars-cart share-inc-add"></i>
                        </a>
                        <a href="#" class="link icon-only add-inner-inc">
                            <i class="icon icon-bars-cart"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pages navbar-through toolbar-through" style="margin-top: 30px ! important; height:585px !important;">

                <div data-page="index" class="page vBodyColor">
                    <div class="page-content">
                        <div class="ks-grid">
                            <div class="content-block">
                                <div class="row btn-head-row">
                                    <div class="col-50 btn-col-50new">
                                        <a href="{$base_url_shops}iosWishlist/{$productsId}" class="vButtonColor vButtonFontColor button button-big ">Add to wishlist</a>
                                    </div>
                                    <div class="col-50 btn-col-50new">
                                        <a href="{$base_url_shops}iosCheckout/{$productsId}" class="vButtonColor vButtonFontColor button button-big">Add to cart</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-100 tablet-50 home-grid-100">
                                    	<div class="home-product-pic" style="height: 160px ! important;">
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
                                <div class="col-80 qty-item-row" style="width:91% !important;">
                                	<form id='myform' method='POST' action='#' class="numbo">
                                        <input type='button' value='-' class='qtyminus' field='quantity' />
                                        <input type='text' name='quantity' value='1' class='qty' />
                                        <input type='button' value='+' class='qtyplus' field='quantity' />
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-80 view-item-btn"><a href="{$base_url_shops}iosCheckout/{$productsId}" class="vButtonColor vButtonFontColor  button button-big">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/if}
{/foreach}


