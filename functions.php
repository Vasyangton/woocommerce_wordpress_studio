<?php

/*
Подключение настройки темы
*/
require get_template_directory() . '/inc/theme-settings.php';
/*
Подключение виджетов
*/
require get_template_directory() . '/inc/widgets-areas.php';
/*
Подключение стилей и скриптов
*/
require get_template_directory() . '/inc/enque-style.php';

/**
 * makeup-tattoo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package makeup-tattoo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
	require get_template_directory() . '/woocommerce/inc/wc-functions-remove.php';
	require get_template_directory() . '/woocommerce/inc/wc-functions.php';
}


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( ABSPATH . '/inc/carbon-fileds/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}


add_action( 'carbon_fileds_register_fileds', 'ast_register_custom_fileds' );
function ast_register_custom_fileds() {
    require get_template_directory() . '/inc/custom-fileds-options/metabox.php';
	require get_template_directory() . '/inc/custom-fileds-options/theme-options.php';
}
