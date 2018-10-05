<?php

$semester = $_POST[ 'semester' ];
$school_year = $_POST[ 'school_year' ];
$title = $_POST[ 'title' ];
$revision_number = $_POST[ 'revision_number' ];
$effective_date = $_POST[ 'effective_date' ];
$document_code = $_POST[ 'document_code' ];
$usersubject_id = $_POST[ 'usersubject_id' ];





$DB->query( "UPDATE usersubject SET semester = '$semester', school_year = '$school_year', title = '$title', revision_number = '$revision_number', effective_date = '$effective_date', document_code = '$document_code' WHERE usersubject_id = $usersubject_id" );

header( "Location: " . SITE_URL . "/?page=usersubject" );
exit;