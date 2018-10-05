<?php element( 'header' ); ?>
<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="add_new_parts">
	
	<label>Title: </label> 
	<input type="text" class="form-control"  name="title" placeholder="title"><br> 
	<label>Number: </label>  
	<input type="text" class="form-control"  name="number" placeholder="number"><br> 
	
	
	<button type="submit" class="btn btn-primary" value="Send"> Submit </button>
</div>
</form>

<?php element( 'footer' ); ?>