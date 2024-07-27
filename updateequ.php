<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['submit'])) {
	$id=$_POST['submit'];
$name=$_POST['name'];
	$qty=$_POST['qty'];
	$weight=$_POST['weight'];
	$brand=$_POST['brand'];

$sql="update equipment set name='$name',qty='$qty',weight='$weight',brand='$brand' where eid='$id'";
if($obj->signup($sql))
{
setcookie("updateequ","Updated Successfully",time()+60);
	header("location:equipmentdetails.php");
}
}
if (isset($_POST['sub'])) {
	$id=$_POST['sub'];

$folder="images";
move_uploaded_file($_FILES['photo']['tmp_name'],"images/".basename($_FILES['photo']['name']));
$photo=basename($_FILES['photo']['name']);
$sql="update equipment set photo='$photo' where eid='$id'";
if($obj->signup($sql))
{
	setcookie("updateequ","Updated Successfully",time()+60);
	header("location:equipmentdetails.php");
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
	<a href="equipmentdetails.php"><button class="btn btn-outline-primary">BACK</button></a>

</div>
	</div>
	<hr>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="display-4 text-center">UPDATE EQUIPMENT</div>
		
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
$sq="select * from equipment where eid=$id";
$r=$obj->view($sq);
 ?>
 <CENTER>	<img src="images/<?php echo $r['photo'] ?>" height="200" width="200"></CENTER>
				
<div class="form-group form-inline mt-2">
<input type="file" name="photo"></div>
<button type="submit" name="sub" value="<?php echo $r['eid'] ?>" class='btn btn-outline-info btn-block '>UPDATE PHOTO</button>

</form></div><div class="col-md-4 ">
<form action="" method="post" class="m-4 border p-4">	
<div class="form-group">
Name<input type="text" name="name" class="form-control" value="<?php echo $r['name'] ?>">
</div>

<div class="form-group">
Quantity<input type="number" name="qty" class="form-control" value="<?php echo $r['qty'] ?>">
</div>
<div class="form-group">
Weight<input type="number" name="weight" class="form-control" value="<?php echo $r['weight'] ?>">
</div>
<div class="form-group">
Brand<select name="brand" class="form-control">
	<option value="<?php echo $r['brand'] ?>"><?php echo $r['brand'] ?></option>
	<option value="Powermax">Powermax</option>
	<option value="Cosco">Cosco</option>
	<option value="Star Trac">Star Trac</option>
	<option value="Paramount">Paramount</option>
	<option value="Steel Flex">Steel Flex</option>
	<option value="Tech Fit">Tech Fit</option>
	</select>
</div>

<button type="submit" name="submit" value="<?php echo $r['eid'] ?>" class='btn btn-outline-info btn-block '>UPDATE</button>
<?php } ?>
			</form>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

</body>
</html>