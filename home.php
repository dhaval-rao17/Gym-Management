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
				<div class="col-md-9 display-4 text-uppercase">WELCOME <?php echo $_SESSION['name']; ?></div>
		<div class="col-md-2">
			<form action="logout.php"><button class="btn btn-outline-warning">LOGOUT</button></form>
		</div>
		<div class="col-md-1 text-danger"></div>
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
<div class="col-md-4 p-4">
			<a href="#"><div style="height:100%;width:100%"class="bg-primary text-light text-center pt-4 ">
				<h1>Gym Application</h1>
			</div></a>
		</div>
			<div class="col-md-4 p-4">
			<a href="#"><div style="height:100%;width:100%"class="bg-info text-light text-center pt-4">
				<h1>View Schedule</h1>
			</div></a>	
			</div>
		
			<div class="col-md-1"></div>
	</div>
</div><?php $obj=new operation();
	$sid=$_SESSION['sid'];
	$sql="select * from student where sid=$sid";
$r=$obj->view($sql);
$email=$r['email'];
	 ?>
<div class="container-fluid">
<div class="row">
		<div class="col-md-3 ">
<center><div class="m-4" style="height: 120px;width:120px;">
	<img src="images\<?php echo $r['photo'] ?>" style="height: 120px;width:120px;">
</div>
	</center>
		</div>
<div class="col-md-4 p-4">
			<a href="#"><div style="height:100%;width:100%"class="bg-warning text-light text-center pt-4 ">
				<h1>Update Profile</h1>
			</div></a>
		</div>
			<div class="col-md-4 p-4">
			<a href="#"><div style="height:100%;width:100%"class="bg-danger text-light text-center pt-4">
				<h1>Change Password</h1>
			</div></a>	
			</div>
		
			<div class="col-md-1"></div>
	</div>
	</div>
<div class="container-fluid mt-2">
<div class="row">
		<div class="col-md-3">
			<center>Change Profile Pic
	<div class="form-inline mt-2">
		<form action="pic.php" method="post" enctype="multipart/form-data">
				<input type="file" name="photo">
			<button type="submit" name="submit"class="btn btn-outline-primary btn-sm btn-block mt-2">UPLOAD</button>
			</form>
		</div>
	</center>
		</div>
<div class="col-md-8 p-4">
<table class="table table-striped">
	
	<tr><th>Enrollment No.</th><th>Email</th><th>Mobile</th></tr>
	<tr><td><?php echo $r['enroll'] ?></td><td><?php echo $r['email'] ?></td>
		<td><?php echo $r['mob'] ?></td></tr>
</table>

				</div>
			
			<div class="col-md-1"></div>
	</div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-8">
			<table class="table table-striped">
				<tr><th>Message</th><th>Reply From Admin</th></tr>
				<?php 
$sq="select * from contact where email='$email'";
if($a=$obj->selectall($sq))
{
while($m=$a->fetch_assoc())
{
				 ?>
				<tr><td><?php echo $m['msg'] ?></td><td><?php echo $m['reply'] ?></td></tr>
			<?php }}
else 
{
	?>
<tr><td colpsan="2">No Message and reply to display </td></tr>
<?php	
}
 ?>
			</table>

		</div>
		<div class="col-md-1"></div>
	</div>
</body>
</html>