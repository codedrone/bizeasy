<?php
/* Smarty version 3.1.30, created on 2018-06-15 18:57:06
  from "/var/www/html/projects/bizeazy/application/views/templates/admin/request/listRequest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b23beaabcfe51_49353779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56510042f207fff36a978827d6daf2ad8d22579' => 
    array (
      0 => '/var/www/html/projects/bizeazy/application/views/templates/admin/request/listRequest.tpl',
      1 => 1529069216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b23beaabcfe51_49353779 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Begin page heading -->

<h1 class="page-heading">Support Tickets</h1>
<!-- End page heading -->

<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Dashboard"><i class="fa fa-home"> Dashboard </i></a></li>
	<li class="active">Support <?php echo ucfirst($_smarty_tpl->tpl_vars['pagename']->value);?>
</li>
</ol>
<!-- End breadcrumb -->
<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Request/actionUpdate" method='post' role="form">
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
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requestDetail']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
				<tr class="odd gradeX">
					<td>
				   <center><input id="iId" name="iId[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['iTicketId'];?>
 "></center>
					</td>
					
					<td><?php if ($_smarty_tpl->tpl_vars['value']->value['shopName'] != '') {
echo ucfirst($_smarty_tpl->tpl_vars['value']->value['shopName']);?>
-<?php echo ucfirst($_smarty_tpl->tpl_vars['value']->value['vName']);
}?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['vEmail'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['vContact'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['vSubject'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['dtCreatedDateTime'];?>
</td>
				</tr>
				<tr>
					<center><td>Message: </td></center>
					<td colspan="7"><?php echo $_smarty_tpl->tpl_vars['value']->value['tMessage'];?>
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
