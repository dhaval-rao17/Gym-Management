<?php 
include("operation.php");
if (isset($_POST['submit'])) {
	echo $name=$_POST['name'];
	$email=$_POST['email'];
	$sub=$_POST['sub'];
	$msg=$_POST['msg'];

$sql="insert into contact(name,email,sub,msg) values('$name','$email','$sub','$msg')";
echo "ok";
$obj=new operation();
if($obj->signup($sql))
{
	echo "okq1";
	setcookie("msg","Message sent Successfully",time()+60);
	header("location:index.php");
}
}

 ?>