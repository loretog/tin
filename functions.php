<?php

if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' );

function element( $el ) {	
	include ROOT_DIR . "/elements/$el.php";
}

function set_message( $msg, $type ) {
	$_SESSION[ 'MESSAGE' ] = $msg; 
	$_SESSION[ 'MESSAGE_TYPE' ] = $type;
}

function show_message() {
	if( isset( $_SESSION[ 'MESSAGE' ]) && isset( $_SESSION[ 'MESSAGE_TYPE' ] ) ) {
		echo "<div class='alert alert-" . $_SESSION[ 'MESSAGE_TYPE' ] . "'>" . $_SESSION[ 'MESSAGE' ] . "</div>";	
		$_SESSION[ 'MESSAGE' ] = null;	
		$_SESSION[ 'MESSAGE_TYPE' ] = null;	
	}
}


/* ADD YOUR CUSTOM FUNCTIONS IN custom_functions.php */
require 'custom_functions.php';