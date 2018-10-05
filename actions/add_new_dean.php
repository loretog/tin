<?php
$college_name = $_POST[ 'college_name' ];
$dept_name = $_POST[ 'dept_id' ];
$course_name = $_POST[ 'course_name' ];

//$password =  md5($_POST[ 'password' ] );
//$idno = $_POST[ 'idno' ];
//$position = $_POST[ 'position' ];
$DB->query( "INSERT INTO college ( college_name ) VALUES('$college_name' )" )
$DB->query( "INSERT INTO department ( dept_name ) VALUES('$dept_id' )" )
$DB->query( "INSERT INTO course (course_name ) VALUES('$course_id' )" )