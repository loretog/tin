<?php element( 'header' ); ?>
<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="add_new_course">
	
	<label>Departments: </label> 
	<?php $departments = $DB->query( "SELECT * FROM department" ); ?>
	<select class="form-control"  name="dept_id">
	<?php while( $department = $departments->fetch_object() ) : ?>
		<option value="<?php echo $department->dept_id ?>"><?php echo $department->dept_name ?></option>
	<?php endwhile; ?>
	</select><br>
	
	<label>Course Name: </label>  
	<input type="text" class="form-control"  name="course_name" placeholder="course name"><br> 
	<label>Course Description: </label>  
	<input type="text" class="form-control"  name="course_description" placeholder="course description"><br> 
	
	<button type="submit" class="btn btn-primary" value="Send"> Submit </button>
</div>
</form>

<?php element( 'footer' ); ?>