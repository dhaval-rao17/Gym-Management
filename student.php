<!DOCTYPE html>
<html>
<head>
	<title>SingUp SingIn</title>
	<?php include"externalfiles.php"; ?>
</head>
<body class="bg-light">
<div class="container-fluid">
	<div class="row mt-4">
		<div class="col-md-10"></div>
<div class="col-md-2">
	<a href="index.php"><button class="btn btn-outline-primary">BACK To HOME</button></a>

</div>
	</div>
	<hr>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<?php 
if(!empty($_COOKIE['signup']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['signup']; ?>
</div>

<?php } ?>
		</div>
<div class="col-md-2"></div>
<div class="col-md-4">
		<?php 
if(!empty($_COOKIE['login_error']))
{
 ?>
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['login_error']; ?>
</div>

<?php } ?>
<?php 
if(!empty($_COOKIE['empty']))
{
 ?>
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['empty']; ?>
</div>

<?php } ?>
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
<div class="col-md-1"></div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4 ">

		<div class="display-4 text-center">SIGNUP FORM</div>
			<form class="m-4 border p-4" action="signup.php" method="post">
<div class="form-group">
<input type="text" name="enroll" required class="form-control" placeholder="Enrollment No.">
</div>
<div class="form-group">
<input type="text" name="sname" required pattern="[a-zA-Z\s]+" title="Enter Valid Name Can't Enter Number in Name" class="form-control" placeholder="Full Name">
</div>
<div class="form-group">
<input type="email" name="email" required class="form-control" placeholder="Email Id">
</div>
<div class="form-group">
<input type="text" name="mob" required class="form-control" placeholder="Mobile No." pattern="(7|8|9)\d{9}"
title="Please Enter Valid Mobile Number">
</div>
<div class="form-group">
<input type="password" name="pswd" required class="form-control" placeholder="Password">
</div>
<div class="form-group">
<input type="password" name="cpswd" required class="form-control" placeholder="Confirm Password">
</div>
<button type="submit" name="submit" class='btn btn-outline-info btn-block '>SIGNUP</button>

			</form>
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-4 ">
			<div class="display-4 text-center" >SIGNIN FORM</div>
		
			<form class="m-4 border p-4" action="signin.php" method="post">
			<div class="form-group">
<input type="text"  name="enroll" class="form-control" placeholder="Enrollment No.">
</div>
<div class="form-group text-center">
	<h2>OR</h2>
</div>
<div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Email Id">
</div>
<div class="form-group text-center ">
	<h2>OR</h2>
</div>

<div class="form-group">
<input type="text" name="mob" pattern="(7|8|9)\d{9}" class="form-control" title="Please Enter Valid Mobile Number" placeholder="Mobile No.">
</div>
<div class="form-group">
<input type="password" name="pswd" required class="form-control" placeholder="Password">
</div>
<button type="submit" name="submit" class='btn btn-outline-primary btn-block'>SIGNIN</button>

			</form>
		</div>
	    <div class="col-md-1"></div>
	</div>
</div>

</body>
</html>