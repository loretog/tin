<?php


$designation = $_POST[ 'designation' ];
$position = $_POST[ 'position' ];
$sig_id = $_POST[ 'sig_id' ];


$DB->query( "UPDATE signatories SET designation = '$designation', position = '$position' WHERE sig_id = $sig_id" );

header( "Location: " . SITE_URL . "/?page=signatories" );
exit;