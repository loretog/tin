<?php element( 'header' ); ?>
<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="add_new_subject">
	
	<label>Subjects Name: </label> 
	<input type="text" class="form-control"  name="subject_name" placeholder="subject name"><br> 
	<label>Subject Code: </label>  
	<input type="text" class="form-control"  name="subject_code" placeholder="subject code"><br> 
	<label>Subject Description: </label>  
	<input type="text"  class="form-control" name="subject_description" placeholder="subject description"><br> 
	
	<button type="submit" class="btn btn-primary" value="Send"> Submit </button>
</div>
</form>

<?php element( 'footer' ); ?>