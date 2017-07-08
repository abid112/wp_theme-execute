<?php get_header(); ?>

<?php
 $args = array(
'posts_per_page'   => -1,
'post_type'        => 'bddata',
'post_status'      => 'publish',
// 'suppress_filters' => true
);
$posts_array = get_posts( $args );

// The Query
$query1 = new WP_Query( $args );

if ( $query1->have_posts() ) {
	// The Loop
	while ( $query1->have_posts() ) {
		$query1->the_post();
		echo '<li>' . get_the_title() . '</li>';
	}
	
	/* Restore original Post Data 
	 * NB: Because we are using new WP_Query we aren't stomping on the 
	 * original $wp_query and it does not need to be reset with 
	 * wp_reset_query(). We just need to set the post data back up with
	 * wp_reset_postdata().
	 */
	wp_reset_postdata();
}


?>
        


        




<?php get_footer(); ?>
