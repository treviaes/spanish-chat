<?php
/*
Plugin Name: Chat Spanish
Plugin URI: https://trevia.es
Description: Put a chat on any page you want
Version: 0.1
Author: Jesus Lopez
Author URI: https://trevia.es
License: GPLv2
*/
add_shortcode( 'chatroom', 'chat_spanish_shortcode' );

function chat_spanish_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'user' => '', 'room' => '','width' => '','height' => ''
	), $atts ) );
	$output = '<iframe id="chatmaster" src="https://kiwiirc.com/client/irc.irc-hispano.org/?nick='.$user.'&amp;channels=#'.$room.'" frameborder="0" style="" height="'.$height.'" width="'.$width.'"></iframe>';
	return $output;
}

