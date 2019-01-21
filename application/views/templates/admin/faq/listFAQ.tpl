<!-- Begin page heading -->
<h1 class="page-heading">{ucfirst($pagename)}</h1>
<!-- End page heading -->

<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
	<li><a href="{$base_url}admin/Dashboard"><i class="fa fa-home"> Dashboard </i></a></li>
	<li class="active">{ucfirst($pagename)}</li>
</ol>
<!-- End breadcrumb -->
<form action="{$base_url}admin/FAQ/actionDelete" method="post" role="form">
    <div class="the-box">
		<input id="action" name="action" type="hidden">
		{if $message neq ''}
        <div class="alert alert-danger alert-block fade in alert-dismissable" id="err_message_area">
        <button aria-hidden="true" class="close" data-dismiss="alert" type="button">&times;</button>
        {$message}
        </div>
        {/if}
<!-- BEGIN DATA TABLE -->
        <div class="row btn_status_btm_spc">
			<div class="col-sm-12" style="margin-bottom: 20px;">
				<div class="row btn_status_btm_spc">
					<div class="col-sm-12">
						<div class="pull-right">
							<button class="btn btn-primary active listbtn" id="btn-active" type="submit"><i class="fa fa-sign-in"></i> Make Active</button>
							<button class="btn btn-warning active listbtn" id="btn-inactive" type="submit"><i class="fa fa-sign-in"></i> Make Inactive</button>
							<button class="btn btn-success active listbtn" onclick="window.location = '{$base_url}admin/FAQ/add'" type="button"><i class="fa fa-sign-in"></i> Add</button> 
							<button class="btn btn-info active listbtn" id="btn-archive" type="submit" ><i class="fa fa-sign-in"></i> Archive</button>
							<button class="btn btn-danger active listbtn" id="btn-delete" type="submit"><i class="fa fa-sign-in"></i> Delete</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-striped table-hover" id="faqTable">
				<thead class="the-box dark full">
					<tr>
						<th width="5%"><center><input type="checkbox" id="check_all"></center></th>
						<th width="60%">Question</th>
						<th width="15%">Status</th>
						<th width="15%"><center>Edit</center></th>
					</tr>
				</thead>
				<tbody>
					{foreach $faqDetails as $value}
						{if $value.eStatus eq 'Active'}
						{assign var="cls" value="label label-active"}
						{else}
						{assign var="cls" value="label label-inactive"}
						{/if}
						<tr class="odd gradeX">
							<td><center><input id="iId" name="iId[]" type="checkbox" value="{$value.iFAQId}"></center></td>
							<td class="tbl_pad_left">{$value.tQuestion}</td>
							<td class="tbl_pad_left"><span class="{$cls}">{$value.eStatus}</span></td>
		                    <td><center><a href="{$base_url}admin/FAQ/edit/{$value.iFAQId}"><i class="fa fa-edit"></i></a></center></td>
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
		$('#faqTable').dataTable({
		"bAutoWidth": false,
		"aaSorting": [],
		"aoColumns": [
		{ "bSortable": false },
		null,
		null,
						
		{ "bSortable": false }
		]
		});
	});

</script>
