<?php
/* Smarty version 3.1.30, created on 2018-10-26 11:06:06
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\web\iframe\ios\iosPublishApp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd2d8febec610_04087579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a00e78b46d22291ed08458a894ced04f4ad339d3' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\web\\iframe\\ios\\iosPublishApp.tpl',
      1 => 1532053666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd2d8febec610_04087579 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <title><?php echo ucfirst($_smarty_tpl->tpl_vars['pagename']->value);?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/iframe/ios/css/framework7.ios.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/iframe/ios/css/framework7.ios.colors.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/iframe/ios/css/framework7-icons.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/iframe/ios/css/kitchen-sink.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
        <style type="text/css">
            .vHeaderColor
            {
                height:68px;
                border-radius: 20px 20px 0 0 !important;
               -moz-border-radius: 20px 20px 0 0 !important;
               -webkit-border-radius: 20px 20px 0 0 !important;
               -o-border-radius: 20px 20px 0 0 !important;
               -ms-border-radius: 20px 20px 0 0 !important;
                background:<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['vHeaderColor'];?>
;
            }
            .vHeaderColorPanel
            {
                border-radius: 20px 20px 0 0 !important;
               -moz-border-radius: 20px 20px 0 0 !important;
               -webkit-border-radius: 20px 20px 0 0 !important;
               -o-border-radius: 20px 20px 0 0 !important;
                -ms-border-radius: 20px 20px 0 0 !important;
             }
            .vBodyColor
            {
                background:<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['vBodyColor'];?>
;   
            }
            .vButtonColor
            {
                background:<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['vButtonColor'];?>
;      
            }

            .vButtonFontColor
            {
                color:<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['vButtonFontColor'];?>
;
            }
            .vThemeColor
            {
                background:<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['vThemeColor'];?>
 !important;     
            }
            .vLogo
            {
                background: url('<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['vLogo'];?>
') no-repeat left top !important;
                width: 54px;
                height: 43px;
            }
            .vlogo-p
            {
                color: black;
                margin-left: 91px;
                margin-top: -40px;
            }


        </style>
    </head>
    <body> 
    <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Admin') {?> 
        <?php $_smarty_tpl->_assignInScope('base_url_shops', ((string)$_smarty_tpl->tpl_vars['base_url']->value)."admin/Shops/ShopsDetailView/".((string)$_smarty_tpl->tpl_vars['singleRecord']->value['iShopId'])."/");
?>
    <?php } else { ?>
          <?php $_smarty_tpl->_assignInScope('base_url_shops', ((string)$_smarty_tpl->tpl_vars['base_url']->value)."ShopifyApp/iosAndroidPublishApps/ios/");
?>
    <?php }?>
    
    <div class="statusbar-overlay"></div>
    <div class="panel-overlay"></div>
    <div class=" vHeaderColorPanel panel panel-left panel-cover layout-dark" >
        <div class="vHeaderColor content-block username-bg-nav">
        	<div><img src="<?php echo $_smarty_tpl->tpl_vars['base_upload']->value;?>
user.png" style="height: 55px !important; width: 60px !important;"></div> <p class="vlogo-p"> Collections </p><div style="clear:both;"></div>
        </div>
        <div class="list-block">
          <ul>     
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop_navs']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <?php if (!$_smarty_tpl->tpl_vars['childShop_navs']->value) {?>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_shops']->value;
echo $_smarty_tpl->tpl_vars['value']->value['vHandle'];?>
" class="item-content item-link close-panel">
                                <div class="item-title"><?php echo ucfirst($_smarty_tpl->tpl_vars['value']->value['vName']);?>
</div>
                            </a>
                        </li>
                    <?php } else { ?>
                        <li <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['childShop_navs']->value, 'value1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value1']->value) {
if ($_smarty_tpl->tpl_vars['value']->value['iShopNavId'] == $_smarty_tpl->tpl_vars['value1']->value['iParentId']) {?> class="accordion-item" <?php }?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_shops']->value;
echo $_smarty_tpl->tpl_vars['value']->value['vHandle'];?>
" class="item-content item-link <?php if ($_smarty_tpl->tpl_vars['value']->value['iParentId'] != '0') {?> close-panel <?php }?>">
                                <div class="item-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
</div>
                            </a>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['childShop_navs']->value, 'value1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value1']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['value']->value['iShopNavId'] == $_smarty_tpl->tpl_vars['value1']->value['iParentId']) {?>
                                    <div class="accordion-item-content">
                                        <div class="content-block">
                                            <ul class="my-add-dp-nv">
                                                <li>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_shops']->value;
echo $_smarty_tpl->tpl_vars['value1']->value['vHandle'];?>
" class="item-content item-link close-panel">
                                                        <div class="item-title"><?php echo $_smarty_tpl->tpl_vars['value1']->value['vName'];?>
</div>
                                                    </a>
                                                </li> 
                                            </ul>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </li>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
    </div>
    <div class="views">
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['filename']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    </div>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/iframe/ios/js/framework7.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/iframe/ios/js/kitchen-sink.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
