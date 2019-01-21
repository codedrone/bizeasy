<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
		<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
        <link rel="icon" href="{$base_url}assets/theme/web/home/images/fav.png" type="image/x-icon">

		<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
		<title>::: Bizeazy :::</title>
 		
 	 	{include file="./shared/common_css.tpl" title="Common CSS"}
		{include file="./shared/common_top_js.tpl" title="Common Top JS"}
		<script src="{$base_url}assets/theme/admin/js/forgotPassword.js">
		</script>
		<style type="text/css">
		.login_background{
			background:url("{$base_url}/assets/theme/admin/img/backgroundimage.jpg")no-repeat top center !important;
			background-size:cover;
			background-position: 100%;
			}
		
		</style>		
	</head>
  
	<body class="login tooltips login_background">
		
		<div class="login-wrapper">
			<div class="login-header text-center" style="background:transparent;">
				<img src="{$admin_logo}" class="logo" alt="Logo">
			</div>
			<!-- <div class="bizeazy-logo">
			<img src="{$base_url}assets/theme/admin/img/logo.png" class="logo" alt="Logo" style="width:100px"  >
			</div> -->
			{if $message neq ''}
				<div class="alert alert-warning alert-bold-border fade in alert-dismissable login-alert-message-box" id="err_message_area">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{$message}
				</div>
			{/if}
			<div class="alert alert-warning alert-bold-border fade in alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  <strong>Need help with your password?</strong>
					Enter the email you use for Bizeazy, and we’ll help you create a new password.
 					
			</div>
			<form role="form" action="{$base_url}Authenticate/forgotPassword" id='frmforgotPassword'  method='post'>
				<div class="form-group has-feedback lg left-feedback no-label">
				  <input type="text" name="vEmail" id="vEmail" class="form-control no-border input-lg rounded" placeholder="Enter email" autofocus>
				  <span class="fa fa-user form-control-feedback"></span>
				  <p class="help-block" id="err_email_area"><img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"><span class="lblemailiderrmsg" id="lblemailiderrmsg"></span></p>
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-warning btn-lg btn-perspective btn-block"onclick="formValidate();">Reset</button>
				</div>
			</form>
			<p class="text-center"><strong><a href="{$base_url}admin">Login?</a></strong></p>
		</div><!-- /.login-wrapper -->
		
		{include file="./shared/common_bottom_js.tpl" title="Common Bottom JS"}
	</body>
</html>