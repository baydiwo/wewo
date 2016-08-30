<?php

/*
Plugin Name: My Admin Theme
Plugin URI: http://example.com/my-crazy-admin-theme
Description: My WordPress Admin Theme - Upload and Activate.
Author: Ms. WordPress
Version: 1.0
Author URI: http://example.com
*/

function my_admin_theme_style() {
    wp_enqueue_style('my-admin-theme', plugins_url('wp-admin.css', __FILE__));
    wp_enqueue_script( 'my-admin-script', plugins_url('wp-admin.js', __FILE__) , array( 'jquery' ), '', true );
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

?>
