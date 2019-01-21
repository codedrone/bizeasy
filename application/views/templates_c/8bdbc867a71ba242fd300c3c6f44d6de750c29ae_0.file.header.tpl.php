<?php
/* Smarty version 3.1.30, created on 2018-10-26 11:09:20
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\admin\shared\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd2d9c0b28441_50712712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bdbc867a71ba242fd300c3c6f44d6de750c29ae' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\admin\\shared\\header.tpl',
      1 => 1532053666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd2d9c0b28441_50712712 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="top-navbar-inner">
	<!-- Begin Logo brand -->
	<div class="logo-brand">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Dashboard"><img src="<?php echo $_smarty_tpl->tpl_vars['admin_logo']->value;?>
" alt="Bizeazy" style="height: 60px; margin-right: 183px;"></a>
	</div><!-- /.logo-brand -->
	<!-- End Logo brand -->
	
	<div class="top-nav-content main-top-nav-layout" >
		
		<!-- Begin button sidebar left toggle -->
		<div class="btn-collapse-main-navigation" data-toggle="collapse" data-target="#top-main-navigation">
			<i class="fa fa-bars"></i>
		</div><!-- /.btn-collapse-sidebar-left -->
		<!-- End button sidebar left toggle -->
		
		<!-- Begin button nav toggle -->
		<div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
			<i class="fa fa-plus icon-plus"></i>
		</div><!-- /.btn-collapse-sidebar-right -->
		<!-- End button nav toggle -->
		
		<!-- Begin user session nav -->
		<ul class="nav-user navbar-right">
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			  	<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/admin/img/avatar/avatar1.jpg" class="avatar img-circle" alt="Avatar">
				Hi, <strong><?php echo $_smarty_tpl->tpl_vars['login_info']->value['vName'];?>
</strong>
			  </a>
			  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
				<li><a href="#"><span class="fa fa-user" style="padding-right: 10px;"></span><?php echo $_smarty_tpl->tpl_vars['login_info']->value['vName'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Administrator/changePassword/<?php echo $_smarty_tpl->tpl_vars['login_info']->value['iAdminId'];?>
"> <span class="fa fa-lock" style="padding-right: 10px;"></span>Change password</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Authenticate/signOut"><span class="fa fa-sign-out" style="padding-right: 10px;"></span> Log out</a></li>
			  </ul>
			</li>
		</ul>
		<!-- End user session nav -->
	</div><!-- /.top-nav-content -->
</div><!-- /.top-navbar-inner --><?php }
}
