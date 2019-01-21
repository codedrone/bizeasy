<?php
/* Smarty version 3.1.30, created on 2018-06-15 18:44:46
  from "/var/www/html/projects/bizeazy/application/views/templates/admin/forgotPassword.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b23bbc67be055_03115552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85427f4057b09e53050ae02a130a20d5c63be203' => 
    array (
      0 => '/var/www/html/projects/bizeazy/application/views/templates/admin/forgotPassword.tpl',
      1 => 1529068459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./shared/common_css.tpl' => 1,
    'file:./shared/common_top_js.tpl' => 1,
    'file:./shared/common_bottom_js.tpl' => 1,
  ),
),false)) {
function content_5b23bbc67be055_03115552 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
		<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
        <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/fav.png" type="image/x-icon">

		<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
		<title>::: Bizeazy :::</title>
 		
 	 	<?php $_smarty_tpl->_subTemplateRender("file:./shared/common_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Common CSS"), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("file:./shared/common_top_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Common Top JS"), 0, false);
?>

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/admin/js/forgotPassword.js">
		<?php echo '</script'; ?>
>
		<style type="text/css">
		.login_background{
			background:url("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/theme/admin/img/backgroundimage.jpg")no-repeat top center !important;
			background-size:cover;
			background-position: 100%;
			}
		
		</style>		
	</head>
  
	<body class="login tooltips login_background">
		
		<div class="login-wrapper">
			<div class="login-header text-center" style="background:transparent;">
				<img src="<?php echo $_smarty_tpl->tpl_vars['admin_logo']->value;?>
" class="logo" alt="Logo">
			</div>
			<!-- <div class="bizeazy-logo">
			<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/admin/img/logo.png" class="logo" alt="Logo" style="width:100px"  >
			</div> -->
			<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
				<div class="alert alert-warning alert-bold-border fade in alert-dismissable login-alert-message-box" id="err_message_area">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

				</div>
			<?php }?>
			<div class="alert alert-warning alert-bold-border fade in alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  <strong>Need help with your password?</strong>
					Enter the email you use for Bizeazy, and we’ll help you create a new password.
 					
			</div>
			<form role="form" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Authenticate/forgotPassword" id='frmforgotPassword'  method='post'>
				<div class="form-group has-feedback lg left-feedback no-label">
				  <input type="text" name="vEmail" id="vEmail" class="form-control no-border input-lg rounded" placeholder="Enter email" autofocus>
				  <span class="fa fa-user form-control-feedback"></span>
				  <p class="help-block" id="err_email_area"><img class="validationimg" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/admin/img/arrow.png"><span class="lblemailiderrmsg" id="lblemailiderrmsg"></span></p>
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-warning btn-lg btn-perspective btn-block"onclick="formValidate();">Reset</button>
				</div>
			</form>
			<p class="text-center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin">Login?</a></strong></p>
		</div><!-- /.login-wrapper -->
		
		<?php $_smarty_tpl->_subTemplateRender("file:./shared/common_bottom_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Common Bottom JS"), 0, false);
?>

	</body>
</html><?php }
}
