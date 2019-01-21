<style type="text/css">
.phone {
    position: absolute;
    background: #111;
    border-radius: 55px;
    box-shadow: 0px 0px 0px 2px #aaa;
    top: 0;
    right: 0px;
    width: 320px;
    height: 568px;
    padding: 105px 25px;
    box-sizing: content-box;
}
.phone::before {
    content: '';
    width: 60px;
    height: 10px;
    border-radius: 10px;
    position: absolute;
    left: 50%;
    margin-left: -30px;
    background: #333;
    top: 50px;
}
*::before, *::after {
    box-sizing: border-box;
}
.phone .statusbar {
    position: absolute;
    width: 320px;
    height: 20px;
    background: url({$base_url}assets/theme/admin/img/status-bar.png);
    left: 50%;
    margin-left: -160px;
    top: 100px;
    background-size: 100% auto;
}
.phone iframe {
    width: 320px;
    height: 548px;
    display: block;
    width: 100%;
    margin-top: 20px;
}
</style>
<h1 class="page-heading">Store Information</h1>
<!-- End page heading -->
<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
	<li><a href="{$base_url}admin/Dashboard"><i class="fa fa-home"> Dashboard </i></a></li>
	<li><a href="{$base_url}admin/Shops">List Shops</a></li>
	<li class="active"> View Shops</li>
</ol>
<!-- End breadcrumb -->
<form role="form" id="add_consumer_frm" action="{$base_url}admin/Shops/info" method='post' enctype="multipart/form-data">
	<input type='hidden' name='iShopId' id='iShopId' value="{$singleRecord.iShopId}">
	<div class="row">
		<div class="col-sm-12">
			<div class="the-box">
			    <div class="panel-heading">
					<ul class="nav nav-tabs">
						<li  class="active reason1"><a href="#wizard-1-step1" data-toggle="tab"><i class="fa fa-home"></i> Home</a></li>
						<li class='reason'><a href="#wizard-1-step2" data-toggle="tab"><i class="fa fa-check"></i>Membership</a></li>
					</ul>
				</div><!-- /.panel .panel-success -->
				<div id="panel-collapse-1" class="collapse in">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="wizard-1-step1">
							<div class="panel-body">
								<div class="col-sm-12" style="margin: 0px -15px ! important;">
									<div class="col-sm-8" >
										<div class="well bs-component">
											<div class="form-group">
												<label class="control-label" for="focusedInput">App Store Logo</label><br>
												{if $singleRecord.vLogo neq ''}
									             <img src="{$singleRecord.vLogo}" height="200" width="200">
				            					{else}
													Not added yet. 
												{/if}

											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Splash 1</label><br>
									            {if $singleRecord.vSplash1 neq ''}
									             <img src="{$singleRecord.vSplash1}" height="200" width="200">
				            					{else}
													Not added yet. 
												{/if}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Splash 2</label><br>
												 {if $singleRecord.vSplash2 neq ''}
									             <img src="{$singleRecord.vSplash2}" height="200" width="200">
				            					{else}
													Not added yet. 
												{/if}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Splash 3</label><br>
									             {if $singleRecord.vSplash3 neq ''}
									             <img src="{$singleRecord.vSplash3}" height="200" width="200">
				            					{else}
													Not added yet. 
												{/if}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Header Color</label><br>
												{$singleRecord.singleRecord.vHeaderColor}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Body Color</label><br>
												{$singleRecord.vBodyColor}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Button Color</label><br>
												{$singleRecord.vButtonColor}
											</div>    
											<div class="form-group">
												<label class="control-label" for="focusedInput">Button Font Color</label><br>
												{$singleRecord.vButtonFontColor}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Menu</label><br>
												{foreach $menuList as $value}
													{$value.vName} ({$value.eNavType})
													<br>
												{/foreach}
												

											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Theme Color</label><br>
												{$singleRecord.vThemeColor}
												
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Domain</label><br>
												{$singleRecord.vDomain}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Shopify Domain</label><br>
												{$singleRecord.vShopifyDomain}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Currency</label><br>
												{$singleRecord.vCurrency}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Money Format</label><br>
												&lt;span class=money&gt;{$singleRecord.vMoneyFormat}&lt;/span&gt;
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Contact Name</label><br>
												{$singleRecord.vContactName}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Contact Email</label><br>
												{$singleRecord.vContactEmail}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Contact Province</label><br>
												{$singleRecord.vContactProvince}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Contact Country</label><br>
												{$singleRecord.vContactCountry}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Contact Address1</label><br>
												{$singleRecord.tContactAddress}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Contact Zip</label><br>
												
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Contact City</label><br>
												{$singleRecord.vContactZipCode}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Contact Phone</label><br>
												{$singleRecord.vContactPhoneNo}
											</div>
											<div class="form-group">
												<label class="control-label" for="focusedInput">Store Contact Name</label><br>
												{$singleRecord.vContactName}
											</div>
											
										</div>
									</div>
									<div class="col-lg-4" id="emulatorPhone" style="width: 16.333% !important;">
										{include file="./shopAppDesign.tpl" title="Mobile View"}
									</div>		
								</div>
							</div>
						</div>
						<div class="tab-pane fade " id="wizard-1-step2">
							<div class="panel-body">
								<div class="col-sm-12">
									<div class="table-responsive">
										<table class="table table-striped table-hover" id="membership_table">
											<thead class="the-box dark full">
												<tr>
													<th>Memebership Type</th>
													<th>Membership Name</th>
													<th>Charge Id</th>
													<th>Price</th>
													<th>Start</th>
				 									<th>End</th>
													<th>Charge Status</th>
													<th>Order Date</th>
												</tr>
											</thead>
											<tbody>
											{foreach $membershipsDetail as $value}

												<tr class="odd gradeX">
													<td>{$value.eMembershipType}</td>
													<td>{$value.eMembershipName}</td>
													<td>{$value.vChargeId}</td>
													<td>${$value.dPrice}</td>
													<td>{$value.dStartDate}</td>
													<td>{$value.dEndDate}</td>
													<td>{$value.eChargeStatus}</td>
													<td>{$value.dStartDate}</td>
												</tr>
											{/foreach}

											</tbody>
										</table>
									</div>
								</div><!-- /.table-responsive -->
						   </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>	
<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){ 
		$('#err_message_area').fadeOut("slow");
		}, 5000);
		$('#membership_table').dataTable({
		"bAutoWidth": false,
		"aaSorting": [],
		"aoColumns": [
		{ "bSortable": false },
		null,
		null,
		null,
		null,
		null,
		null,
		{ "bSortable": false }
		]
		});
	});
	
</script>

				