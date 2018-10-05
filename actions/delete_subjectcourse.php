<?php  
	$subjectcourse_id = $_GET[ 'subjectcourse_id' ];  
	//	$college_id = $_GET[ 'college_id' ]; 
	/*echo "DELETE FROM department WHERE dept_id = $dept_id";
	exit;*/
	if( $DB->query( "SELECT * FROM course WHERE subjectcourse_id = $subjectcourse_id" )->num_rows ) {
		set_message( "Subject_Course is being referenced to a certain course. Cannot be deleted.", "danger" );
	}else if ($DB->query( "SELECT * FROM subject WHERE subjectcourse_id = $subjectcourse_id" )->num_rows) {
		set_message( "Subject_Course is being referenced to a certain subject. Cannot be deleted.", "danger" );
	}
	 else {
		if($DB->query( "DELETE FROM SubjectCourse WHERE subjectcourse_id = $subjectcourse_id" )) {
			set_message( "SubjectCourse successfully deleted.", "success", "success" );
		} else {
			set_message( "Failed to delete record. " . $DB->error, "danger" );
		}
	}
	
	header( "Location: " . SITE_URL . "/?page=subjectcourse" ); 
	exit;