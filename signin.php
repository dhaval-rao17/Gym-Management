<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['submit'])) {
	$enroll=$_POST['enroll'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$pswd=$_POST['pswd'];
	if (!empty($email) || !empty($mob) || !empty($enroll)) {
$sql="select * from student where email='$email' or mob='$mob' or enroll='$enroll'";
$obj->signin($sql,$pswd);
}
else
{
	header("location:student.php");
	setcookie("empty","Please fill Mobile No or Enrollment No or Email For Login",time()+60);
}

}


 ?>