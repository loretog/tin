<?php

$dept_name = $_POST[ 'dept_name' ];
$dept_id = $_POST[ 'dept_id' ];



$DB->query( "UPDATE department SET dept_name = '$dept_name' WHERE dept_id = $dept_id" );

header( "Location: " . SITE_URL . "/?page=department" );
exit;