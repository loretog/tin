<?php element( 'header' ); ?>

<?php
	$college_id = $_GET[ 'college_id' ];
	$college = $DB->query( "SELECT * FROM college WHERE college_id = $college_id " ); 
	$college = $college->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_college">	
	<input type="hidden" class="form-control"  name="college_id" value="<?php echo $college_id ?>">
	<label>College Name: </label>  
	<input type="text"class="form-control" name="college_name" placeholder="college name" value="<?php echo $college->college_name ?>"><br>

	
	
	<input type="submit" class="btn btn-primary" value="Update College">
</div>
</form>

<?php element( 'footer' ); ?>