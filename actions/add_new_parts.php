<?php


$title = $_POST[ 'title' ];
$number = $_POST[ 'number' ];





$DB->query( "INSERT INTO parts ( title, number  ) VALUES(  '$title', '$number' )" );

header( "Location: " . SITE_URL . "/?page=parts" );