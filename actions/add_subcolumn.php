<?php

	$parent_id = $_POST[ 'parent_id' ];
	$part_id = $_POST[ 'part_id' ];
	$title = $_POST[ 'title' ];

	if( $DB->query( "INSERT INTO columns ( parent_id, part_id, title ) VALUES( $parent_id, $part_id, '$title' )" ) ) {
		echo "Subcolumn added";
	} else {
		echo "Failed to add subcolumn. " . $DB->error;
	}
	exit;