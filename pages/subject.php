<?php element( 'header' ); ?>

<?php
$subjects = $DB->query( "SELECT * FROM subject" );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-new-subject">Add Subject </a></button>

<table class="table table-bordered">
<tr>

<th>Subject Name</th>
<th>Subject Code</th>
<th>Subject Description</th>
<th></th>
</tr>
<?php if( $subjects->num_rows ) { ?>
<?php while( $subject = $subjects->fetch_object() ) { ?>
<tr>
<td><?php echo $subject->subject_name ?></td>
<td><?php echo $subject->subject_code ?></td>
<td><?php echo $subject->subject_description ?></td>



<td>
	<a href="<?php echo SITE_URL ?>/?page=edit_subject&subject_id=<?php echo $subject->subject_id ?>">Edit</a>
	<a href="<?php echo SITE_URL ?>/?action=delete_subject&subject_id=<?php echo $subject->subject_id ?>" onclick="return confirm('Are you sure you want to delete this subjects?');">Delete</a>
	
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