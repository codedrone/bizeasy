<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header>
			<?php 
			$site_url = get_site_url();
			$final_url = str_replace('blog', '', $site_url);
			?>
		    <div class="bizeasy-container">
		        <div class="main-logo">
		            <?php //twentysixteen_the_custom_logo(); ?>
		            <a href="<?php echo $final_url;?>" class="custom-logo-link" rel="home" itemprop="url">
						<img width="200" height="140" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="custom-logo" alt="Bizeazy Blog" itemprop="logo">
					</a>
		        </div>
		        <a id="mobi-menu" href="javascript:void(0);" style="font-size:15px;" class="icon fa fa-bars" onclick="myFunction()"></a>
		        <div class="topnav" id="myTopnav">
		            <a href="<?php echo $final_url;?>#home">Home</a>
		            <a href="<?php echo $final_url;?>#about">About</a>
		            <a href="<?php echo $final_url;?>#features">Features</a>
		            <a href="<?php echo $final_url;?>#pricing">Pricing</a>
		                <!-- <div class="dropdown">
		                <button class="dropbtn">Pricing  -->
		                  <!-- <i class="fa fa-caret-down"></i> -->
		                <!-- </button> -->
		                <!-- <div class="dropdown-content">
		                  <a href="#">Link 1</a>
		                  <a href="#">Link 2</a>
		                  <a href="#">Link 3</a>
		                </div> -->
		                <!-- </div>  -->
		            <a href="<?php echo $final_url;?>#faq">FAQ</a>
		            <a href="<?php echo $final_url;?>#blog" class="active">Blog</a>
		            <a href="<?php echo $final_url;?>#contact">Contact</a>
		            <a class="mobi-social" href="https://www.facebook.com/bizeazyapps/" target="_blank"><span class="fa fa-facebook"></span></a>
		            <a href="https://twitter.com/bizeazyapps" target="_blank"><span class="fa fa-twitter"></span></a>
		        </div>
		        <script>
		            function myFunction() {
		                var x = document.getElementById("myTopnav");
		                if (x.className === "topnav") {
		                    x.className += " responsive";
		                } else {
		                    x.className = "topnav";
		                }
		            }
		        </script>
		        
		    </div>
		</header>


		<div id="content" class="site-content">
