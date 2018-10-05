<?php  
	$pc_id = $_GET[ 'pc_id' ];  
	/*echo "DELETE FROM part_content WHERE pc_id = $pc_id";
	exit;*/
	if($DB->query( "DELETE FROM part_content WHERE pc_id = $pc_id" ) ) {
		set_message( "Part Content successfully deleted.", "success" );
	}else if($DB->query( "DELETE FROM usersubject  WHERE usersubject_id = $usersubject_id" ) ) {
		set_message( "User Subject successfully deleted.", "success" );
	}else if($DB->query( "DELETE FROM part  WHERE parts_id = $parts_id" ) ) {
		set_message( "Parts successfully deleted.", "success" );
	} else {
		set_message( "Failed to delete record. " . $DB->error, "danger" );
	}
	header( "Location: " . SITE_URL . "/?page=partcontent" ); 
	exit;