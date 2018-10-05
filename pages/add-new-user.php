<?php element( 'header' ); ?>
<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="add_new_user">
	
	<label>FirstName: </label>  
	<input type="text" class="form-control" name="fname" placeholder="firstname"><br>
	<label>MiddleName: </label>  
	<input type="text" class="form-control" name="mname" placeholder="middlename"><br>
	<label>LastName: </label>  
	<input type="text" class="form-control" name="lname" placeholder="lastname"><br>
	<label>IdNo: </label>  
	<input type="text" class="form-control" name="idno" placeholder="idno"><br>
	<label>Username: </label>  
	<input type="text" class="form-control" name="username" placeholder="username"><br>
	<label>Password: </label>  
	<input type="password" class="form-control" name="password" placeholder="password"><br> 
	<label>Utype</label>
		<select name="utype" class="form-control">
			<option value="faculty">Faculty</option>
			<option value="depthead">Department Head</option>
			<option value="dean">Dean</option>
			<option value="doi">DOI</option>
			<option value="vpaa">VPAA</option>
		</select>	
	<button type="submit" class="btn btn-primary" value="Send"> Submit </button>
</div>
</form>

<?php element( 'footer' ); ?>