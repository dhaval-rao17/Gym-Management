<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['submit'])) {
	$enroll=$_POST['enroll'];
	$name=$_POST['sname'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$pswd=$_POST['pswd'];
	$cpswd=$_POST['cpswd'];
$sql="insert into student(enroll,name,email,mob,pswd) values('$enroll','$name','$email','$mob','$pswd')";
if($obj->signup($sql))
{
	setcookie("signup","SignUp Successfully",time()+60);
	header("location:student.php");
}
}


 ?>