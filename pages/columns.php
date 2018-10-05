<?php element( 'header' ); ?>

<?php
$columns = $DB->query( "SELECT c.title, c.columns_id FROM columns As c " );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-new-columns">Add Columns </a></button>

<table class="table table-bordered">
<tr>


<th>Title</th>


<th></th>
</tr>
<?php if( $columns->num_rows ) { ?>
<?php while( $column = $columns->fetch_object() ) { ?>
<tr>


<td><?php echo $column->title ?></td>




<td>
	<a href="<?php echo SITE_URL ?>/?page=edit_columns&columns_id=<?php echo $column->columns_id ?>">Edit</a>
	<a href="<?php echo SITE_URL ?>/?action=delete_columns&columns_id=<?php echo $column->columns_id ?>" onclick="return confirm('Are you sure you want to delete this columns?');">Delete</a>
	
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