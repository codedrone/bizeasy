<!-- Begin page heading -->
<h1 class="page-heading">CMS</h1>
<!-- End page heading -->

<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
	<li><a href="{$base_url}admin/Dashboard"><i class="fa fa-home"> Dashboard </i></a></li>
	<li class="active">CMS</li>
</ol>
<!-- End breadcrumb -->
<form action="{$base_url}admin/CMS/actionDelete" method="post" role="form">
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
							<button class="btn btn-success active listbtn"  onclick="window.location ='{$base_url}admin/CMS/add'" type="button"><i class="fa fa-sign-in"></i> Add</button> 
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
						<th width="50%">Title</th>
						<th width="25%">Created DateTime</th>
						<th width="15%"><center>Edit</center></th>
					</tr>
				</thead>
				<tbody>
					{foreach $cmsDetails as $value}
						<tr class="odd gradeX">
							<td><center><input id="iId" name="iId[]" type="checkbox" value="{$value.iCMSId}"></center></td>
							<td class="tbl_pad_left">{$value.tTitle}</td>
							<td class="tbl_pad_left">{$value.dtCreatedDateTime}</td>
							<td><center><a href="{$base_url}admin/CMS/edit/{$value.iCMSId}"><i class="fa fa-edit"></i></a></center></td>
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
