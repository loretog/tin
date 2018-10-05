<?php  
	$units_id = $_GET[ 'units_id' ];  
	/*echo "DELETE FROM part_content WHERE pc_id = $pc_id";
	exit;*/
	if($DB->query( "DELETE FROM units WHERE units_id = $units_id" ) ) {
		set_message( "Units successfully deleted.", "success" );
	}else if($DB->query( "DELETE FROM usersubject  WHERE usersubject_id = $usersubject_id" ) ) {
		set_message( "User Subject successfully deleted.", "success" );
	} else {
		set_message( "Failed to delete record. " . $DB->error, "danger" );
	}
	header( "Location: " . SITE_URL . "/?page=units" ); 
	exit;