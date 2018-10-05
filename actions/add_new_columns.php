<?php


$title = $_POST[ 'title' ];


$DB->query( "INSERT INTO columns ( title ) VALUES(  '$title')" );

header( "Location: " . SITE_URL . "/?page=columns" );