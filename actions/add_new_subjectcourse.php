<?php


$course_id = $_POST[ 'course_id' ];
$subject_id = $_POST[ 'subject_id' ];
$school_year = $_POST[ 'school_year' ];
$year_level = $_POST[ 'year_level' ];
$semester = $_POST[ 'semester' ];

if( $DB->query( "INSERT INTO subjectcourse ( course_id, subject_id, school_year, year_level, semester ) VALUES(  '$course_id', '$subject_id', '$school_year', '$year_level', '$semester')" ) ) {
	set_message( "subjectcourse successfully added.", "success" );
} else {
	set_message( "Failed to add subjectcourses", "danger" );
}

header( "Location: " . SITE_URL . "/?page=subjectcourse" );

