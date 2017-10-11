<?php
/*******************
 * Enqueue CSS & JS
 *******************/
if (!function_exists('wpmw_enqueue_style')) {
    function wpmw_enqueue_scripts()
    {
        // fundation stylesheet
        wp_register_style('wpmw_foundation_style', get_stylesheet_directory_uri() . '/assets/css/app.css');
        wp_enqueue_style('wpmw_foundation_style');
        // font awesome
        wp_register_style('font_awesome_style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('font_awesome_style');
        // jquery & foundation js
        wp_deregister_script( 'jquery' );
        wp_register_script('jquery', 'http://code.jquery.com/jquery-3.2.1.min.js', array(), '3.2.1', true);
        wp_register_script('foundation-js', get_stylesheet_directory_uri() . '/assets/js/foundation.min.js', array('jquery'), '6.4.3', true);
        wp_register_script('wpmw_foundation_script', get_stylesheet_directory_uri() . '/assets/js/app.js', array(), false, true);
        wp_enqueue_script('jquery');
        wp_enqueue_script('foundation-js');
        wp_enqueue_script('wpmw_foundation_script');
    }
}
add_action('wp_enqueue_scripts', 'wpmw_enqueue_scripts');