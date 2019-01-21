<?php
/* Smarty version 3.1.30, created on 2018-06-15 19:39:56
  from "/var/www/html/projects/bizeazy/application/views/templates/admin/transaction/listTransaction.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b23c8b40925f0_17167405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '768287ec59741959f2458aad082d0f1598934098' => 
    array (
      0 => '/var/www/html/projects/bizeazy/application/views/templates/admin/transaction/listTransaction.tpl',
      1 => 1523547510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b23c8b40925f0_17167405 (Smarty_Internal_Template $_smarty_tpl) {
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
admin/Transaction/actionUpdate" method='post' role="form">
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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['totalRecords']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['eMembershipStatus'] == 'Active') {?>
							<?php $_smarty_tpl->_assignInScope('cls', "label label-active");
?>
						<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eMembershipStatus'] == 'Cancel') {?>
							<?php $_smarty_tpl->_assignInScope('cls', "label label-inactive");
?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('cls', "label label-pending");
?>
						<?php }?>
					<tr class="odd gradeX">
						<td>
						   <center><input id="iId" name="iId[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['iMemberShipId'];?>
 "></center>
						</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['eMembershipType'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['eMembershipName'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['vChargeId'];?>
</td>
						<td>$<?php echo $_smarty_tpl->tpl_vars['value']->value['dPrice'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['dStartDate'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['dEndDate'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['eChargeStatus'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['value']->value['dtCreatedDateTime'];?>
</td> 
						<td class="tbl_pad_left"><span class="<?php echo $_smarty_tpl->tpl_vars['cls']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['eMembershipStatus'];?>
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

<?php echo '</script'; ?>
>
<?php }
}
