<?php


$subject_name = $_POST[ 'subject_name' ];
$subject_code = $_POST[ 'subject_code' ];
$subject_description = $_POST[ 'subject_description' ];




$DB->query( "INSERT INTO subject ( subject_name, subject_code, subject_description  ) VALUES(  '$subject_name', '$subject_code', '$subject_description' )" );

header( "Location: " . SITE_URL . "/?page=subject" );