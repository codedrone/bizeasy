<!-- Begin page heading -->

<h1 class="page-heading">Support Tickets</h1>
<!-- End page heading -->

<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
	<li><a href="{$base_url}admin/Dashboard"><i class="fa fa-home"> Dashboard </i></a></li>
	<li class="active">Support {ucfirst($pagename)}</li>
</ol>
<!-- End breadcrumb -->
<form action="{$base_url}admin/Request/actionUpdate" method='post' role="form">
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
					<button class="btn btn-danger active listbtn" id="btn-delete" type="submit"><i class="fa fa-sign-in"></i> Delete</button>
				</div>
			</div>
		</div>
		<div class="table-responsive">
		<table class="table table-striped table-hover" id="admin_tbl">
			<thead class="the-box dark full">
				<tr>
					<th width="5%"><center><input type="checkbox" id="check_all"></center></th>
					<th>Shop</th>
					<th>Email</th>
					<th>Contact No.</th>
					<th>Subject</th>
					<th>Created At </th>
				</tr>
			</thead>
			<tbody>
				{foreach $requestDetail as $value}
				<tr class="odd gradeX">
					<td>
				   <center><input id="iId" name="iId[]" type="checkbox" value="{$value.iTicketId} "></center>
					</td>
					
					<td>{if $value.shopName neq '' }{ucfirst($value.shopName)}-{ucfirst($value.vName)}{/if}</td>
					<td>{$value.vEmail}</td>
					<td>{$value.vContact}</td>
					<td>{$value.vSubject}</td>
					<td>{$value.dtCreatedDateTime}</td>
				</tr>
				<tr>
					<center><td>Message: </td></center>
					<td colspan="7">{$value.tMessage}</td>
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
		$('#admin_tbl').dataTable({
		"bAutoWidth": false,
		"aaSorting": [],
		"aoColumns": [
		{ "bSortable": false },
		null,
		null,
		null,
		null,
		]
		});
	});

	function returnme(){
		window.location = "{$base_url}admin/Administrator/add";
	}
</script>
