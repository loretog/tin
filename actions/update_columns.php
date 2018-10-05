<?php

$title = $_POST[ 'title' ];
$columns_id = $_POST[ 'columns_id' ];


$DB->query( "UPDATE columns SET title = '$title' WHERE columns_id = $columns_id" );

header( "Location: " . SITE_URL . "/?page=columns" );
exit;