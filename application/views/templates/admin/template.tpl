<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
		<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
		<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
        <link rel="icon" href="https://s3.amazonaws.com/bizeazy.net/Configuration/DEFAULT_LOGO/3071486.png" type="image/x-icon">

		<title>::: {ucfirst($pagename)} :::</title>
  
		{include file="./shared/common_css.tpl" title="Common CSS"}
		{include file="./shared/common_top_js.tpl" title="Common Top JS"}
	</head>
 
	<body class="tooltips top-navigation">
		<div class="wrapper">
			<!-- BEGIN TOP NAV -->
			<div class="top-navbar dark-color">
				{include file="./shared/header.tpl" title="Header"}
			</div><!-- /.top-navbar -->
			<!-- END TOP NAV -->
			
			<!-- BEGIN TOP MAIN NAVIGATION -->
			<div class="top-main-navigation">
				{include file="./shared/menu.tpl" title="Menu"}
			</div><!-- /.top-main-navigation -->
			<!-- END TOP MAIN NAVIGATION -->
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content no-left-sidebar">
				<div class="container-fluid">
					{include file=$filename}
				</div><!-- /.container-fluid -->
				
				<!-- BEGIN FOOTER -->
				<footer>
					{include file="./shared/footer.tpl" title="Footer"}
				</footer>
				<!-- END FOOTER -->
			</div><!-- /.page-content -->
	   </div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
		{include file="./shared/modals.tpl" title="Model"}
		<!-- BEGIN BACK TO TOP BUTTON -->
		<div id="back-top">
			<a href="#top"><i class="fa fa-chevron-up"></i></a>
		</div>
		<!-- END BACK TO TOP -->
		{include file="./shared/common_bottom_js.tpl" title="Common Bottom JS"}
	</body>
</html>