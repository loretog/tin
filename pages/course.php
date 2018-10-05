<?php element( 'header' ); ?>

<?php
$courses = $DB->query( "SELECT * FROM course AS c LEFT JOIN department AS d ON c.dept_id = d.dept_id LEFT JOIN college AS col ON d.college_id = col.college_id" );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-new-course">Add Course </a></button>

<table class="table table-bordered">
<tr>
<th>College</th>
<th>Department</th>
<th>Course Name</th>
<th>Course Description</th>
<th></th>
</tr>
<?php if( $courses->num_rows ) { ?>
<?php while( $course = $courses->fetch_object() ) { ?>
<tr>
<td><?php echo $course->college_name ?></td>
<td><?php echo $course->dept_name ?></td>
<td><?php echo $course->course_name ?></td>
<td><?php echo $course->course_description ?></td>

<td>
	<a href="<?php echo SITE_URL ?>/?page=edit_course&course_id=<?php echo $course->course_id; ?>">Edit</a>
	<a href="<?php echo SITE_URL ?>/?action=delete_course&course_id=<?php echo $course->course_id ?>" onclick="return confirm('Are you sure you want to delete this course?');">Delete</a>
	
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