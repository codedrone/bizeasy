<div class="top-navbar-inner">
	<!-- Begin Logo brand -->
	<div class="logo-brand">
		<a href="{$base_url}admin/Dashboard"><img src="{$admin_logo}" alt="Bizeazy" style="height: 60px; margin-right: 183px;"></a>
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
			  	<img src="{$base_url}assets/theme/admin/img/avatar/avatar1.jpg" class="avatar img-circle" alt="Avatar">
				Hi, <strong>{$login_info.vName}</strong>
			  </a>
			  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
				<li><a href="#"><span class="fa fa-user" style="padding-right: 10px;"></span>{$login_info.vName}</a></li>
				<li><a href="{$base_url}admin/Administrator/changePassword/{$login_info.iAdminId}"> <span class="fa fa-lock" style="padding-right: 10px;"></span>Change password</a></li>
				<li class="divider"></li>
				<li><a href="{$base_url}Authenticate/signOut"><span class="fa fa-sign-out" style="padding-right: 10px;"></span> Log out</a></li>
			  </ul>
			</li>
		</ul>
		<!-- End user session nav -->
	</div><!-- /.top-nav-content -->
</div><!-- /.top-navbar-inner -->