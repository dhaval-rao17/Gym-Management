<?php 
include("operation.php");
$obj=new operation();
if (!empty($_SESSION['sid'])) {
	 $sid=$_SESSION['sid'];
	if (isset($_POST['submit'])) {
	 $op=$_POST['op'];
		//echo "<br>";
	 $np=$_POST['np'];
		//echo "<br>";
	 $cp=$_POST['cp'];
	if ($np==$cp) {
		
$sql="select * from student where sid=$sid";
$sql2="update student set pswd='$np' where sid=$sid";
$obj->changepswd($sql,$sql2,$op);	
setcookie("pswdc","Password Changed Successfully",time()+60);
header("location:home.php");	
}
else
{

	setcookie("pswdnc","New & Confirm Password does not Match",time()+60);
}
}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password Patient</title>
	<meta charset="utf-8">
<meta name="viewport" width="device-width" initial-scale='1'>
<?php include("externalfiles.php"); ?>
	
</head>
<body>

<div class="row mt-4">
	<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php 
if(!empty($_COOKIE['pswd_error']))
{
 ?>
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['pswd_error']; ?>
</div>
<?php } ?>
	<?php 
if(!empty($_COOKIE['pswdnc']))
{
 ?>
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['pswdnc']; ?>
</div>
<?php } ?>
	<?php 
if(!empty($_COOKIE['pswdold']))
{
 ?>
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['pswdold']; ?>
</div>
<?php } ?>
<?php 

if(!empty($_COOKIE['pswd']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['pswd']; ?>
</div>

<?php } ?>
		</div>
			<div class="col-md-3"><a href="home.php">
				<button class="btn btn-outline-warning">BACK</button></a></div>
</div>
<div class="row mt-4">
	<div class="col-md-3"></div>
		<div class="col-md-6">
		<form action="" method="post">
	    	<fieldset class="border p-4">
	    		<legend class="w-auto p-2">Change Password</legend>
<div class="form-group">
	<label>Old Password</label>
	<input type="password" name="op" placeholder="Enter Old Password" class="form-control">
</div>
<div class="form-group">
	<label>New Password</label>
	<input type="password" name="np" placeholder="Enter New Password" class="form-control">
</div>
<div class="form-group">
	<label>Confirm Password</label>
	<input type="password" name="cp" placeholder="Enter Confirm Password" class="form-control">
</div>
<div class="form-group text-center">
	<button type="submit" class="btn btn-success " name="submit">CHANGE</button>
	<button type="reset" class="btn btn-warning">CLEAR</button>
</div>
	    	</fieldset>
	    	</form>
	
		</div>
			<div class="col-md-3"></div>
</div>

</body>
</html>
