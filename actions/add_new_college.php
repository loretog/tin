<?php

$college_name = $_POST[ 'college_name' ];


$DB->query( "INSERT INTO college ( college_name ) VALUES(  '$college_name' )" );

header( "Location: " . SITE_URL . "/?page=college" );
