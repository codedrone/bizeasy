<?php
/* Smarty version 3.1.30, created on 2018-10-26 11:06:14
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\web\iframe\android\androidHome.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd2d9068e5c80_53024237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fcdf09ff85851a4a058a3f048d8919ec0a4518e' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\web\\iframe\\android\\androidHome.tpl',
      1 => 1532053666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd2d9068e5c80_53024237 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
            <div class="center sliding pg-hd"><?php echo ucfirst($_smarty_tpl->tpl_vars['singleRecord']->value['vName']);?>
</div>
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
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shopsProduct']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                          <div class="col-50 home-grid-50">
                                 <div class="home-product-pic" style="height:131px !important;">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/iosAndroidPublishApps/android/androidProductDetails/<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
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
                </div>
                <div class="content-block">
                    <div class="row">
                        <div class="col-80 view-item-btn">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/iosAndroidPublishApps/android/androidHome" class="vButtonColor vButtonFontColor button button-big">View all Items</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
