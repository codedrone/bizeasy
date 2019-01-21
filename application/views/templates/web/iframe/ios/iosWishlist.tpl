{foreach $shopsProduct as $value}
    {if $value->id eq $productsId}
        {foreach $value->variants as $variantsValue}
            <div class="view view-main">
                <div class="navbar vHeaderColor"> 
                     <div class="navbar-inner">
                        <div class="left">
                            <a href="{$base_url_shops}iosHome" class="link icon-only"><i class="icon icon-bars back-page"></i></a>
                        </div>
                        <div class="center sliding pg-hd">Wishlist</div>
                        <div class="right"></div>
                    </div>
                </div>
                <div class="pages navbar-through toolbar-through" style="margin-top: 30px ! important;">
                    <div data-page="index" class="page vBodyColor">
                        <div class="page-content">
                            <div class="ks-grid">
                                <div class="row my-order-row"><span>Your Order</span></div>
                                <div class="content-block">
                                    <div class="row">

                                        <div class="list-block checkout-listing">
                                            <ul>
                                                <li>
                                                    <div class="item-content">
                                                    	<span class="checkout-close"></span>
                                                    	<div class="item-media"><img src="{$value->image->src}" alt=""/></div>
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


