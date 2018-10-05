<?php  
	$partsid = $_GET[ 'parts_id' ];  
	
	if($DB->query( "DELETE FROM parts WHERE parts_id = $partsid" )) {
		set_message( "Parts successfully deleted.", "success" );
	} else {
		set_message( "Failed to delete record. " . $DB->error, "danger" );
	}
	header( "Location: " . SITE_URL . "/?page=parts" ); 
	exit;