<?php


$pc_id = $_POST[ 'pc_id' ];
$usersubject_id = $_POST['usersubject_id'];
$parts_id = $_POST['parts_id'];
$content = $_POST[ 'content' ];

$DB->query( "UPDATE part_content SET pc_id = '$pc_id', usersubject_id = '$usersubject_id', parts_id = '$parts_id',content = '$content' WHERE pc_id = $pc_id" );

header( "Location: " . SITE_URL . "/?page=partcontent" );
exit;