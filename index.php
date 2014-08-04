<?php
/**
 * Index Template
 *
 * The index template is the "fallback" template. What this means is that it will be used if a more specific 
 * template is not found to display the content of a page.
 *
 * @package Hybrid
 * @subpackage Template
 * @link http://themehybrid.com/themes/hybrid/template-hierarchy
 */

get_header(); // Loads the header.php template. ?>

	<div id="content" class="hfeed content">

		<?php do_atomic( 'before_content' ); // hybrid_before_content ?>

		<?php get_template_part( 'loop-meta' ); // Loads the loop-meta.php template. ?>

		<?php

			$limit = get_option('posts_per_page');
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts('&cat=-106&showposts=' . $limit=10 . '&paged=' . $paged);
			$wp_query->is_archive = true; $wp_query->is_home = false;

			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">
				<div class="entry-content">
					<?php $postimg = get_post_meta($post->ID, "postimg_value", true); $postimg = trim(strip_tags($postimg)); ?>
					<a class="post-thumbnail" href="<?php the_permalink();?>">
						<img class="dd_postimg" onerror="javascript:this.src='<?php echo get_stylesheet_directory_uri().'/images/noimage.jpg';?>';" src="<?php if($postimg !== '') echo $postimg; else echo get_stylesheet_directory_uri().'/images/noimage.jpg'; ?>" alt="<?php the_title(); ?>" />
						<span class="des">
							<?php 
							if(preg_match('/<!--more.*?-->/',$post->post_content))
      							echo strip_tags(get_the_content('')); 
							else {
						    	echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 300," ...");
						    }?>
							<?php //echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 300," ...");?>
						</span>	
					</a>
				</div><!-- .entry-content -->
				<div class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></div>
				<div class="category"><?php the_category(' ');?></div>
				<div class="post-time"><?php the_time('d');echo ' '.date('M',get_the_time('U')).' ';the_time('y');?></div>

			</div><!-- .hentry -->

			<?php if ( is_singular() ) { ?>

				<?php do_atomic( 'after_singular' ); // hybrid_after_singular ?>

				<?php comments_template( '/comments.php', true ); // Loads the comments.php template ?>

			<?php } ?>

			<?php endwhile; ?>

		<?php else: ?>

			<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

		<?php endif; ?>

		<?php do_atomic( 'after_content' ); // hybrid_after_content ?>

	</div><!-- .content .hfeed -->

<?php get_footer(); // Loads the footer.php template. ?>