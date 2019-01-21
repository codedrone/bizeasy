<nav class="navbar square navbar-default no-border" role="navigation">
  	<div class="container-fluid">
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="top-main-navigation">
		  	<ul class="nav navbar-nav">
				<li {if $pagename eq 'dashboard'} class="active" {/if}>
			  		<a href="{$base_url}admin/Dashboard" class="dropdown-toggle">
						<span class="hidden-xs"><i class="fa fa-dashboard"></i></span>
						<span class="visible-xs">Dashboard</span></a>
			  		</a>
				</li>
			
				<li {if $pagename eq 'administrator'} class="active" {/if}>
			  		<a href="{$base_url}admin/Administrator" class="dropdown-toggle">
				  		<span class="visible-sm visible-md"><i class="fa fa-dashboard"></i></span>
				  		<span class="hidden-sm hidden-md">Administrator</span>
			  		</a>
				</li>
			
				<li {if $pagename eq 'loginLogs'} class="active" {/if}>
			  		<a href="{$base_url}admin/LoginLogs" class="dropdown-toggle">
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">Login Logs</span>
			  		</a>
				</li>

				<li {if $pagename eq 'shops'} class="active" {/if}>
			  		<a href="{$base_url}admin/Shops" class="dropdown-toggle" >
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">Shops</span>
			  		</a>
				</li>
				<li {if $pagename eq 'transaction'} class="active" {/if}>
			  		<a href="{$base_url}admin/Transaction" class="dropdown-toggle" >
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">Transaction</span>
			  		</a>
				</li>

				<li {if $pagename eq 'newsLetter'} class="active" {/if}>
			  		<a href="{$base_url}admin/NewsLetter" class="dropdown-toggle" >
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">Newsletter</span>
			  		</a>
				</li>

				<li {if $pagename eq 'faq'} class="active" {/if}>
			  		<a href="{$base_url}admin/FAQ" class="dropdown-toggle">
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">FAQs</span>
			  		</a>
				</li>

				<li {if $pagename eq 'request'} class="active" {/if}>
			  		<a href="{$base_url}admin/Request" class="dropdown-toggle" >
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">Request</span>
			  		</a>
				</li>

				<li class="dropdown {if $pagename eq 'setting'} active {/if}" >
			  		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				  		<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
				  		<span class="hidden-sm hidden-md">Settings</span>
			  		</a>
			  		<ul class="dropdown-menu square margin-list-rounded with-triangle">
						<li><a href="{$base_url}admin/CMS">CMS</a></li>
						<li><a href="{$base_url}admin/EmailTemplate">EmailTemplate</a></li>
						<li><a href="{$base_url}admin/Configurations">Configurations</a></li>
					</ul>
				</li>
		  	</ul>
		</div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
</nav>
<!-- End inverse navbar -->