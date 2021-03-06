<?php

/**
 * The functions php file for Childtwentythirteen
 */

function my_theme_enqueue_styles() {

    $parent_style = 'twentythirteen-style'; // This is 'twentythirteen-style' for the Twenty Thirteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function google_fonts() {
	$query_args = array(
		'family' => 'Merriweather:400,700|Open+Sans:400,700',
	);
	wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
            }
            
add_action('wp_enqueue_scripts', 'google_fonts');


?>