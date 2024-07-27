<?php 
session_start();
if(session_destroy())
{
	setcookie("logout","Logout Successfully",time()+60);
header("location:index.php");

 }
?>