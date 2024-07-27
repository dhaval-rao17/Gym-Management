<?php 
include("operation.php");
if (isset($_POST['id'])) {
	$id=$_POST['id'];

$sql="delete from equipment where eid='$id'";
$obj=new operation();
if($obj->delete($sql))
{
	header("location:equipmentdetails.php");
}
}

 ?>