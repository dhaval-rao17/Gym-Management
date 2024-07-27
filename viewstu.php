
<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
	<?php include"externalfiles.php"; ?>
</head>
<body class="bg-light">
<div class="container-fluid">
	<div class="row mt-4">
		<div class="col-md-10"></div>
<div class="col-md-2">
	<a href="studentdetails.php"><button class="btn btn-outline-primary">BACK</button></a>

</div>
	</div>
	<hr>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<?php 
if(!empty($_COOKIE['signup']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['signup']; ?>
</div>

<?php } ?>
		</div>
<div class="col-md-4"></div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 ">

		<div class="display-4 text-center">STUDENT DETAILS</div>
			<TABLE class="table table-bordered table-hover">
				<?php include("operation.php");
				$obj=new operation();
				if (isset($_POST['id'])) {
					$id=$_POST['id'];
					$sql="select * from student where sid='$id'";
					$r=$obj->view($sql);
				} ?>
				<tr>
					<td colspan="2" align="center">
						<img src="images/<?php echo $r['photo'] ?>" height="200" width="200">
				
					</td></tr>
<tr><th>Name</th><td><?php echo $r['name']; ?></td></tr>
<tr><th>Email</th><td><?php echo $r['email']; ?></td></tr>
<tr><th>Mobile</th><td><?php echo $r['mob']; ?></td></tr>
<tr><th>Password</th><td><?php echo $r['pswd']; ?></td></tr>

				</tr>
			</TABLE>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>