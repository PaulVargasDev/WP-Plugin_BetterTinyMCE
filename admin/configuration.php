<?php

defined('ABSPATH') or die( "Bye bye" );

//Comprueba que tienes permisos para acceder a esta pagina
if (! current_user_can ('manage_options')) wp_die (__ ('Access denied.'));
?>
	<div class="wrap">
		<h2><?php _e( 'BetterTinyMCE', 'betterTinyMCE' ) ?></h2>
		Welcome! This plugin will add a font family list button, a font size list button and an underline button to your usual TinyMCE.
		This is a free plugin for you to enjoy!
	</div>
<?php
 ?>
