<?php

require_once('wp-bootstrap-navwalker.php');

function iskatheme_content( $content ) {

	return $content;
}
add_filter( 'the_content', 'iskatheme_content' );


function iskatheme_setup() {
	load_theme_textdomain('iskatheme');
	
	add_theme_support('title-tag');
	
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(700, 450);
	
	add_theme_support('html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption'));
	
	add_theme_support('post-formats', array(
	'aside',
	'image',
	'video',
	'gallery'
	));
		
	register_nav_menu('primary', 'Primary menu');
}

add_action('after_setup_theme', 'iskatheme_setup');


function iskatheme_scripts() {
	wp_enqueue_style('style-css', get_stylesheet_uri());
	
	wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.3.1.slim.min.js');
	
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js');
	
}

add_action('wp_enqueue_scripts', 'iskatheme_scripts');
?>
