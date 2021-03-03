<?php
/*
Plugin Name: VI: Components Bootstrap 4
Plugin URI: http://neathawk.com
Description: Just include the Bootstrap Components, on the public facing side of the website, nothing more. NOTE: Bootstrap requires jQuery.
Version: 9.3.210302
Author: Joseph Neathawk
Author URI: http://Neathawk.com
License: GNU General Public License v2 or later
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class vi_components_bootstrap_4
{
    /*--------------------------------------------------------------
    >>> TABLE OF CONTENTS:
    ----------------------------------------------------------------
    # Instructions
    # TODO
    # Attributes
    # Constructive Functions
    # Reusable Functions
    # Shortcode Functions (are plugin territory)
    --------------------------------------------------------------*/


    /*--------------------------------------------------------------
    # TODO
    --------------------------------------------------------------*/

    //

    /*--------------------------------------------------------------
    # Attributes
    --------------------------------------------------------------*/
    private static $error_report = false;

    /*--------------------------------------------------------------
    # Constructive Functions
    --------------------------------------------------------------*/
	/**
	 * ENQUEUE SCRIPTS AND STYLES
	 *
	 * wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' )
	 * wp_enqueue_script( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
	 *
	 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/#stylesheets
	 * @link https://getbootstrap.com/docs/4.5/getting-started/download/
	 * @link https://www.bootstrapcdn.com/
	 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
	 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
	 * @version 9.3.210302
	 * @since 9.1.191204
	 */
	public static function enqueue_scripts() {
	    //style for the plugin
	    wp_enqueue_style( 'vi-bc-css', plugins_url( '/style.css', __FILE__ ), NULL , NULL , 'all' );
        //javascript for the plugin
	    //wp_enqueue_script( 'vi-bc-js', plugins_url( '/common.js', __FILE__ ), array('jquery') , NULL , true );

	    //bootstrap components
	    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2' );

	    wp_enqueue_script( 'popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), '1.16.1', true );
	    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true );
	}


    /*--------------------------------------------------------------
    # Reusable Functions
    --------------------------------------------------------------*/



    /*--------------------------------------------------------------
    # Shortcode Functions (are plugin territory)
    --------------------------------------------------------------*/


}



//enqueue scripts
add_action( 'wp_enqueue_scripts', Array( 'vi_components_bootstrap_4', 'enqueue_scripts' ) );

