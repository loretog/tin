<?php element( 'header' ); ?>

<?php
	$subjectcourse_id = $_GET[ 'subjectcourse_id' ];
	$subjectcourse = $DB->query( "SELECT * FROM subjectcourse WHERE subjectcourse_id = $subjectcourse_id " ); 
	$subjectcourse = $subjectcourse->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_subjectcourse">	
	<input type="hidden" class="form-control" name="subjectcourse_id" value="<?php echo $subjectcourse_id ?>">
	
	<label>School Year: </label>  
	<input type="text" class="form-control" name="school_year" placeholder="school year" value="<?php echo $subjectcourse->school_year ?>"><br>
	<label>Semester: </label>  
	<input type="text" class="form-control" name="semester" placeholder="semester" value="<?php echo $subjectcourse->semester ?>"><br>
	<label>Year Level: </label>  
	<input type="text" class="form-control" name="year_level" placeholder="year level" value="<?php echo $subjectcourse->year_level ?>"><br>
	
	
	<input type="submit" class="btn btn-primary" value="Update Subject Course">
</div>
</form>

<?php element( 'footer' ); ?>