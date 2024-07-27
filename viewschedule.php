<!DOCTYPE html>
<html>
<head>
	<title>Student Home</title>
		<?php include"externalfiles.php"; 

include("operation.php");
		 ?>
		 <style type="text/css">
		 	a:hover
		 	{
text-decoration: none;
		 	}
		 </style>
</head>
<body>
	<div class="container-fluid">
	<div class="row mt-4">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php 
if(!empty($_COOKIE['signin']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['signin']; ?>
</div>

<?php } ?>
<?php 
if(!empty($_COOKIE['updatestu']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['updatestu']; ?>
</div>

<?php } ?>

<?php 
if(!empty($_COOKIE['pswdc']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['pswdc']; ?>
</div>

<?php } ?>

		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
				<div class="col-md-10 display-4 text-uppercase">Schedule And Diet</div>
		<div class="col-md-2">
			<form action="logout.php"><button class="btn btn-outline-warning">LOGOUT</button></form>
		</div>
	</div>
</div>
<div class="container-fluid mt-4">
	<div class="row">
		<div class="col-md-3">
			<ul class="nav nav-tabs flex-column text-center">
<li class="nav-item"><a href="apply.php" class="nav-link">Gym Application</a></li>
<li class="nav-item"><a href="viewschedule.php"class="nav-link">View Schedule</a></li>
<li class="nav-item"><a href="updateprofile.php" class="nav-link">Update Profile</a></li>
<li class="nav-item"><a href="changepswd.php" class="nav-link">Change Password</a></li>
		</ul>

		</div>
<div class="col-md-8 p-4">
	<embed src="images\60-days-to-fit-pdf-program.pdf" height="800px" width="850px"></embed>
			</div>
		
			<div class="col-md-1"><a href="home.php"><button class="btn btn-outline-primary">BACK</button></a>
</div>
	</div>

</body>
</html>