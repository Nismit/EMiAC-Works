<?php
/**
 * EMiAC-Works functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage EMiAC-Works
 * @since  2.0
 */

/* WP HEAD CLEAN */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );

/* EyeCatch Enable */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(200, 1000, false);


function get_all_posts($query) {
    if ( is_admin() || ! $query->is_main_query() ) {
        return;
    }else{
		$query->set( 'paged',get_query_var( 'paged' ) );
		$query->set( 'posts_per_page',5  );
    }
}
add_action( 'pre_get_posts', 'get_all_posts' );

function tweakjp_custom_twitter_site( $og_tags ) {
    $og_tags['twitter:site'] = '@EMiACWorks';
    $og_tags['twitter:card'] = 'summary';
    return $og_tags;
}
add_filter( 'jetpack_open_graph_tags', 'tweakjp_custom_twitter_site', 11 );

function rss_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
/*$content = '<p>' . get_the_post_thumbnail($post->ID) . '</p>' . $content;*/
$content = '<p>' . the_post_thumbnail(744) . '</p>' . $content;
}
return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

function div_wrapp_shortcode( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'class' => 'single-link_box',
    ), $atts ) );
    return '<div class="'.esc_attr($class).'">'.$content.'</div>';
}
add_shortcode('divclass', 'div_wrapp_shortcode');

function include_jquery_cdn_loader() {
    if( !is_admin() ){
        //WP Default jQuery Load Deregister.
        wp_deregister_script('jquery');

        //jQuery CDN
        $jsCore = '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js';
        /*$jsMigrate = '//code.jquery.com/jquery-migrate-1.2.1.min.js';*/

        //jQuery CDN Check
        $core_url = @fopen('http:'.$jsCore, 'r');
            //jQuery CDN Server Down
            if( $core_url === false ){
                $jsCore =  home_url( '/' ).'system/wp-includes/js/jquery/jquery.js?ver=1.11.1';
            }
            wp_register_script( 'jquery', $jsCore, false, null, false );
            wp_enqueue_script( 'jquery' );
 
        /*$migrate_url = @fopen('http:'.$jsMigrate, 'r');
            //jQuery Migrate CDN Server Down
            if( $migrate_url === false ){
                $jsMigrate = home_url( '/' ).'system/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1';
            }
            wp_register_script( 'jquery_migrate', $jsMigrate, false, null, false );
            wp_enqueue_script( 'jquery_migrate' );*/
    }
}
add_action('wp_enqueue_scripts', 'include_jquery_cdn_loader');

/*function vaild_table_tinymce($in) {
    $in['valid_children'] = '+body[table|tbody|th|td|tr]';
    return $in;
}
add_filter('tiny_mce_before_init', 'vaild_table_tinymce' );*/

function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    /*add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );*/
}
add_action( 'init', 'disable_emojis' );

function pagination($pages = '', $range = 2) {
    $showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages) {
            $pages = 1;
        }
    }

    if(1 != $pages) {
        echo "<div class=\"pager\">\n";
        echo "<ul>\n";
            if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class=\"prev\"><a href='".get_pagenum_link(1)."'>&laquo; Latest</a></li>";
            if($paged > 1 && $showitems < $pages) echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>&lt;</a></li>";

            for ($i=1; $i <= $pages; $i++) {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                    echo ($paged == $i)? "<li class=\"active\"><span>".$i."</span>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
                }
            }
            if ($paged < $pages && $showitems < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">&gt;</a>";
            if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
        echo "</ul>\n";
        echo "</div>\n";
    }
}

?>