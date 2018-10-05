<?php

$school_year = $_POST[ 'school_year' ];
$semester = $_POST[ 'semester' ];
$year_level = $_POST[ 'year_level' ];
$subjectcourse_id = $_POST[ 'subjectcourse_id' ];



$DB->query( "UPDATE subjectcourse SET school_year = '$school_year', semester = '$semester', year_level = '$year_level' WHERE subjectcourse_id = $subjectcourse_id" );

header( "Location: " . SITE_URL . "/?page=subjectcourse" );
exit;