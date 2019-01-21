<!-- Begin page heading -->
<h1 class="page-heading">Login Logs</h1>
<!-- End page heading -->

<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
	<li><a href="{$base_url}admin/Dashboard"><i class="fa fa-home"> Dashboard </i></a></li>
	<li class="active">Login Logs</li>
</ol>
<!-- End breadcrumb -->
<form action="{$base_url}admin/LoginLogs/actionDelete" method="post" role="form">
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
							<button class="btn btn-danger active listbtn" id="btn-delete" type="submit"><i class="fa fa-sign-in"></i> Delete</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="table-responsive">
    		<table class="table table-striped table-hover" id="loginTable">
    			<thead class="the-box dark full">
    				<tr>
    					<th width="5%"><center><input type="checkbox" id="check_all"></center></th>
    					<th width="12%">Platform Type</th>
                        <th width="14%">Name</th>
                        <th width="15%">Email</th>
                        <th width="10%">IP / Device</th>
                        <th width="25%">Login Datetime</th>
                        <th width="29%">Logout Datetime</th>
    				</tr>
    			</thead>
    			<tbody>
    				{foreach $loginLogs as $value}
        				<tr class="odd gradeX">
        					<td><center><input id="iId" name="iId[]" type="checkbox" value="{$value.iLoginId}"></center></td>
        					<td>{$value.ePlatformType}</td>
                            <td>{$value.vName}</td>
                            <td>{$value.vEmail}</td>
                            <td>{$value.vIPAddress}</td>
                            <td>{$value.dtLoginDateTime}</td>
                            <td>{$value.dtLogoutDateTime}</td>
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
        setInterval(function() {
            $('#err_message_area').fadeOut("slow");
        }, 5000);
        $('#loginTable').dataTable().fnDestroy();
        $('#loginTable').dataTable({
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
            ]
        });
    });
</script>
