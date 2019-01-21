<?php
/* Smarty version 3.1.30, created on 2018-10-26 11:03:00
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\web\shopsDashbord\customerMyApp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd2d844a996a6_28929605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3669cd53dd002c8fa7844a60c4151484c56b002' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\web\\shopsDashbord\\customerMyApp.tpl',
      1 => 1532053666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./shopAppDesign.tpl' => 1,
  ),
),false)) {
function content_5bd2d844a996a6_28929605 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="bizeazy-datafull-row">
  	<div class="bizeazy-app-info-sec" >
   		<h2 class="bizeazy-app-infohd"><span>3</span> Customize My App</h2>
    	<p>You can change the header color of your app, and add banners, promo images and more. Click on the Customize My App button to make the changes.</p>
    	<div class="bizeazy-full-row">
	    	<div class="bizeazy-col3">
	        </div>
	        <div class="bizeazy-col3">
	        	<a class="bizeazy-app-customize-btn-box" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/customizeApp">
	           		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/images/customize.png" alt=""><br/> 
	                Customize My App
	            </a>
	        </div>
	        <div class="bizeazy-col3">
	        </div>
    	</div>          
  	</div>
	<div class="bizeazy-app-pre-sec">
		<div class="bizeazy-app-cover">
			<?php $_smarty_tpl->_subTemplateRender("file:./shopAppDesign.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Mobile View"), 0, false);
?>

		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
 	$("this").remove(".phone-outer-wrap"); 	
<?php echo '</script'; ?>
>
	<?php }
}
