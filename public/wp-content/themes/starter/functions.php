<?php

function setup() {
	
    /* Manage <title> tag on pages */
    add_theme_support( 'title-tag' );
    
    /* Add thumbnails to posts */
    add_theme_support( 'post-thumbnails' );
    
    /* Switch default core markup for search form, comment form, and comments to output valid HTML5. */
	add_theme_support('html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
    
}

add_action( 'after_setup_theme', 'setup' );

/* Remove unnecessary junk from header */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

/* Add Google Analytics to footer*/

function add_google_analytics() {
	echo '<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>';
	echo '<script type="text/javascript">';
	echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
	echo 'pageTracker._trackPageview();';
	echo '</script>';
}

add_action('wp_footer', 'add_google_analytics');

/* Custom excerpt length */

function custom_excerpt_length($length) {
	return 20;
}

add_filter('excerpt_length', 'custom_excerpt_length');

/* Custom excerpt “continue” string */

function custom_excerpt_more($more) {
	return '...';
}

add_filter('excerpt_more', 'custom_excerpt_more');

/* Category ID in body and post class */

function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
		$classes [] = 'cat-' . $category->cat_ID . '-id';
		return $classes;
}

add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

/* */

function wpb_custom_new_menu() {
    register_nav_menus( array(
		'top'    => __( 'Top Menu', 'starter' ),
		'footer' => __( 'Footer Menu', 'starter' ),
	) );
}

add_action( 'init', 'wpb_custom_new_menu' );

add_filter('xmlrpc_enabled', '__return_false');

