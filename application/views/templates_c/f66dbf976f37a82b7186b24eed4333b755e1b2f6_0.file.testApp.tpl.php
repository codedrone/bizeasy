<?php
/* Smarty version 3.1.30, created on 2018-10-26 20:33:25
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\web\shopsDashbord\testApp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd35df55b67b8_17236317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f66dbf976f37a82b7186b24eed4333b755e1b2f6' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\web\\shopsDashbord\\testApp.tpl',
      1 => 1532053666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./shopAppDesign.tpl' => 1,
  ),
),false)) {
function content_5bd35df55b67b8_17236317 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="bizeazy-datafull-row">
	<div class="bizeazy-app-info-sec">
		<h2 class="bizeazy-app-infohd"><span>2</span> Test Your App </h2>
	    	<p>Launch Bizeazy - The 5 minute Mobile App on your mobile device. Enter your Store's URL to Preview your App . </p>
			<div class="bizeazy-pre-code-box">
				<a href="https://<?php echo $_smarty_tpl->tpl_vars['shopArrSession']->value['shopArrSession']['shop'];?>
">
					<?php echo ucfirst($_smarty_tpl->tpl_vars['shopArrSession']->value['shopArrSession']['shop']);?>

				</a>	
			</div>  
	</div>
	<div class="bizeazy-app-pre-sec">
		<div class="bizeazy-app-cover">
			<?php $_smarty_tpl->_subTemplateRender("file:./shopAppDesign.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Mobile View"), 0, false);
?>

		</div>
	</div>
</div><?php }
}
