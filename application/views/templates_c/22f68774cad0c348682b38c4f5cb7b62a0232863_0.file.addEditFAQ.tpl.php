<?php
/* Smarty version 3.1.30, created on 2018-06-15 19:39:05
  from "/var/www/html/projects/bizeazy/application/views/templates/admin/faq/addEditFAQ.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b23c88155baa8_83499675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22f68774cad0c348682b38c4f5cb7b62a0232863' => 
    array (
      0 => '/var/www/html/projects/bizeazy/application/views/templates/admin/faq/addEditFAQ.tpl',
      1 => 1529071741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b23c88155baa8_83499675 (Smarty_Internal_Template $_smarty_tpl) {
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
 FAQ</h1>
	<ol class="breadcrumb default square rsaquo sm">
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Dashboard"><i class="fa fa-home">Dashboard</i></a>
	</li>
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/FAQ">List Of FAQ</a>
	</li>
	<li class="active"><?php echo ucfirst($_smarty_tpl->tpl_vars['mode']->value);?>
 FAQ</li>
</ol>
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">FAQ</h3>
			</div>
			<div class="panel-body">
				<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/FAQ/<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" enctype="multipart/form-data" id="addEditfaqfrm" method='post' name="addEditfaqfrm" role="form">
				<input type='hidden' id='iFAQId' name='iFAQId' value = "<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['iFAQId'];?>
">
					<div class="col-sm-12">
						<div class="col-sm-12">
							<div class="form-group" style="margin-left: 5px;margin-right: -10px;">
								<label>Question</label> 
								<input class="form-control txtboxheight" id="tQuestion" name="tQuestion" placeholder="Enter Question" type="text" value="<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['tQuestion'];?>
">
								<p class="help-block errcolor" id="err_question_area"><img class="validationimg" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/admin/img/arrow.png"><span id="lblquestionerrmsg"></span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="control-group">
							<label style="margin-left:20px;">Answer</label>
							<div class="controls">
								<p style="display: inline-block; width: 98%;margin-left:20px;">
									<textarea class="form-control" id="tDescription" name="tAnswer" rows="6"><?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['tAnswer'];?>
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
									<option value="Active" <?php if ($_smarty_tpl->tpl_vars['singleRecord']->value['eStatus'] == 'Active') {?>selected<?php }?>>Active</option>
									<option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['singleRecord']->value['eStatus'] == 'Inactive') {?>selected<?php }?>>Inactive</option>
								</select>
								<p class="help-block" id="err_status_area"><span id="lblstatuserrmsg"></span></p>
							</div>
						</div>
						<div class="col-sm-6"> 
							<div class="form-group btnFrmTop">
							<button class="btn btn-success active frmsavebtn" onclick="return faqFormValidate();" type="button" style="">Save</button> 
							<button class="btn btn-danger active frmcancelbtn" onclick="window.location.href ='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/FAQ'" style="" type="button" value="Cancel">Cancel</button>
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
	function faqFormValidate() { 
		var questionStatus = check_desc =0;
		var que=$('#tQuestion').val();
		var editor = $('#tDescription').val();

		questionStatus = checkQuestion(que);
			// check_desc=checkDescription();
			if (questionStatus==0) {
				return false;
		} else {
			$('#addEditfaqfrm').submit();
		}
	}
	/*$(function() {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('tAnswer');
			//bootstrap WYSIHTML5 - text editor
			//$(".textarea").wysihtml5();
	});*/
<?php echo '</script'; ?>
><?php }
}
