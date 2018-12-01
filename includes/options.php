<?php

defined('ABSPATH') or die( "Bye bye" );

/*
 * New admin menu.
 */
 
// admin_menu hook executes btmce_menu_administrator function.
add_action( 'admin_menu', 'btmce_menu_administrator' );
 
// Top level plugin menu.
function btmce_menu_administrator()
{
	add_menu_page(BTMCE_ROUTE,BTMCE_NAME,'manage_options',BTMCE_ROUTE . '/admin/configuration.php'); //Creates menu.
    add_options_page(BTMCE_ROUTE,BTMCE_NAME, 'manage_options', 'btmce', 'btmce_options'); //Creates options page.
}
 ?>
