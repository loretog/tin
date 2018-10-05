<?php element( 'header' ); ?>
<h1>Subject Courses</h1>
<?php
$subjectcourses = $DB->query( "SELECT * FROM subjectcourse AS sc LEFT JOIN course AS c ON c.course_id = sc.course_id LEFT JOIN subject AS s ON s.subject_id = sc.subject_id" );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-new-subject-course">Add Subject Course </a></button>

<table class="table table-bordered">
<tr>
	
	<th>Course</th>
	<th>Subject</th>
	<th>School Year</th>
	<th>Semester</th>
	<th>Year Level</th>
	<th></th>
	
</tr>
<?php if( $subjectcourses->num_rows ) { ?>
<?php while( $subjectcourse = $subjectcourses->fetch_object() ) { ?>
<tr>

	
	<td><?php echo $subjectcourse->course_name ?></td>
	<td><?php echo $subjectcourse->subject_name ?></td>
	<td><?php echo $subjectcourse->school_year ?></td>
	<td><?php echo $subjectcourse->semester ?></td>
	<td><?php echo $subjectcourse->year_level ?></td>



	<td>
		<a href="<?php echo SITE_URL ?>/?page=edit_subjectcourse&subjectcourse_id=<?php echo $subjectcourse->subjectcourse_id ?>">Edit</a>
		<a href="<?php echo SITE_URL ?>/?action=delete_subjectcourse&subjectcourse_id=<?php echo $subjectcourse->subjectcourse_id ?>" onclick="return confirm('Are you sure you want to delete this subjectcourse?');">Delete</a>
		
	</td>
</tr>

<?php } ?>
<?php } else { ?>
<tr>
<td colspan="6">No current record.</td>
</tr>
<?php } ?>
</table>
<?php element( 'footer' ); ?>