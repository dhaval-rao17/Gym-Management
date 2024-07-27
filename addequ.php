<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
	$brand=$_POST['brand'];
	$qty=$_POST['qty'];
$w=$_POST['weight'];
$folder="images";
move_uploaded_file($_FILES['photo']['tmp_name'],"images/".basename($_FILES['photo']['name']));
$photo=basename($_FILES['photo']['name']);

$sql="insert into equipment(name,qty,weight,brand,photo) values('$name','$qty','$w','$brand','$photo')";
if($obj->signup($sql))
{
	setcookie("addequ","Equipment Added Successfully",time()+60);
	header("location:addequ.php");
}
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Equipments</title>
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
			<?php 
if(!empty($_COOKIE['addequ']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['addequ']; ?>
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

		<div class="display-4 text-center">ADD EQUIPMENT</div>
			<form class="m-4 border p-4" action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<input type="text" name="name" required class="form-control" placeholder="Equipment Name">
</div>
<div class="form-group">
<input type="number" name="qty" maxlength="3" required class="form-control" placeholder="Quantity">
</div>
<div class="form-group">
<input type="number" name="weight" required class="form-control" placeholder="Weight in KG">
</div>

<div class="form-group">
<select name="brand" class="form-control">
	<option>Select Brand</option>
	<option value="Powermax">Powermax</option>
	<option value="Cosco">Cosco</option>
	<option value="Star Trac">Star Trac</option>
	<option value="Paramount">Paramount</option>
	<option value="Steel Flex">Steel Flex</option>
	<option value="Tech Fit">Tech Fit</option>
	
</select>
</div>
<div class="form-group">Upload Photo
<input type="file" name="photo" required class="form-control" >
</div>

<button type="submit" name="submit" class='btn btn-outline-info btn-block '>ADD </button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>