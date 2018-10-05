<?php  
	$collegeid = $_GET[ 'college_id' ];  
	
	if($DB->query( "DELETE FROM college WHERE college_id = $collegeid" )) {
		set_message( "College successfully deleted.", "success" );
	} else {
		set_message( "Failed to delete record. " . $DB->error, "danger" );
	}
	header( "Location: " . SITE_URL . "/?page=college" ); 
	exit;