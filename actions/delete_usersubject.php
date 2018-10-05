<?php  
	$usersubject_id = $_GET[ 'usersubject_id' ];  
	
	if( $DB->query( "SELECT * FROM user WHERE user_id = $user_id" )->num_rows ) {
		set_message( "user_id is being referenced to a certain user. Cannot be deleted.", "danger" );
	}else if ($DB->query( "SELECT * FROM subjectcourse WHERE subjectcourse_id = $subjectcourse_id" )->num_rows) {
		set_message( "Subject_Course is being referenced to a certain subject. Cannot be deleted.", "danger" );
	}
	 else {
		if($DB->query( "DELETE FROM usersubject WHERE usersubject_id = $usersubject_id" )) {
			set_message( "UserSubject successfully deleted.", "success", "success" );
		} else {
			set_message( "Failed to delete record. " . $DB->error, "danger" );
		}
	}
	
	header( "Location: " . SITE_URL . "/?page=usersubject" ); 
	exit;