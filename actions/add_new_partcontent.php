<?php

$usersubject_id = $_POST[ 'usersubject_id' ];
$parts_id = $_POST[ 'parts_id'];
$content = $_POST[ 'content' ];


$DB->query( "INSERT INTO part_content ( usersubject_id, parts_id, content ) VALUES(  '$usersubject_id', '$parts_id','$content' )" );

header( "Location: " . SITE_URL . "/?page=partcontent" );