<style type="text/css">
	.bizeazy-app-infohd span
	{
		border: 0px;
		width: 0px
	}
	header h1
	{
		margin-top: 0px !important;
		margin-bottom: -5px !important;
	}
	
	body
	{
		  
		font: 400 100%/1.3 "proxima-nova","Proxima Nova",sans-serif ! important;
		background: #fafafa !important;
		color: #5f5f5f !important;
		
	}
		/*font-family: 'Montserrat', sans-serif !important;*/
</style>
<link rel="stylesheet" type="text/css" href="{$base_url}assets/theme/web/css/flat-admin.css">
<link rel="stylesheet" type="text/css" href="{$base_url}assets/theme/web/css/developer.css">

<link rel="stylesheet" type="text/css" href="{$base_url}assets/theme/web/css/vendor.css">
<div class="bizeazy-datafull-row">
  	<div class="bizeazy-app-info-sec">
   		<h2 class="bizeazy-app-infohd"><span></span>Push notification</h2>
    	<p>Please note that , This feature only works Once your app is live in app store as well as you are active subscriber or if you have purchased app.</p>
    	<div class="bizeazy-full-row">
	    	<div class="row">
				<div class="col-xs-12">
					<div class="card" style="width: 95% ! important;">
						<div class="card-body" style="padding-right: 58px ! important;">
							<div class="row">
								<div class="col-md-12">
									<button type="button" class="btn btn-primary pull-right" onclick="CreateNotification();" style="margin-bottom: 32px ! important;">New Notification</button><br>
									<table class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th width="20%">Title</th>
												<th width="50%">Message</th>
												<th width="30%">Sent On</th>
											</tr>
										</thead>
									<tbody>
										{foreach $notificationsRecords as $value}
											<tr>
												<td>{$value.tTitle}</td>
												<td>{$value.tMessage}</td>
												<td>{$value.dtCreatedDateTime}</td>
											</tr>
										{/foreach}
									</tbody>
									</table>
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
<div aria-hidden="false" role="dialog" tabindex="-1" id="AddMenu" class="modal fade in" style="display: none; padding-right: 15px; overflow-x: hidden;overflow-y: auto;">
	<div class="modal-dialog">
	    <div class="modal-content" style="margin-right: -50px;margin-left: 50px;">
	        <div class="modal-header">
	            <h3 class="modal-title" id="exampleModalLabel">Push Notification</h3>
	        </div>
	        <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Title:</label>
                    <input type="text" class="form-control" id="tTitle" name="tTitle">
                    <p class="help-block errcolor" id="err_title_area"> <span id="lbltitlerrmsg" class="errmsg"></span></p>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Message:</label>
                    <input type="text" class="form-control" id="tMessage" name="tMessage">
                    <p class="help-block errcolor" id="err_message_area"> <span id="lblmessagerrmsg" class="errmsg"></span></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="close-modal" onclick="return disable()">Close</button>
                <button type="button" class="btn btn-primary" onclick="return SendNotification()">Send Now</button>
            </div>
        </div>
    </div><!-- /.modal-dialog -->
</div>
<script src="{$base_url}assets/theme/web/js/commonValidationWeb.js"></script>

<script type="text/javascript">

	function CreateNotification() {
	 $('#AddMenu').show();
       $('#AddMenu').css({ "opacity":"1","background": "rgba(0, 0, 0, 0.5)"});
	}
	function disable()    {
      $("#AddMenu").css("display", "none");    
        // $(document.documentElement).css('overflow', 'auto');
    }
     function SendNotification()
    {       
        	var titleStatus  = messageStatus = 0;
            var iShopId = '{$iShopId}';
            var tTitle = $('#tTitle').val();
            var tMessage = $('#tMessage').val();
            titleStatus = checkTitle(tTitle);
            messageStatus = checkMessage(tMessage);
            var url = "{$base_url}ShopifyApp/notification";
            if(titleStatus==0  || messageStatus==0){
                return false;
            }
            else{
		        $.ajax({
	                url:url,
	                type:"POST",
	                data:{ "iShopId": iShopId, "tTitle": tTitle,"tMessage": tMessage},
	                success:function(data){
	                    location.reload();
	                   $('#AddMenu').hide();
	                   
	                }
	            });
	        }
    }
    
</script>
