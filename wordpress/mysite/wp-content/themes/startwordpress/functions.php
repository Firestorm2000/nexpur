<?php
function startwordpress_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );