<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_style( 'enviro_consol_main_nav', get_stylesheet_directory_uri() . '/css/enviro_consol_main_nav.css', array(), $css_version );

		wp_enqueue_style( 'enviro_component', get_stylesheet_directory_uri() . '/css/component.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );

		// custom scripts
		wp_enqueue_script( 'custom-main', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ) );

		// wp_enqueue_script( 'modernizr-custom-scripts', get_template_directory_uri() . '/js/modernizr-custom.js' );

		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        
        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}

// add latest JavaScript
add_action('wp_default_scripts', 'remove_jquery_migrate');

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
}

add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );


// add latest font awesome
add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );

function custom_load_font_awesome() {
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.8.1/css/all.css' );
}