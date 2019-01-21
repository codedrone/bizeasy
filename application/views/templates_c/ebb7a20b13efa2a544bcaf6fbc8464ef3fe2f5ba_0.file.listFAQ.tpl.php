<?php
/* Smarty version 3.1.30, created on 2018-06-15 19:23:11
  from "/var/www/html/projects/bizeazy/application/views/templates/admin/faq/listFAQ.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b23c4c7aee7b0_58781912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebb7a20b13efa2a544bcaf6fbc8464ef3fe2f5ba' => 
    array (
      0 => '/var/www/html/projects/bizeazy/application/views/templates/admin/faq/listFAQ.tpl',
      1 => 1523547510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b23c4c7aee7b0_58781912 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Begin page heading -->
<h1 class="page-heading"><?php echo ucfirst($_smarty_tpl->tpl_vars['pagename']->value);?>
</h1>
<!-- End page heading -->

<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Dashboard"><i class="fa fa-home"> Dashboard </i></a></li>
	<li class="active"><?php echo ucfirst($_smarty_tpl->tpl_vars['pagename']->value);?>
</li>
</ol>
<!-- End breadcrumb -->
<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/FAQ/actionDelete" method="post" role="form">
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
							<button class="btn btn-primary active listbtn" id="btn-active" type="submit"><i class="fa fa-sign-in"></i> Make Active</button>
							<button class="btn btn-warning active listbtn" id="btn-inactive" type="submit"><i class="fa fa-sign-in"></i> Make Inactive</button>
							<button class="btn btn-success active listbtn" onclick="window.location = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/FAQ/add'" type="button"><i class="fa fa-sign-in"></i> Add</button> 
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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['faqDetails']->value, 'value');
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
							<td><center><input id="iId" name="iId[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['iFAQId'];?>
"></center></td>
							<td class="tbl_pad_left"><?php echo $_smarty_tpl->tpl_vars['value']->value['tQuestion'];?>
</td>
							<td class="tbl_pad_left"><span class="<?php echo $_smarty_tpl->tpl_vars['cls']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['eStatus'];?>
</span></td>
		                    <td><center><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/FAQ/edit/<?php echo $_smarty_tpl->tpl_vars['value']->value['iFAQId'];?>
"><i class="fa fa-edit"></i></a></center></td>
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

<?php echo '</script'; ?>
>
<?php }
}
