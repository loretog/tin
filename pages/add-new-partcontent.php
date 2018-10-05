<?php element( 'header' ); ?>
<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="add_new_partcontent">
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
	<label>Content: </label> 
	<textarea class="form-control" cols="10" rows="10" name="content"></textarea>
	<!-- <input type="text" class="form-control"  name="content" placeholder="content"><br>  -->
	
	
	<button type="submit" class="btn btn-primary" value="Send"> Submit </button>
</div>
</form>

<?php element( 'footer' ); ?>