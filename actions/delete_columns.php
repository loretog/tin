<?php  
	$columns_id = $_GET[ 'columns_id' ];  
	
	if($DB->query( "DELETE FROM columns WHERE columns_id = $columns_id" )) {
		set_message( "Columns successfully deleted.", "success" );
	} else {
		set_message( "Failed to delete record. " . $DB->error, "danger" );
	}
	header( "Location: " . SITE_URL . "/?page=columns" ); 
	exit;