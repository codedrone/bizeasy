<?php
/* Smarty version 3.1.30, created on 2018-06-15 19:31:54
  from "/var/www/html/projects/bizeazy/application/views/templates/admin/cms/EditCMS.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b23c6d2a7acf7_19835467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32a981cc2724fbc7b1efbaa6637fa0c373e06886' => 
    array (
      0 => '/var/www/html/projects/bizeazy/application/views/templates/admin/cms/EditCMS.tpl',
      1 => 1523547510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b23c6d2a7acf7_19835467 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"><?php echo '</script'; ?>
>
<title></title>

<h1 class="page-heading"><?php echo ucfirst($_smarty_tpl->tpl_vars['mode']->value);?>
 CMS</h1>
<ol class="breadcrumb default square rsaquo sm">
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Dashboard"><i class="fa fa-home"> Dashboard</i></a>
	</li>
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/CMS">List Of CMS</a>
	</li>
	<li class="active"><?php echo ucfirst($_smarty_tpl->tpl_vars['mode']->value);?>
 CMS</li>
</ol>
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">CMS</h3>
			</div>
			<div class="panel-body">
				<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/CMS/<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" enctype="multipart/form-data" id="Editcmsfrm" method='post' name="Editcmsfrm" role="form">
				<input type='hidden' id='iCMSId' name='iCMSId' value = "<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['iCMSId'];?>
">
					<div class="col-sm-12">
						<div class="col-sm-6">
							<div class="form-group" style="margin-left: 5px;">
								<label>Title</label> 
								<input class="form-control txtboxheight" id="tTitle" name="tTitle" placeholder="Enter Title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['tTitle'];?>
">
								<p class="help-block errcolor" id="err_title_area"><img class="validationimg" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/admin/img/arrow.png"><span id="lbltitleerrmsg"></span>
								</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group" style="margin-right: -10px;">
								<label>Code</label>
								<input class="form-control txtboxheight" type="text" name="vCode" id="vCode" <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?>disabled<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['vCode'];?>
">
								<p class="help-block errcolor" id="err_code_area"><img class="validationimg" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/admin/img/arrow.png"><span id="lblcodeerrmsg"></span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="control-group">
							<label style="margin-left:20px;">Content</label>
							<div class="controls">
								<p style="display: inline-block; width: 98%;margin-left:20px;">
									<textarea id="tDescription" name="tContent"><?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['tContent'];?>
</textarea>
								</p>
								<p class="help-block" id="errDescriptionArea" style="margin-left: 22px;"><img class="validationimg" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/admin/img/arrow.png"><span id="lbldescriptionmsg"></span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="col-sm-6">
							<div class="form-group" style="margin-left: 5px;">
								<label>Status</label> 
								<select class="form-control txtboxheight" id="eStatus" name="eStatus" tabindex="2">
									<option value="None">None</option>
									<option value="Archive" <?php if ($_smarty_tpl->tpl_vars['singleRecord']->value['eStatus'] == 'Archive') {?>selected<?php }?>>Archive</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6"> 
							<div class="form-group btnFrmTop">
							<button class="btn btn-success active frmsavebtn" onclick="return cmsFormValidate();" type="button" style="">Save</button> 
							<button class="btn btn-danger active frmcancelbtn" onclick="window.location.href ='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/CMS'" style="" type="button" value="Cancel">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	setInterval(function(){ 
		$('#err_message_area').fadeOut("slow");
	}, 5000);
	function cmsFormValidate() { 
		var titleStatus = codeStatus = check_desc =0;
		titleStatus = checkTitleValidation();
		check_desc=checkContent();
		var base_url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";
		var mode = "<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
";
		var editor = $('#tDescription').val();
		if(mode=='add')
		{
			codeStatus = check_code_validation();
			if (codeStatus==0) {
			return false;
			}
		}
		if (titleStatus==0 || check_desc==0) {
				return false;
		}
		else {
			if(mode=='add')
			{
				
				var code = $('#vCode').val();
				var code_check_url = base_url + "admin/CMS/check_code_exists";
			    $.ajax({
			        url:code_check_url+"?vCode="+code,
			        type:"get",
			        success:function(data){
			        	if(data>0){
			            	$('#err_code_area').show();
			                $('#lblcodeerrmsg').html('Code already exists.');
			                return false;
			            }
			            else
			            {
			            	 $('#Editcmsfrm').submit();
						}
			        }
			    });
			   
			}
			else
			{
			    $('#Editcmsfrm').submit();

			}			
		}
	}
	$(function() {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('tContent');
			//bootstrap WYSIHTML5 - text editor
			//$(".textarea").wysihtml5();
	});
<?php echo '</script'; ?>
><?php }
}
