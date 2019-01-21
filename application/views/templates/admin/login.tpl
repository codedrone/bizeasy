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
			background:url("{$base_url}/assets/theme/admin/img/backgroundimage.jpg")no-repeat top center !important;
			background-size:cover;
			background-position: 100%;
		}
		</style>
 		<script src="{$base_url}assets/theme/admin/js/loginValidation.js"></script>
 		{include file="./shared/common_css.tpl" title="Common CSS"}
		{include file="./shared/common_top_js.tpl" title="Common Top JS"}
	</head>
 	<body class="login tooltips login_background" >
 		<div class="login-wrapper">
			<div class="login-header text-center" style="background:transparent;">
				<img src="{$admin_logo}" class="logo" alt="Bizeazy">
			</div>
			{if $message neq ''}
				<div class="alert alert-warning alert-bold-border fade in alert-dismissable login-alert-message-box" id="err_message_area">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					{$message}
				</div>
			{/if}
			<form role="form" action="{$base_url}Authenticate" id='frmlogin' method='post'>
				<div class="form-group has-feedback lg left-feedback no-label">
				  	<input type="text" name="vEmail" id="vEmail" class="form-control no-border input-lg rounded" placeholder="Enter email" autofocus value="{$data.vEmail}">
				  	<span class="fa fa-user form-control-feedback"></span>
				</div>
				<p class="help-block" id="err_email_area"><img src="{$base_url}assets/theme/admin/img/arrow.png" class="validationimg"><sub><span class="errvalidationtext" id="lblemailiderrmsg"></span></sub></p>
				<div class="form-group has-feedback lg left-feedback  no-label">
				  	<input type="password" name="vPassword" id="vPassword"  class="form-control no-border input-lg rounded" placeholder="Enter password"  value="{$data.vPassword}">
		            <span class="fa fa-unlock-alt form-control-feedback"></span>
					<p class="help-block" id="err_password_area"><img src="{$base_url}assets/theme/admin/img/arrow.png" class="validationimg"><sub><span class="errvalidationtext" id="lblpassworderrmsg"></span></sub></p>
				</div>
				<div class="form-group">
				  	<div class="checkbox">
						<label>
						  	<input type="checkbox" class="i-yellow-flat" name="remember_me" {$data.remember_me}> Remember me
						</label>
				  	</div>
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-warning btn-lg btn-perspective btn-block" onclick="formValidate();">LOGIN</button>
				</div>
			</form>
			<p class="text-center"><strong><a href="{$base_url}Authenticate/forgotPassword">Forgot your password?</a></strong></p>
		</div><!-- /.login-wrapper -->
		{include file="./shared/common_bottom_js.tpl" title="Common Bottom JS"}
	</body>
</html>