<?php
/**
 * Primary Sidebar Template
 *
 * The Primary sidebar template houses the HTML used for the 'Primary' sidebar.
 * It will first check if the sidebar is active before displaying anything.
 *
 * @package Hybrid
 * @subpackage Template
 * @link http://themehybrid.com/themes/hybrid/widget-areas
 */

if ( is_active_sidebar( 'primary' ) ) : ?>

	<div id="primary" class="sidebar aside">

		<!-- 侧边栏搜索 -->
		<form method="get" class="searchform" name="search" id="search" action="<?php echo site_url(); ?>">
			<div class="search">
				<input type="text" class="search" name="s" onblur="if(this.value=='')this.value='请输入关键字并回车';" onfocus="if(this.value=='请输入关键字并回车')this.value='';" value="请输入关键字并回车">
			</div>
		</form>

		<!-- 侧边栏登录框 -->
		<a href="<?php echo site_url(); ?>/wp-login.php" class="login_panel">登录</a>
		
		<!-- 侧边栏随机格言 -->
		<?php
			$rand_post = get_posts('numberposts=1&orderby=rand&cat=106');
			foreach( $rand_post as $post ) : 
		?>
			<p class="dd_motto"><?php the_title(); ?></p>
		<?php endforeach; ?>
		

		<!-- 侧边栏随机文章 -->
		<ul class="randpost">
			<?php
			
				$rand_post = get_posts('numberposts=8&orderby=rand&cat=-2');
				foreach( $rand_post as $post ) : 
			?>
				<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
		</ul>
		
		<!-- 移动端backtotop -->
		<div class="mobile_backtotop">
            <a href="#header">返回顶部</a>
        </div>

	</div><!-- #primary .aside -->

<?php endif; ?>