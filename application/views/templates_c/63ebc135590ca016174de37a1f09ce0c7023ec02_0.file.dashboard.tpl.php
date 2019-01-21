<?php
/* Smarty version 3.1.30, created on 2018-10-24 17:45:18
  from "E:\Client-Data\bizeazy-web-master\application\views\templates\admin\dashboard\dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd0938eb0bb79_31039477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63ebc135590ca016174de37a1f09ce0c7023ec02' => 
    array (
      0 => 'E:\\Client-Data\\bizeazy-web-master\\application\\views\\templates\\admin\\dashboard\\dashboard.tpl',
      1 => 1532053666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd0938eb0bb79_31039477 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Begin page heading -->
<h1 class="page-heading"><?php echo ucfirst($_smarty_tpl->tpl_vars['pagename']->value);?>
</h1>
<!-- End page heading -->
	<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
        <div class="alert alert-danger alert-block fade in alert-dismissable" id="err_message_area">
        <button aria-hidden="true" class="close" data-dismiss="alert" type="button">&times;</button>
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    	</div>
    <?php }?>
<!-- BEGIN SiTE INFORMATIONS -->
<div class="row">
	<div class="col-sm-3">
		<div class="the-box no-border bg-success tiles-information">
			<i class="fa fa-users icon-bg"></i>
			<div class="tiles-inner text-center">
				<p>TOTAL SHOPS</p>
				<h1 class="bolded"><?php echo $_smarty_tpl->tpl_vars['totalShops']->value;?>
</h1> 
				<div class="progress no-rounded progress-xs">
				  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $_smarty_tpl->tpl_vars['totalShops']->value;?>
%"><!-- <?php echo $_smarty_tpl->tpl_vars['totalShops']->value/100;?>
% -->
				  </div><!-- /.progress-bar .progress-bar-success -->
				</div><!-- /.progress .no-rounded -->
			</div><!-- /.tiles-inner -->
		</div><!-- /.the-box no-border -->
	</div><!-- /.col-sm-3 -->
	<div class="col-sm-3">
		<div class="the-box no-border bg-info tiles-information">
			<i class="fa fa-shopping-cart icon-bg"></i>
			<div class="tiles-inner text-center">
				<p>ACTIVE SHOPS</p>
				<h1 class="bolded"><?php echo $_smarty_tpl->tpl_vars['activeShops']->value;?>
</h1> 
				<div class="progress no-rounded progress-xs">
				  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($_smarty_tpl->tpl_vars['activeShops']->value*100)/$_smarty_tpl->tpl_vars['totalShops']->value;?>
%">
				  </div><!-- /.progress-bar .progress-bar-info -->
				</div><!-- /.progress .no-rounded -->
			</div><!-- /.tiles-inner -->
		</div><!-- /.the-box no-border -->
	</div><!-- /.col-sm-3 -->
	<div class="col-sm-3">
		<div class="the-box no-border bg-danger tiles-information">
			<i class="fa fa-comments icon-bg"></i>
			<div class="tiles-inner text-center">
				<p>PENDING SHOPS</p>
				<h1 class="bolded"><?php echo $_smarty_tpl->tpl_vars['pendingShops']->value;?>
</h1> 
				<div class="progress no-rounded progress-xs">
				  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($_smarty_tpl->tpl_vars['pendingShops']->value*100)/$_smarty_tpl->tpl_vars['totalShops']->value;?>
%">
				  </div><!-- /.progress-bar .progress-bar-danger -->
				</div><!-- /.progress .no-rounded -->
			</div><!-- /.tiles-inner -->
		</div><!-- /.the-box no-border -->
	</div><!-- /.col-sm-3 -->
	<div class="col-sm-3">
		<div class="the-box no-border bg-warning tiles-information">
			<i class="fa fa-money icon-bg"></i>
			<div class="tiles-inner text-center">
				<p>INACTIVE SHOPS</p>
				<h1 class="bolded"><?php echo $_smarty_tpl->tpl_vars['inactiveShops']->value;?>
</h1> 
				<div class="progress no-rounded progress-xs">
				  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($_smarty_tpl->tpl_vars['inactiveShops']->value*100)/$_smarty_tpl->tpl_vars['totalShops']->value;?>
%">
				  </div><!-- /.progress-bar .progress-bar-warning -->
				</div><!-- /.progress .no-rounded -->
			</div><!-- /.tiles-inner -->
		</div><!-- /.the-box no-border -->
	</div><!-- /.col-sm-3 -->
</div><!-- /.row -->
<!-- END SITE INFORMATIONS -->

<div class="row">
	<div class="col-sm-3">
		<div class="alert alert-success alert-bold-border square fade in alert-dismissable">
		  	<strong>Total Membership : <?php echo $_smarty_tpl->tpl_vars['totalMemberShip']->value;?>
</strong>
		</div>
	</div>

	<div class="col-sm-3">
		<div class="alert alert-info alert-bold-border square fade in alert-dismissable">
		  	<strong>Active Membership : <?php echo $_smarty_tpl->tpl_vars['activeMemberShip']->value;?>
</strong>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="alert alert-danger alert-bold-border square fade in alert-dismissable">
		  	<strong>Pending Membership : <?php echo $_smarty_tpl->tpl_vars['pendingMemberShip']->value;?>
</strong>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="alert alert-warning alert-bold-border square fade in alert-dismissable">
		  	<strong>Cancel Membership : <?php echo $_smarty_tpl->tpl_vars['cencelMemberShip']->value;?>
</strong>
		</div>
	</div>
</div>

<!-- BEGIN CAROUSEL ITEM -->
<?php if ($_smarty_tpl->tpl_vars['topShops']->value) {?>
<div class="the-box no-border">
	<h4 class="small-heading more-margin-bottom text-center">TOP <?php if (count($_smarty_tpl->tpl_vars['topShops']->value) < '10') {?> <?php echo count($_smarty_tpl->tpl_vars['topShops']->value);?>
 <?php } else { ?> 10 <?php }?>SHOPS</h4>
	<div id="store-item-carousel-3" class="owl-carousel shop-carousel">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topShops']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
			<div class="item">
				<div class="media">
					<a class="pull-left" href="#fakelink">
					  <img class="media-object sm" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['vLogo'];?>
" alt="Image">
					</a>
					<div class="media-body">
					  <h4 class="media-heading"><a href="#"><?php echo ucfirst($_smarty_tpl->tpl_vars['value']->value['vName']);?>
</a></h4>
					  <p class="brand">Contact name - <?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
</p>
					  <p class="price text-danger"><strong>&#36;<?php echo $_smarty_tpl->tpl_vars['value']->value['dPrice'];?>
</strong></p>
					</div>
				</div>
			</div><!-- /.item -->
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div><!-- /#store-item-carousel-1 -->
</div><!-- /.the-box .no-border -->
<!-- END CAROUSEL ITEM -->
<?php }?>
<!-- BEGIN CAROUSEL ITEM -->
<!-- BEGIN CAROUSEL ITEM -->
<?php if ($_smarty_tpl->tpl_vars['lastActiveShops']->value) {?>
<div class="the-box no-border">
	<h4 class="small-heading more-margin-bottom text-center">Last Installed SHOPS</h4>
	<div id="store-item-carousel-1" class="owl-carousel shop-carousel">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['lastActiveShops']->value,0,5), 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
			<div class="item">
				<div class="media">
					<a class="pull-left" href="#fakelink">
					  <img class="media-object sm" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['vLogo'];?>
" alt="Image">
					</a>
					<div class="media-body">
					  <h4 class="media-heading"><a href="#"><?php echo ucfirst($_smarty_tpl->tpl_vars['value']->value['vName']);?>
</a></h4>
					  <p class="brand">Contact name - <?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
</p>
					  
					</div>
				</div>
			</div><!-- /.item -->
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div><!-- /#store-item-carousel-1 -->
</div><!-- /.the-box .no-border -->
<!-- END CAROUSEL ITEM -->
<?php }?>
<!-- END CAROUSEL ITEM -->

<?php if ($_smarty_tpl->tpl_vars['lastInactiveShops']->value) {?>
<div class="the-box no-border">
	<h4 class="small-heading more-margin-bottom text-center">Last Uninstalled SHOPS</h4>
	<div id="store-item-carousel-2" class="owl-carousel shop-carousel">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['lastInactiveShops']->value,0,5), 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
			<div class="item">
				<div class="media">
					<a class="pull-left" href="#fakelink">
					  <img class="media-object sm" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['vLogo'];?>
" alt="Image">
					</a>
					<div class="media-body">
					  <h4 class="media-heading"><a href="#"><?php echo ucfirst($_smarty_tpl->tpl_vars['value']->value['vName']);?>
</a></h4>
					  <p class="brand">Contact name - <?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
</p>
					 </div>
				</div>
			</div><!-- /.item -->
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div><!-- /#store-item-carousel-1 -->
</div><!-- /.the-box .no-border -->
<!-- END CAROUSEL ITEM -->
<?php }
if ($_smarty_tpl->tpl_vars['totalRecords']->value) {?>
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
		  	<div class="panel-heading">
				<h3 class="panel-title">Recent <?php if (count($_smarty_tpl->tpl_vars['totalRecords']->value) < '10') {?> <?php echo count($_smarty_tpl->tpl_vars['totalRecords']->value);?>
 <?php } else { ?> 10 <?php }?> Transaction</h3>
		  	</div>
		  	<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-hover" id="Transaction" width="100%">
						<thead class="the-box dark full">
							<tr>
								<th>Store</th>
								<th>Membership Type</th>
								<th>Membership Name</th>
								<th>Charge ID</th>
								<th>Price</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Charge Status</th>
								<th>Order Date</th>
							</tr>
						</thead>
						<tbody>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['totalRecords']->value,0,10), 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
							<tr>
								<td><?php echo ucfirst($_smarty_tpl->tpl_vars['value']->value['vName']);?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['value']->value['eMembershipType'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['value']->value['eMembershipName'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['value']->value['vChargeId'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['value']->value['dPrice'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['value']->value['dStartDate'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['value']->value['dEndDate'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['value']->value['eChargeStatus'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['value']->value['dtCreatedDateTime'];?>
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
		  	</div><!-- /.panel-body -->
		</div><!-- /.panel panel-info -->
	</div><!-- /.col-sm-12 -->
</div>
<?php }?>

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
