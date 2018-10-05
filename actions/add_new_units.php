<?php

$usersubject_id = $_POST[ 'usersubject_id' ];
$title = $_POST[ 'title' ];


$DB->query( "INSERT INTO units ( usersubject_id, title ) VALUES(  '$usersubject_id', '$title')" );

header( "Location: " . SITE_URL . "/?page=units" );