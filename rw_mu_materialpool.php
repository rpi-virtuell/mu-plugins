<?php

add_filter( 'option_active_plugins', 'disable_plugins' );
function disable_plugins($plugins){
	global $wp_query;

	if( strpos( $_SERVER[ 'REQUEST_URI' ], '/facettierte-suche/') !== FALSE && strpos( $_SERVER[ 'REQUEST_URI' ], 'mpembed=iframe') !== FALSE ) {
		$key = array_search( 'rw-multiinstanz-navigation/rw-multiinstanz-navigation.php' , $plugins );
		if ( false !== $key ) {
			unset( $plugins[$key] );
		}
	}

	return $plugins;
}
