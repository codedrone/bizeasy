<?php
/* Smarty version 3.1.30, created on 2018-06-15 18:39:37
  from "/var/www/html/projects/bizeazy/application/views/templates/admin/shared/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b23ba910e49f4_19604019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfe624ab3d49ec62f68865512d22b1be787635f3' => 
    array (
      0 => '/var/www/html/projects/bizeazy/application/views/templates/admin/shared/menu.tpl',
      1 => 1523547510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b23ba910e49f4_19604019 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar square navbar-default no-border" role="navigation">
  	<div class="container-fluid">
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="top-main-navigation">
		  	<ul class="nav navbar-nav">
				<li <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'dashboard') {?> class="active" <?php }?>>
			  		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Dashboard" class="dropdown-toggle">
						<span class="hidden-xs"><i class="fa fa-dashboard"></i></span>
						<span class="visible-xs">Dashboard</span></a>
			  		</a>
				</li>
			
				<li <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'administrator') {?> class="active" <?php }?>>
			  		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Administrator" class="dropdown-toggle">
				  		<span class="visible-sm visible-md"><i class="fa fa-dashboard"></i></span>
				  		<span class="hidden-sm hidden-md">Administrator</span>
			  		</a>
				</li>
			
				<li <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'loginLogs') {?> class="active" <?php }?>>
			  		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/LoginLogs" class="dropdown-toggle">
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">Login Logs</span>
			  		</a>
				</li>

				<li <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'shops') {?> class="active" <?php }?>>
			  		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Shops" class="dropdown-toggle" >
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">Shops</span>
			  		</a>
				</li>
				<li <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'transaction') {?> class="active" <?php }?>>
			  		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Transaction" class="dropdown-toggle" >
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">Transaction</span>
			  		</a>
				</li>

				<li <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'newsLetter') {?> class="active" <?php }?>>
			  		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/NewsLetter" class="dropdown-toggle" >
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">Newsletter</span>
			  		</a>
				</li>

				<li <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'faq') {?> class="active" <?php }?>>
			  		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/FAQ" class="dropdown-toggle">
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">FAQs</span>
			  		</a>
				</li>

				<li <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'request') {?> class="active" <?php }?>>
			  		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Request" class="dropdown-toggle" >
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">Request</span>
			  		</a>
				</li>

				<li class="dropdown <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'setting') {?> active <?php }?>" >
			  		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">Settings</span>
			  		</a>
			  		<ul class="dropdown-menu square margin-list-rounded with-triangle">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/CMS">CMS</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/EmailTemplate">EmailTemplate</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Configurations">Configurations</a></li>
					</ul>
				</li>
		  	</ul>
		</div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
</nav>
<!-- End inverse navbar --><?php }
}