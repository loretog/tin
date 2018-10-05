<?php

$course_name = $_POST[ 'course_name' ];
$course_description = $_POST[ 'course_description' ];
$course_id = $_POST[ 'course_id' ];



$DB->query( "UPDATE course SET course_name = '$course_name', course_description = '$course_description' WHERE course_id = $course_id" );

header( "Location: " . SITE_URL . "/?page=course" );
exit;