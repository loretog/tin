<?php

$course_name = $_POST[ 'course_name' ];
$course_description = $_POST[ 'course_description' ];
$dept_id = $_POST[ 'dept_id' ];


$DB->query( "INSERT INTO course ( course_name, course_description, dept_id  ) VALUES(  '$course_name', '$course_description','$dept_id' )" );

header( "Location: " . SITE_URL . "/?page=course" );