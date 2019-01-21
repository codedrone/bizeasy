<?php
/* Smarty version 3.1.30, created on 2018-10-26 20:38:31
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\web\iframe\ios\iosProductDetails.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd35f278198b5_96989723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e458b7b0bd85a989fd441e208c2d3f2cb3c780b' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\web\\iframe\\ios\\iosProductDetails.tpl',
      1 => 1532053666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd35f278198b5_96989723 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style type="text/css">
    img {
           height: 250px !important;
           width: 400px !important;
    }
</style> 
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shopsProduct']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['value']->value->id == $_smarty_tpl->tpl_vars['productsId']->value) {?>
        <div class="view view-main">
            <div class="navbar vHeaderColor">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_shops']->value;?>
iosHome" class="link icon-only"><i class="icon icon-bars back-page"></i></a>
                    </div>
                       <div class="center sliding pg-hd"><?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value->title;
$_prefixVariable1=ob_get_clean();
echo ucfirst($_prefixVariable1);?>
</div>
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
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_shops']->value;?>
iosWishlist/<?php echo $_smarty_tpl->tpl_vars['productsId']->value;?>
" class="vButtonColor vButtonFontColor button button-big ">Add to wishlist</a>
                                    </div>
                                    <div class="col-50 btn-col-50new">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_shops']->value;?>
iosCheckout/<?php echo $_smarty_tpl->tpl_vars['productsId']->value;?>
" class="vButtonColor vButtonFontColor button button-big">Add to cart</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-100 tablet-50 home-grid-100">
                                    	<div class="home-product-pic" style="height: 160px ! important;">
                                           <div data-pagination=".swiper-pagination" data-loop="true" class="swiper-container swiper-init ks-demo-slider swiper-container-horizontal">
                                                <div class="swiper-pagination color-pink"></div>
                                                    <div class="swiper-wrapper">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value->images, 'imagesValue');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagesValue']->value) {
?>
                                                              <div class="swiper-slide"><img src="<?php echo $_smarty_tpl->tpl_vars['imagesValue']->value->src;?>
" class="swiper-lazy"></div>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-prduct-name-price-row">
                                                <div class="row no-gutter">
                                                    <div class="col-66 detail-col66"><h3 class="slide-hd-tg"><?php echo $_smarty_tpl->tpl_vars['value']->value->title;?>
</h3>
                                                    </div>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value->variants, 'variantsValue');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['variantsValue']->value) {
?>
                                                        <div class="col-33 detail-col33">$ <?php echo $_smarty_tpl->tpl_vars['variantsValue']->value->price;?>
</div>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                </div>        
                                            </div>
                                        </div>
                                        <div class="col-100 tablet-50 home-grid-100 home-no-bg">
                                        	<h4 class="detail-hd-two">Description</h4>
                                            <p class="detail-prg-two"><?php echo $_smarty_tpl->tpl_vars['value']->value->body_html;?>
</p>
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
                                <div class="col-80 view-item-btn"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_shops']->value;?>
iosCheckout/<?php echo $_smarty_tpl->tpl_vars['productsId']->value;?>
" class="vButtonColor vButtonFontColor  button button-big">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



<?php }
}
