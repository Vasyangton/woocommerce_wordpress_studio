<?php


/**
 * Enqueue scripts and styles.
 */
function makeup_tattoo_scripts() {
	wp_enqueue_style( 'makeup-tattoo-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'makeup-tattoo-style', 'rtl', 'replace' );

	wp_enqueue_script( 'makeup-tattoo-navigation', get_template_directory_uri() . '/../js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'makeup_tattoo_scripts' );