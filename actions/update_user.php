<?php
$fname = $_POST[ 'fname' ];
$mname = $_POST[ 'mname' ];
$lname = $_POST[ 'lname' ];
$userid = $_POST[ 'userid' ];
$username = $_POST[ 'username' ];
$idno = $_POST[ 'idno' ];
$password = md5($_POST[ 'password' ]);

$DB->query( "UPDATE user SET fname = '$fname', mname = '$mname', lname = '$lname', UserName = '$username',idno = '$idno', password = '$password' WHERE user_id = $userid" );

header( "Location: " . SITE_URL . "/?page=users" );
exit;