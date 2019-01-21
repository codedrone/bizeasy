{foreach $shopsProduct as $value}
    {if $value->id eq $productsId}
        {foreach $value->variants as $variantsValue}
            <div class="view view-main">
                <div class="pages navbar-fixed">
                    <div data-page="index" class="page vBodyColor">
                        <div class="navbar vHeaderColor" >
                            <div class="navbar-inner">
                                <div class="left">
                                    <a href="{$base_url_shops}androidHome" class="link icon-only"><i class="icon icon-bars back-page" style="padding: 11px ! important;"></i></a>
                                </div>
                                <div class="center sliding pg-hd">Wishlist</div>
                                <div class="right"></div>
                            </div>
                        </div>
                        <div class="page-content" style="margin-top: 55px ! important;">
                            <div class="ks-grid">
                                <div class="row my-order-row"><span>Your Order</span></div>
                                <div class="content-block">
                                    <div class="row">
                                        <div class="list-block checkout-listing">
                                            <ul>
                                                <li>
                                                    <div class="item-content">
                                                    	<span class="checkout-close"></span>
                                                    	<div class="item-media"><img src="{$value->image->src}" alt=""/ style="height: 44px !important;width: 53px !important;" >
                                                        </div>
                                                        <div class="item-inner">
                                                            <div class="item-title">{$value->title}
                                                            	<!-- <div class="checkout-qty-row wishlist-txt-info">
                                                				</div> -->
                                                            </div>
                                                                <div class="item-after">$ {$variantsValue->price}</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {/foreach}
    {/if}
{/foreach}

