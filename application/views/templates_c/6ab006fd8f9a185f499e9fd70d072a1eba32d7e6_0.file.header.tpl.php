<?php
/* Smarty version 3.1.30, created on 2018-10-25 17:12:26
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\web\shared\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd1dd5aaea4e7_51143242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ab006fd8f9a185f499e9fd70d072a1eba32d7e6' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\web\\shared\\header.tpl',
      1 => 1532053666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd1dd5aaea4e7_51143242 (Smarty_Internal_Template $_smarty_tpl) {
?>
<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['shops_logo']->value;?>
" alt="Bizeazy" />
<h1><?php echo ucfirst($_smarty_tpl->tpl_vars['sessionData']->value->shop->name);?>
</h1>
<nav style="margin-right: 30px;">
	<ul>
		<li class="bizeazy-dropdown" style="top: 20px;"><a class="bizeazy-user-inc" href="#"><?php echo $_smarty_tpl->tpl_vars['sessionData']->value->shop->shop_owner;?>
<span></span></a>
			<ul style="width: 100% !important;">
<!-- 				<li class="bizeazy-settings"><a href="#">Settings</a></li>
 -->	
 				<li class="bizeazy"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/notification">Notification</a></li>
                <li class="bizeazy"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/supportHelp">Help</a></li>
                
                <li class="bizeazy"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/faq">FAQ</a></li>
				
				<li class="bizeazy-logout"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Authentication/signOut">Logout</a></li>
			</ul>
		</li>
	</ul> 
</nav>
<nav>
	<ul>
		<li class="bizeazy-dropdown" style="top: 20px;">		
			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/termsOfService">Terms Of Services</a>
		</li>
	</ul>

</nav><?php }
}
