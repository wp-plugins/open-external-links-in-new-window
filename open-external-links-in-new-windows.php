<?php
/*
Plugin Name: Open External Links In New Windows
Plugin URI: http://www.irydian.com/shop/wordpress/plugins/open-external-links-in-new-windows/
Description: Opens links to external websites in new windows.
Author: Keef
Version: 1.0.0 

This software is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
function add_oelinw() {
wp_enqueue_script('oelinw', plugins_url( 'oelinw.js' , __FILE__ ),'','1.0.0',true);
}
add_action('wp_enqueue_scripts', 'add_oelinw');
function oelinw_options()  {
	require_once('oelinw_options.php');
}
function oelinw_init() {
   add_options_page('Open External Links In New Windows', 'Open External Links In New Windows', 'manage_options','open-external-links-in-new-windows','oelinw_options');
}
add_action('admin_menu', 'oelinw_init');
?>

