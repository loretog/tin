<?php element( 'header' ); ?>
<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="add_n_department">
	
	
	<label>Department Name: </label>  
	<input type="text" class="form-control"  name="dept_name" placeholder="department name"><br> 
	<label>College: </label>
	<?php 
		$colleges = $DB->query( "SELECT * FROM college" );
	?>

	<select class="form-control"  name="college_id">
	<?php while( $college = $colleges->fetch_object() ) : ?>
		<option value="<?php echo $college->college_id ?>"><?php echo $college->college_name ?></option>
	<?php endwhile; ?>
	</select>
	<br> 
	<button type="submit" class="btn btn-primary" value="Send"> Submit </button>
</div>
</form>

<?php element( 'footer' ); ?>