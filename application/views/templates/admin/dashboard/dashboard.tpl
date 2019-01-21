<!-- Begin page heading -->
<h1 class="page-heading">{ucfirst($pagename)}</h1>
<!-- End page heading -->
	{if $message neq ''}
        <div class="alert alert-danger alert-block fade in alert-dismissable" id="err_message_area">
        <button aria-hidden="true" class="close" data-dismiss="alert" type="button">&times;</button>
        {$message}
    	</div>
    {/if}
<!-- BEGIN SiTE INFORMATIONS -->
<div class="row">
	<div class="col-sm-3">
		<div class="the-box no-border bg-success tiles-information">
			<i class="fa fa-users icon-bg"></i>
			<div class="tiles-inner text-center">
				<p>TOTAL SHOPS</p>
				<h1 class="bolded">{$totalShops}</h1> 
				<div class="progress no-rounded progress-xs">
				  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:{$totalShops}%"><!-- {$totalShops/100}% -->
				  </div><!-- /.progress-bar .progress-bar-success -->
				</div><!-- /.progress .no-rounded -->
			</div><!-- /.tiles-inner -->
		</div><!-- /.the-box no-border -->
	</div><!-- /.col-sm-3 -->
	<div class="col-sm-3">
		<div class="the-box no-border bg-info tiles-information">
			<i class="fa fa-shopping-cart icon-bg"></i>
			<div class="tiles-inner text-center">
				<p>ACTIVE SHOPS</p>
				<h1 class="bolded">{$activeShops}</h1> 
				<div class="progress no-rounded progress-xs">
				  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:{($activeShops*100)/$totalShops}%">
				  </div><!-- /.progress-bar .progress-bar-info -->
				</div><!-- /.progress .no-rounded -->
			</div><!-- /.tiles-inner -->
		</div><!-- /.the-box no-border -->
	</div><!-- /.col-sm-3 -->
	<div class="col-sm-3">
		<div class="the-box no-border bg-danger tiles-information">
			<i class="fa fa-comments icon-bg"></i>
			<div class="tiles-inner text-center">
				<p>PENDING SHOPS</p>
				<h1 class="bolded">{$pendingShops}</h1> 
				<div class="progress no-rounded progress-xs">
				  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:{($pendingShops*100)/$totalShops}%">
				  </div><!-- /.progress-bar .progress-bar-danger -->
				</div><!-- /.progress .no-rounded -->
			</div><!-- /.tiles-inner -->
		</div><!-- /.the-box no-border -->
	</div><!-- /.col-sm-3 -->
	<div class="col-sm-3">
		<div class="the-box no-border bg-warning tiles-information">
			<i class="fa fa-money icon-bg"></i>
			<div class="tiles-inner text-center">
				<p>INACTIVE SHOPS</p>
				<h1 class="bolded">{$inactiveShops}</h1> 
				<div class="progress no-rounded progress-xs">
				  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: {($inactiveShops*100)/$totalShops}%">
				  </div><!-- /.progress-bar .progress-bar-warning -->
				</div><!-- /.progress .no-rounded -->
			</div><!-- /.tiles-inner -->
		</div><!-- /.the-box no-border -->
	</div><!-- /.col-sm-3 -->
</div><!-- /.row -->
<!-- END SITE INFORMATIONS -->

<div class="row">
	<div class="col-sm-3">
		<div class="alert alert-success alert-bold-border square fade in alert-dismissable">
		  	<strong>Total Membership : {$totalMemberShip}</strong>
		</div>
	</div>

	<div class="col-sm-3">
		<div class="alert alert-info alert-bold-border square fade in alert-dismissable">
		  	<strong>Active Membership : {$activeMemberShip}</strong>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="alert alert-danger alert-bold-border square fade in alert-dismissable">
		  	<strong>Pending Membership : {$pendingMemberShip}</strong>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="alert alert-warning alert-bold-border square fade in alert-dismissable">
		  	<strong>Cancel Membership : {$cencelMemberShip}</strong>
		</div>
	</div>
</div>

<!-- BEGIN CAROUSEL ITEM -->
{if $topShops}
<div class="the-box no-border">
	<h4 class="small-heading more-margin-bottom text-center">TOP {if count($topShops) < '10' } {count($topShops)} {else} 10 {/if}SHOPS</h4>
	<div id="store-item-carousel-3" class="owl-carousel shop-carousel">
		{foreach from=$topShops item=$value}
			<div class="item">
				<div class="media">
					<a class="pull-left" href="#fakelink">
					  <img class="media-object sm" src="{$value.vLogo}" alt="Image">
					</a>
					<div class="media-body">
					  <h4 class="media-heading"><a href="#">{ucfirst($value.vName)}</a></h4>
					  <p class="brand">Contact name - {$value.vName}</p>
					  <p class="price text-danger"><strong>&#36;{$value.dPrice}</strong></p>
					</div>
				</div>
			</div><!-- /.item -->
		{/foreach}
	</div><!-- /#store-item-carousel-1 -->
</div><!-- /.the-box .no-border -->
<!-- END CAROUSEL ITEM -->
{/if}
<!-- BEGIN CAROUSEL ITEM -->
<!-- BEGIN CAROUSEL ITEM -->
{if $lastActiveShops}
<div class="the-box no-border">
	<h4 class="small-heading more-margin-bottom text-center">Last Installed SHOPS</h4>
	<div id="store-item-carousel-1" class="owl-carousel shop-carousel">
		{foreach from=$lastActiveShops|@array_slice:0:5 item=$value}
			<div class="item">
				<div class="media">
					<a class="pull-left" href="#fakelink">
					  <img class="media-object sm" src="{$value.vLogo}" alt="Image">
					</a>
					<div class="media-body">
					  <h4 class="media-heading"><a href="#">{ucfirst($value.vName)}</a></h4>
					  <p class="brand">Contact name - {$value.vName}</p>
					  
					</div>
				</div>
			</div><!-- /.item -->
		{/foreach}
	</div><!-- /#store-item-carousel-1 -->
</div><!-- /.the-box .no-border -->
<!-- END CAROUSEL ITEM -->
{/if}
<!-- END CAROUSEL ITEM -->

{if $lastInactiveShops}
<div class="the-box no-border">
	<h4 class="small-heading more-margin-bottom text-center">Last Uninstalled SHOPS</h4>
	<div id="store-item-carousel-2" class="owl-carousel shop-carousel">
		{foreach from=$lastInactiveShops|@array_slice:0:5 item=$value}
			<div class="item">
				<div class="media">
					<a class="pull-left" href="#fakelink">
					  <img class="media-object sm" src="{$value.vLogo}" alt="Image">
					</a>
					<div class="media-body">
					  <h4 class="media-heading"><a href="#">{ucfirst($value.vName)}</a></h4>
					  <p class="brand">Contact name - {$value.vName}</p>
					 </div>
				</div>
			</div><!-- /.item -->
		{/foreach}
	</div><!-- /#store-item-carousel-1 -->
</div><!-- /.the-box .no-border -->
<!-- END CAROUSEL ITEM -->
{/if}
{if $totalRecords}
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
		  	<div class="panel-heading">
				<h3 class="panel-title">Recent {if count($totalRecords) < '10' } {count($totalRecords)} {else} 10 {/if} Transaction</h3>
		  	</div>
		  	<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-hover" id="Transaction" width="100%">
						<thead class="the-box dark full">
							<tr>
								<th>Store</th>
								<th>Membership Type</th>
								<th>Membership Name</th>
								<th>Charge ID</th>
								<th>Price</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Charge Status</th>
								<th>Order Date</th>
							</tr>
						</thead>
						<tbody>
							{foreach from=$totalRecords|@array_slice:0:10 item=$value}
							<tr>
								<td>{ucfirst($value.vName)}</td>
								<td>{$value.eMembershipType}</td>
								<td>{$value.eMembershipName}</td>
								<td>{$value.vChargeId}</td>
								<td>{$value.dPrice}</td>
								<td>{$value.dStartDate}</td>
								<td>{$value.dEndDate}</td>
								<td>{$value.eChargeStatus}</td>
								<td>{$value.dtCreatedDateTime}</td>
							</tr>
							{/foreach}							
						</tbody>
					</table>
				</div><!-- /.table-responsive -->
		  	</div><!-- /.panel-body -->
		</div><!-- /.panel panel-info -->
	</div><!-- /.col-sm-12 -->
</div>
{/if}

<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){ 
		$('#err_message_area').fadeOut("slow");
		}, 5000);
		$('#Transaction').dataTable({
		"bAutoWidth": false,
		"aaSorting": [],
		"aoColumns": [
		null,
		null,
		null,
		null,
		null,
		null,
		null,
		null,
		null,
		]
		});
	});

</script>
