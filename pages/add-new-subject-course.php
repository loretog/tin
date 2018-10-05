<?php element( 'header' ); ?>
<h1>New Subject Course</h1>

<?php
	$courses = $DB->query( "SELECT * FROM course ORDER BY course_name ASC" );
	$subjects = $DB->query( "SELECT * FROM subject ORDER BY subject_name ASC" );
?>

<form method="post">
	<div class="form-group">
	<input type="hidden" name="action" value="add_new_subjectcourse">
	
		<label>Courses</label>
		<select class="form-control" name="course_id">
			<?php while( $course = $courses->fetch_object()) : ?>
			<option value="<?php echo $course->course_id ?>"><?php echo $course->course_name ?></option>
			<?php endwhile; ?>
		</select>
	</div>
	<div class="form-group">
		<label>Subjects</label>
		<select class="form-control" name="subject_id">
			<?php while( $subject = $subjects->fetch_object()) : ?>
			<option value="<?php echo $subject->subject_id ?>"><?php echo $subject->subject_name ?></option>
			<?php endwhile; ?>
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
		<label>Semester</label>
		<select name="semester" class="form-control">
			<option value="1st semester">1st Semester</option>
			<option value="2nd semester">2nd Semester</option>
			<option value="summer">Summer</option>
		</select>
	</div>
	<div class="form-group">
		<label>Year Level</label>		
		<select name="year_level" class="form-control">
			<option value="1st year">1st Year</option>
			<option value="2nd year">2nd Year</option>
			<option value="3rd year">3rd Year</option>
			<option value="4th year">4th Year</option>
		</select>
	</div>
	<input type="submit" class="btn btn-primary" value="Save Subject Course">
</form>


<?php element( 'footer' ); ?>