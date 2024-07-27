<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['submit'])) {

$email=$_POST['email'];
$uname=$_POST['uname'];
$pswd=$_POST['pswd'];
if (!empty($email) || !empty($uname)) {
$sql="select * from admin where email='$email' or username='$uname'";
$obj->login($sql,$pswd);
}
else{
echo "<center style='color:red'>Please Fill Your Username Or Email Id</center>";
}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN</title>
		<?php include"externalfiles.php"; ?>
		 
</head>
<body>

	<div class="container-fluid">
<div class="row mt-4">
	<div class="col-md-3"></div>
		<div class="col-md-6 text-center display-4">
			ADMIN LOGIN PANEL
<?php 
if(!empty($_COOKIE['notmatch']))
{
 ?>
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['notmatch']; ?>
</div>

<?php } ?>

<?php 
if(!empty($_COOKIE['wrong']))
{
 ?>
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['wrong']; ?>
</div>

<?php } ?>			
		</div>
			<div class="col-md-3"></div>
</div>
<div class="row mt-4">

	<div class="col-md-4"></div>
		<div class="col-md-4">
			<form class="border p-4" method="post">
			<div class="form-group">
				<input type="text" name="uname" placeholder="Username" class="form-control">
			</div>
			<div class="form-group text-center">
				<h2>OR</h2>
			</div>
			<div class="form-group">
				<input type="text" name="email" placeholder="Email" class="form-control">
			</div>
			
			<div class="form-group">
				<input type="password" name="pswd" placeholder="Password" required class="form-control">
			</div>
			<div class="form-group">
<button class="btn btn-outline-primary btn-block" name="submit" type="submit">LOGIN</button>
			</div>
			<div class="form-group text-center mt-4">
				<a href="index.php" class="text-success">BACK TO HOME</a>
			</div>
			
			</form>
		</div>
			<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-12"></div>
</div>
<div class="row">
	<div class="col-md-12"></div>
</div>
</div>
</body>
</html>