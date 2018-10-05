<?php element( 'header' ); ?>

<?php
$units = $DB->query( "SELECT us.school_year, us.semester,us.revision_number,us.title,s.subject_name, c.course_name,un.usersubject_id,un.units_id FROM units AS un LEFT JOIN usersubject AS us ON us.usersubject_id = un.usersubject_id LEFT JOIN  subjectcourse AS sc ON sc.subjectcourse_id = us.subjectcourse_id LEFT JOIN subject AS s ON s.subject_id = sc.subject_id LEFT JOIN course AS c ON c.course_id = sc.course_id " );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-new-units">Add Units </a></button>

<table class="table table-bordered">
<tr>
<th>User Subject</th>
<th>Title</th>


<th></th>
</tr>
<?php if( $units->num_rows ) { ?>
<?php while( $unit = $units->fetch_object() ) { ?>
<tr>


<td><?php echo $unit->school_year. " " .$unit->semester. " " .$unit->title. " " .$unit->revision_number ?></td>
<td><?php echo $unit->title ?></td>



<td>
	<a href="<?php echo SITE_URL ?>/?page=edit_units&units_id=<?php echo $unit->units_id ?>">Edit</a>
	<a href="<?php echo SITE_URL ?>/?action=delete_units&units_id=<?php echo $unit->units_id ?>" onclick="return confirm('Are you sure you want to delete this Units?');">Delete</a>
	
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