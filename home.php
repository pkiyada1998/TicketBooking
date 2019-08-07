<!DOCTYPE html>
<html>
<head>

  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
  
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../home/home.html"><i class="fa fa-subway" aria-hidden="true"></i> Local Railway Ticket Booking</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home </a></li>
        <li><a href="about.php">About </a></li>
        <li><a href="#">Contact</a></li>
		<li><a href="bookticket.php">Book Ticket </a></li>
        <li><a href="faretable.php">Fare Table</a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php">Signup <i class="fa fa-user-plus"></i></a></li>
        
		<?php
		session_start();
		if(isset($_SESSION['user'])!=1)
		{
          echo "<li><a href='login.php'>Login <i class='fa fa-user'></i></a></li>";
        }
		else
		{
			echo "<li><a href='logout.php'>Logout <i class='fa fa-user'></i></a></li>";
		}
		?>
		
		
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<marquee class="marqueetop" bgcolor="black" scrolldelay=100><img src="banner.jpg" width="60" height="60"><b>Please help Indian Railways and Government of India in moving towards a digitized and cashless economy. Eradicate black money.<b></marquee>
<?php
if(isset($_SESSION['user']))
{
	$u=$_SESSION['user'];
	$ch=mysqli_connect("localhost","root","");	
	mysqli_select_db($ch,'project');
	$f=mysqli_query($ch,"select * from login where user='$u'");
	$row=mysqli_fetch_array($f,MYSQL_BOTH);
     $fname=$row['fname'];
     $lname=$row['lname'];
	 echo "<h4 style='padding-left:20px;color:blue'>WELCOME "." $fname"."$lname"."</h4>";
	 echo "<h6 align='right' style='padding-right:20px;'><a href='history.php' style='padding-left:20px;color:blue'>VIEW YOUR BOOKING HISTORY</a></h6>";
}
	

?>
<div class="container">
	<div class="jumbotron">
  <div class="row">
    <div class="col-md-4 b"><p class="para"><b>Local railway ticket booking</b> at its most basic, an online booking system which is the software that allows a potential customer to book and pay for an activity or service directly through our website. That means from the moment a customer decides they want to book to choosing a date, picking a time and paying for the booking, everything is handled online, greatly reducing the workload on your staff and removing the opportunity for double-bookings.<p>

           <p class="para"> Advanced systems like ours allow customers to book through a variety of methods online, including mobile, greatly expanding the potential for bookings for your business, and better leveraging an increasingly social internet.<p>
           </div>

  	<div class="col-md-4 b"><img src="train.jpg" class="img-thumbnail"></div>
  	<div class="col-md-4 b"><h3>News and Alert</h3>
  			<marquee class="blue" direction= "up" scrolldelay=150><p><b>All India Security Help line No. 182: This facility enables the Railway passengers to avail immediate security related assistance from any place including Trains and Railway premises.<b><p><hr>

  			<p class="red"><b>Up Harbour line services for CSTM leaving Panvel/Belapur/Vashi from 9.52 am to 3.26 pm 
            and Up Harbour line services leaving Bandra/Andheri from 10.44 am to 4.13 pm will remain suspended.<b><p><hr>

            <p class="blue"><b>Multiple logins at are not allowed.<b><p><hr>

            <p class="red"><b>Mumbai railway may increase the fare of local trains.<b><p> 
 </marquee>
  	</div>
  </div>
</div>

</div>



<div class="jumbotron" id="footer">
    <p>&copy copyright 2017 All rights reserved</p>
    
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>