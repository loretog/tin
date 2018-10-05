<?php element( 'header' ); ?>

<?php
	$columns_id = $_GET[ 'columns_id' ];
	$columns = $DB->query( "SELECT * FROM columns WHERE columns_id = $columns_id " ); 
	$column = $columns->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_columns">	
	<input type="hidden" class="form-control"  name="columns_id" value="<?php echo $columns_id ?>">
	<label>Title: </label>  
	<input type="text" class="form-control" name="title" placeholder="title" value="<?php echo $column->title?>"><br>
	

	
	
	<input type="submit" class="btn btn-primary" value="Update Columns">
</div>
</form>

<?php element( 'footer' ); ?>