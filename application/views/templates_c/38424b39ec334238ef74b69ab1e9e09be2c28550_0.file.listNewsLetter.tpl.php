<?php
/* Smarty version 3.1.30, created on 2018-06-15 18:57:04
  from "/var/www/html/projects/bizeazy/application/views/templates/admin/newsLetter/listNewsLetter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b23bea88feb64_46496303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38424b39ec334238ef74b69ab1e9e09be2c28550' => 
    array (
      0 => '/var/www/html/projects/bizeazy/application/views/templates/admin/newsLetter/listNewsLetter.tpl',
      1 => 1523547510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b23bea88feb64_46496303 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Begin page heading -->

<h1 class="page-heading">News Letters</h1>
<!-- End page heading -->

<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Dashboard"><i class="fa fa-home"> Dashboard</i></a></li>
	<li class="active">News Letters</li>
</ol>
<!-- End breadcrumb -->
<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/NewsLetter/actionUpdate" method='post' role="form">
	<input id="action" name="action" type="hidden">
	<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
        <div class="alert alert-danger alert-block fade in alert-dismissable" id="err_message_area">
        <button aria-hidden="true" class="close" data-dismiss="alert" type="button">&times;</button>
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    	</div>
    <?php }?>
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
					<th>Email</th>
					<th>Created At </th>
                    <th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsDetail']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['value']->value['eStatus'] == 'Active') {?>
						<?php $_smarty_tpl->_assignInScope('cls', "label label-active");
?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('cls', "label label-inactive");
?>
					<?php }?>
					<tr class="odd gradeX">
						<td>
					   <center><input id="iId" name="iId[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['iNewsLetterId'];?>
 "></center>
						</td>
						
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['vEmail'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['dtCreatedDateTime'];?>
</td>
	                    <td class="tbl_pad_left"><span class="<?php echo $_smarty_tpl->tpl_vars['cls']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['eStatus'];?>
</span></td>
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
		window.location = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Administrator/add";
	}
<?php echo '</script'; ?>
>
<?php }
}
