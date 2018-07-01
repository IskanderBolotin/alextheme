<?php
function iskatheme_scripts() {
	wp_enqueue_style('style-css', get_stylesheet_uri());
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js');
	wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.3.1.slim.min.js');
}
add_action('wp_enqueue_scripts', 'iskatheme_scripts');
?>
