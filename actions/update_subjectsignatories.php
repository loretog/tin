<?php

$user_id = $_POST[ 'user_id' ];
$sig_id = $_POST[ 'sig_id' ];
$usersubject_id = $_POST[ 'usersubject_id' ];
$date= $_POST[ 'date' ];
$status= $_POST[ 'status' ];
$ss_id = $_POST[ 'ss_id' ];




$DB->query( "UPDATE subjectsignatories SET user_id = '$user_id', sig_id = '$sig_id', usersubject_id = '$usersubject_id', date = '$date' ,status = '$status' WHERE ss_id = $ss_id" );

header( "Location: " . SITE_URL . "/?page=subjectsignatories" );
exit;