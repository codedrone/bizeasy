<?php
/* Smarty version 3.1.30, created on 2018-10-26 05:04:27
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\web\shopifyApp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd2843b53ce88_38021725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5172cd99810b17ffdd9e0a16e877db416bc3a69f' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\web\\shopifyApp.tpl',
      1 => 1540523053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./shared/commonShops_css.tpl' => 1,
    'file:./shared/shopsLoader.tpl' => 1,
    'file:./shared/header.tpl' => 1,
    'file:./shared/commonShops_js.tpl' => 1,
  ),
),false)) {
function content_5bd2843b53ce88_38021725 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>::: <?php echo ucfirst($_smarty_tpl->tpl_vars['pagename']->value);?>
 :::</title>
		<?php $_smarty_tpl->_subTemplateRender("file:./shared/commonShops_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Common Shops css"), 0, false);
?>

</head> 
<body style='background: rgb(250, 250, 250) none repeat scroll 0% 0%; margin-top: 0px; font: 400 100%/1.3 "proxima-nova","Proxima Nova",sans-serif ! important; overflow-x: hidden ! important;'>
	<?php ob_start();
echo $_smarty_tpl->tpl_vars['load']->value;
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == 'Yes') {?>
		<div class="main-row1" id="loader">
			<?php $_smarty_tpl->_subTemplateRender("file:./shared/shopsLoader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Common Loader"), 0, false);
?>

		</div>
		<div class="main-row" id="screen1" style="display:none;">
	<?php } else { ?>
		<div class="main-row" id="screen1">
	<?php }?>
		<header> 
				<?php $_smarty_tpl->_subTemplateRender("file:./shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Header"), 0, false);
?>

		</header>	
		<div class="bizeazy-full-row">
			<aside class="bizeazy-sidebar-container">
				<ul>
		        	<li>
		       	    	<img class="bizeazy-admin-pic" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/images/admin-pic.jpg" alt=""> 
		                <span class="bizeazy-admin-name"><?php echo $_smarty_tpl->tpl_vars['sessionData']->value->shop->shop_owner;?>
	</span>
		            </li>
		            <li <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'download') {?> class="bizeazy-nav-active" <?php } else { ?> class="bizeazy-nav"<?php }?>>
		            	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/index">
			            	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 472.811 472.811" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 472.811 472.811">
			  					<g>
				    				<path d="M358.75,0H114.061C97.555,0,84.128,13.428,84.128,29.934v412.944c0,16.505,13.428,29.934,29.934,29.934H358.75   c16.506,0,29.934-13.428,29.934-29.934V29.934C388.683,13.428,375.256,0,358.75,0z M99.128,75.236h274.556v312.687H99.128V75.236z    M114.061,15H358.75c8.234,0,14.934,6.699,14.934,14.934v35.302H99.128V29.934C99.128,21.699,105.827,15,114.061,15z    M358.75,457.811H114.061c-8.234,0-14.934-6.699-14.934-14.934v-44.955h274.556v44.955   C373.683,451.112,366.984,457.811,358.75,457.811z"/></path>
				    				<path d="m236.406,404.552c-13.545,0-24.564,11.02-24.564,24.565s11.02,24.564 24.564,24.564 24.564-11.02 24.564-24.564-11.019-24.565-24.564-24.565zm0,39.129c-8.031,0-14.564-6.534-14.564-14.564 0-8.031 6.533-14.565 14.564-14.565s14.564,6.534 14.564,14.565c0,8.03-6.533,14.564-14.564,14.564z"/></path>
				    				<path d="m202.406,47.645h68c2.762,0 5-2.239 5-5s-2.238-5-5-5h-68c-2.762,0-5,2.239-5,5s2.238,5 5,5z"/></path>
				    				<path d="m184.409,47.645c1.31,0 2.6-0.53 3.53-1.46 0.93-0.94 1.47-2.22 1.47-3.54s-0.54-2.6-1.47-3.54c-0.931-0.93-2.221-1.46-3.53-1.46-1.32,0-2.601,0.53-3.54,1.46-0.93,0.93-1.46,2.22-1.46,3.54s0.53,2.6 1.46,3.54c0.93,0.93 2.22,1.46 3.54,1.46z"/></path>
				  				</g>
				  			</svg><br/><span>Download The Preview App</span>
						</a>
		            </li>
		            <li <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'customerMyApp') {?> class="bizeazy-nav-active" <?php } else { ?> class="bizeazy-nav"<?php }?>>
		            	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/customerMyApp">
			        		<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" 	xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 437.59 437.59" style="enable-background:new 0 0 437.59 437.59;" xml:space="preserve">
								<g>
									<path d="M109.025,34.262h39.542c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-39.542c-3.038,0-5.5,2.462-5.5,5.5 S105.987,34.262,109.025,34.262z"/></path>
									<path d="M128.796,383.771c-9.885,0-17.927,8.042-17.927,17.928s8.042,17.927,17.927,17.927s17.927-8.042,17.927-17.927 S138.681,383.771,128.796,383.771z M128.796,408.626c-3.82,0-6.927-3.107-6.927-6.927s3.107-6.928,6.927-6.928 s6.927,3.108,6.927,6.928S132.615,408.626,128.796,408.626z"/></path>
									<path d="M59.88,129.163h69.481c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5H59.88c-3.038,0-5.5,2.462-5.5,5.5 S56.842,129.163,59.88,129.163z"/></path>
									<path d="M59.88,228.583h69.481c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5H59.88c-3.038,0-5.5,2.462-5.5,5.5 S56.842,228.583,59.88,228.583z"/></path>
									<path d="M158.735,237.918H59.88c-3.038,0-5.5,2.462-5.5,5.5s2.462,5.5,5.5,5.5h98.855c3.038,0,5.5-2.462,5.5-5.5 S161.772,237.918,158.735,237.918z"/></path>
									<path d="M425.405,218.522c3.038,0,5.5-2.462,5.5-5.5V72.09c0-3.038-2.462-5.5-5.5-5.5h-174.5V22.91 c0-12.633-10.277-22.91-22.91-22.91h-198.4C16.962,0,6.685,10.277,6.685,22.91v391.77c0,12.632,10.277,22.91,22.91,22.91h198.4 c12.633,0,22.91-10.277,22.91-22.91v-81.829h174.5c3.038,0,5.5-2.462,5.5-5.5v-83.051c0-3.038-2.462-5.5-5.5-5.5h-174.5v-20.278 H425.405z M419.905,207.522H179.349V77.59h240.556V207.522z M173.849,238.801c-3.038,0-5.5,2.462-5.5,5.5v29.909H43.345V183.3 h125.004v13.947H59.88c-3.038,0-5.5,2.462-5.5,5.5s2.462,5.5,5.5,5.5h108.469v4.776c0,3.038,2.462,5.5,5.5,5.5h40.396v20.278 H173.849z M173.849,332.852h40.396v9.269h-170.9v-37.17h125.004v22.401C168.349,330.389,170.811,332.852,173.849,332.852z M168.349,97.827H59.88c-3.038,0-5.5,2.462-5.5,5.5s2.462,5.5,5.5,5.5h108.469V153.1H43.345V84.88h125.004V97.827z M29.595,11 h198.4c6.567,0,11.91,5.343,11.91,11.91v29.062H17.685V22.91C17.685,16.343,23.028,11,29.595,11z M227.995,426.59h-198.4 c-6.567,0-11.91-5.343-11.91-11.91v-38.098h222.22v38.098C239.905,421.247,234.562,426.59,227.995,426.59z M239.905,365.583H17.685 V62.972h222.22v3.618h-66.056c-3.038,0-5.5,2.462-5.5,5.5v1.79H37.845c-3.038,0-5.5,2.462-5.5,5.5v79.22c0,3.038,2.462,5.5,5.5,5.5 h130.504v8.2H37.845c-3.038,0-5.5,2.462-5.5,5.5v101.91c0,3.038,2.462,5.5,5.5,5.5h130.504v8.74H37.845c-3.038,0-5.5,2.462-5.5,5.5 v48.17c0,3.038,2.462,5.5,5.5,5.5h181.9c3.038,0,5.5-2.462,5.5-5.5v-14.769h14.66V365.583z M419.905,321.852H179.349v-72.051 h240.556V321.852z 239.905,238.801h-14.66v-20.278h14.66V238.801z"/></path>
									<path d="M204.317,112.086h190.62c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-190.62c-3.038,0-5.5,2.462-5.5,5.5 S201.28,112.086,204.317,112.086z"/></path>
									<path d="M204.317,140.21h96.091c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-96.091c-3.038,0-5.5,2.462-5.5,5.5 S201.28,140.21,204.317,140.21z"/></path>
									<path d="M204.317,275.466h190.62c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-190.62c-3.038,0-5.5,2.462-5.5,5.5 S201.28,275.466,204.317,275.466z"/></path>
									<path d="M204.317,303.59h96.091c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-96.091c-3.038,0-5.5,2.462-5.5,5.5 S201.28,303.59,204.317,303.59z"/></path>
									<path d="M204.317,168.334h136.715c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5H204.317c-3.038,0-5.5,2.462-5.5,5.5 S201.28,168.334,204.317,168.334z"/></path>
									<path d="M116.933,318.132H59.88c-3.038,0-5.5,2.462-5.5,5.5s2.462,5.5,5.5,5.5h57.053c3.038,0,5.5-2.462,5.5-5.5 S119.97,318.132,116.933,318.132z"/></path>
								</g>
							</svg><br/><span>Customize My Apps</span>
						</a>
		        	</li>
		        	<li <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'testApp') {?> class="bizeazy-nav-active" <?php } else { ?> class="bizeazy-nav"<?php }?>>
		            	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/testApp">
			        
		            		<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" 	xml:space="preserve">
								<g>
									<path d="M41.5,49c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S43.706,49,41.5,49z M41.5,55c-1.103,0-2-0.897-2-2s0.897-2,2-2 s2,0.897,2,2S42.603,55,41.5,55z"/></path>
									<path d="M37.5,5h4c0.552,0,1-0.447,1-1s-0.448-1-1-1h-4c-0.552,0-1,0.447-1,1S36.948,5,37.5,5z"/></path>
									<path d="M44.5,5h1c0.552,0,1-0.447,1-1s-0.448-1-1-1h-1c-0.552,0-1,0.447-1,1S43.948,5,44.5,5z"/></path>
									<path d="M54.095,0H28.905C26.476,0,24.5,1.977,24.5,4.405v9.534c-5.254,2.019-9,7.104-9,13.061c0,3.258,1.128,6.253,3.002,8.634 L1.816,51.271c-0.403,0.378-0.424,1.011-0.046,1.413C1.967,52.894,2.233,53,2.5,53c0.245,0,0.491-0.09,0.684-0.271l16.663-15.615 c1.33,1.27,2.907,2.276,4.653,2.947v15.534c0,2.429,1.976,4.405,4.405,4.405h25.189c2.429,0,4.405-1.977,4.405-4.405V4.405 C58.5,1.977,56.524,0,54.095,0z M28.905,2h25.189C55.421,2,56.5,3.079,56.5,4.405V6h-30V4.405C26.5,3.079,27.579,2,28.905,2z M17.5,27c0-5.339,3.507-9.87,8.336-11.423c0.158-0.051,0.318-0.09,0.477-0.134c0.185-0.051,0.37-0.102,0.558-0.144 c0.162-0.037,0.325-0.067,0.489-0.097c0.213-0.039,0.427-0.072,0.644-0.099c0.136-0.017,0.272-0.036,0.408-0.048 C28.771,15.022,29.133,15,29.5,15c6.617,0,12,5.383,12,12s-5.383,12-12,12c-0.367,0-0.729-0.022-1.088-0.055 c-0.136-0.013-0.272-0.031-0.408-0.048c-0.216-0.027-0.431-0.06-0.644-0.099c-0.163-0.03-0.326-0.061-0.489-0.097 c-0.188-0.042-0.373-0.093-0.558-0.144c-0.159-0.044-0.319-0.083-0.477-0.134C21.007,36.87,17.5,32.339,17.5,27z M27.8,40.886 c0.071,0.009,0.142,0.025,0.214,0.033C28.503,40.971,28.998,41,29.5,41c7.72,0,14-6.28,14-14s-6.28-14-14-14
									c-0.502,0-0.997,0.029-1.486,0.081c-0.072,0.008-0.142,0.024-0.214,0.033c-0.422,0.051-0.84,0.117-1.25,0.205 c-0.017,0.004-0.033,0.005-0.05,0.008V8h30v38h-30v-5.327c0.017,0.003,0.033,0.004,0.05,0.008 C26.96,40.77,27.378,40.835,27.8,40.886z M54.095,58H28.905c-1.326,0-2.405-1.079-2.405-2.405V48h30v7.595 C56.5,56.921,55.421,58,54.095,58z"/></path>
								</g>
							</svg><br/><span>Test Your App</span>
						</a>
		        	</li>
		        	<li <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'publishApp') {?> class="bizeazy-nav-active" <?php } else { ?> class="bizeazy-nav"<?php }?>>
			        	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/publishApp">
			        		<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/images/publish.png" alt="" style="margin-bottom: 0px;">	 --> 
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
							<g>
								<g>
									<g>
										<path d="M258.391,125.802c-23.009,0-41.729,18.718-41.729,41.726c0,23.009,18.72,41.728,41.729,41.728
											s41.729-18.719,41.729-41.728C300.119,144.52,281.4,125.802,258.391,125.802z M258.391,193.043
											c-14.07,0-25.517-11.447-25.517-25.516c0-14.068,11.447-25.515,25.517-25.515s25.517,11.446,25.517,25.515
											C283.908,181.597,272.461,193.043,258.391,193.043z"/>
										<path d="M424.238,361.855V242.182c0-2.158-0.861-4.228-2.392-5.75l-77.889-77.405v-17.089c0-27.878-7.885-54.983-22.802-78.386
											c-14.513-22.769-34.987-41.061-59.206-52.898c-2.246-1.098-4.871-1.098-7.118,0c-24.219,11.837-44.692,30.129-59.204,52.898
											c-14.917,23.402-22.802,50.509-22.802,78.386v17.089l-77.891,77.405c-1.531,1.522-2.392,3.591-2.392,5.75v119.673
											c0,4.476,3.629,8.106,8.106,8.106h72.177v0.32c0,15.781,12.839,28.62,28.621,28.62h12.032
											c-4.781,9.998-7.272,20.922-7.272,32.216c0,31.459,19.859,59.818,49.414,70.566c0.895,0.325,1.832,0.488,2.771,0.488
											c0.937,0,1.875-0.162,2.77-0.488c29.556-10.749,49.415-39.108,49.415-70.566c0-11.294-2.49-22.218-7.271-32.216h12.033
											c15.782,0,28.62-12.839,28.62-28.62v-0.32h72.174C420.61,369.96,424.238,366.331,424.238,361.855z M172.825,339.061v14.69
											h-64.072v-0.001V245.554l64.072-63.671V339.061z M201.446,382.689c-6.843,0.001-12.41-5.566-12.41-12.409v-8.425v-14.69h61.249
											v35.524H201.446z M258.391,485.36c-21.634-9.14-35.974-30.572-35.974-54.244c0-11.389,3.226-22.307,9.367-31.808h18.501v14.975
											c0,4.476,3.629,8.106,8.106,8.106c4.478,0,8.106-3.629,8.106-8.106v-14.975h18.502c6.14,9.501,9.366,20.418,9.366,31.808
											C294.364,454.788,280.026,476.22,258.391,485.36z M327.747,370.28h-0.001c0,6.843-5.567,12.409-12.409,12.409h-48.84v-35.524
											h61.25V370.28z M408.027,353.749h-64.07V339.06v-49.97c0-4.476-3.628-8.106-8.106-8.106c-4.478,0-8.106,3.629-8.106,8.106v41.865
											h-61.25v-21.527c0-4.476-3.628-8.106-8.106-8.106c-4.476,0-8.106,3.629-8.106,8.106v21.527h-61.249V162.4v-20.462
											c0-48.679,26.472-92.349,69.355-114.914c42.884,22.564,69.356,66.234,69.356,114.914v119.593c0,4.476,3.628,8.106,8.106,8.106
											c4.477,0,8.106-3.629,8.106-8.106v-79.649l64.07,63.671V353.749z"/>
										<path d="M443.547,412.122c-9.096,0-18.082,1.816-26.405,5.29c-4.542-14.423-18.04-24.911-33.943-24.911
											c-19.617,0-35.577,15.96-35.577,35.578c0,4.476,3.628,8.106,8.106,8.106c4.478,0,8.106-3.629,8.106-8.106
											c0-10.679,8.687-19.367,19.366-19.367s19.367,8.688,19.367,19.367c0,4.576-1.624,9.016-4.573,12.501
											c-2.892,3.417-2.466,8.531,0.951,11.423c1.523,1.288,3.382,1.918,5.232,1.918c2.302,0,4.588-0.975,6.192-2.869
											c3.925-4.637,6.565-10.194,7.729-16.094c7.741-4.326,16.521-6.625,25.45-6.625c28.806,0,52.242,23.436,52.242,52.242
											c0,4.476,3.628,8.106,8.106,8.106s8.106-3.629,8.106-8.106C512,442.83,481.292,412.122,443.547,412.122z"/>
										<path d="M155.229,446.41c-3.248,0-6.403,0.391-9.434,1.109c1.159-1.981,1.477-4.436,0.66-6.772
											c-6.285-17.949-23.301-30.01-42.344-30.01c-14.043,0-27.282,6.624-35.743,17.772c-4.499-1.188-9.193-1.815-13.992-1.815
											C24.393,426.694,0,451.086,0,481.069c0,4.476,3.629,8.106,8.106,8.106s8.106-3.629,8.106-8.106
											c0-21.044,17.121-38.164,38.165-38.164c13.205,0,25.292,6.682,32.334,17.875c2.383,3.788,7.387,4.929,11.177,2.545
											c3.789-2.384,4.928-7.388,2.544-11.177c-4.333-6.886-10.011-12.567-16.576-16.806c5.331-5.319,12.609-8.395,20.258-8.395
											c12.164,0,23.032,7.698,27.042,19.156c0.86,2.455,2.785,4.228,5.074,4.997c-13.038,6.859-21.954,20.536-21.954,36.263
											c0,4.476,3.629,8.106,8.106,8.106s8.106-3.629,8.106-8.106c0-13.643,11.1-24.743,24.744-24.743
											c13.644,0,24.745,11.1,24.745,24.743c0,4.476,3.629,8.106,8.106,8.106c4.476,0,8.106-3.629,8.106-8.106
											C196.184,464.781,177.811,446.41,155.229,446.41z"/>
									</g>
								</g>
							</g>
							</svg>
							<br/><span>Request to Publish</span>
			            </a>
			        </li>
		    	</ul>
			</aside>
			<section id="bizeazyFiles" class="bizeazy-content-aria">
		  		<div class="bizeazy-full-row">
					<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['filename']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				</div>
			</section>
		</div>
	</div>
</body>
<?php $_smarty_tpl->_subTemplateRender("file:./shared/commonShops_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Common Bottom JS"), 0, false);
?>

<?php echo '<script'; ?>
>
	jQuery(document).ready(function () {
		jQuery('header').headshrinker({ fontSize: "15px", mobileMenu: true });   
		jQuery('header').css({ fontSize: "15px" });
	});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

	$(window).load(function() {
        $(".main-row1").delay(1000).fadeOut("slow");
		$('#loader').fadeOut();
		$('#screen1').delay(2000).fadeIn();
	});
<?php echo '</script'; ?>
>

</body>
</html><?php }
}