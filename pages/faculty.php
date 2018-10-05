<?php element( 'header' ); ?>

<?php

$semester = isset( $_GET[ 'semester' ] ) ? $_GET[ 'semester' ] : '';
$sy = isset( $_GET[ 'school_year' ] ) ? $_GET[ 'school_year' ] : '';

if( $semester && $sy ) :
	?>

<?php 
	$q = "SELECT  us.usersubject_id, us.school_year, us.semester, s.subject_name FROM user AS u LEFT JOIN usersubject AS us ON us.user_id = u.user_id LEFT JOIN subjectcourse AS sc ON sc.subjectcourse_id = us.subjectcourse_id LEFT JOIN subject AS s ON s.subject_id = sc.subject_id WHERE us.user_id = {$_SESSION[ AUTH_ID ]} AND us.school_year='$sy' AND us.semester='$semester'";
	//echo $q;
	$user = $DB->query( $q );
 ?>

<table class="table table-bordered">
<tr>


<th>Subject</th>
<th>School Year</th>
<th>Semester</th>



<th></th>
</tr>
<?php if( $user->num_rows ) { ?>
<?php while( $users = $user->fetch_object() ) { ?>
<tr>
<td>
	<a href="<?php echo SITE_URL ?>/?page=partcontent&usersubject_id=<?php echo $users->usersubject_id ?>">
		<?php echo $users->subject_name ?></a>
</td>
<td>	
	<?php echo $users->school_year ?>
</td>
<td><?php echo $users->semester ?></td>

</tr>

</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td colspan="4">No current record.</td>
</tr>
<?php } ?>
</table>

<?php
else :
?>

<?php 
	$user = $DB->query( "SELECT  DISTINCT(us.school_year), us.semester FROM user AS u LEFT JOIN usersubject AS us ON us.user_id = u.user_id WHERE us.user_id = {$_SESSION[ AUTH_ID ]} " );
 ?>

<table class="table table-bordered">
<tr>


<th>School Year</th>
<th>Semester</th>



<th></th>
</tr>
<?php if( $user->num_rows ) { ?>
<?php while( $users = $user->fetch_object() ) { ?>
<tr>

<td>
	<a href="<?php echo SITE_URL ?>/?page=faculty&school_year=<?php echo $users->school_year ?>&semester=<?php echo $users->semester ?>">
	<?php echo $users->school_year ?></a>
</td>
<td><?php echo $users->semester ?></td>
</tr>

</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td colspan="4">No current record.</td>
</tr>
<?php } ?>
</table>

<?php endif; ?>

<?php element( 'footer' ); ?>