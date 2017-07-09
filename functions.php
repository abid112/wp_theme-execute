<?php


#--------------------------------For Post-------------------------------
function execute_theme_style() {
    wp_enqueue_style( 'mytheme-ie', get_template_directory_uri() . '/css/styles.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  }

add_action( 'wp_enqueue_scripts', 'execute_theme_style' );

add_theme_support('post-thumbnails');



set_post_thumbnail_size( 700, 300 );

#---------------------------------------------------------------------------



#------------------------For Custom Post----------------------
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'bddata',
    array(
      'labels' => array(
        'name' => __( 'cpt1s' ),
        'singular_name' => __( 'cpt1' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
#-----------------------------------------------------------------------


#---------------------------------For Widget Area-----------------------
function mysidebar(){
		register_sidebar(array(

			'name'=>'Sidebar',
			'id'=>'right_sidebar',
			'before_widget'=>' <div class="col-md-4">',
			'after_widget'=>'</div>',
			'before_title'=>'<h1>',
			'after_title'=>'</h1>',
			'description'=>'You can add Widget Here',
			));

	}

	add_action('widgets_init','mysidebar');
  #--------------------------------------------------------------------------




?>
