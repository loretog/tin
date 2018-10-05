<?php

$username = $_POST[ 'username' ];
$password = md5( $_POST[ 'password' ] );
$idno = $_POST[ 'idno' ];
$fname = $_POST[ 'fname' ];
$mname = $_POST[ 'mname' ];
$lname = $_POST[ 'lname' ];
$utype = $_POST[ 'utype' ];





$DB->query( "INSERT INTO user ( username, password, idno, fname, mname, lname, utype) VALUES(  '$username', '$password', '$idno', '$fname', '$mname', '$lname', '$utype')" );

header( "Location: " . SITE_URL . "/?page=users" );
