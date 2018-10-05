<?php  
	$userid = $_GET[ 'userid' ];  
	$DB->query( "DELETE FROM user WHERE user_id = $userid" );  
	header( "Location: " . SITE_URL . "/?page=users" ); 
	exit;