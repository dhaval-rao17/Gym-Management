<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['submit'])) {
	$id=$_POST['submit'];
	$enroll=$_POST['enroll'];
	$name=$_POST['sname'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
$sql="update student set enroll='$enroll',name='$name',email='$email',mob='$mob' where sid='$id'";
if($obj->signup($sql))
{
	setcookie("updatestu","Updated Successfully",time()+60);
	header("location:studentdetails.php");
}
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Student</title>
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
			
		</div>
<div class="col-md-4"></div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 ">

		<div class="display-4 text-center">UPDATE STUDENT</div>
			<form class="m-4 border p-4" action="" method="post">
<?php 
if(isset($_POST['id']))
{
	$id=$_POST['id'];
$sq="select * from student where sid=$id";
$r=$obj->view($sq);
 ?>
<div class="form-group">
<input type="text" name="enroll" class="form-control" value="<?php echo $r['enroll'] ?>">
</div>
<div class="form-group">
<input type="text" name="sname" class="form-control" value="<?php echo $r['name'] ?>">
</div>
<div class="form-group">
<input type="email" name="email" class="form-control" value="<?php echo $r['email'] ?>">
</div>
<div class="form-group">
<input type="text" name="mob" class="form-control" value="<?php echo $r['mob'] ?>">
</div>
<button type="submit" name="submit" value="<?php echo $r['sid'] ?>" class='btn btn-outline-info btn-block '>UPDATE</button>
<?php } ?>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>