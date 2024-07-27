<?php $con=mysqli_connect("127.0.0.1","root","","kmc_gym"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<meta name="viewport" width="device-width" initial-scale='1'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<div class="container-fluid bg-dark" style="height:100%">
	<div class="row">
		<div class="col-md-2 mt-2">
			<a href="home.php"><button class="btn btn-outline-warning">BACK TO HOME</button></a>
		</div>
		
		<div class="col-md-9 "></div>
				<div class="col-md-1 mt-4">
					<button class="btn btn-outline-light" onclick="window.print()">PRINT</button>
				</div>
	</div>
<div class="row">
	<div class="col-md-12 mt-4">
		<div class="container mt-4 bg-light" style="width:100%;margin-bottom: 120px;">


	<?php 
$sql="select max(aid) as ap from application";
$x=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($x))
{
	$aid=$r['ap'];
$sql2="select * from application where aid='$aid'";
$y=mysqli_query($con,$sql2);
if ($s=mysqli_fetch_assoc($y)) {
session_start();
$_SESSION['sid']=$s['sid'];
$_SESSION['aid']=$aid;
$_SESSION['amount']=$s['amount'];
	?>
<table class="table table-borderless">
	<tr><th colspan="3"class="display-4">KMC Body-Fit</th><td align="right">Invoice No : <?php echo $s['aid'] ?></td></tr>
		<tr><td colspan="4" align="right">Date : <?php echo date('d-m-Y') ?></td></tr>
	<tr><th>Enrollment No.</th><td><?php echo $s['enroll'] ?></td>
		<th>Name</th><td><?php echo $s['name'] ?></td></tr>
		<tr><th>Email</th><td><?php echo $s['email'] ?></td>
			<th>Mobile</th><td><?php echo $s['mob'] ?></td></tr>
</table>
<?php $a=$s['amount'];
$sgst=($a*9)/100;
$cgst=$sgst;
$sum=$a+$sgst+$cgst;
$dis=($sum*10)/100;
$gt=$sum-$dis;
$_SESSION['gt']=$gt;


 ?>
<table class="table table-bordered">
	<tr><th>Package</th><th width="200px">Amount</th></tr>
	<tr><td><?php echo $s['package'] ?></td><td><?php echo $a; ?></td></tr>
<tr><th class="text-right">Total Amount</th><td><?php echo $a; ?></td></tr>
<tr><th class="text-right">SGST</th><td><?php echo $sgst ?> (9%)</td></tr>
<tr><th class="text-right">CGST</th><td><?php echo $cgst ?> (9%)</td></tr>
<tr><th class="text-right">Discount</th><td><?php echo $dis ?> (10%)</td></tr>
<tr><th class="text-right">Grand Total Amount</th><td><?php echo $gt ?></td></tr>
<tr><td colspan="2" class="text-center">Status : <code style="font-size: 20px"><?php echo$s['status'] ?></code></td></tr>

</table>
<a href="payment.php"><button class="btn btn-outline-dark mb-4">Proceed To Payment</button></a>

		</div>
	</div>
</div>	
</div>
<?php
}
}
?>	

</body>
</html>