<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['submit'])) {
	$id=$_POST['submit'];
$name=$_POST['tname'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$gen=$_POST['gen'];
	$exp=$_POST['exp'];

$sql="update trainer set name='$name',gen='$gen',experience='$exp',email='$email',mob='$mob' where tid='$id'";
if($obj->signup($sql))
{
	setcookie("updatetra","Updated Successfully",time()+60);
	header("location:trainerdetails.php");
}
}
if (isset($_POST['sub'])) {
	$id=$_POST['sub'];

$folder="images";
move_uploaded_file($_FILES['photo']['tmp_name'],"images/".basename($_FILES['photo']['name']));
$photo=basename($_FILES['photo']['name']);
$sql="update trainer set photo='$photo' where tid='$id'";
if($obj->signup($sql))
{
	setcookie("updatetra","Updated Successfully",time()+60);
	header("location:trainerdetails.php");
}
}



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Trainer</title>
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
			<div class="display-4 text-center">UPDATE TRAINER</div>
		
		</div>
<div class="col-md-4"></div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4 ">

			<form class="m-4 border p-4" action="" method="post" enctype="multipart/form-data">
<?php 
if(isset($_POST['id']))
{
	$id=$_POST['id'];
$sq="select * from trainer where tid=$id";
$r=$obj->view($sq);
 ?>
 <CENTER>	<img src="images/<?php echo $r['photo'] ?>" height="200" width="200"></CENTER>
				
<div class="form-group form-inline mt-2">
<input type="file" name="photo"></div>
<button type="submit" name="sub" value="<?php echo $r['tid'] ?>" class='btn btn-outline-info btn-block '>UPDATE PHOTO</button>

</form></div><div class="col-md-4 ">
<form action="" method="post" class="m-4 border p-4">	
<div class="form-group">
<input type="text" name="tname" class="form-control" value="<?php echo $r['name'] ?>">
</div>
<div class="form-group">Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="gen" <?php if($r['gen']!="female") echo "checked" ?> value="male">&nbsp;Male
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="gen"<?php if($r['gen']=="female") echo "checked" ?> value="female">&nbsp;Female
</div>

<div class="form-group">
<input type="email" name="email" class="form-control" value="<?php echo $r['email'] ?>">
</div>
<div class="form-group">
<input type="text" name="mob" class="form-control" value="<?php echo $r['mob'] ?>">
</div>
<div class="form-group">
<select name="exp" class="form-control">
	<option value="<?php echo $r['experience'] ?>"><?php echo $r['experience'] ?></option>
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

<button type="submit" name="submit" value="<?php echo $r['tid'] ?>" class='btn btn-outline-info btn-block '>UPDATE</button>
<?php } ?>
			</form>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

</body>
</html>