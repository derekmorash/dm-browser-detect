<?php
/*
Plugin Name: DM Browser Detect
Plugin URI:  https://github.com/derekmorash/dm-browser-detect
Description: Display or hide content depending on selected browsers, using shortcodes
Version:     1.0
Author:      Derek Morash
Author URI:  https://github.com/derekmorash
License:     GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Domain Path: /languages
Text Domain: dm-browser-detect
*/

// Shortcoode for hiding content
function dm_browser_detect_hide( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'browsers' => ''
        // ...etc
    ), $atts );

    // take the shortcode browsers attribute
    // and add it to a data attribute on the div wrapper
    return '<div class="dm-browser-detect-hide"
      data-dm-detect-browsers="' . esc_attr($a['browsers']) . '">' .
      $content . '</div>';
}
add_shortcode( 'dmbrowserdetecthide', 'dm_browser_detect_hide' );

// shortcode for showing content
function dm_browser_detect_show( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'browsers' => ''
        // ...etc
    ), $atts );

    // take the shortcode browsers attribute
    // and add it to a data attribute on the div wrapper
    return '<div class="dm-browser-detect-show"
      data-dm-detect-browsers="' . esc_attr($a['browsers']) . '">' .
      $content . '</div>';
}
add_shortcode( 'dmbrowserdetectshow', 'dm_browser_detect_show' );

//add css and js
function dm_browser_detect_assets() {
    wp_register_script('dm-browser-detect-script', plugins_url( 'dm-browser-detect.js', __FILE__ ), array(), null, true);
    wp_enqueue_script('dm-browser-detect-script');

    wp_register_style( 'dm-browser-detect-style', plugins_url( 'dm-browser-detect.css', __FILE__) );
    wp_enqueue_style( 'dm-browser-detect-style' );
}
add_action('wp_enqueue_scripts', 'dm_browser_detect_assets');
