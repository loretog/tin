<?php element( 'header' ); ?>

<?php

$signatories = $DB->query( "SELECT * FROM signatories" );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-new-signatories">Add Signatories </a></button>

<table class="table table-bordered">
<tr>

<th>Signatories ID</th>
<th>Designation</th>
<th>Position</th>
<th></th>
</tr>
<?php if( $signatories->num_rows ) { ?>
<?php while( $signatorie = $signatories->fetch_object() ) { ?>
<tr>
<td><?php echo $signatorie->sig_id ?></td>
<td><?php echo $signatorie->designation ?></td>
<td><?php echo $signatorie->position ?></td>



<td>
	<a href="<?php echo SITE_URL ?>/?page=edit_signatories&sig_id=<?php echo $signatorie->sig_id ?>">Edit</a>
	<a href="<?php echo SITE_URL ?>/?action=delete_signatories&sig_id=<?php echo $signatorie->sig_id ?>" onclick="return confirm('Are you sure you want to delete this Signatories?'); ">Delete</a>
	
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