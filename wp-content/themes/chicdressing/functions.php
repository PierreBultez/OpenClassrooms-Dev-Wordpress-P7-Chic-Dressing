<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

function dequeue_google_fonts() { 
    wp_dequeue_style( 'ashe-playfair-font' ); 
    wp_deregister_style( 'ashe-playfair-font' ); 
    wp_dequeue_style( 'ashe-opensans-font' ); 
    wp_deregister_style( 'ashe-opensans-font' ); 
    wp_dequeue_style( 'ashe-kalam-font' ); 
    wp_deregister_style( 'ashe-kalam-font' ); 
    wp_dequeue_style( 'ashe-rokkitt-font' ); 
    wp_deregister_style( 'ashe-rokkitt-font' ); 
    } 
    add_action( 'wp_enqueue_scripts', 'dequeue_google_fonts', 20 );

?>