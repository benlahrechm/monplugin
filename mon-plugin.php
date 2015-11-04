<?php

/*
Plugin Name: Mon Plugin
Description: Mon 1er plugin
Version: 0.1
*/


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_filter( 'the_content', 'ma_fonction' );
function ma_fonction( $content ){
	
	return str_replace("test", "nimp", $content );
	
}