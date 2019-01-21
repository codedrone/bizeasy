{foreach $shopsProduct as $value}
    {if $value->id eq $productsId}
        {foreach $value->variants as $variantsValue}
        <div class="view view-main">
            <div class="navbar vHeaderColor"> 
                <div class="navbar-inner">
                   <div class="left">
                        <a href="{$base_url_shops}iosHome" class="link icon-only"><i class="icon icon-bars back-page"></i></a>
                    </div>
                    <div class="center sliding pg-hd">Checkout</div>
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
                                                    <div class="item-media"><img src="{$value->image->src}" alt=""/  style="height: 71px !important;width: 34px !important;" ></div>
                                                    <div class="item-inner">
                                                        <div class="item-title">{$value->title}
                                                            <div class="checkout-qty-row">
                                                                <form id='myform1' method='POST' action='#' class="numbo">
                                                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                                                    <input type='text' name='quantity' value='1' class='qty' />
                                                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                                                </form>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="item-after">$ {$variantsValue->price}</div>
                                                      
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-100 tablet-50 home-grid-100 home-bg-gray" style="width: 1308px ! important;">
                                        <div class="row checkout-shipping-row">
                                            <div class="col-50 shipping-txt">SHIPPING AND HANDLING</div>
                                            <div class="col-50 free-shipping-txt vButtonColor">free shipping</div>
                                        </div>
                                        <div class="row checkout-shipping-row no-border">

                                            <div class="col-50 shipping-txt">order total</div>
                                            <div class="col-50 total-price-chk">$ {$variantsValue->price}</div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-block">
                            <div class="row">
                                <div class="col-80 qty-item-row"><a href="{$base_url_shops}iosHome" class=" vButtonColor vButtonFontColor button button-big ">Check out</a></div>
                            </div>
                            <div class="row">
                                <div class="col-80 view-item-btn"><a href="#" class=" vButtonColor vButtonFontColor button button-big  ">Cancel</a>
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
