<?php
/*
Plugin Name: Better TinyMCE
Plugin URI: 
Description: Plugin that extends TinyMCE functionalities. It adds a font selector, a size selector and an underline button.
Version: 1.0
Author: Paul Vargas
Author URI: https://vargasdev.com
License: GPL2
*/

//Prevents execution of PHP code from the browser navbar.
defined('ABSPATH') or die( "Bye bye" );

//Constants
define('BTMCE_ROUTE',plugin_dir_path(__FILE__));
define('BTMCE_NAME','betterTinyMCE');

//External
include(BTMCE_ROUTE.'/includes/options.php');

//Font, size and underline.
 function btmce_new_buttons($buttons) 
 {	
	$buttons[] = 'fontselect';
	$buttons[] = 'fontsizeselect';
	$buttons[] = 'underline';
	return $buttons;
}
add_filter( 'mce_buttons_2','btmce_new_buttons');

 ?>
