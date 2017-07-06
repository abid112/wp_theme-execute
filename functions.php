<?php
// print_r(get_template_directory_uri());
add_action( 'wp_enqueue_style', 'execute_enqueue_style' );

function execute_enqueue_style() {
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), $ver = false, $media = 'all');
	wp_enqueue_style('main-style', get_template_directory_uri(). '/css/style.css');
}

// function sportify_enqueue_script() {
//    wp_enqueue_script('bootstrap', SPORTIFY_CSS.'js/jquery-1.11.3.min.js', array(), $ver = false, $media = 'all');
//
// }
