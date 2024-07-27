<?php 
define("host", "127.0.0.1");
define("username","root");
define("password","");
define("database","kmc_gym");
session_start();
class operation   
{
public $con;
public $sql;
public $sql2;
function __construct()
{
	$this->con=new mysqli(host,username,password,database);
	if (!$this->con) {
		die("Connection Error".mysqli_connect_error());
	}
	else
	{
		//echo "connected";
	}
}

function signup($sql)
{
	$this->sql=$sql;
	if ($this->con->query($sql)) {
	
return true;
	}
}

function signin($sql,$pswd)
{
$this->sql=$sql;
$password=$pswd;
$x=$this->con->query($sql);
if($r=$x->fetch_assoc())
{
	$sid=$r['sid'];
	$name=$r['name'];
	$dbpswd=$r['pswd'];
	if ($dbpswd==$password) {
$_SESSION['sid']=$sid;
$_SESSION['name']=$name;
setcookie("signin","Dear $name You are Logged in Successfully",time()+60);
header("location:home.php");
	}
	else
	{
	setcookie("notmatch","Password Does Not Match",time()+60);
header("location:student.php");
	
	}
}
else
	{
	setcookie("wrong","Invalid Credentials",time()+60);
header("location:student.php");
	
	}
}


function login($sql,$pswd)
{
$this->sql=$sql;
$password=$pswd;
$x=$this->con->query($sql);
if($r=$x->fetch_assoc())
{
	$dbpswd=$r['pswd'];
	if ($dbpswd==$password) {
header("location:dashboard.php");
	}
	else
	{
	setcookie("notmatch","Password Does Not Match",time()+60);
header("location:student.php");
	
	}
}

else
	{
	setcookie("wrong","Invalid Credentials",time()+60);
header("location:student.php");
	
	}

}
function view($sql)
{
	$this->sql=$sql;
	$x=$this->con->query($sql);
	if($r=$x->fetch_assoc())
	{
return $r;
}
}

function pic($sql)
{
$this->sql=$sql;
if($this->con->query($sql))
{
setcookie("pic","Pic Uploaded Successfully",time()+60);
return true;
}

}
function changepswd($sql,$sql2,$op)
{

	$this->sql=$sql;
	$x=$this->con->query($sql);
	if ($r=$x->fetch_assoc()) {
		$dbp=$r['pswd'];
		if ($dbp==$op) {
	$this->sql2=$sql2;
	if ($this->con->query($sql2)) {
setcookie("pswd","Password Changed Successfully",time()+60);
}
else
{
	setcookie("pswd_error","Something Went Wrong",time()+60);
}
		}
		else{
setcookie("pswdold","Old Password Does Not Match",time()+60);	
		}
	}
}

function selectall($sql)
{
	$this->sql=$sql;
	$x=$this->con->query($sql);
	return $x;
}



function delete($sql)
{
	$this->sql=$sql;
	if($this->con->query($sql))
	{
setcookie("deleted","Successfully deleted",time()+60);
	return 1;
	}
}


}



 ?>