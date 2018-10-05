<?php element( 'header' ); ?>

<?php
	$userid = $_GET[ 'userid' ];
	$user = $DB->query( "SELECT * FROM user WHERE user_id = $userid" ); 
	$user = $user->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_user">	
	<input type="hidden" name="userid" value="<?php echo $userid ?>">
	<label>FirstName: </label>  
	<input type="text" class="form-control" name="fname" placeholder="FirstName" value="<?php echo $user->fname ?>"><br>
	<label>Middlename: </label>  
	<input type="text" class="form-control" name="mname" placeholder="MiddleName" value="<?php echo $user->mname ?>"><br>
	<label>Lastname: </label>  
	<input type="text" class="form-control" name="lname" placeholder="LastName" value="<?php echo $user->lname ?>"><br>
	<label>Username: </label> 
	<input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $user->UserName ?>"><br>
	<label>ID No.</label>
	<input type="text" class="form-control" name="idno" value="<?php echo $user->idno ?>"><br>
	<label>Password</label>
	<input type="text" class="form-control" name="password" value="<?php echo $user->password ?>"><br>
	
	
	<input type="submit" value="Update Account">
</div>
</form>

<?php element( 'footer' ); ?>