<?php element( 'header' ); ?>
<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="add_new_signatories">
	
	 
	<label>Designation: </label>  
	<input type="text" class="form-control"  name="type" placeholder="designation"><br> 
	<label>Position: </label>  
	<input type="text"  class="form-control" name="position" placeholder="position"><br> 
	
	<button type="submit" class="btn btn-primary" value="Send"> Submit </button>
</div>
</form>

<?php element( 'footer' ); ?>