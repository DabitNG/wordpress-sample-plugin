<?php
/*
Plugin Name: WP Sample plugin
Plugin URI:  http://link to your plugin homepage
Description: This plugin replaces words with your own choice of words.
Version:     1.0
Author:      DabitNG
Author URI:  http://link to your website
License:     GPL2 etc
License URI: https://link to your plugin license

Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
(Plugin Name) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
(Plugin Name) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with (Plugin Name). If not, see (http://link to your plugin license).
*/


/*Use this function to replace a single word*/
function sample_plugin_replace( $text ) {
	return str_replace( 'wordpress', 'WordPress', $text );
}

add_filter( 'the_content', 'wordpress_sample_plugin' );

function sample_plugin_header( $content ) {
	$content .= '<header class="header">This is the header</header>';
	return $content;
}

add_filter( 'the_content', 'sample_plugin_header' );

/*Use this function to add a note at the end of your content*/
function sample_plugin_footer( $content ) {
	$content .= '<footer class="footer">This is the footer</footer>';
	return $content;
}

add_filter( 'the_content', 'sample_plugin_footer' );

?>