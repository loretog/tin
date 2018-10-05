<?php element( 'header' ); ?>

<?php
	$course_id = $_GET[ 'course_id' ];
	$course = $DB->query( "SELECT * FROM course WHERE course_id = $course_id " ); 
	$course = $course->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_course">	
	<input type="hidden" class="form-control"  name="course_id" value="<?php echo $course_id ?>">
	<label>Course Name: </label>  
	<input type="text" class="form-control" name="course_name" placeholder="course name" value="<?php echo $course->course_name ?>"><br>
	<label>Course Description: </label>  
	<input type="text" class="form-control" name="course_description" placeholder="course description" value="<?php echo $course->course_description ?>"><br>

	
	
	<input type="submit" class="btn btn-primary" value="Update Course">
</div>
</form>

<?php element( 'footer' ); ?>