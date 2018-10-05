<?php element( 'header' ); ?>
<?php
	$q = "SELECT c.course_id,c.course_name, d.dept_id, d.dept_name, co.college_id, co.college_name FROM course AS c LEFT JOIN department AS d ON c.dept_id = d.dept_id LEFT JOIN college AS co ON d.college_id = co.college_id";
	$recs = $DB->query( $q );
	//echo $q;
?>
<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="add_new_vpaa">
	
	<label>Department: </label>  
	<select name="Department">
		<?php while( $rec = $recs->fetch_object() ) : ?>
		<option value="<?php echo $rec->dept_id ?>"><?php echo $rec->college_name . " - " . $rec->dept_name . " - " . $rec->course_name ?> <br></option>
		<?php endwhile; ?>
	</select><br>

	<label>Username: </label> 
	<input type="text" name="username" placeholder="username"><br>
	<label>Password: </label>  
	<input type="password" name="password" placeholder="password"><br>  
	<button type="submit" value="Send"> Submit </button>
</div>
</form>

<?php element( 'footer' ); ?>