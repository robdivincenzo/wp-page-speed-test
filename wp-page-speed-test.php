<?php
/*
Plugin Name: WP Page Speed Test
Plugin URI: http://wordpress.org/plugins/wp-page-speed-test/
Description: This plugin allows you to see how long it took your WordPress page to execute from your server. This is helpful for optimizing your WordPress installation, caching, your web server, and your server-side scripting code like your PHP and database queries. This does not test client-side code like your JavaScript or jQuery.
Version: 1.0.0
Author: Rob DiVincenzo <rob.divincenzo@gmail.com>
Author URI: ignitedweb.com
*/
add_action('init', 'divi_pst_start_timer');

function divi_pst_start_timer(){
	timer_start();
}

add_action('shutdown', 'divi_pst_end_timer');

function divi_pst_end_timer() {
	echo '<!-- Page executed in '.timer_stop( 0 ).'s -->';
}
