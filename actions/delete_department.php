<?php  
	$dept_id = $_GET[ 'dept_id' ];  
	//	$college_id = $_GET[ 'college_id' ]; 
	/*echo "DELETE FROM department WHERE dept_id = $dept_id";
	exit;*/
	if( $DB->query( "SELECT * FROM course WHERE dept_id = $dept_id" )->num_rows ) {
		set_message( "Department is being referenced to a certain course. Cannot be deleted.", "danger" );
	} else {
		if($DB->query( "DELETE FROM department WHERE dept_id = $dept_id" )) {
			set_message( "Department successfully deleted.", "success", "success" );
		} else {
			set_message( "Failed to delete record. " . $DB->error, "danger" );
		}
	}
	
	header( "Location: " . SITE_URL . "/?page=department" ); 
	exit;