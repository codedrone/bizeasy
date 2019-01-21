<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<title></title>

<h1 class="page-heading">{ucfirst($mode)} CMS</h1>
<ol class="breadcrumb default square rsaquo sm">
	<li>
		<a href="{$base_url}admin/Dashboard"><i class="fa fa-home"> Dashboard</i></a>
	</li>
	<li>
		<a href="{$base_url}admin/CMS">List Of CMS</a>
	</li>
	<li class="active">{ucfirst($mode)} CMS</li>
</ol>
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">CMS</h3>
			</div>
			<div class="panel-body">
				<form action="{$base_url}admin/CMS/{$mode}" enctype="multipart/form-data" id="Editcmsfrm" method='post' name="Editcmsfrm" role="form">
				<input type='hidden' id='iCMSId' name='iCMSId' value = "{$singleRecord.iCMSId}">
					<div class="col-sm-12">
						<div class="col-sm-6">
							<div class="form-group" style="margin-left: 5px;">
								<label>Title</label> 
								<input class="form-control txtboxheight" id="tTitle" name="tTitle" placeholder="Enter Title" type="text" value="{$singleRecord.tTitle}">
								<p class="help-block errcolor" id="err_title_area"><img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"><span id="lbltitleerrmsg"></span>
								</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group" style="margin-right: -10px;">
								<label>Code</label>
								<input class="form-control txtboxheight" type="text" name="vCode" id="vCode" {if $mode eq 'edit'}disabled{/if} value="{$singleRecord.vCode}">
								<p class="help-block errcolor" id="err_code_area"><img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"><span id="lblcodeerrmsg"></span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="control-group">
							<label style="margin-left:20px;">Content</label>
							<div class="controls">
								<p style="display: inline-block; width: 98%;margin-left:20px;">
									<textarea id="tDescription" name="tContent">{$singleRecord.tContent}</textarea>
								</p>
								<p class="help-block" id="errDescriptionArea" style="margin-left: 22px;"><img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"><span id="lbldescriptionmsg"></span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="col-sm-6">
							<div class="form-group" style="margin-left: 5px;">
								<label>Status</label> 
								<select class="form-control txtboxheight" id="eStatus" name="eStatus" tabindex="2">
									<option value="None">None</option>
									<option value="Archive" {if $singleRecord.eStatus eq 'Archive'}selected{/if}>Archive</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6"> 
							<div class="form-group btnFrmTop">
							<button class="btn btn-success active frmsavebtn" onclick="return cmsFormValidate();" type="button" style="">Save</button> 
							<button class="btn btn-danger active frmcancelbtn" onclick="window.location.href ='{$base_url}admin/CMS'" style="" type="button" value="Cancel">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	setInterval(function(){ 
		$('#err_message_area').fadeOut("slow");
	}, 5000);
	function cmsFormValidate() { 
		var titleStatus = codeStatus = check_desc =0;
		titleStatus = checkTitleValidation();
		check_desc=checkContent();
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
</script>