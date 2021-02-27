<?php
/*
Plugin Name: VI: Components Bootstrap 4
Plugin URI: http://neathawk.us
Description: Just include the Bootstrap Components, on the public facing side of the website, nothing more. NOTE: Bootstrap requires jQuery.
Version: 9.2.200903
Author: Joseph Neathawk
Author URI: http://Neathawk.com
License: GNU General Public License v2 or later
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


/**
 * Add Bootstrap components
 * wp_enqueue_script( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
 *
 * @link https://getbootstrap.com/docs/4.5/getting-started/download/
 * @link https://www.bootstrapcdn.com/
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @version 9.2.200903
 * @since 9.1.191204
 */
if ( ! function_exists( 'vi_load_bootstrap_components' ) ) :
function vi_load_bootstrap_components() {
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2' );

    wp_enqueue_script( 'popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), '1.16.1', true );
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true );
}
//prioritize above default so that it is more likely to be overridden naturally in the theme
add_action( 'wp_enqueue_scripts', 'vi_load_bootstrap_components', 5 );
endif;