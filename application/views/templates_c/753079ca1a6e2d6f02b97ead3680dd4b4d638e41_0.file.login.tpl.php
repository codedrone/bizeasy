<?php
/* Smarty version 3.1.30, created on 2018-10-25 16:54:43
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\admin\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd1d9337035f9_89749152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '753079ca1a6e2d6f02b97ead3680dd4b4d638e41' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\admin\\login.tpl',
      1 => 1532053666,
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
function content_5bd1d9337035f9_89749152 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
		<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
		<link rel="icon" href="https://s3.amazonaws.com/bizeazy.net/Configuration/DEFAULT_LOGO/3071486.png" type="image/x-icon">
		<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
		<title>::: Bizeazy :::</title>
		<style type="text/css">
		.login_background{
			background:url("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/theme/admin/img/backgroundimage.jpg")no-repeat top center !important;
			background-size:cover;
			background-position: 100%;
		}
		</style>
 		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/admin/js/loginValidation.js"><?php echo '</script'; ?>
>
 		<?php $_smarty_tpl->_subTemplateRender("file:./shared/common_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Common CSS"), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("file:./shared/common_top_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Common Top JS"), 0, false);
?>

	</head>
 	<body class="login tooltips login_background" >
 		<div class="login-wrapper">
			<div class="login-header text-center" style="background:transparent;">
				<img src="<?php echo $_smarty_tpl->tpl_vars['admin_logo']->value;?>
" class="logo" alt="Bizeazy">
			</div>
			<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
				<div class="alert alert-warning alert-bold-border fade in alert-dismissable login-alert-message-box" id="err_message_area">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

				</div>
			<?php }?>
			<form role="form" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Authenticate" id='frmlogin' method='post'>
				<div class="form-group has-feedback lg left-feedback no-label">
				  	<input type="text" name="vEmail" id="vEmail" class="form-control no-border input-lg rounded" placeholder="Enter email" autofocus value="<?php echo $_smarty_tpl->tpl_vars['data']->value['vEmail'];?>
">
				  	<span class="fa fa-user form-control-feedback"></span>
				</div>
				<p class="help-block" id="err_email_area"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/admin/img/arrow.png" class="validationimg"><sub><span class="errvalidationtext" id="lblemailiderrmsg"></span></sub></p>
				<div class="form-group has-feedback lg left-feedback  no-label">
				  	<input type="password" name="vPassword" id="vPassword"  class="form-control no-border input-lg rounded" placeholder="Enter password"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['vPassword'];?>
">
		            <span class="fa fa-unlock-alt form-control-feedback"></span>
					<p class="help-block" id="err_password_area"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/admin/img/arrow.png" class="validationimg"><sub><span class="errvalidationtext" id="lblpassworderrmsg"></span></sub></p>
				</div>
				<div class="form-group">
				  	<div class="checkbox">
						<label>
						  	<input type="checkbox" class="i-yellow-flat" name="remember_me" <?php echo $_smarty_tpl->tpl_vars['data']->value['remember_me'];?>
> Remember me
						</label>
				  	</div>
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-warning btn-lg btn-perspective btn-block" onclick="formValidate();">LOGIN</button>
				</div>
			</form>
			<p class="text-center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Authenticate/forgotPassword">Forgot your password?</a></strong></p>
		</div><!-- /.login-wrapper -->
		<?php $_smarty_tpl->_subTemplateRender("file:./shared/common_bottom_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Common Bottom JS"), 0, false);
?>

	</body>
</html><?php }
}
