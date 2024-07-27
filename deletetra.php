<?php 
include("operation.php");
if (isset($_POST['id'])) {
	$id=$_POST['id'];

$sql="delete from trainer where tid='$id'";
$obj=new operation();
if($obj->delete($sql))
{
	header("location:trainerdetails.php");
}
}

 ?>