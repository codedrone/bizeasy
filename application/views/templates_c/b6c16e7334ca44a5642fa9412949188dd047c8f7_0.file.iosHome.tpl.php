<?php
/* Smarty version 3.1.30, created on 2018-10-26 20:31:48
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\web\iframe\ios\iosHome.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd35d9495cf39_15419600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6c16e7334ca44a5642fa9412949188dd047c8f7' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\web\\iframe\\ios\\iosHome.tpl',
      1 => 1540578675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd35d9495cf39_15419600 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
        <img class="headerImage" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/images/iphoneheader1.png" style="">
        <div class="navbar-inner">
            <div class="left">
                <a href="" class="open-panel link icon-only"><i class="icon icon-bars"></i>
                </a>
            </div>
            <div class="center sliding pg-hd"><?php echo ucfirst($_smarty_tpl->tpl_vars['singleRecord']->value['vName']);?>
</div>
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
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shopsProduct']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <div class="col-50 home-grid-50">
                                        <div class="home-product-pic" style="height:145px !important;">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_shops']->value;?>
iosProductDetails/<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value->image->src;?>
" alt=""/>
                                            </a>
                                        </div>
                                        <div class="home-prduct-name-price-row">
                                            <h3><?php echo $_smarty_tpl->tpl_vars['value']->value->title;?>
</h3>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value->variants, 'variantsValue');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['variantsValue']->value) {
?>
                                                    <h4>$ <?php echo $_smarty_tpl->tpl_vars['variantsValue']->value->price;?>
</h4>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </div>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                    </div>
                    <div class="content-block">
                        <div class="row">
                            <div class="col-80 view-item-btn">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_shops']->value;?>
iosHome" class="vButtonColor vButtonFontColor button button-big ">View all Items</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><?php }
}
