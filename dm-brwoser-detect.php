<?php
/*
Plugin Name: DM Browser Detect
Plugin URI:  https://github.com/derekmorash/dm-browser-detect
Description: Display or hide content depending on selected browsers, using shortcodes
Version:     0.0.1
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
    return '<div class="dm-detect-hide" style="color:#ff69b4;"
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
    return '<div class="dm-detect-show" style="color:#ff69b4;"
      data-dm-detect-browsers="' . esc_attr($a['browsers']) . '">' .
      $content . '</div>';
}
add_shortcode( 'dmbrowserdetectshow', 'dm_browser_detect_show' );
