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
        'name' => __( 'Movies' ),
        'singular_name' => __( 'Movie' ),
        'add_new' => 'Add New',
                'add_new_item' => 'Add New Movie ',
                'edit' => 'Edit',
                'edit_item' => 'Edit Movie ',
                'new_item' => 'New Movie ',
                'view' => 'View',
                'view_item' => 'View Movie Info',
                'search_items' => 'Search Movie',
                'not_found' => 'No Movie Reviews found',
                'not_found_in_trash' => 'No Movie Reviews found in Trash',
                'parent' => 'Parent Movie Review'
        ),
        'public' => true,
        'has_archive' => true,
         'menu_position' => 15,
              'supports' => array( 'title', 'editor', 'comments', 'thumbnail' ),
              'taxonomies' => array( '' ),
              
              
      )
  );
}
#-----------------------------------------------------------------------


#---------------------------------FOR CUSTOM META BOX-----------------------------------
add_action( 'add_meta_boxes', 'cd_meta_box_add' );
function cd_meta_box_add()
{
    add_meta_box( 'my-meta-box-id', 'Movie Details', 'cd_meta_box_cb', 'bddata', 'normal', 'high' );
}


function cd_meta_box_cb()
{ 
    ?>
    <label for="my_meta_box_text">Duration:</label>
    <input type="text" name="my_meta_box_text" id="my_meta_box_text" />

    <br>

    <label for="my_meta_box_text">Genre:</label>
    <input type="text" name="my_meta_box_text" id="my_meta_box_text" />

    <br>

    <label for="my_meta_box_text">Release Year:</label>
    <input type="text" name="my_meta_box_text" id="my_meta_box_text" />

    <br>

    <label for="my_meta_box_text">IMDB Link:</label>
    <input type="text" name="my_meta_box_text" id="my_meta_box_text" />
    <?php    
}

   add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
     
    // now we can actually save the data
    $allowed = array( 
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
     
    // Make sure your data is set before trying to save it
    if( isset( $_POST['my_meta_box_text'] ) )
        update_post_meta( $post_id, 'my_meta_box_text', wp_kses( $_POST['my_meta_box_text'], $allowed ) );
         
    if( isset( $_POST['my_meta_box_select'] ) )
        update_post_meta( $post_id, 'my_meta_box_select', esc_attr( $_POST['my_meta_box_select'] ) );
         
    // This is purely my personal preference for saving check-boxes
    $chk = isset( $_POST['my_meta_box_check'] ) && $_POST['my_meta_box_select'] ? 'on' : 'off';
    update_post_meta( $post_id, 'my_meta_box_check', $chk );
}


#-----------------------------------------------------------------------


#---------------------------------For Widget Area-----------------------
function mysidebar(){
		register_sidebar(array(

			'name'=>'Sidebar',
			'id'=>'right_sidebar',
			'before_widget'=>' ',
			'after_widget'=>'',
			'before_title'=>'<h1>',
			'after_title'=>'</h1>',
			'description'=>'You can add Widget Here',
			));

	}

	add_action('widgets_init','mysidebar');


  function footersidebar(){
  		register_sidebar(array(

  			'name'=>'Footer Widget 1',
  			'id'=>'footer_sidebar1',
  			'before_widget'=>' ',
  			'after_widget'=>'',
  			'before_title'=>'<h1>',
  			'after_title'=>'</h1>',
  			'description'=>'You can add Widget Here',
  			));

  	}

  	add_action('widgets_init','footersidebar');


    function footersidebar2(){
        register_sidebar(array(

          'name'=>'Footer Widget 2',
          'id'=>'footer_sidebar2',
          'before_widget'=>' ',
          'after_widget'=>'',
          'before_title'=>'<h1>',
          'after_title'=>'</h1>',
          'description'=>'You can add Widget Here',
          ));

      }

      add_action('widgets_init','footersidebar2');


      function footersidebar3(){
          register_sidebar(array(

            'name'=>'Footer Widget 3',
            'id'=>'footer_sidebar3',
            'before_widget'=>' ',
            'after_widget'=>'',
            'before_title'=>'<h1>',
            'after_title'=>'</h1>',
            'description'=>'You can add Widget Here',
            ));

        }

        add_action('widgets_init','footersidebar3');
  #--------------------------------------------------------------------------




?>


