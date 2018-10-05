<?php


$username = $_POST[ 'username' ];
$password = md5( $_POST[ 'password' ] );

$DB->query( "INSERT INTO user (username, password) VALUES( '$username', '$password' )" );	