<?php

	$column_id = $_POST[ 'column_id' ];

	if( $DB->query( "DELETE FROM columns WHERE columns_id=$column_id" ) ) {
		echo "ok";
	}

	exit;