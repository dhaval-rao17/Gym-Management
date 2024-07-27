<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['submit'])) {
	$id=$_POST['submit'];
	$enroll=$_POST['enroll'];
	$name=$_POST['sname'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$package=$_POST['package'];
$amount=0;
if($package=="1 month")
{
$amount+=500;
}
elseif($package=="3 month")
{
	$amount+=1300;
}
elseif($package=="6 month")
{
	$amount+=2500;
}
else
{
	$amount+=4500;
}




	$status="applied";

$sql="insert into application(sid,enroll,name,email,mob,package,amount,status)values($id,'$enroll','$name','$email','$mob','$package','$amount','$status')";
if($obj->signup($sql))
{
	setcookie("applied","Application Sent Successfully wait for Approval",time()+60);
	header("location:bill.php");
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Apply gym</title>
	<?php include"externalfiles.php"; ?>
</head>
<body class="bg-light">
<div class="container-fluid">
	<div class="row mt-4">
		<div class="col-md-10"></div>
<div class="col-md-2">
	<a href="home.php"><button class="btn btn-outline-primary">BACK</button></a>

</div>
	</div>
	<hr>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			
		</div>
<div class="col-md-4"></div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 ">

		<div class="display-4 text-center">APPLICATION FORM</div>
			<form class="m-4 border p-4" action="" method="post">
<?php 
if(!empty($_SESSION['sid']))
{
	$id=$_SESSION['sid'];
$sq="select * from student where sid=$id";
$r=$obj->view($sq);
 ?>
<div class="form-group"><label>	Enrollment No.</label>
<input type="text" name="enroll" readonly class="form-control" value="<?php echo $r['enroll'] ?>">
</div>
<div class="form-group"><label>	Name</label>
<input type="text" name="sname"readonly class="form-control" value="<?php echo $r['name'] ?>">
</div>
<div class="form-group"><label>	Email</label>
<input type="email" name="email"readonly class="form-control" value="<?php echo $r['email'] ?>">
</div>
<div class="form-group"><label>	Mobile</label>
<input type="text" name="mob" readonly class="form-control" value="<?php echo $r['mob'] ?>">
</div>

<div class="form-group">
<select name="package" class="form-control">
	<option>Select Package</option>
	<option value="1 month">1 Month</option>
	<option value="3 month">3 Month</option>
	<option value="6 month">6 Month</option>
	<option value="1 year">1 Year</option>
	
</select>
</div>

<button type="submit" name="submit" value="<?php echo $r['sid'] ?>" class='btn btn-outline-info btn-block '>APPLY </button>
<?php } ?>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>