<?php

	$column_id = $_POST[ 'column_id' ];
	$title = $_POST[ 'title' ];

	if( $DB->query( "UPDATE columns SET title='$title' where columns_id=$column_id" ) ) {
		echo $title;
	}

	exit;
