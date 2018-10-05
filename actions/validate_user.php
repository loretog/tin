<?php
$UserName = $_POST[ 'username' ];
$password =  md5( $_POST[ 'password' ] );
$res = $DB->query( "SELECT * FROM user WHERE UserName = '$UserName' AND password = '$password'" );

if( $res && $res->num_rows ) {
$users = $res->fetch_object();
$_SESSION[ AUTH_ID ] = $users->user_id;
$_SESSION[ AUTH_NAME ] = $users->UserName;
$_SESSION[ AUTH_TYPE ] = $users->utype;

header( "Location: " . SITE_URL . "/" );
} else {
header( "Location: " . SITE_URL . "/?page=login&invalid=1" );
}