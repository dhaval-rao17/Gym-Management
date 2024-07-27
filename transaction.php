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
				<div class="col-md-9 display-4 ">Transaction Details</div>
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
	<tr><th>Application Id</th><th>Student Id</th><th>Card Type</th><th>Name on Card</th><th>Amount</th>
	</tr>
	<?php 
include("operation.php");
$obj=new operation();
$sql="select * from transaction";
$x=$obj->selectall($sql);
while($r=$x->fetch_assoc())
{
?>
<tr><td><?php echo $r['aid'] ?></td><td><?php echo $r['sid'] ?></td>
<td><?php echo $r['ctype'] ?></td><td><?php echo $r['cname'] ?></td><td><?php echo $r['amount'] ?></td>
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