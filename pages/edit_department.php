<?php element( 'header' ); ?>

<?php
	
	$dept_id = $_GET[ 'dept_id' ];
	$department = $DB->query( "SELECT * FROM department WHERE dept_id = $dept_id " ); 
	$department = $department->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_department">	
	<input type="hidden" class="form-control"  name="dept_id" value="<?php echo $dept_id ?>">
	<label>Department Name: </label>  
	<input type="text" class="form-control" name="dept_name" placeholder="department name" value="<?php echo $department->dept_name ?>"><br>


	
	
	<input type="submit" class="btn btn-primary" value="Update Department">
</div>
</form>

<?php element( 'footer' ); ?>