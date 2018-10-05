<?php element( 'header' ); ?>

<?php
	$units_id= $_GET[ 'units_id'];
	$units = $DB->query( "SELECT * FROM units WHERE units_id = $units_id " ); 
	$unit = $units->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_units">	
		<?php
		$usersubjects = $DB->query( "SELECT * FROM usersubject WHERE user_id = {$_SESSION[ AUTH_ID ]}" );
	?>
	<label>User Subject (Syllabus): </label> 
	<select class="form-control" name="usersubject_id">
		<?php while ( $usersubject = $usersubjects->fetch_object() ): ?>
			<option value="<?php echo $usersubject->usersubject_id ?>"><?php echo $usersubject->school_year . " - " . $usersubject->semester. " - ". $usersubject->title . " - " .$usersubject->revision_number ?></option>
		<?php endwhile; ?>
	</select>
	
	<label>Title: </label>  
	<input type="text" class="form-control" name="title" placeholder="title" value="<?php echo $unit->title?>"><br>
	

	
	
	<input type="submit" class="btn btn-primary" value="Update Units">
</div>
</form>

<?php element( 'footer' ); ?>