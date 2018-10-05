<?php element( 'header' ); ?>

<?php
$departments = $DB->query( "SELECT * FROM department AS d LEFT JOIN college AS c ON d.college_id = c.college_id" );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-department">Add Department </a></button>

<table class="table table-bordered">
<tr>
<th>College</th>
<th>Department Name</th>
<th></th>
</tr>
<?php if( $departments->num_rows ) { ?>
<?php while( $department = $departments->fetch_object() ) { ?>
<tr>
<td><?php echo $department->college_name ?></td>
<td><?php echo $department->dept_name ?></td>

<td>
	<a href="<?php echo SITE_URL ?>/?page=edit_department&dept_id=<?php echo $department->dept_id; ?>">Edit</a>
	<a href="<?php echo SITE_URL ?>/?action=delete_department&dept_id=<?php echo $department->dept_id ?>" onclick="return confirm('Are you sure you want to delete this department?');">Delete</a>

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