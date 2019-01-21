<img class="logo" src="{$shops_logo}" alt="Bizeazy" />
<h1>{ucfirst($sessionData->shop->name)}</h1>
<nav style="margin-right: 30px;">
	<ul>
		<li class="bizeazy-dropdown" style="top: 20px;"><a class="bizeazy-user-inc" href="#">{$sessionData->shop->shop_owner}<span></span></a>
			<ul style="width: 100% !important;">
<!-- 				<li class="bizeazy-settings"><a href="#">Settings</a></li>
 -->	
 				<li class="bizeazy"><a href="{$base_url}ShopifyApp/notification">Notification</a></li>
                <li class="bizeazy"><a href="{$base_url}ShopifyApp/supportHelp">Help</a></li>
                
                <li class="bizeazy"><a href="{$base_url}ShopifyApp/faq">FAQ</a></li>
				
				<li class="bizeazy-logout"><a href="{$base_url}Authentication/signOut">Logout</a></li>
			</ul>
		</li>
	</ul> 
</nav>
<nav>
	<ul>
		<li class="bizeazy-dropdown" style="top: 20px;">		
			<a href="{$base_url}ShopifyApp/termsOfService">Terms Of Services</a>
		</li>
	</ul>

</nav>