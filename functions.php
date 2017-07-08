<?php 

function execute_theme_style() {
    wp_enqueue_style( 'mytheme-ie', get_template_directory_uri() . '/css/styles.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  }
 
add_action( 'wp_enqueue_scripts', 'execute_theme_style' );

add_theme_support('post-thumbnails');



set_post_thumbnail_size( 700, 300 ); 

?>