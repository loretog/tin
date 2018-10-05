<?php element( 'header' ); ?>

<?php
	$sig_id = $_GET[ 'sig_id' ];
	$signatories = $DB->query( "SELECT * FROM signatories WHERE sig_id = $sig_id " ); 
	$signatories = $signatories->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_signatories">	
	<input type="hidden" name="sig_id" value="<?php echo $sig_id ?>">
	<label>Designation: </label>  
	<input type="text" class="form-control" name="designation" placeholder="designation" value="<?php echo $signatories->designation ?>"><br>
	<label>Position: </label>  
	<input type="text" class="form-control" name="position" placeholder="position" value="<?php echo $signatories->position ?>"><br>


	
	
	<input type="submit" class="btn btn-primary" value="Update Signatories">
</div>
</form>

<?php element( 'footer' ); ?>