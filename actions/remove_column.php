<?php
	
	$column_id = $_POST[ 'column_id' ];
	if( $DB->query( "DELETE FROM columns WHERE columns_id = $column_id" ) ) {
		$DB->query( "DELETE FROM columns WHERE parent_id = $column_id" );
	} else {

	}
	exit;