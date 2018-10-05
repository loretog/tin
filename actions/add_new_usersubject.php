<?php

$user_id = $_POST[ 'user_id' ];
$subjectcourse_id = $_POST[ 'subjectcourse_id' ];
$semester = $_POST[ 'semester' ];
$school_year = $_POST[ 'school_year' ];
$title = $_POST[ 'title' ];
$revision_number = $_POST[ 'revision_number' ];
$effective_date = $_POST[ 'effective_date' ];
$document_code = $_POST[ 'document_code' ];
$q = "INSERT INTO usersubject ( user_id, subjectcourse_id, semester, school_year, title, revision_number, effective_date, document_code ) VALUES(  $user_id, $subjectcourse_id, '$semester', '$school_year', '$title', '$revision_number', '$effective_date', '$document_code '  )";
//echo $q; exit;
if( $DB->query( $q ) ) {
	set_message( "usersubject successfully added.", "success" );
} else {
	set_message( "Failed to add usersubject", "danger" );
}
/*echo "INSERT INTO usersubject ( user_id, subjectcourse_id, semester, school_year, title, revision_number, effective_date, document_code ) VALUES(  '$user_id', '$subjectcourse_id', '$semester', '$school_year', $title', '$revision_number', '$effective_date', '$document_code '";
	exit();*/
header( "Location: " . SITE_URL . "/?page=usersubject" );

