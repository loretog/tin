<?php element( 'header' ); ?>

<?php
	$usersubject_id = $_GET[ 'usersubject_id' ];
	$usersubject = $DB->query( "SELECT * FROM usersubject WHERE usersubject_id = $usersubject_id " ); 
	$usersubject = $usersubject->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_usersubject">	
	<input type="hidden" class="form-control" name="usersubject_id" value="<?php echo $usersubject_id ?>">
	<label>Semester: </label>  
	<input type="text" class="form-control" name="semester" placeholder="semester" value="<?php echo $usersubject->semester ?>"><br>
	<label>School Year: </label>  
	<input type="text" class="form-control" name="school_year" placeholder="School Year" value="<?php echo $usersubject->school_year ?>"><br>
	<label>Title: </label>  
	<input type="text" class="form-control" name="title" placeholder="title" value="<?php echo $usersubject->title ?>"><br>
	<label>Revision Number: </label>  
	<input type="text" class="form-control" name="revision_number" placeholder="revision number" value="<?php echo $usersubject->revision_number ?>"><br>
	<label>Effective Date: </label>  
	<input type="text" class="form-control" name="effective_date" placeholder="effective date" value="<?php echo $usersubject->effective_date ?>"><br>
	<label>Document Code: </label>  
	<input type="text" class="form-control" name="document_code" placeholder="document code" value="<?php echo $usersubject->document_code?>"><br>
	
	<input type="submit" class="btn btn-primary" value="Update Subject Course">
</div>
</form>

<?php element( 'footer' ); ?>