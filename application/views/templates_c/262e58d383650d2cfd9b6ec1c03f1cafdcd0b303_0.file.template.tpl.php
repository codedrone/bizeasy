<?php
/* Smarty version 3.1.30, created on 2018-06-18 11:37:13
  from "/var/www/html/projects/bizeazy/application/views/templates/admin/template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b274c11a6e6c5_97564247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '262e58d383650d2cfd9b6ec1c03f1cafdcd0b303' => 
    array (
      0 => '/var/www/html/projects/bizeazy/application/views/templates/admin/template.tpl',
      1 => 1529302027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./shared/common_css.tpl' => 1,
    'file:./shared/common_top_js.tpl' => 1,
    'file:./shared/header.tpl' => 1,
    'file:./shared/menu.tpl' => 1,
    'file:./shared/footer.tpl' => 1,
    'file:./shared/modals.tpl' => 1,
    'file:./shared/common_bottom_js.tpl' => 1,
  ),
),false)) {
function content_5b274c11a6e6c5_97564247 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
		<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
		<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
        <link rel="icon" href="https://s3.amazonaws.com/bizeazy.net/Configuration/DEFAULT_LOGO/3071486.png" type="image/x-icon">

		<title>::: <?php echo ucfirst($_smarty_tpl->tpl_vars['pagename']->value);?>
 :::</title>
  
		<?php $_smarty_tpl->_subTemplateRender("file:./shared/common_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Common CSS"), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("file:./shared/common_top_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Common Top JS"), 0, false);
?>

	</head>
 
	<body class="tooltips top-navigation">
		<div class="wrapper">
			<!-- BEGIN TOP NAV -->
			<div class="top-navbar dark-color">
				<?php $_smarty_tpl->_subTemplateRender("file:./shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Header"), 0, false);
?>

			</div><!-- /.top-navbar -->
			<!-- END TOP NAV -->
			
			<!-- BEGIN TOP MAIN NAVIGATION -->
			<div class="top-main-navigation">
				<?php $_smarty_tpl->_subTemplateRender("file:./shared/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Menu"), 0, false);
?>

			</div><!-- /.top-main-navigation -->
			<!-- END TOP MAIN NAVIGATION -->
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content no-left-sidebar">
				<div class="container-fluid">
					<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['filename']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				</div><!-- /.container-fluid -->
				
				<!-- BEGIN FOOTER -->
				<footer>
					<?php $_smarty_tpl->_subTemplateRender("file:./shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Footer"), 0, false);
?>

				</footer>
				<!-- END FOOTER -->
			</div><!-- /.page-content -->
	   </div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
		<?php $_smarty_tpl->_subTemplateRender("file:./shared/modals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Model"), 0, false);
?>

		<!-- BEGIN BACK TO TOP BUTTON -->
		<div id="back-top">
			<a href="#top"><i class="fa fa-chevron-up"></i></a>
		</div>
		<!-- END BACK TO TOP -->
		<?php $_smarty_tpl->_subTemplateRender("file:./shared/common_bottom_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Common Bottom JS"), 0, false);
?>

	</body>
</html><?php }
}
