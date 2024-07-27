<?php 
include("operation.php");
if (isset($_POST['submit'])) {
	
	print_r($_FILES['photo']);
echo $photo=basename($_FILES['photo']['name']);
$folder="images";
$sid=$_SESSION['sid'];
$obj=new operation();
move_uploaded_file($_FILES['photo']['tmp_name'],"images/".basename($_FILES['photo']['name']));
$sql="update student set photo='$photo' where sid='$sid'";
if($obj->pic($sql))
{
header("location:home.php");

}

}


 ?>