<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['submit'])) {
	$enroll=$_POST['enroll'];
	$name=$_POST['sname'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$pswd="12345";

$sql="insert into student(enroll,name,email,mob,pswd) values('$enroll','$name','$email','$mob','$pswd')";
if($obj->signup($sql))
{
	setcookie("addstu","Student Added Successfully",time()+60);
	header("location:addstu.php");
}
}


 ?>
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
if(!empty($_COOKIE['addstu']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['addstu']; ?>
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

		<div class="display-4 text-center">ADD STUDENT</div>
			<form class="m-4 border p-4" action="" method="post">
<div class="form-group">
<input type="text" name="enroll" required class="form-control" placeholder="Enrollment No.">
</div>
<div class="form-group">
<input type="text" name="sname" required  pattern="[a-zA-Z\s]+" title="Enter Valid Name Can't Enter Number in Name"class="form-control" placeholder="Full Name">
</div>
<div class="form-group">
<input type="email" name="email" required class="form-control" placeholder="Email Id">
</div>
<div class="form-group">
<input type="text" name="mob" class="form-control" placeholder="Mobile No." pattern="(7|8|9)\d{9}"
title="Please Enter Valid Mobile Number">
</div>


<button type="submit" name="submit" class='btn btn-outline-info btn-block '>ADD </button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>