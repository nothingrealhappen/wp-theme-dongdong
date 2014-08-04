<?php
/**
 * This is your child theme functions file.  In general, most PHP customizations should be placed within this
 * file.  Sometimes, you may have to overwrite a template file.  However, you should consult the theme 
 * documentation and support forums before making a decision.  In most cases, what you want to accomplish
 * can be done from this file alone.  This isn't a foreign practice introduced by parent/child themes.  This is
 * how WordPress works.  By utilizing the functions.php file, you are both future-proofing your site and using
 * a general best practice for coding.
 *
 * All style/design changes should take place within your style.css file, not this one.
 *
 * The functions file can be your best friend or your worst enemy.  Always double-check your code to make
 * sure that you close everything that you open and that it works before uploading it to a live site.
 *
 * @package HybridChild
 * @subpackage Functions
 *
 * 关于本主题的安装修改之处
 * 1.首页循环排除了名人格言的分类，需要修改index.php   query_posts('cat=-2'); //排除名人格言的分类
 * 2.侧边栏显示名人格言，需要根据情况修改名人格言分类sidebar-primary.php   $rand_post = get_posts('numberposts=1&orderby=rand&cat=2');
 * 3.导航栏链接是固定链接，以及导航栏meta descript修改   header.php  这个是改的最多的部分
 * 4.LOGO的更换  因为我的LOGO是分了左右两部分并且伴有动画的  所以你可能需要把两部分合成一部分  images/logo
 *
 * 其他的暂时没想到，想到了会第一时间更新到Github上的
 *
 * 因为是免费共享主题  如果有什么疑问请直接在博客或者Github上联系
 *
 * 邮箱：mail@liyaodong.com   博客：http://liyaodong.com
 * 
 */

/* Uncomment the below line to use the child theme setup function. */
add_action( 'after_setup_theme', 'hybrid_child_theme_setup', 11 );

/**
 * Setup function.  All child themes should run their setup within this function.  The idea is to add/remove 
 * filters and actions after the parent theme has been set up.  This function provides you that opportunity.
 *
 * @since 0.1
 */
function hybrid_child_theme_setup() {

	/* Get the theme prefix ("prototype"). */
	$prefix = hybrid_get_prefix();

	/* Example action. */
	// add_action( "{$prefix}_header", 'hybrid_child_example_action' );

	/* Example filter. */
	// add_filter( "{$prefix}_site_title", 'hybrid_child_example_filter' );

}



//文章添加自定义展示图片

$new_meta_boxes =
array(
    "postimg" => array(
        "name" => "postimg",
        "std" => "",
        "title" => "文章展示图片:"),
);

function new_meta_boxes() {
    global $post, $new_meta_boxes;

    foreach($new_meta_boxes as $meta_box) {
        $meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);

        if($meta_box_value == "")
            $meta_box_value = $meta_box['std'];

        echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';

        // 自定义字段标题
        echo'<h4>'.$meta_box['title'].'</h4>';

        // 自定义字段输入框
        echo '<textarea cols="60" rows="3" name="'.$meta_box['name'].'_value">'.$meta_box_value.'</textarea><br />';
    }
}

function create_meta_box() {
    global $theme_name;

    if ( function_exists('add_meta_box') ) {
        add_meta_box( 'new-meta-boxes', '自定义模块', 'new_meta_boxes', 'post', 'normal', 'high' );
    }
}

function save_postdata( $post_id ) {
    global $post, $new_meta_boxes;

    foreach($new_meta_boxes as $meta_box) {
        if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) ))  {
            return $post_id;
        }

        if ( 'page' == $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ))
                return $post_id;
        } 
        else {
            if ( !current_user_can( 'edit_post', $post_id ))
                return $post_id;
        }

        $data = $_POST[$meta_box['name'].'_value'];

        if(get_post_meta($post_id, $meta_box['name'].'_value') == "")
            add_post_meta($post_id, $meta_box['name'].'_value', $data, true);
        elseif($data != get_post_meta($post_id, $meta_box['name'].'_value', true))
            update_post_meta($post_id, $meta_box['name'].'_value', $data);
        elseif($data == "")
            delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
    }
}

add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');

//去除fonts.google.api
function remove_open_sans() {
wp_deregister_style( 'open-sans' );
wp_register_style( 'open-sans', false );
wp_enqueue_style('open-sans','');
}
add_action( 'init', 'remove_open_sans' );


?>