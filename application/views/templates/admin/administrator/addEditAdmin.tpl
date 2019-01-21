<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<title></title>

<h1 class="page-heading">{ucfirst($mode)} Administrator</h1>
<ol class="breadcrumb default square rsaquo sm">
	<li>
		<a href="index.html"><i class="fa fa-home"> Dashboard</i></a>
	</li>
	<li>
		<a href="{$base_url}admin/Administrator">List Of Administrator</a>
	</li>
	<li class="active">{ucfirst($mode)} Administrator</li>
</ol>
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Administrator</h3>
			</div>
			<div class="panel-body">
				<form action="{$base_url}admin/Administrator/{$mode}" enctype="multipart/form-data" id="add_administrator_frm" method='post' name="add_administrator_frm" role="form">
				<input type='hidden' id='iAdminId' name='iAdminId' value = "{$singleRecord.iAdminId}">
					<div class="col-sm-12">
		 				<div class="col-sm-6">
							<div class="form-group">
								<label>Name</label> <input class="form-control txtboxheight" id="vName" name="vName" placeholder="Enter Name" type="text" value="{$singleRecord.vName}">
								<p class="help-block errcolor" id="err_uname_area"><img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"><span id="lblunameerrmsg"></span></p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Email</label> <input class="form-control txtboxheight" id="vEmail" name="vEmail" placeholder="Enter email id" type="text" value="{$singleRecord.vEmail}" {if $mode eq 'edit'}disabled{/if}>
								<p class="help-block" id="err_email_area"><img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"> <span id="lblemailiderrmsg"></span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Password</label>
								<input class="form-control txtboxheight" id="vPassword" name="vPassword" placeholder="Enter password" type="password" value="{$singleRecord.vPassword}">
								<p class="help-block" id="err_password_area"><img class="validationimg" src="{$base_url}assets/theme/admin/img/arrow.png"><span id="lblpassworderrmsg"></span></p>
							</div>
						</div>
						{if $login_info.vEmail neq {$singleRecord.vEmail}}
						<div class="col-sm-6">
							<div class="form-group">
								<label>Status</label> 
								<select class="form-control txtboxheight" id="eStatus" name="eStatus" tabindex="2">
									<option value="Active" {if $singleRecord.eStatus eq 'Active'}selected{/if}>Active</option>
									<option value="Inactive" {if $singleRecord.eStatus eq 'Inactive'}selected{/if}>Inactive</option>
								</select>
								<p class="help-block" id="err_status_area"><span id="lblstatuserrmsg"></span></p>
							</div>
						</div>
						{/if}
					</div>
					<div class="col-sm-12 btnFrmTopSpc">
						<div class="form-group" style="margin-left: 15px;">
							<button class="btn btn-success active frmsavebtn" onclick="return adminFormValidate();" type="button" style="">Save</button> 
							<button class="btn btn-danger active frmcancelbtn" onclick="window.location.href ='{$base_url}admin/Administrator'" style="" type="button" value="Cancel">Cancel</button>
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

	function adminFormValidate() { 
		var name_status =  email_id_status = password_status = 0;
		var base_url="{$base_url}";
		var email_check_url = base_url + "admin/Administrator/check_email_exists";
		var mode = "{$mode}";
		name_status = check_name_validation();
		email_id_status = check_email();
		password_status = check_password();             
		        
		if(name_status==0 || email_id_status== 0 || password_status==0){
			return false;
		}
		else{
			if (mode == 'add')
			{
				var email = $('#vEmail').val();
			    $.ajax({
			        url:email_check_url+"?vEmail="+email,
			        type:"get",
			        success:function(data){
			            var status = data;
			            if(status>0){
			            	$('#err_email_area').show();
			                $('#lblemailiderrmsg').html('Email id already exists.');
			                return false;
			            }
			            else
			            {
						    $('#add_administrator_frm').submit();
						}
			        }
			    });
			}
			else{
				$('#add_administrator_frm').submit();
			}
	    } 
	}
</script>