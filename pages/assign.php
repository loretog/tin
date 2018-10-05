<?php element( 'header' ); ?>
<?php
	$q = "SELECT c.course_id,c.course_name, d.dept_id, d.dept_name, co.college_id, co.college_name FROM course AS c LEFT JOIN department AS d ON c.dept_id = d.dept_id LEFT JOIN college AS co ON d.college_id = co.college_id";
	$recs = $DB->query( $q );
	echo $q;
?>
<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="add_new_department">
	
	<label>College: </label>  
	<select name="College">
		<option value="CAS">CAS</option>
		<option value="CEA">CEA</option>
		<option value="COE">COE</option>
		<option value="CIT">CIT</option>
		
	</select><br>

	<label>Department: </label>  
	<select name="Department">
		<option value="Computer Department">Computer Department</option>
		<option value="Science Department">Science Department</option>
		<option value="Math Department">Math Department</option>
		<option value="Soc Sci Department">Soc Sci Department</option>
		
	</select><br>
		
<button type="submit" value="Send"> Submit </button>
</div>
</form>

<?php element( 'footer' ); ?>