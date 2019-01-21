<!-- Begin page heading -->

<h1 class="page-heading">{ucfirst($pagename)}</h1>
<!-- End page heading -->

<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
	<li><a href="{$base_url}admin/Dashboard"><i class="fa fa-home"> Dashboard </i></a></li>
	<li class="active">{ucfirst($pagename)}</li>
</ol>
<!-- End breadcrumb -->
<form action="{$base_url}admin/Shops/actionUpdate" method='post' role="form">
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
					<button class="btn btn-warning active listbtn" id="btn-inactive" type="submit"><i class="fa fa-sign-in"></i> Make Inactive</button>
					<button class="btn btn-info active listbtn" id="btn-archive" type="submit" ><i class="fa fa-sign-in"></i> Archive</button>
					<button class="btn btn-danger active listbtn" id="btn-delete" type="submit"><i class="fa fa-sign-in"></i> Delete</button>

				</div>
			</div>
		</div>
		<div class="table-responsive">
		<table class="table table-striped table-hover" id="admin_tbl">
			<thead class="the-box dark full">
				<tr>
					<th width="5%"><center><input type="checkbox" id="check_all"></center></th>
					<th>Name</th>
					<th>Domain</th>
					<th>Email</th>
		 			<th>Created At </th>
                    <th>Status</th>
					<th width="5%">Info</th>
				</tr>
			</thead>
			<tbody>
				{foreach $shopsDetail as $value}
					{if $value.eStatus eq 'Active'}
						{assign var="cls" value="label label-active"}
					{elseif $value.eStatus eq 'Inactive'}
						{assign var="cls" value="label label-inactive"}
					{else}
						{assign var="cls" value="label label-pending"}
					{/if}
					<tr class="odd gradeX">
						<td>
					   <center><input id="iId" name="iId[]" type="checkbox" value="{$value.iShopId} "></center>
						</td>
						
						<td>{ucfirst($value.vName)}</td>
						<td>{$value.vDomain}</td>
						<td>{$value.vContactEmail}</td>
						<td>{$value.dtCreatedDateTime}</td>
	                    <td class="tbl_pad_left"><span class="{$cls}">{$value.eStatus}</span></td>
						<td><a href="{$base_url}admin/Shops/info/{$value.iShopId}">Info</a></td>
						<!-- <td class="center">Edit</td> -->
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
		null,
		{ "bSortable": false }
		]
		});
	});

	
</script>
