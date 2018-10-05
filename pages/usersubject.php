<?php element( 'header' ); ?>

<?php
$usersubjects = $DB->query( "SELECT  c.course_name,s.subject_name, u.fname, u.mname, u.lname, us.usersubject_id, us.user_id, us.subjectcourse_id, us.semester, us.title, us.school_year, us.document_code, us.revision_number, us.effective_date FROM usersubject AS us LEFT JOIN user AS u ON u.user_id = us.user_id LEFT JOIN subjectcourse AS sc ON sc.subjectcourse_id = us.subjectcourse_id LEFT JOIN subject AS s ON sc.subject_id = s.subject_id LEFT JOIN course AS c ON sc.course_id = c.course_id " );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-new-usersubject">Add User Subject </a></button>

<table class="table table-bordered">
<tr>

	<th>User Subject ID</th>
	<th>User</th>
	<th>SubjectCourse</th>
	<th>Semester</th>
	<th>School Year</th>
	<th>Title</th>
	<th>Document Code</th>
	<th>Revision Number</th>
	<th>Effective Date</th>
	<th></th>
	
</tr>
<?php if( $usersubjects->num_rows ) { ?>
<?php while( $usersubject = $usersubjects->fetch_object() ) { ?>
<tr>
	<td><?php echo $usersubject->usersubject_id ?></td>
	<td><?php echo $usersubject->fname. " " . $usersubject->mname. " " . $usersubject->lname ?></td>
	<td><?php echo $usersubject->course_name. " <br>".$usersubject->subject_name?></td>
	<td><?php echo $usersubject->semester ?></td>
	<td><?php echo $usersubject->school_year ?></td>
	<td><?php echo $usersubject->title ?></td>
	<td><?php echo $usersubject->document_code?></td>
	<td><?php echo $usersubject->revision_number?></td>
	<td><?php echo $usersubject->effective_date?></td>



	<td>
		<a href="<?php echo SITE_URL ?>/?page=edit_usersubject&usersubject_id=<?php echo $usersubject->usersubject_id ?>">Edit</a>
		<a href="<?php echo SITE_URL ?>/?action=delete_usersubject&usersubject_id=<?php echo $usersubject->usersubject_id ?>" onclick="return confirm('Are you sure you want to delete this usersubject?');">Delete</a>
		
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