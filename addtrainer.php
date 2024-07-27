<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['submit'])) {
    $name=$_POST['tname'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$gen=$_POST['gen'];
	$exp=$_POST['exp'];

$folder="images";
move_uploaded_file($_FILES['photo']['tmp_name'],"images/".basename($_FILES['photo']['name']));
$photo=basename($_FILES['photo']['name']);

$sql="insert into trainer(name,gen,mob,email,experience,photo) values('$name','$gen','$mob','$email','$exp','$photo')";
if($obj->signup($sql))
{
	setcookie("addtra","Trainer Added Successfully",time()+60);
	header("location:addtrainer.php");
}
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Trainer</title>
	<?php include"externalfiles.php"; ?>
</head>
<body class="bg-light">
<div class="container-fluid">
	<div class="row mt-4">
		<div class="col-md-10"></div>
<div class="col-md-2">
	<a href="trainerdetails.php"><button class="btn btn-outline-primary">BACK</button></a>

</div>
	</div>
	<hr>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<?php 
if(!empty($_COOKIE['addtra']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['addtra']; ?>
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

		<div class="display-4 text-center">ADD TRAINER</div>
			<form class="m-4 border p-4" action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<input type="text" name="tname" class="form-control" placeholder="Full Name" required  pattern="[a-zA-Z\s]+" title="Enter Valid Name Can't Enter Number in Name">
</div>
<div class="form-group">Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="gen" value="male">&nbsp;Male
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="gen" value="female">&nbsp;Female
</div>
<div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Email Id">
</div>
<div class="form-group">
<input type="text" name="mob" class="form-control" placeholder="Mobile No." pattern="(7|8|9)\d{9}"
title="Please Enter Valid Mobile Number">
</div>
<div class="form-group">
<select name="exp" class="form-control">
	<option>Select Experience</option>
	<option value="6 month">6 Month</option>
	<option value="1 year">1 Year</option>
	<option value="2 year">2 Year</option>
	<option value="3 year">3 Year</option>
	<option value="4 year">4 Year</option>
	<option value="5 year">5 Year</option>
	<option value="more than 5">More than 5
	</option>
</select>
</div>
<div class="form-group">Upload Photo
<input type="file" name="photo" class="form-control" >
</div>

<button type="submit" name="submit" class='btn btn-outline-info btn-block '>ADD </button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>