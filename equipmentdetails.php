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
				<div class="col-md-9 display-4 ">Equipment Details</div>
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
if(!empty($_COOKIE['updateequ']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['updateequ']; ?>
</div>

<?php } ?>
			<?php 
if(!empty($_COOKIE['deleted']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['deleted']; ?>
</div>

<?php } ?>
		
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
	<tr><td colspan="8"class="text-right"><a href="addequ.php"><button class="btn btn-outline-primary">ADD EQUIPMENT</button></a></td></tr>
	<tr><th>Equipment</th><th>Quantity</th><th>Weight</th>
		<th>Brand</th><th>Photo</th><th colspan="3">Action</th>
	</tr>
	<?php 
include("operation.php");
$obj=new operation();
$sql="select * from equipment";
$x=$obj->selectall($sql);
while($r=$x->fetch_assoc())
{
?>
<tr><td><?php echo $r['name'] ?></td><td><?php echo $r['qty'] ?></td>
<td><?php echo $r['weight'] ?> KG</td><td><?php echo $r['brand'] ?></td><td><img src="images/<?php echo $r['photo'] ?>" height="100" width="100"></td>
<td><form action="updateequ.php" method="post"><button type="submit" name="id" value="<?php echo $r['eid'] ?>"class="btn btn-outline-success">UPDATE</button></form></td>

<td><form action="deleteequ.php" method="post"><button type="submit" name="id" value="<?php echo $r['eid'] ?>"class="btn btn-outline-danger">DELETE</button></form></td>

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