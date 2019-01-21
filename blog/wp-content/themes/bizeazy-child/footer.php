<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->
		<footer class="full-width-row footer-bg">
            <div class="bizeasy-container">
				<div class="bizeasy-col-2 contact-form-custom">
					<div class="footer-form">
						<?php echo do_shortcode ('[contact-form-7 id="5" title="Contact form"]'); ?>
					</div>                
                </div>
                <div class="bizeasy-col-2">
                    <?php
	                    if(is_active_sidebar('sidebar-2')){
	                    dynamic_sidebar('sidebar-2');
	                    }
                	?> 	
                </div>
                 <div class="full-width-row">
                    <div class="footer-copyright">&copy; <?php  $thisYear = (int)date('Y'); echo $thisYear;?> <?php bloginfo( 'name' ); ?> All rights reserved.</div>
                </div>    
            </div>
        </footer>
		
	</div><!-- .site-inner -->
</div><!-- .site -->
<script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/587e1c948416045a868070cb/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
</script>
<?php wp_footer(); ?>
</body>
</html>
