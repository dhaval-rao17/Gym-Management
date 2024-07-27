
<?php
ob_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php include("externalfiles.php") ?>
</head>
<body>
<div class="container-fluid mt-4">
	<div class="row">
		<div class="col-md-1"></div>
				<div class="col-md-9 display-4 ">Messages/Queries</div>
				<div class="col-md-2">
	<a href="dashboard.php"><button class="btn btn-outline-primary">BACK To Dashboard</button></a>

</div>
		<div class="col-md-2">
			<form action="logout.php"><button class="btn btn-outline-warning">LOGOUT</button></form>
		</div>
	
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		<?php 
if(!empty($_COOKIE['sent']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['sent']; ?>
</div>

<?php } ?>	
</div>
<div class="col-md-2"></div>
	</div>
</div>
<div class="container-fluid mt-4">
	<div class="row">
		<div class="col-md-3">
			<ul class="nav nav-tabs flex-column text-center">
<li class="nav-item"><a href="studentdetails.php" class="nav-link">Student</a></li>
<li class="nav-item"><a href="trainerdetails.php"class="nav-link">Trainer</a></li>
<li class="nav-item"><a href="equipmentdetails.php" class="nav-link">Equipment</a></li>
<li class="nav-item"><a href="application.php" class="nav-link">Applications</a></li>
<li class="nav-item"><a href="transaction.php" class="nav-link">Transaction</a></li>
		</ul>
		</div>
<div class="col-md-8 p-4">
<table class="table table-hover table-bordered">
	<tr><th>Student Name</th><th>Subject</th><th>Message</th><th>Reply</th>
	</tr>
	<?php 
include("operation.php");
$obj=new operation();
$sql="select * from contact where status=0";
$x=$obj->selectall($sql);
while($r=$x->fetch_assoc())
{
?>
<tr><td><?php echo $r['name'] ?></td></td>
<td><?php echo $r['sub'] ?></td><td><?php echo $r['msg'] ?></td>
<td>
	<form method="post" class="form-group">
		<textarea name="reply" placeholder="Type Your Reply" class="form-control"></textarea>
		<button type="submit" class="btn btn-primary btn-block btn-sm" name="submit" value='<?php echo $r['mid'] ?>'>SEND</button>
	</form>
</td>
</tr>
<?php
}	 ?>


</table>

			</div>
		
			<div class="col-md-1"></div>
	</div>
</div>

</body>
</html>
<?php 


if (isset($_POST['submit'])) {
	$id=$_POST['submit'];
	$reply=$_POST['reply'];

$sql="update contact set reply='$reply', status=1 where mid=$id";
if($obj->signup($sql))
{
	setcookie("sent","Reply Sent Successfully",time()+60);
	header("location:messages.php");
}
}


 ?>
