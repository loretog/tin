<?php element( 'header' ); ?>

<?php
	$usersubject_id = isset( $_GET[ 'usersubject_id' ] ) ? $_GET[ 'usersubject_id' ] : '';
?>

<?php if( $usersubject_id ) : 
	$q = "SELECT * FROM parts AS p LEFT JOIN part_content AS pc ON pc.parts_id = p.parts_id WHERE usersubject_id = $usersubject_id ORDER BY p.number ASC";
	// echo $q;
	$parts_content = $DB->query( $q );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-new-partcontent">Add Part Content </a></button>
	<table class="table table-bordered">
		<tr>
			<th>Number</th>
			<th>Title</th>
			<th>Content</th>
		</tr>
		<?php while( $pc = $parts_content->fetch_object() ) : ?>
		<tr>
			<td><?php echo $pc->number ?></td>
			<td><?php echo $pc->title ?></td>
			<td><?php echo $pc->content ?></td>
		</tr>
		<?php endwhile; ?>
	</table>
<?php
else : 

header( "Location: " . SITE_URL . "/?page=faculty" );
exit;

endif; ?>

<?php /*
<?php
$partcontents = $DB->query( "SELECT u.fname, u.mname, u.lname,us.school_year, us.semester,us.revision_number,us.school_year,us.title,s.subject_name, c.course_name, pc.content, p.title, p.number ,pc.pc_id FROM part_content AS pc LEFT JOIN usersubject AS us ON us.usersubject_id = pc.usersubject_id LEFT JOIN user AS u ON u.user_id = us.user_id LEFT JOIN subjectcourse AS sc ON sc.subjectcourse_id = us.subjectcourse_id LEFT JOIN subject AS s ON s.subject_id = sc.subject_id LEFT JOIN course AS c ON c.course_id = sc.course_id LEFT JOIN parts AS p ON p.parts_id = pc.parts_id" );
?>
<link><a href="<?php echo SITE_URL ?>/?page=add-new-partcontent">Add Part Content </a></button>

<table class="table table-bordered">
<tr>
<th>User Subject</th>
<th>Parts</th>
<th>Content</th>

<th></th>
</tr>
<?php if( $partcontents->num_rows ) { ?>
<?php while( $partcontent = $partcontents->fetch_object() ) { ?>
<tr>

<!-- <td><?php echo $usersubject->title . " - " .$partcontent->course_name. " " .$partcontent->subject_name . " " .$partcontent->school_year. " " .$partcontent->semester ?></td> -->
<td><?php echo $partcontent->school_year. " " .$partcontent->semester. " " .$partcontent->title. " " .$partcontent->revision_number ?></td>
<td><?php echo $partcontent->title. " " .$partcontent->number ?></td>
<td><?php echo $partcontent->content ?></td>



<td>
	<a href="<?php echo SITE_URL ?>/?page=edit_partcontent&pc_id=<?php echo $partcontent->pc_id ?>">Edit</a>
	<a href="<?php echo SITE_URL ?>/?action=delete_partcontent&pc_id=<?php echo $partcontent->pc_id ?>" onclick="return confirm('Are you sure you want to delete this part content?');">Delete</a>
	
</td>
</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td colspan="4">No current record.</td>
</tr>
<?php } ?>
</table>

*/ ?>
<?php element( 'footer' ); ?>

