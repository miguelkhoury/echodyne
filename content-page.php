<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<?php if ( is_front_page() ) { ?>
					<header class="entry-header">
		<h1 style="display:none;"class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
					<?php } else { ?>
						<header class="entry-header">
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

		<h1 class="entry-title"><?php the_title(); ?></h1>
		
			</header><!-- .entry-header -->
					<?php } ?>

	<div class="entry-content">
		<?php the_content(); ?> 
		<div class="clearfix"></div>
		<?php
		/**
		 * This wp_link_pages option adapt to use bootstrap pagination style.
		 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?>
	</div><!-- .entry-content -->
	
	<div class="entry-meta">
		<?php bootstrapBasicEditPostLink(); ?> 
	</div>
</article><!-- #post-## -->
