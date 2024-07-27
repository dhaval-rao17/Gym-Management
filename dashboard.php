<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php include("externalfiles.php"); 
$con=mysqli_connect("127.0.0.1","root","","kmc_gym");
?>
<style type="text/css">
		 	a:hover
		 	{
text-decoration: none;
		 	}
		 </style>
</head>
<body>
<div class="container-fluid mt-4">
	<div class="row">
		<div class="col-md-1"></div>
				<div class="col-md-9 display-4 ">WELCOME ADMIN</div>
		<div class="col-md-2">
			<form action="logout.php"><button class="btn btn-outline-warning">LOGOUT</button></form>
		</div>
	
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
<div class="col-md-3 p-4">
			<a href="studentdetails.php"><div style="height:100%;width:100%"class="bg-primary text-light text-center pt-4 ">
			<?php 
			$sql="select * from student";
			$sql1="select * from equipment";
			$sql2="select * from contact where status=0";
$num=mysqli_query($con,$sql);
	$num1=mysqli_query($con,$sql1);
$num2=mysqli_query($con,$sql2);
$n=mysqli_num_rows($num);
$n1=mysqli_num_rows($num1);
$n2=mysqli_num_rows($num2);
			 ?>
				<h3>No Of Students :<?php echo $n ?></h3>
			</div></a>
		</div>
			<div class="col-md-3 p-4">
			<a href="equipmentdetails.php"><div style="height:100%;width:100%"class="bg-info text-light text-center pt-4">
				<h3>No Of Equipments :<?php echo $n1 ?></h3>
			</div></a>	
			</div>
					<div class="col-md-3 p-4">
			<a href="messages.php"><div style="height:100%;width:100%"class="bg-warning text-light text-center pt-4">
				<h3>No Of Messages :<?php echo $n2 ?></h3>
			</div></a>	
			</div>
		</div>
</div>

</body>
</html>