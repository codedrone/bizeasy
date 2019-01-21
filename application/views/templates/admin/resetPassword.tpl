<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
		<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
		<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
		<link rel="icon" href="{$base_url}assets/theme/web/home/images/fav.png" type="image/x-icon">
		<title>::: Bizeazy :::</title>
 		<script src="{$base_url}assets/theme/admin/js/resetPwdValidation.js">


		</script>	
 	 	{include file="./shared/common_css.tpl" title="Common CSS"}
		{include file="./shared/common_top_js.tpl" title="Common Top JS"}
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
			<div class="login-header text-center">
				<img src="{$admin_logo}" class="logo" alt="Bizeazy">
			</div>
			<form action="{$base_url}Authenticate/resetPassword" method="post" name="resetpassword_form" id="resetpassword_form">
				<input type="hidden" name="vOTP" value="{$vOTP}">
				<div class="form-group has-feedback lg left-feedback 	no-label">
			        <input type="password" name="vPassword" id="vPassword" class="form-control no-border input-lg rounded" placeholder="New Password" value="{$data.vPassword}">
  	 				<span class="fa fa-lock form-control-feedback"></span>
	  				<p class="help-block" id="password_err_block">
	  					<img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png">
	  					<span class="lblemailiderrmsg" id="lblpassworderrmsg"></span>
	  				</p>
				</div>
				<div class="form-group has-feedback lg left-feedback 	no-label">
				    <input type="password" name="vPassword" id="vConpwd" class="form-control no-border input-lg rounded" placeholder="Confirm Password" value="{$data.vPassword}">
				    <span class="fa fa-unlock-alt form-control-feedback"></span>
				    <p class="help-block" id="conpwd_err_block">
				  		<img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"><span class="lblemailiderrmsg" id="lblconpwderrmsg"></span>
				  	</p>
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-warning btn-lg btn-perspective btn-block" onclick="formValidation();">Reset</button>
				</div>
			</form>
		</div>
		
		{include file="./shared/common_bottom_js.tpl" title="Common Bottom JS"}
	</body>
</html>
