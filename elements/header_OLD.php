<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<!DOCTYPE html>
<html>
<head>
<title>Syllabus</title>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL ?>/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL
?>/assets/css/hehe.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="header col-lg-12">
<div class="page-header">
<h1>Syllabus</h1>
</div>
</div>
<div class="menu col-lg-12">
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li class="active"><a href="./">Home <span class="sr-only">(current)</span></a></li>
<?php if( isset( $_SESSION[ AUTH_ID ] ) ) { ?>
<li><a href="./?page=users">Users</a></li>
<li><a href="./?page=college">College</a></li>
<li><a href="./?page=department">Department</a></li>
<li><a href="./?page=course">Course</a></li>
<li><a href="./?page=subject">Subject</a></li>
<li><a href="./?page=subjectcourse">Subject Courses</a></li>
<li><a href="./?page=usersubject">User Subject</a></li>
<li><a href="./?action=logout">Logout</a></li>
<?php } else { ?>
<li><a href="./?page=login">Login</a></li>
<?php } ?>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
</div>
</div>
<div class="main-content row">
<div class="col-lg-8 col-md-8">
<!-- START OF CONTENT -->
<?php show_message(); ?>