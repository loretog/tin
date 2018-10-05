<?php element( 'header' ); ?>

<?php
$colleges = $DB->query( "SELECT * FROM college" );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-new-college">Add New College </a></button>
<table class="table table-bordered">
<tr>

<th>College ID</th>
<th>College Name</th>
<th></th>
</tr>
<?php if( $colleges->num_rows ) { ?>
<?php while( $college = $colleges->fetch_object() ) { ?>
<tr>
<td><?php echo $college->college_id ?></td>
<td><?php echo $college->college_name ?></td>


<td>
	<a href="<?php echo SITE_URL ?>/?page=edit_college&college_id=<?php echo $college->college_id; ?>">Edit</a>
	<a href="<?php echo SITE_URL ?>/?action=delete_college&college_id=<?php echo $college->college_id ?>" onclick="return confirm('Are you sure you want to delete this Colllege?');">Delete</a>
	
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