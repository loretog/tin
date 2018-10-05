<?php element( 'header' ); ?>

<?php
	$pc_id= $_GET[ 'pc_id'];
	$partcontents = $DB->query( "SELECT * FROM part_content WHERE pc_id = $pc_id " ); 
	$partcontent = $partcontents->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_partcontent">	
		<?php
		$usersubjects = $DB->query( "SELECT * FROM usersubject WHERE user_id = {$_SESSION[ AUTH_ID ]}" );
	?>
	<label>User Subject (Syllabus): </label> 
	<select class="form-control" name="usersubject_id">
		<?php while ( $usersubject = $usersubjects->fetch_object() ): ?>
			<option value="<?php echo $usersubject->usersubject_id ?>"><?php echo $usersubject->school_year . " - " . $usersubject->semester. " - ". $usersubject->title . " - " .$usersubject->revision_number ?></option>
		<?php endwhile; ?>
	</select>
	<?php
		$parts = $DB->query( "SELECT * FROM parts ORDER BY number asc" );
	?>
	<label>Parts: </label> 
	<select class="form-control" name="parts_id">
		<?php while ( $part = $parts->fetch_object() ): ?>
			<option value="<?php echo $part->parts_id ?>"><?php echo $part->number . " - " . $part->title ?></option>
		<?php endwhile; ?>
	</select>
	<input type="hidden" class="form-control"  name="pc_id" value="<?php echo $pc_id ?>">
	<label>Content: </label>  
	<input type="text" class="form-control" name="content" placeholder="content" value="<?php echo $partcontent->content ?>"><br>
	

	
	
	<input type="submit" class="btn btn-primary" value="Update Part Content">
</div>
</form>

<?php element( 'footer' ); ?>