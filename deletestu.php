<?php 
include("operation.php");
if (isset($_POST['id'])) {
	$id=$_POST['id'];

$sql="delete from student where sid='$id'";
$obj=new operation();
if($obj->delete($sql))
{
	header("location:studentdetails.php");
}
}

 ?>