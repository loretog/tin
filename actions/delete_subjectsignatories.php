<?php  
	$ss_id = $_GET[ 'ss_id' ];  
	
	if( $DB->query( "SELECT * FROM user WHERE user_id = $user_id" )->num_rows ) {
		set_message( "user_id is being referenced to a certain user. Cannot be deleted.", "danger" );
	}else if ($DB->query( "SELECT * FROM signatories WHERE sig_id = $sig_id" )->num_rows) {
		set_message( "sig_id is being referenced to a certain subject. Cannot be deleted.", "danger" );
	}else if ($DB->query( "SELECT * FROM usersubject WHERE usersubject_id = $usersubject_id" )->num_rows) {
		set_message( "usersubject_id is being referenced to a certain subject. Cannot be deleted.", "danger" );
	}
	 else {
		if($DB->query( "DELETE FROM subjectsignatories WHERE ss_id = $ss_id" )) {
			set_message( "signatories successfully deleted.", "success", "success" );
		} else {
			set_message( "Failed to delete record. " . $DB->error, "danger" );
		}
	}
	
	header( "Location: " . SITE_URL . "/?page=subjectsignatories" ); 
	exit;