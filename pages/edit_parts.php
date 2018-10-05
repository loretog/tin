<?php element( 'header' ); ?>

<?php
	$parts_id = $_GET[ 'parts_id' ];
	$parts = $DB->query( "SELECT * FROM parts WHERE parts_id = $parts_id " ); 
	$part = $parts->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_parts">	
	<input type="hidden" class="form-control"  name="parts_id" value="<?php echo $parts_id ?>">
	<label>Title: </label>  
	<input type="text" class="form-control" name="title" placeholder="title" value="<?php echo $part->title?>"><br>
	<label>Number: </label>  
	<input type="text" class="form-control" name="number" placeholder="number" value="<?php echo $part->number ?>"><br>

	
	<input type="submit" class="btn btn-primary" value="Update Parts">
	
	<button class="btn btn-primary add-column">Add Column </button> 

	<br>
	<br>
	  


	<div class="parts-columns">
		<?php 
			// kwaon ang tanan nga columns sng amo ni nga part
			$columns = $DB->query( "SELECT * FROM columns WHERE part_id = $parts_id" );
			if( $columns->num_rows ) {
				while( $column = $columns->fetch_object() ) {
					echo "<div class='column-wrapper'> <input type='text' name='column_name[]' class='form-control' value='{$column->title}'><span class='sub-column'>  Sub-column <in> </span><span class='btn btn-danger remove-column'> Remove  </span></div>  ";
				}
			}
		?>
	</div>
	
	

</div>
</form>

<?php element( 'footer' ); ?>