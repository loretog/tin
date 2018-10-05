<?php  
	$sig_id = $_GET[ 'sig_id' ];  
	
	if($DB->query( "DELETE FROM signatories WHERE sig_id = $sig_id" )) {
		set_message( "Signatories successfully deleted.", "success" );
	} else {
		set_message( "Failed to delete record. " . $DB->error, "danger" );
	}
	header( "Location: " . SITE_URL . "/?page=signatories" ); 
	exit;