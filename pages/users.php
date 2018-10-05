<?php element( 'header' ); ?>

<?php
$user = $DB->query( "SELECT * FROM user" );
?>
<a class="btn btn-primary" href="<?php echo SITE_URL ?>/?page=add-new-user">Add New User </a>

<table class="table table-bordered">
<tr>

<th>User ID</th>
<th>Username</th>
<th>Password</th>
<th>ID number</th>
<th>Name</th>

<th>User type</th>


<th></th>
</tr>
<?php if( $user->num_rows ) { ?>
<?php while( $users = $user->fetch_object() ) { ?>
<tr>
<td><?php echo $users->user_id ?></td>
<td><?php echo $users->UserName ?></td>
<td><?php echo $users->password ?></td>
<td><?php echo $users->idno ?></td>
<td><?php echo $users->fname . " " . $users->mname . " " . $users->lname ?></td>

<td><?php echo $users->utype ?></td>






<td>
	<a href="<?php echo SITE_URL ?>/?page=edit_user&userid=<?php echo $users->user_id ?>">Edit</a>
	<a href="<?php echo SITE_URL ?>/?action=delete_user&userid=<?php echo $users->user_id ?>" onclick="return confirm('Are you sure you want to delete the user?');">Delete</a>
	
</td>
</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td colspan="4">No current record.</td>
</tr>
<?php } ?>
</table>
<?php element( 'footer' ); ?>