<!DOCTYPE html>
<html>
<head>
	<script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
</head>
<h1 class="page-heading">{$mode} Email Template</h1>
<ol class="breadcrumb default square rsaquo sm">
	<li><a href="{$base_url}admin/Dashboard"><i class="fa fa-home"> Dashboard</i></a>
	</li>
	<li><a href="{$base_url}admin/EmailTemplate">List Of Email Templates</a>
	</li>
	<li class="active"> {ucfirst($mode)} Email Template</li>
</ol>
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">{ucfirst($mode)} Email Template</h3>
			</div>
			<div class="panel-body">
				<form role="form" name="create_update_template_frm" id="create_update_template_frm" action="{$base_url}admin/EmailTemplate/{$mode}" method='post' enctype="multipart/form-data">
					<input type='hidden' name='iEmailTemplateId' id='iEmailTemplateId' value="{$singleRecord.iEmailTemplateId}">
					<div class="col-sm-12">
						<div class="col-sm-6">
							<div class="form-group" style="margin-left: 5px;">
								<label>Email Code</label>
								<input class="form-control txtboxheight" type="text" name="vEmailCode" id="vCode" value="{$singleRecord.vEmailCode}" {if $mode eq 'edit'}disabled=""{/if}>
								<p class="help-block errcolor" id="err_code_area"><img src="{$base_url}assets/theme/admin/img/arrow.png" class="validationimg"><span id="lblcodeerrmsg"></span>
								</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group" style="margin-right: -10px;">
								<label>From Name</label>
								<input class="form-control txtboxheight" type="text" name="vFromName" id="tTitle" value="{$singleRecord.vFromName}">
								<p class="help-block errcolor" id="err_title_area"><img src="{$base_url}assets/theme/admin/img/arrow.png" class="validationimg"><span id="lbltitleerrmsg"></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="col-sm-6">
							<div class="form-group" style="margin-left: 5px;">
								<label>Email Subject</label>
								<input class="form-control txtboxheight" type="text" name="vEmailSubject" id="vEmailSubject" value="{$singleRecord.vEmailSubject}">
								<p class="help-block errcolor" id="errSubjectArea"><img src="{$base_url}assets/theme/admin/img/arrow.png" class="validationimg"><span id="lblsubjecterrmsg"></span>
								</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group" style="margin-right: -10px;">
								<label>From Email</label>
								<input class="form-control txtboxheight" type="text" name="vFromEmail" id="vEmail" value="{$singleRecord.vFromEmail}">
								<p class="help-block errcolor" id="err_email_area"><img src="{$base_url}assets/theme/admin/img/arrow.png" class="validationimg"><span id="lblemailiderrmsg"></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="control-group">
							<label style="margin-left:20px;">Message</label>
							<div class="controls">
								<p style="display: inline-block; width: 98%;margin-left:20px;">
									<textarea id="tDescription" name="tEmailMessage">
										{$singleRecord.tEmailMessage}
									</textarea>
								</p>
								<p class="help-block errcolor" id="errDescriptionArea"><img src="{$base_url}assets/theme/admin/img/arrow.png" class="validationimg"><span id="lbldescriptionmsg"></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="col-sm-6">
							<div class="form-group btnFrmTopSpc" style="margin-left: 5px;">
								<button type="button" class="btn btn-success active frmsavebtn" onclick="return form_validate()">Save</button>
								<button type="button" class="btn btn-danger active frmcancelbtn" onclick="window.location.href = '{$base_url}admin/EmailTemplate'">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		setInterval(function() {
			$('#err_message_area').fadeOut("slow");
		}, 5000);

		function form_validate() {
			var titleStatus = codeStatus = emailStatus = subjectStatus = check_desc =0;
			titleStatus = checkTitleValidation();
			emailStatus = check_email();
			check_desc=checkEmailMessage();
			subjectStatus = checkEmailSubject();
			var base_url="{$base_url}";
			var mode = "{$mode}";
			var editor = $('#tDescription').val();
			if(mode=='add')
			{
				codeStatus = check_code_validation();
				if (codeStatus==0) {
				return false;
				}
			}
			if (titleStatus==0 || check_desc==0 || emailStatus==0 || subjectStatus==0) {
					return false;
			}
			else {
				if(mode=='add')
				{
					
					var code = $('#vCode').val();
					var code_check_url = base_url + "admin/EmailTemplate/check_code_exists";
				    $.ajax({
				        url:code_check_url+"?vEmailCode="+code,
				        type:"get",
				        success:function(data){
				        	if(data>0){
				            	$('#err_code_area').show();
				                $('#lblcodeerrmsg').html('Code already exists.');
				                return false;
				            }
				            else
				            {
				            	 $('#create_update_template_frm').submit();
							}
				        }
				    });
				   
				}
				else
				{
				    $('#create_update_template_frm').submit();

				}			
			}	
		}
		$(function() {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('tEmailMessage');
			//bootstrap WYSIHTML5 - text editor
		});

		
	</script>
