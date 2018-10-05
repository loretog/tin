<?php

$designation = $_POST[ 'designation' ];
$position = $_POST[ 'position' ];




$DB->query( "INSERT INTO signatories (designation, position ) VALUES(  '$designation', '$position')" );

header( "Location: " . SITE_URL . "/?page=signatories" );