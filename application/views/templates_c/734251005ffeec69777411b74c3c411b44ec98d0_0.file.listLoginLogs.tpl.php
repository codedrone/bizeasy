<?php
/* Smarty version 3.1.30, created on 2018-06-15 19:39:55
  from "/var/www/html/projects/bizeazy/application/views/templates/admin/loginLogs/listLoginLogs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b23c8b3235ca3_10471385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '734251005ffeec69777411b74c3c411b44ec98d0' => 
    array (
      0 => '/var/www/html/projects/bizeazy/application/views/templates/admin/loginLogs/listLoginLogs.tpl',
      1 => 1523547510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b23c8b3235ca3_10471385 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Begin page heading -->
<h1 class="page-heading">Login Logs</h1>
<!-- End page heading -->

<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Dashboard"><i class="fa fa-home"> Dashboard </i></a></li>
	<li class="active">Login Logs</li>
</ol>
<!-- End breadcrumb -->
<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/LoginLogs/actionDelete" method="post" role="form">
    <div class="the-box">
		<input id="action" name="action" type="hidden">
		<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
        <div class="alert alert-danger alert-block fade in alert-dismissable" id="err_message_area">
        <button aria-hidden="true" class="close" data-dismiss="alert" type="button">&times;</button>
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>
        <?php }?>
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
    				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['loginLogs']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        				<tr class="odd gradeX">
        					<td><center><input id="iId" name="iId[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['iLoginId'];?>
"></center></td>
        					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['ePlatformType'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['vEmail'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['vIPAddress'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['dtLoginDateTime'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['dtLogoutDateTime'];?>
</td>
        				</tr>
    				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    			</tbody>
    		</table>
		</div><!-- /.table-responsive -->
	</div>
</form><!-- /.the-box .default -->
<!-- END DATA TABLE -->
<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>
<?php }
}
