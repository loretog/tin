<?php element( 'header' ); ?>

<?php
	$subject_id = $_GET[ 'subject_id' ];
	$subject = $DB->query( "SELECT * FROM subject WHERE subject_id = $subject_id " ); 
	$subject = $subject->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_subject">	
	<input type="hidden" name="subject_id" value="<?php echo $subject_id ?>">
	<label>Subject Name: </label>  
	<input type="text" class="form-control" name="subject_name" placeholder="subject name" value="<?php echo $subject->subject_name ?>"><br>
	<label>Subject Code: </label>  
	<input type="text" class="form-control" name="subject_code" placeholder="subject code" value="<?php echo $subject->subject_code ?>"><br>
	<label>Subject Description: </label>  
	<input type="text" class="form-control" name="subject_description" placeholder="subject description" value="<?php echo $subject->subject_description ?>"><br>


	
	
	<input type="submit" class="btn btn-primary" value="Update Subject">
</div>
</form>

<?php element( 'footer' ); ?>