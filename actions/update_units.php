<?php

$units_id = $_POST[ 'units_id' ];
$usersubject_id = $_POST['usersubject_id'];
$title = $_POST[ 'title' ];

$DB->query( "UPDATE units SET units_id = '$units_id', usersubject_id = '$usersubject_id', title = '$title' WHERE units_id = $units_id" );

// echo "UPDATE units SET units_id = '$units_id', usersubject_id = '$usersubject_id', title = '$title' WHERE units_id = $units_id";
// exit;


header( "Location: " . SITE_URL . "/?page=units" );
exit;