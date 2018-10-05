<?php

$college_name = $_POST[ 'college_name' ];
$college_id = $_POST[ 'college_id' ];




$DB->query( "UPDATE college SET college_name = '$college_name' WHERE college_id = $college_id" );

header( "Location: " . SITE_URL . "/?page=college" );
exit;