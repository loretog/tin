<?php

$title = $_POST[ 'title' ];
$number = $_POST[ 'number' ];
$parts_id = $_POST[ 'parts_id' ];

//var_dump($_POST['column_name']);

//exit;


$DB->query( "UPDATE parts SET title = '$title', number = '$number' WHERE parts_id = $parts_id" );
$DB->query( "DELETE FROM columns WHERE part_id=$parts_id" );
foreach( $_POST['column_name'] as $column_name) {
	if( $column_name ) {				
		$DB->query( "INSERT INTO columns (part_id, title) VALUES( $parts_id, '$column_name' )" );
	}
}

header( "Location: " . SITE_URL . "/?page=parts" );
exit;