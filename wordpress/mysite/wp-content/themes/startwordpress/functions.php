<?php
function startwordpress_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

function register_menus() {
   register_nav_menus(
     array(
      'primary' => __( 'Primary Menu' ),
    )
  );
 }
 
 add_action( 'init', 'register_menus' );