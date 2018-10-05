<?php element( 'header' ); ?>
<h1>Subject Signatories</h1>
<?php
$subjectsignatories = $DB->query( "SELECT ss.ss_id, u.UserName, s.position, s.designation , u.fname, u.mname, u.lname, u.utype, ss.date, ss.status, us.usersubject_id, us.school_year, us.semester,su.subject_name, c.course_name  FROM subjectsignatories AS ss LEFT JOIN user AS u ON u.user_id = ss.user_id LEFT JOIN signatories AS s ON s.sig_id = ss.sig_id LEFT JOIN usersubject AS us ON us.usersubject_id = ss.usersubject_id LEFT JOIN user ON u.user_id = us.user_id LEFT JOIN subjectsignatories ON ss.usersubject_id = us.usersubject_id LEFT JOIN subjectcourse AS sc ON sc.subjectcourse_id = us.subjectcourse_id LEFT JOIN subject AS su ON su.subject_id = sc.subject_id LEFT JOIN course AS c ON c.course_id = sc.course_id" );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-new-subjectsignatories">Add Subject Signatories </a></button>

<table class="table table-bordered">
<tr>
	
	<th>User</th>
	<th>Signatories</th>
	<th>User Subject (Syllabus)</th>
	<th>Date</th>
	<th>Status</th>
	<th></th>
	
</tr>
<?php if( $subjectsignatories->num_rows ) { ?>
<?php while( $subjectsignatorie = $subjectsignatories->fetch_object() ) { ?>
<tr>

	
	<td><?php echo $subjectsignatorie->UserName . ( $subjectsignatorie->utype == "admin" ? ' (DOI)' : '' )?></td>
	<td><?php echo $subjectsignatorie->position . " " . $subjectsignatorie->designation ?></td>
	<td><?php echo $subjectsignatorie->school_year . " - " . $subjectsignatorie->semester . " - " . $subjectsignatorie->subject_name . " - " . $subjectsignatorie->course_name . " - (" . $subjectsignatorie->fname . " ". $subjectsignatorie->mname . " ".$subjectsignatorie->lname . ")" ?></td>
	<td><?php echo $subjectsignatorie->date ?></td>
	<td><?php echo $subjectsignatorie->status ?></td>



	<td>
		<a href="<?php echo SITE_URL ?>/?page=edit_subjectsignatories&ss_id=<?php echo $subjectsignatorie->ss_id ?>">Edit</a>
		<a href="<?php echo SITE_URL ?>/?action=delete_subjectsignatories&ss_id=<?php echo $subjectsignatorie->ss_id ?>" onclick="return confirm('Are you sure you want to delete this subjectsignatories?');">Delete</a>
		
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