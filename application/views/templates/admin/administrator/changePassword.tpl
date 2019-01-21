<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
</script>
<title></title>

<h1 class="page-heading">Administrator</h1>
<ol class="breadcrumb default square rsaquo sm">
<li>
	<a href="{$base_url}admin/Dashboard"><i class="fa fa-home"> Dashboard </i></a>
</li>
<li class="active">Administrator</li>
</ol>
<div class="row">
<div class="col-sm-12">
	<div class="panel panel-default">
		<div class="panel-heading" align="center">
			<h3 class="panel-title">Administrator</h3>
		</div>
		<div class="panel-body">
			<form action="{$base_url}admin/Administrator/changePassword" enctype="multipart/form-data" id="change_password_form" method='post' name="add_administrator_frm" role="form">
			<input type='hidden' id='iAdminId' name='iAdminId' value = "{$iAdminId}">
				<div class="col-sm-12">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Old Password</label>
							<input class="form-control txtboxheight" id="oldpass" name="oldpass" placeholder="Enter Old Password" type="password" value="">
							<p class="help-block" id="err_oldpass_area"><img src="{$base_url}assets/theme/admin/img/arrow.png" class="validationimg"><sub><span class="errvalidationtext" id="lbloldpasserrmsg"></span></sub></p>
						</div>
					</div>
					<div class="col-sm-4"></div>
				</div><div class="col-sm-12">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>New Password</label>
							<input class="form-control txtboxheight" id="vPassword" name="newpass" placeholder="Enter New password" type="password" value="">
							<p class="help-block" id="err_password_area"><img src="{$base_url}assets/theme/admin/img/arrow.png" class="validationimg"><sub><span class="errvalidationtext" id="lblpassworderrmsg"></span></sub></p>
						</div>
					</div>
					<div class="col-sm-4"></div>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Retype - New Password</label>
							<input class="form-control txtboxheight" id="retypepass" name="retypepass" placeholder="Enter Retype - New Password" type="password" value="">
							<p class="help-block" id="err_retypepass_area"><img src="{$base_url}assets/theme/admin/img/arrow.png" class="validationimg"><sub><span class="errvalidationtext" id="lblretypepasserrmsg"></span></sub></p>
						</div>
					</div>
					<div class="col-sm-4"></div>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <button type="button" class="btn btn-success active frmsavebtn" onclick="check_changepassword_frm();">Save</button>
                                <button type="button" class="btn btn-danger active frmcancelbtn" onclick="window.location.href ='{$base_url}admin/Administrator'">Cancel</button>
                            </div>
                        </div>
					<div class="col-sm-4"></div>
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
	 function check_changepassword_frm() {
            var base_url="{$base_url}";
            var oldpass_check_url = base_url + "admin/Administrator/check_exist_password";
            var oldpassstat=0;
            var oldpasserr = newpasserr = retypepasserr = 0;
            oldpasserr = check_oldpassword();
            newpasserr = checkOldNewpassword();
            retypepasserr = check_retypepassword();
             if (oldpasserr == 0 || newpasserr == 0 || retypepasserr == 0) {
                return false;
            }
            else{
		            var iAdminId="{$iAdminId}";
	            	var oldpass = $('#oldpass').val();
                    $.ajax({
                    url: oldpass_check_url + "?password=" +oldpass+"&iAdminId="+iAdminId,
                    type: "get",
                    success: function(data) {
                    	var status = data.trim();
                        if (status >0) {
                        	$('#change_password_form').submit();
                            return false
                        } else {

                        	$('#err_oldpass_area').show();
                            $('#lbloldpasserrmsg').html('Please Enter Valid Password.');
                        	return false;
                        }
                    }
                });
            }
                   
        }
       
</script>

</body>
</html>