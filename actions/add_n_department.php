<?php

$dept_name = $_POST[ 'dept_name' ];
$college_id = $_POST[ 'college_id' ];


if( $DB->query( "INSERT INTO department ( dept_name, college_id ) VALUES(  '$dept_name', '$college_id')" ) ) {
	set_message( "Department successfully added.", "success" );
} else {
	set_message( "Failed to add Department", "danger" );
}

header( "Location: " . SITE_URL . "/?page=department" );



