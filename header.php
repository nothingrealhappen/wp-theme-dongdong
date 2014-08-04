<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the top of the file. It is used mostly as an opening
 * wrapper, which is closed with the footer.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package Hybrid-dongdong
 * @subpackage Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title><?php hybrid_document_title(); ?></title>
<?php
// ----------------SEO优化----------------
$keywords = "耀东,晓风,博客,晓风东东,东东,互联网,设计,前端开发,分享,李耀东";
if (is_home()){
	$description = "晓风博客是一个以技术成长、设计生活、个人心得为主题的个人博客，旨在与你分享生活点滴，共同成长。";
}
//判断是否是首页，如果是，指定关键词（keywords）和描述（description）。注意，把上面的关键词（keywords）和描述（decision）改成你自己的。
elseif (is_single()){
	if(preg_match('/<!--more.*?-->/',$post->post_content)){
		// $description = strip_tags(the_content(''));
		$descriptiontemp = explode('<!--more-->',$post->post_content);
		$description = strip_tags($descriptiontemp[0]);
	} else {
	   	$description = mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 300," ...");
	};
	$tags = wp_get_post_tags($post->ID);
	if($tags !== ''){
		foreach ($tags as $tag ) {
			$keywords = $keywords . "," . $tag->name;
		}
	}
}
//判断是否是文章页，如果是则文章标签（tag）设为关键词，摘要（可以在后台设置，这里就不讲解了）设为描述（description），若没有摘要，标题（title）作为描述（description）。
elseif(is_category()){
	$description = strip_tags(category_description());
}
//判断是否为特殊应用页
if(is_page('250')){
	$description = '晓风博客电视直播——中央全套、各卫视、地方台无需插件直接观看，IPTV高清线路流畅通顺，欢迎访问！';
}
if(is_page('330')){
	$description = '晓风博客音悦TV——转载自音悦台，如果你想放松放松心情，就来看看MV吧！';
}
if(is_page('364')){
	$description = '晓风博客酷狗音乐——在线音乐播放器&音乐电台，选择属于你的频道，倾听音乐的魅力吧！';
}
if(is_page('637')){
	$description = '晓风书签——是我积累几年的书签列表，包含生活、设计、素材、编程、手册、工具、博客等1000+站点收录，欢迎下载！';
}
?>
<meta name="description" content="<?php echo $description;?>"/>
<meta name="keywords" content="<?php echo $keywords;?>"/>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php do_atomic( 'head' ); // @deprecated 0.9.0. Use 'wp_head'. ?>
<?php wp_head(); // wp_head ?>

</head>

<body class="<?php hybrid_body_class(); ?>">

	<?php do_atomic( 'before_header' ); // hybrid_before_header ?>

	<div id="header-container">

		<div id="header" <?php if ( is_user_logged_in() ) { echo 'style="top: 32px;"'; } ?>>
			<div class="lyd_nav">
				<a href="<?php bloginfo('url');?>" class="logo">
					<span class="logo-l"></span>
					<span class="logo-r"></span>
					<span class="clearfix"></span>
				</a>
				<div class="mobile_nav_container">
					<ul class="mobile_nav">
						<li><a href="<?php bloginfo('url');?>/?cat=3">心路旅程</a></li>
						<li><a href="<?php bloginfo('url');?>/?cat=4">生活趣事</a></li>
						<li><a href="<?php bloginfo('url');?>/?cat=5">科技杂谈</a></li>
						<li><a href="<?php bloginfo('url');?>/?cat=96">设计生活</a></li>
						<li><a href="<?php bloginfo('url');?>/?cat=6">趣味世界</a></li>
						<span class="clearfix"></span>
					</ul>
				</div>
				<div class="lyd_nav_cont">
					<ul class="first_nav">
						<li class="item1 <?php if (is_home()) echo 'on on1';?>"><a href="<?php bloginfo('url');?>"><span class="icon-heart"></span>首页</a></li>
						<li class="item2 <?php if (is_category()) echo 'on on2';?>"><a href="javascript:void(0)"><span class="icon-pen"></span>文章分类</a>
							<ul class="second_nav">
								<li><a href="<?php bloginfo('url');?>/?cat=3">心路旅程</a></li>
								<li><a href="<?php bloginfo('url');?>/?cat=4">生活趣事</a></li>
								<li><a href="<?php bloginfo('url');?>/?cat=5">科技杂谈</a></li>
								<li><a href="<?php bloginfo('url');?>/?cat=96">设计生活</a></li>
								<li><a href="<?php bloginfo('url');?>/?cat=6">趣味世界</a></li>
							</ul>
						</li>
						<li class="item3"><a href="http://user.qzone.qq.com/846400221/4" target="_blank"><span class="icon-camera"></span>图片记忆</a></li>
						<li class="item4"><a target="_blank" href="<?php bloginfo('url');?>/apps/"><span class="icon-lab"></span></i>应用中心</a>
							<ul class="second_nav">
								<li><a target="_blank" href="<?php bloginfo('url');?>/?page_id=330">音悦TV</a></li>
								<li><a target="_blank" href="<?php bloginfo('url');?>/?page_id=364">酷狗音乐</a></li>
								<li><a target="_blank" href="<?php bloginfo('url');?>/?page_id=250">电视直播</a></li>
								<li><a target="_blank" href="<?php bloginfo('url');?>/apps/bianlitie">环保便利贴</a></li>
							</ul>
						</li>
						<li class="item5"><a href="<?php bloginfo('url');?>/bookmarks/"><span class="icon-star"></span>晓风书签</a></li>
					</ul>
				</div>
				<script>
					jQuery(document).ready(function($) {
						$(".first_nav li").each(function(){
							$(this).mousemove(function(){
								var index = $(".first_nav>li").index(this) + 1;
								$(this).addClass("on"+index);
							});
							$(this).mouseleave(function(){
								if(!$(this).hasClass('on')){
									var index = $(".first_nav>li").index(this) + 1;
									$(this).removeClass("on"+index);
								}
							});
						});
					});
				</script>
				<div class="clearfix"></div>
			</div>			

		</div><!-- #header .lyd_nav-->

	</div><!-- #header-container -->

	<?php do_atomic( 'after_header' ); // hybrid_after_header ?>

<?php do_atomic( 'before_html' ); // hybrid_before_html ?>

<div id="body-container">

	<div id="container">

		<?php do_atomic( 'before_container' ); // hybrid_before_container ?>