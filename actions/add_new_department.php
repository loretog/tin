<?php
$college_name = $_POST[ 'college_name' ];
$college_id = $_POST[ 'college_id' ];
$dept_name = $_POST[ 'dept_name' ];
$dept_id = $_POST[ 'dept_id' ];
$course_name = $_POST[ 'course_name' ];
$course_id = $_POST[ 'course_id' ];

//$password =  md5($_POST[ 'password' ] );
//$idno = $_POST[ 'idno' ];
//$position = $_POST[ 'position' ];
$DB->query( "INSERT INTO college ( college_name, college_id, dept_name, dept_id,course_name, course_id ) VALUES('$college_name', '$college_id', '$dept_name', '$dept_id', '$course_name', '$course_id' )" )
