<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
			
				</div><!--.container page-container-->
				
				

				<div class="container">

			<footer id="site-footer" role="contentinfo"><div class="line container">
				<hr class="foot" />
				</div>

				<div class="container">
					<div class="col-xs-3 ">
						&copy; <?php the_time('Y') ?> <?php bloginfo('name'); ?>, Inc. 
					</div>
					<div class="col-xs-9 ">
						<?php dynamic_sidebar('footer-right'); ?> 
					</div>
					
				</div>
				
								<div class="container">
			
				<div class="col-xs-4">
				<a href="https://www.linkedin.com/company/echodyne-corp"><img src="/wp-content/themes/echodyne/img/linkedin.png" width="32px" height="32px" /> </a>
				<div class="col-xs-8">
				<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="/wp-content/themes/echodyne/img/logo-grey.svg" /></a>
				</div>

				</div>
				
				
				
			</footer>
	
			</div>
	
		
		
				<?php wp_footer(); ?> 
		
		
<!--[if IE]>
</div>
<![endif]-->

	</body>
		</html>