

<!DOCTYPE html>
<html>
<head>
	<title>College Gym Management</title>
	<?php include"externalfiles.php"; ?>
  <style type="text/css">
    .headericon
    {
      height:30px;width: 30px;
    }
    html{
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="bg-primary">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <?php 
if(!empty($_COOKIE['logout']))
{
 ?>
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert"
  name="button">&times;</button>
<?php echo $_COOKIE['logout']; ?>
</div>

<?php } ?>
<?php 
if(!empty($_COOKIE['msg']))
{
 ?>
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert"
  name="button">&times;</button>
<?php echo $_COOKIE['msg']; ?>
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
<div class="col-md-3"></div>
  </div>
</div>

<div class="container-fluid mt-4">
<div class="row">
	<div class="col-md-12">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#"><span class="display-4 text-danger">KMC BODY-FIT</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-primary" href="#home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary" href="#equipment">Equipments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary" href="#trainer">Trainers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary" href="#pricing">Packages</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-primary" href="#contact">Contact</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-primary" href="student.php">SignUp/SignIn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary" href="admin.php">Admin</a>
      </li>
      
         </ul>
  </div>
</nav>
		</div>
	</div>
</div>	

<div class="row" id="home">
	<div class="col-md-12">
   <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/pushups.png" class="d-block w-100" style="height:600px;">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-danger">Aerobics And Dance</h5>
          <p class="text-danger">Special Classes for Girls & Safe Secure Environment</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/B.jpg" class="d-block w-100"style="height:600px;" >
        <div class="carousel-caption d-none d-md-block">
          <h5>Weight Gain & Strength</h5>
          <p>High Quality Equipment and Best Trainer For Strength</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/C.jpg" class="d-block w-100" style="height:600px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Weight Loss & Warmup </h5>
          <p>Best Machines for Wight Loss And Running,cycling & wampups</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  </div>
</div>	

<div class="row mt-4" id="about">
	<div class="col-md-12 text-center">
   <span class="display-4 text-light">About Our Gym</span>
</div>
</div>

<div class="row mt-4 mb-4">
	<div class="col-md-8">
   <code style="font-size:25px;color:white">
   <pre>
     At Gym and Fitness,  we believe that  fitness and wellbeing   are  the
     cornerstones of a full  and vibrant life. Established in 2022, we began 
     our journey as a family-ownedbusiness dedicated to providing exceptional
     gym equipment at  affordable prices. But, we  dreamed bigger than just 
     being an ordinary fitness equipment supplier; we aspired to lead the 
     industry.




     Join us in our mission to improve lives through fitness and wellness,
     because at Gym and Fitness, your health is our passion.</pre></code>

  </div>
    <div class="col-md-4">
      <img src="images/DHAVAL.jpg" class="img-thumbnail" style="height: 500px;width:350px">

    </div>
</div>

<div class="row mt-4" id="services">
  <div class="col-md-12 text-center">
   <span class="display-4 text-light">Our Gym Services</span>
</div>
</div>


<div class="row mt-4">
	<div class="col-md-4 text-center mt-4 p-4">
   <img src="images\pay.png" style="height: 250px;width:250px" class="rounded-circle"> 
   <h1>Safe Payment</h1>
  </div>
<div class="col-md-4 text-center mt-4 p-4">
   <img src="images\globe.png" style="height: 250px;width:250px" class="rounded-circle"> 
   <h1>On location Training</h1>
  </div>
<div class="col-md-4 text-center mt-4 p-4">
   <img src="images\chat.png" style="height: 250px;width:250px" class="rounded-circle"> 
   <h1>Query Feedback</h1>
  </div>


</div>	
<div class="row mt-4" id="equipment">
  <div class="col-md-12 text-center">
   <span class="display-4 text-light">Our Gym Equipments</span>
</div>
</div>
<div class="row mt-4">
	<div class="col-md-3 text-center">
   <img src="images\dumble.jpg" style="height: 200px;width:250px"> 
  </div>
<div class="col-md-3 text-center">
  <img src="images\cycle.jpg" style="height: 200px;width:250px"> 
</div>
<div class="col-md-3 text-center">
  <img src="images\ba.jpg" style="height: 200px;width:250px"> 
</div>
<div class="col-md-3 text-center">
  <img src="images\ab.webp" style="height: 200px;width:250px"> 
</div>
</div>	
<div class="row mt-4">
  <div class="col-md-3 text-center">
   <img src="images\fg.jpeg" style="height: 200px;width:250px"> 
  </div>
<div class="col-md-3 text-center">
  <img src="images\hg.jpg" style="height: 200px;width:250px"> 
</div>
<div class="col-md-3 text-center">
  <img src="images\mn.jpeg" style="height: 200px;width:250px"> 
</div>
<div class="col-md-3 text-center">
  <img src="images\dumble.jpg" style="height: 200px;width:250px"> 
</div>
</div>
<div class="row mt-4" id="trainer">
  <div class="col-md-12 text-center">
   <span class="display-4 text-light">Our Gym Trainers</span>
</div>
</div>

<div class="row mt-4 mb-4">
  <div class="col-md-4 text-center">
    <img src="images\annu.jpeg" style="height: 300px;width:350px"> 
  </div>
    <div class="col-md-4 text-center">
      <img src="images\john.jpg" style="height: 300px;width:350px"> 

    </div>
      <div class="col-md-4 text-center">
        <img src="images\hrithik.jpg" style="height: 300px;width:350px"> 

      </div>
</div>
<div class="row mt-4" id="pricing">
  <div class="col-md-12 text-center">
   <span class="display-4 text-light">Our Gym Pricing</span>
</div>
</div>

<div class="row mt-4">
  <div class="col-md-3 text-center">
<table class="table">
  <tr><th>1 MONTH</th></tr>
  <tr><td>&#8377; 500</td></tr>
  <tr><td>Supplements 10gm</td></tr>
  <tr><td>Energy Drink 100ml</td></tr>
  <tr><td>Full Strength Workout</td></tr>
    <tr><td>Cardio & Weight Loss</td></tr>
    <tr><td>Weekly Dance Class</td></tr>
</table>

  </div>
<div class="col-md-3 text-center">
  <table class="table">
  <tr><th>3 MONTH</th></tr>
  <tr><td>&#8377; 1300</td></tr>
  <tr><td>Supplements 20gm</td></tr>
  <tr><td>Energy Drink 100ml</td></tr>
  <tr><td>Full Strength Workout</td></tr>
    <tr><td>Cardio & Weight Loss</td></tr>
    <tr><td>Weekly Dance Class</td></tr>
</table>

</div>
<div class="col-md-3 text-center">
  <table class="table">
  <tr><th>6 MONTH</th></tr>
  <tr><td>&#8377; 2500</td></tr>
  <tr><td>Supplements 30gm</td></tr>
  <tr><td>Energy Drink 100ml</td></tr>
  <tr><td>Full Strength Workout</td></tr>
    <tr><td>Cardio & Weight Loss</td></tr>
    <tr><td>Weekly Dance Class</td></tr>
</table>

</div>
<div class="col-md-3 text-center">
  <table class="table">
  <tr><th>1 YEAR</th></tr>
  <tr><td>&#8377; 4500</td></tr>
  <tr><td>Supplements 40gm</td></tr>
  <tr><td>Energy Drink 100ml</td></tr>
  <tr><td>Full Strength Workout</td></tr>
    <tr><td>Cardio & Weight Loss</td></tr>
    <tr><td>Weekly Dance Class</td></tr>
</table>

</div>
</div>

<div class="row mt-4" id="contact">
  <div class="col-md-12 text-center">
   <span class="display-4 text-light">Contact Us</span>
</div>
</div>
<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-5 p-4">
      <table class="table table-borderless">
        <tr><th>Address :</th><td>Janpriya Complex,<br>
        Tedi Pulia, Lucknow,<br>226022, Uttar Pradesh,INDIA
      </td></tr>
      <tr><th>Email</th><td>admin@kmcbodyfit.com</td></tr>
      <tr><th>Mobile</th><td>7234997796,9554045822</td></tr>
      <tr><th>Social Media</th><td>
<img class="headericon" src="images/facebook_icon.png">
    <img class="headericon" src="images/googleplus_icon.png">
    <img class="headericon" src="images/linkedin_icon.png">
    <img class="headericon" src="images/twitter_icon.png">
      </td></tr>
      </table>
    </div>
      <div class="col-md-5 p-4">
        <form action="contact.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control"name="name" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control"name="email" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <input type="text"class="form-control" name="sub" placeholder="Enter Subject">
          </div>
          <div class="form-group">
<textarea class="form-control" name="msg" placeholder="Enter Message"></textarea>
          </div>
          <div class="form-group">
<button class="btn btn-success btn-block" name="submit">SEND</button>
          </div>
        </form>


      </div>
      <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-12 text-center mt-4 mb-4 text-light">
   <h4> KMC Body Fit &copy; All rights reserved</h4>
  </div>
</div>
</div>
</body>
</html>