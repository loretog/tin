<?php element( 'header' ); ?>
<h1>New Subject Course</h1>

<?php
	$users = $DB->query( "SELECT * FROM user ORDER BY username ASC" );
	$subjectcourses = $DB->query( "SELECT SC.subjectcourse_id, CONCAT(SC.school_year, ' - ', SC.semester, ' - ', C.course_name, ' - ', S.subject_name, ' - ', SC.year_level ) AS name FROM subjectcourse AS SC LEFT JOIN subject AS S ON SC.subject_id = S.subject_id LEFT JOIN course AS C ON SC.course_id = C.course_id" );

	/*"SELECT SC.subjectcourse_id, CONCAT(S.subject_name, ' - ', C.course_name ) AS name FROM subjectcourses AS SC LEFT JOIN subject AS S ON SC.subject_id = S.subject_id LEFT JOIN course AS C ON SC.course_id = C.course_id"*/
?>
<form method="post">
	<div class="form-group">
	<input type="hidden" name="action" value="add_new_usersubject">
	
		<label>Users</label>
		<select class="form-control" name="user_id">
			<?php while( $user = $users->fetch_object()) : ?>
			<option value="<?php echo $user->user_id ?>"><?php echo $user->UserName ?></option>
			<?php endwhile; ?>

		</select>
	</div>
	<div class="form-group">
		<label>Subject Courses</label>
		<select class="form-control" name="subjectcourse_id">
			<?php while( $subjectcourse = $subjectcourses->fetch_object()) : ?>
			<option value="<?php echo $subjectcourse->subjectcourse_id ?>"><?php echo $subjectcourse->name ?></option>
			<?php endwhile; ?>
		</select>
	</div>
	<div class="form-group">
		<label>Semester</label>
		<select name="semester" class="form-control">
			<option value="1st semester">1st Semester</option>
			<option value="2nd semester">2nd Semester</option>
			<option value="summer">Summer</option>
		</select>
	</div>
	<div class="form-group">
		<label>School Year</label>		
		<select name="school_year" class="form-control">
			<?php for( $i = date( 'Y' ); $i < ( date( 'Y' ) + 10 ); $i++ ) : ?>
			<?php $sy = $i . " - " . ( $i + 1 ); ?>
			<option value="<?php echo $sy ?>"><?php echo $sy ?></option>
			<?php endfor; ?>
		</select>
	</div>
	<div class="form-group">
		<label>Title</label>
		<input type="text" class="form-control" name="title">
	</div>
	<div class="form-group">
		<label>Revision Number</label>
		<input type="text" class="form-control" name="revision_number">
	</div>
	<div class="form-group">
		<label>Effective Date</label>
		<input type="date" class="form-control" name="effective_date">
	</div>
	<div class="form-group">
		<label>Document Code</label>
		<input type="text" class="form-control" name="document_code">
	</div>
	<input type="submit" class="btn btn-primary" value="Save Subject Course">
</form>


<?php element( 'footer' ); ?>