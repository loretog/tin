<?php  
	$courseid = $_GET[ 'course_id' ];  
	
	if($DB->query( "DELETE FROM course WHERE course_id = $courseid" )) {
		set_message( "Course successfully deleted.", "success" );
	} else {
		set_message( "Failed to delete record. " . $DB->error, "danger" );
	}
	header( "Location: " . SITE_URL . "/?page=course" ); 
	exit;