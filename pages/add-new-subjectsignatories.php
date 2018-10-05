<?php element( 'header' ); ?>
<h1>New Subject Signatories</h1>

<?php
	$users = $DB->query( "SELECT * FROM user ORDER BY username ASC" );
	$signatories = $DB->query( "SELECT * FROM signatories ");
	$usersubject = $DB->query( "SELECT US.usersubject_id, CONCAT(US.school_year, ' - ', US.semester, ' - ', C.course_name, ' - ', S.subject_name, ' - ', US.year_level ) AS name FROM usersubject AS US LEFT JOIN subject AS S ON US.subject_id = S.subject_id LEFT JOIN course AS C ON US.course_id = C.course_id" );

	/*"SELECT SC.subjectcourse_id, CONCAT(S.subject_name, ' - ', C.course_name ) AS name FROM subjectcourses AS SC LEFT JOIN subject AS S ON SC.subject_id = S.subject_id LEFT JOIN course AS C ON SC.course_id = C.course_id"*/
?>
<form method="post">
	<div class="form-group">
	<input type="hidden" name="action" value="add_new_subjectsignatories">

	
		<label>Users</label>
		<select class="form-control" name="user_id">
			<?php while( $user = $users->fetch_object()) : ?>
			<option value="<?php echo $user->user_id ?>"><?php echo $user->UserName ?></option>
			<?php endwhile; ?>

		</select>
	</div>

	<div class="form-group">
		<label>Signatories</label>
		<select class="form-control" name="sig_id">
			<?php while( $signatorie = $signatories->fetch_object()) : ?>
			<option value="<?php echo $signatorie->sig_id ?>"><?php echo $signatorie->sig_id ?></option>
			<?php endwhile; ?>
		</select>
	</div>
	<label>User Subject: </label>  
	<input type="text" class="form-control" name="usersubject_id" placeholder="user subject"><br>
	
	<div class="form-group">
		<label>Date</label>
		<input type="date" class="form-control" name="date">
	</div>
	<p> <strong> Status </strong> </p>
	<select name="status" class="form-control" value="<?php echo $subjectsignatories->status?>">
		<option value="1">Approved</option>
		<option value="0">Not Approved</option>
	</select><br>
	</div>
	                                                                                                                                                                                
	<input type="submit" class="btn btn-primary" value="Save Subject Signatories">
</form>


<?php element( 'footer' ); ?>