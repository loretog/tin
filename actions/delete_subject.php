<?php  
	$subjectid = $_GET[ 'subject_id' ];  
	
	if($DB->query( "DELETE FROM subject WHERE subject_id = $subjectid" )) {
		set_message( "Subject successfully deleted.", "success" );
	} else {
		set_message( "Failed to delete record. " . $DB->error, "danger" );
	}
	header( "Location: " . SITE_URL . "/?page=subject" ); 
	exit;