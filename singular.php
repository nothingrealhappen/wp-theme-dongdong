<?php
/**
 * Singular Template
 *
 * WordPress currently supports custom post types displayed on the singular post level. This template
 * is a catchall template for the singular views of these posts. It should only be used as a backup or if
 * your custom post type doesn't require a custom structure. The template hierarchy for singular views
 * of post types is like so: $post_type-$template.php, $post_type-$slug.php, $post_type-$id.php,
 * $post_type.php, and singular.php.
 *
 * @package Hybrid
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

	<div id="content" class="hfeed content dd_post_content">

		<?php do_atomic( 'before_content' ); // hybrid_before_content ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?> dd_post">
				<h1 class="post-title entry-title"><?php the_title();?></h1>
				<?php 
					$meta = '';
					if ( 'post' == get_post_type() )
						$meta = '<p class="byline">' . __( '[entry-terms taxonomy="category" before="发表于 "] [entry-terms taxonomy="post_tag" before= "| Tagged "] [entry-published]', 'hybrid' ) . '</p>';
						
					echo apply_atomic_shortcode( 'entry_meta', $meta );
				?>

				<div class="entry-content">
					<?php 
					// $postimg = get_post_meta($post->ID, "postimg_value", true); $postimg = trim(strip_tags($postimg)); 
					// if($postimg !== '') {
					/* <img class="dd_postimg" onerror="javascript:this.src='<?php echo get_stylesheet_directory_uri().'/images/noimage.jpg';?>';" src="<?php echo $postimg;?>" alt="<?php the_title(); ?>" />
					}
					*/
					?>
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<p class="page-links pages">' . __( 'Pages:', 'hybrid' ), 'after' => '</p>' ) ); ?>
						
				</div><!-- .entry-content -->
						<!-- 分享模块 -->
						<div id="share" class="social">
							<?php 
							if(preg_match('/<!--more.*?-->/',$post->post_content))
      							$post_des = mb_strimwidth(strip_tags(get_the_content('')), 0, 200," ..."); 
							else {
						    	$post_des = mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200," ...");
						    }?>
							分享到：
			                <a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php the_permalink();?>" target="_blank" class="qzone"><span class="icon"></span>QQ空间</a>
			                <a href="http://v.t.sina.com.cn/share/share.php?url=<?php the_permalink();?>&title=<?php the_title(); echo ' | '.$post_des;?>" target="_blank" class="sina"><span class="icon"></span>新浪微博</a>
			                <a href="http://v.t.qq.com/share/share.php?url=<?php the_permalink();?>&title=<?php the_title(); echo ' | '.$post_des;?>" target="_blank" class="tencent"><span class="icon"></span>腾讯微博</a>
			                <a href="javascript:window.open('http://share.renren.com/share/buttonshare.do?link='+encodeURIComponent(document.location.href)+'&amp;title='+encodeURIComponent(document.title));void(0)" title="分享到人人" target="_blank" class="renren"><span class="icon"></span>人人网</a>
			                <a href="javascript:void(0);" target="_blank" class="wechat">
			                    <span class="icon"></span>微信
			                    <div class="wechatqr">
			                    	<img src="http://www.liantu.com/api.php?bg=ffffff&fg=000000&gc=000000&el=L&text=<?php echo urldecode(the_permalink());?>" alt="分享到微信" class="qrcode">
			                    </div>
			                </a>
			            </div>

			</div><!-- .hentry -->

			<?php do_atomic( 'after_singular' ); // hybrid_after_singular ?>

			<?php comments_template( '/comments.php', true ); // Loads the comments.php template ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

		<?php endif; ?>

		<?php do_atomic( 'after_content' ); // hybrid_after_content ?>

	</div><!-- .content .hfeed -->
	<script>
		jQuery(function($){
			$('.entry-content p').each(function(){
				if($(this).find('img').length){
					$(this).css('text-indent','0');
				}
			});
		});
	</script>

<?php get_footer(); // Loads the footer.php template. ?>