<?php
/* Smarty version 3.1.30, created on 2018-10-25 17:12:26
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\web\shopsDashbord\downloadPreviewApp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd1dd5aafb887_71017418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b9e1761ec94066abbb3152680a5aad58af4ecf0' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\web\\shopsDashbord\\downloadPreviewApp.tpl',
      1 => 1532053666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./shopAppDesign.tpl' => 1,
  ),
),false)) {
function content_5bd1dd5aafb887_71017418 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="bizeazy-datafull-row">
	 <div class="bizeazy-app-info-sec">
		<h2 class="bizeazy-app-infohd"><span>1</span> Download The Preview App</h2>
			<p><!-- You can change the header color of your app, and add banners, promo images and more. Click on the Customize My App button to make the changes --> Download "Bizeazy - The 5 minute Mobile App maker" to your device .</p>
			<a href="https://play.google.com/store/apps/details?id=com.bizeazy.appmaker&hl=en">
			    <div class="bizeazy-design-sec-box">
			  		<div class="bizeazy-design-inc bizeazy-des-blue"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/images/play-store.png" alt=""></div>
			    	<div class="bizeazy-design-title">Play Store</div>
			   </div>
			</a>
			
			<a href="https://itunes.apple.com/us/app/bizeazy-5-minute-mobile-app/id1185412960?ls=1&mt=8">
				<div class="bizeazy-design-sec-box">
			  		<div class="bizeazy-design-inc bizeazy-des-pink"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/images/appstore.png" alt=""></div>
			    	<div class="bizeazy-design-title">App Store</div>
			  	</div>
		  	</a>
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
