<?php

$subject_name = $_POST[ 'subject_name' ];
$subject_code = $_POST[ 'subject_code' ];
$subject_description = $_POST[ 'subject_description' ];
$subject_id = $_POST[ 'subject_id' ];


$DB->query( "UPDATE subject SET subject_name = '$subject_name', subject_code = '$subject_code', subject_description = '$subject_description' WHERE subject_id = $subject_id" );

header( "Location: " . SITE_URL . "/?page=subject" );
exit;