<?php

use Gizburdt\Cuztom\Cuztom;

// Bootstrap

function register_cuztom_meta_box()
{
    // Content types
}
add_action( 'init', 'register_cuztom_meta_box' );

$box = register_cuztom_meta_box(
    'bddata',
    array('post', 'book'),
    array(
        'title'       => __('Data', 'cuztom'),  
        'description' => __('This a description', 'cuztom'),
        'fields'      => array(
            array(
                'id'    => '_data_example',
                'label' => 'Example',
                'type'  => 'text',
            )
        )
    )
);

// Run the plugin

