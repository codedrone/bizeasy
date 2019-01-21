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
<link rel="stylesheet" type="text/css" href="{$base_url}assets/theme/web/css/flat-admin.css">
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
			{include file="./shopAppDesign.tpl" title="Mobile View"}
		</div>
	</div>
</div>
<script src="{$base_url}assets/theme/web/js/commonValidationWeb.js"></script>
<script type="text/javascript">
    function formValidate()
    {       
        	var nameStatus = emailStatus = messageStatus = 0;
        	var iShopId = '{$iShopId}';
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
		            var url = "{$base_url}ShopifyApp/supportHelp";
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
    
</script>
