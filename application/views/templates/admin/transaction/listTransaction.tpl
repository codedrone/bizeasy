<!-- Begin page heading -->

<h1 class="page-heading">{ucfirst($pagename)}</h1>
<!-- End page heading -->

<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
	<li><a href="{$base_url}admin/Dashboard"><i class="fa fa-home"> Dashboard </i></a></li>
	<li class="active">{ucfirst($pagename)}</li>
</ol>
<!-- End breadcrumb -->
<form action="{$base_url}admin/Transaction/actionUpdate" method='post' role="form">
	<input id="action" name="action" type="hidden">
	{if $message neq ''}
        <div class="alert alert-danger alert-block fade in alert-dismissable" id="err_message_area">
        <button aria-hidden="true" class="close" data-dismiss="alert" type="button">&times;</button>
        {$message}
        </div>
    {/if}
<!-- BEGIN DATA TABLE -->
	<div class="the-box">
		<div class="row">
			<div class="col-sm-12" style="margin-bottom: 20px;">
				<div class="pull-right">
					<button class="btn btn-primary active listbtn" id="btn-active" type="submit"><i class="fa fa-sign-in"></i> Make Active</button>
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-striped table-hover" id="Transaction" width="100%">
				<thead class="the-box dark full">
					<tr>
						<th width="5%"><center><input type="checkbox" id="check_all"></center></th>
						<th>Store</th>
						<th>Membership Type</th>
						<th>Membership Name</th>
						<th>Charge ID</th>
						<th>Price</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Charge Status</th>
						<th>Order Date</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$totalRecords item=$value}
						{if $value.eMembershipStatus eq 'Active'}
							{assign var="cls" value="label label-active"}
						{elseif $value.eMembershipStatus eq 'Cancel'}
							{assign var="cls" value="label label-inactive"}
						{else}
							{assign var="cls" value="label label-pending"}
						{/if}
					<tr class="odd gradeX">
						<td>
						   <center><input id="iId" name="iId[]" type="checkbox" value="{$value.iMemberShipId} "></center>
						</td>
						<td>{$value.vName}</td>
						<td>{$value.eMembershipType}</td>
						<td>{$value.eMembershipName}</td>
						<td>{$value.vChargeId}</td>
						<td>${$value.dPrice}</td>
						<td>{$value.dStartDate}</td>
						<td>{$value.dEndDate}</td>
						<td>{$value.eChargeStatus}</td>
						<td>{$value.dtCreatedDateTime}</td> 
						<td class="tbl_pad_left"><span class="{$cls}">{$value.eMembershipStatus}</span></td>
					</tr>
					{/foreach}							
				</tbody>
			</table>
		</div><!-- /.table-responsive -->
	</div>
</form><!-- /.the-box .default -->
<!-- END DATA TABLE -->
<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){ 
		$('#err_message_area').fadeOut("slow");
		}, 5000);
		$('#Transaction').dataTable({
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
		null,
		null,
		null,
		null,
		]
		});
	});

</script>
