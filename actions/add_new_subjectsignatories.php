<?php

$user_id = $_POST[ 'user_id' ];
$sig_id = $_POST[ 'sig_id' ];
$usersubject_id = $_POST[ 'usersubject_id' ];
$date = $_POST[ 'date' ];
$status = $_POST[ 'status' ];

$DB->query ("INSERT INTO subjectsignatories ( user_id, sig_id, usersubject_id, date, status) VALUES(  '$user_id', '$sig_id', '$usersubject_id', '$date', '$status')");



if( $DB->query( $q ) ) {
	set_message( "subjectsignatories successfully added.", "success" );
} else {
	set_message( "Failed to add usersubject", "danger" );
}
/*echo "INSERT INTO usersubject ( user_id, subjectcourse_id, semester, school_year, title, revision_number, effective_date, document_code ) VALUES(  '$user_id', '$subjectcourse_id', '$semester', '$school_year', $title', '$revision_number', '$effective_date', '$document_code '";
	exit();*/
header( "Location: " . SITE_URL . "/?page=subjectsignatories" );
