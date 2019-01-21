<?php
/* Smarty version 3.1.30, created on 2018-10-26 11:49:02
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\web\shopsDashbord\help.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd2e30e5f2b41_73583288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e497ef39bfae2bd3fe7d4bbffabf766a44bb0a76' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\web\\shopsDashbord\\help.tpl',
      1 => 1532053666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./shopAppDesign.tpl' => 1,
  ),
),false)) {
function content_5bd2e30e5f2b41_73583288 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style type="text/css">
	.bizeazy-app-infohd span
	{
		border: 0px;
		width: 0px
	}
	input.form-control, textarea.form-control
	{

		width: 270px !important;
	}

</style>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/css/flat-admin.css">
<div class="bizeazy-datafull-row">
  	<div class="bizeazy-app-info-sec">
   		<h2 class="bizeazy-app-infohd"><span></span>Support</h2>
    	<p> Please describe your problem in detail and paste in any error messages as necessary. We will get back to your request very soon! </p>
    	<div class="bizeazy-full-row">
	    	<div class="row">
				<div class="col-xs-12" style="margin-top: 48px ! important;">
					<div class="card" style="width: 95% ! important;">
							<div class="card-body" style="padding-right: 58px ! important;">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" placeholder="Enter name" name="vName" id="vName" type="text">
											<p class="help-block errcolor" id="err_name_area"> <span id="lblnameerrmsg" class="errmsg"></span></p>
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Enter email" name="vEmail" id="vEmail" type="text">
											<p class="help-block errcolor" id="err_email_area"> <span id="lblemailiderrmsg" class="errmsg"></span></p>
										</div>
										<div class="form-group">
											<textarea class="form-control" name="tMessage" id="tMessage"></textarea>
											<p class="help-block errcolor" id="err_message_area"> <span id="lblmessagerrmsg" class="errmsg"></span></p>
										</div>
										<div class="form-group">
											<input name="commit" value="Submit" class="btn btn-primary" data-disable-with="Submit" type="button" onclick="formValidate()" style="color: #fff !important;">		
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
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
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/js/commonValidationWeb.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    function formValidate()
    {       
        	var nameStatus = emailStatus = messageStatus = 0;
        	var iShopId = '<?php echo $_smarty_tpl->tpl_vars['iShopId']->value;?>
';
            var vName = $('#vName').val();
            var vEmail = $('#vEmail').val();
            var tMessage = $('#tMessage').val();

	    	nameStatus = checkName(vName);
            emailStatus = checkEmail(vEmail);
            messageStatus = checkMessage(tMessage);
            // parentStatus = checkParentName(iParentId);
            if(nameStatus==0 || emailStatus==0 || messageStatus==0){
                return false;
            }
            else{
		            var url = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/supportHelp";
			        $.ajax({
		                url:url,
		                type:"POST",
		                data:{ "iShopId": iShopId, "vName": vName,"vEmail": vEmail,"tMessage": tMessage},
		                success:function(data){
		                	location.reload();
		                }
		            });
   				}
   		}
    
<?php echo '</script'; ?>
>
<?php }
}
