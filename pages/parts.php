<?php element( 'header' ); ?>

<?php
$parts = $DB->query( "SELECT * FROM parts" );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-new-parts">Add Part </a></button>

<table class="table table-bordered">
<tr>

<th>Title</th>
<th>Number</th>

<th></th>
</tr>
<?php if( $parts->num_rows ) { ?>
<?php while( $part = $parts->fetch_object() ) { ?>
<tr>
<td><?php echo $part->title ?></td>
<td><?php echo $part->number ?></td>



<td>
	<a href="<?php echo SITE_URL ?>/?page=edit_parts&parts_id=<?php echo $part->parts_id ?>">Edit</a>
	<a href="<?php echo SITE_URL ?>/?action=delete_parts&parts_id=<?php echo $part->parts_id ?>" onclick="return confirm('Are you sure you want to delete this parts?');">Delete</a>
	
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