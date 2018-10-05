<?php element( 'header' ); ?>
<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="add_new_college">
	
	
	<label>College Name: </label>  
	<input type="text" class="form-control" name="college_name" placeholder="college name"><br> 
	 
	<button type="submit" class="btn btn-primary" value="Send"> Submit </button>
</div>
</form>

<?php element( 'footer' ); ?>