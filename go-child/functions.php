<?php 

// enqueue styles for child theme
function enqueue_styles() {
	
	// enqueue parent styles
	// https://codex.wordpress.org/Function_Reference/wp_enqueue_style
	// wp_enqueue_style( $handle, $src, $deps, $ver, $media )
	// wp_enqueue_style('parent-style', get_parent_theme_file_uri() .'/style.css');
	
	// enqueue child styles
	wp_enqueue_style('child-go-style', get_theme_file_uri() .'/style.css', array(), wp_get_theme()->get('Version'));
	
}
add_action('wp_enqueue_scripts', 'enqueue_styles', 11);
