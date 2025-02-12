<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package Aut-O_Mat
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

/**
 * Enqueue styles and scripts for Aut-O-Mat Home template
 */
function automat_enqueue_assets() {
    if (is_page_template('home.php')) { // Ensure template filename is correct
        wp_enqueue_style(
            'automat-styles',
            get_stylesheet_directory_uri() . '/assets/css/home.css',
            array(),
            time() // Bypass cache by using timestamp in development
        );

        wp_enqueue_script(
            'automat-scripts',
            get_stylesheet_directory_uri() . '/assets/js/home.js',
            array('jquery'),
            time(), // Bypass cache
            true
        );

        // Debugging: Check if function runs
        error_log('Aut-O-Mat assets loaded.');
    }
}
add_action('wp_enqueue_scripts', 'automat_enqueue_assets');


// general pages
function enqueue_general_assets() {
    if (is_page_template('general.php')) {
        // Use get_stylesheet_directory_uri() for child themes
        wp_enqueue_style('general-css', get_stylesheet_directory_uri() . '/assets/css/general.css', array(), '1.0.0');
        wp_enqueue_script('general-js', get_stylesheet_directory_uri() . '/assets/js/general.js', array('jquery'), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_general_assets');

// general pages
function enqueue_fragen_assets() {
    if (is_page_template('fragen.php')) {
        // Use get_stylesheet_directory_uri() for child themes
        wp_enqueue_style('general-css', get_stylesheet_directory_uri() . '/assets/css/fragen.css', array(), '1.0.0');
        wp_enqueue_script('general-js', get_stylesheet_directory_uri() . '/assets/js/fragen.js', array('jquery'), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_fragen_assets');
