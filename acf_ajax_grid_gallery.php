<?php
/**
 * Plugin Name: ACF Ajax Grid Gallery
 * Plugin URI: http://jegson.herokuapp.com
 * Description: An extension for Advance Custom Fields Pro which lets you add multiple grid gallery with lightbox and ajax loadmore setting.
 * Version: 1.0.0
 * Author: Jayson Garcia (Github - hallowichig0)
 * Author URI: http://jegson.herokuapp.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

define( 'AAGG__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'AAGG__PLUGIN_URL', plugin_dir_url( __FILE__ ) );

function acf_ajax_grid_gallery(){
    // acf custom fields
    require_once (AAGG__PLUGIN_DIR . '/inc/custom_fields.php');
    // shortcodes
    require_once (AAGG__PLUGIN_DIR . '/inc/shortcode.php');

}
add_action('init', 'acf_ajax_grid_gallery');

function acf_ajax_grid_gallery_enqueue() {

    // styles
    wp_enqueue_style( 'aagg-style', AAGG__PLUGIN_URL . 'acf_ajax_grid_gallery.css' );

}
add_action( 'wp_enqueue_scripts', 'acf_ajax_grid_gallery_enqueue' );