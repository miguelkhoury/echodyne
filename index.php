<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<?php //get_sidebar('left'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="container site-main" role="main"><div class="row">
						<header class="entry-header">
						<h1 class="entry-title">News</h1>
						</header>
						<?php if (have_posts()) { ?> 
						<?php 
						// start the loop
						while (have_posts()) {
							the_post();
							
							?>
							
							
							<div class="col-md-3"  <?php post_class() ?> id="post-<?php the_ID(); ?>">
								<div class="row">
	  
			
		<div class="col-md-12">
			<?php the_post_thumbnail(array(200,200)); ?>
        </div>
       </div>
<div class="row">
	        <div class="col-md-12">
	    <p style="font-size:80%;"><?php the_date() ?></p>
		</div>
        </div>

<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<p><a href="<?php the_permalink() ?>">Read »</a></p>
</div>
						
							
<?php 							
							
							/* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							//get_template_part('content', get_post_format());
						}// end while
						
						bootstrapBasicPagination();
						?> 
						<?php } else { ?> 
							</div>
						<?php get_template_part('no-results', 'index'); ?>
						<?php } // endif; ?> 
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 



