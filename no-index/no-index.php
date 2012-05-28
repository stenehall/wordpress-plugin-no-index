<?php
/*
Plugin Name: No Index
Plugin URI: http://oe.is/no-index
Description: Make sure you never ever have noindex enabled when live. This warns you when you have.
Author: Johan Stenehall
Version: 0.1
Author URI: http://stenehall.se/
*/

function customize_menu()
{
	if ( ! is_admin() AND is_super_admin() AND is_admin_bar_showing())
	{
		ob_start();
		locate_template('header.php', true, false);
		$header = ob_get_clean();
		preg_match('#(<meta.*robots.*noindex.*/>)#', $header, $matches);

		if (sizeof($matches) > 1)
		{
			global $wp_admin_bar;

			echo "<style>#wp-admin-bar-root-default #wp-admin-bar-aaa-wpadminbar-no-index { background: #c00; color: #000; text-shadow: none; }
				#wp-admin-bar-root-default #wp-admin-bar-aaa-wpadminbar-no-index a { color: #000; text-shadow: none; }
				#wp-admin-bar-root-default #wp-admin-bar-aaa-wpadminbar-no-index a:hover { color: #fff; }</style>";

			$wp_admin_bar->add_menu(
				array(
			    	'id' => 'aaa-wpadminbar-no-index',
			    	'title' => 'No Index',
			    	'href' => '/wp-admin/options-privacy.php'
				)
			);
		}
	}
}
add_action("admin_bar_menu", "customize_menu", 90);