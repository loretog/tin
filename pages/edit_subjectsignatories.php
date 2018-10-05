<?php element( 'header' ); ?>

<?php
 	$users = $DB->query( "SELECT * FROM user ORDER BY username ASC" );	
	$ss_id = $_GET[ 'ss_id' ];
	$subjectsignatories = $DB->query( "SELECT * FROM subjectsignatories WHERE ss_id = $ss_id " ); 
	$subjectsignatories = $subjectsignatories->fetch_object();
	$usersubject = $DB->query( "SELECT subjectcourse_id, school_year, semester FROM usersubject AS US LEFT JOIN subject AS S ON US.subjectcourse_id = S.subject_id LEFT JOIN course AS C ON US.subjectcourse_id = C.course_id " );
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_subjectsignatories">	
	<input type="hidden" class="form-control" name="ss_id" value="<?php echo $ss_id ?>">
	
		<label>Users</label>
		<select class="form-control" name="user_id">
			<?php while( $user = $users->fetch_object()) : ?>
			<option value="<?php echo $user->user_id ?>"><?php echo $user->UserName ?></option>
			<?php endwhile; ?>

		</select>
	<label>Signatories: </label>  
	<input type="text" class="form-control" name="sig_id" placeholder="signatories" value="<?php echo $subjectsignatories->sig_id ?>"><br>
	<label>User Subject: </label>  
	<input type="text" class="form-control" name="usersubject_id" placeholder="user subject" value="<?php echo $subjectsignatories->usersubject_id ?>"><br>
	<label>Date: </label>  
	<input type="datetime" class="form-control" name="date" placeholder="date" value="<?php echo $subjectsignatories->date?>"><br>
	<label>Status: </label>
	<select name="status" class="form-control" value="<?php echo $subjectsignatories->status?>">
		<option value="1">Approved</option>
		<option value="0">Not Approved</option>
	</select><br>
	
	
	<input type="submit" class="btn btn-primary" value=" Update Subject Signatories">
</div>
</form>

<?php element( 'footer' ); ?>