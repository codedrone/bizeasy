<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<title></title>

<h1 class="page-heading">{ucfirst($mode)} FAQ</h1>
	<ol class="breadcrumb default square rsaquo sm">
	<li>
		<a href="{$base_url}admin/Dashboard"><i class="fa fa-home">Dashboard</i></a>
	</li>
	<li>
		<a href="{$base_url}admin/FAQ">List Of FAQ</a>
	</li>
	<li class="active">{ucfirst($mode)} FAQ</li>
</ol>
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">FAQ</h3>
			</div>
			<div class="panel-body">
				<form action="{$base_url}admin/FAQ/{$mode}" enctype="multipart/form-data" id="addEditfaqfrm" method='post' name="addEditfaqfrm" role="form">
				<input type='hidden' id='iFAQId' name='iFAQId' value = "{$singleRecord.iFAQId}">
					<div class="col-sm-12">
						<div class="col-sm-12">
							<div class="form-group" style="margin-left: 5px;margin-right: -10px;">
								<label>Question</label> 
								<input class="form-control txtboxheight" id="tQuestion" name="tQuestion" placeholder="Enter Question" type="text" value="{$singleRecord.tQuestion}">
								<p class="help-block errcolor" id="err_question_area"><img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"><span id="lblquestionerrmsg"></span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="control-group">
							<label style="margin-left:20px;">Answer</label>
							<div class="controls">
								<p style="display: inline-block; width: 98%;margin-left:20px;">
									<textarea class="form-control" id="tDescription" name="tAnswer" rows="6">{$singleRecord.tAnswer}</textarea>
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
									<option value="Active" {if $singleRecord.eStatus eq 'Active'}selected{/if}>Active</option>
									<option value="Inactive" {if $singleRecord.eStatus eq 'Inactive'}selected{/if}>Inactive</option>
								</select>
								<p class="help-block" id="err_status_area"><span id="lblstatuserrmsg"></span></p>
							</div>
						</div>
						<div class="col-sm-6"> 
							<div class="form-group btnFrmTop">
							<button class="btn btn-success active frmsavebtn" onclick="return faqFormValidate();" type="button" style="">Save</button> 
							<button class="btn btn-danger active frmcancelbtn" onclick="window.location.href ='{$base_url}admin/FAQ'" style="" type="button" value="Cancel">Cancel</button>
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
</script>