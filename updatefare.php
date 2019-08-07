<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
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
      <a class="navbar-brand" href="#"><i class="fa fa-subway" aria-hidden="true"></i> Local Railway Ticket Booking</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home </a></li>
        <li><a href="#">About </a></li>
        <li><a href="#">Contact </a></li>
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



<div class="container">
		<div class="jumbotron">
		<div class="row">
			<div class="col-lg-12">
			
				
    
	


<?php	
	
		echo "<form method='post'>";
		echo "<div class='form-group'>
    <label for='sel1'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSOURCE:</label>
      <select class='form-control' id='sel1' name='s' style='width: 30%;margin-left:20px'>
        <option>Select station</option>
        <option>Panvel</option>
        <option>Khandeshwar</option>
        <option>Mansarovar</option>
        <option>Kharghar</option>
        <option>Belapur</option>
        <option>Seawoods</option>
        <option>Nerul</option>
        <option>Juinagar</option>
        <option>Sanpada</option>
        <option>Vashi</option>

      </select>
    </div>";
		
	echo "<div class='form-group'>
    <label for='sel1'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Destination:</label>
      <select class='form-control' id='sel1' name='d' style='width: 30%;margin-left:20px'>
        <option>Select station</option>
        <option>Panvel</option>
        <option>Khandeshwar</option>
        <option>Mansarovar</option>
        <option>Kharghar</option>
        <option>Belapur</option>
        <option>Seawoods</option>
        <option>Nerul</option>
        <option>Juinagar</option>
        <option>Sanpada</option>
        <option>Vashi</option>

      </select>
    </div>";
      
	 echo "<div class='form-group'>
		<label for='first name'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter new fare:</label>
		<input type='number' name='f' class='form-control' id='first name' ' required style='width: 30%;margin-left:20px'></div>";
	 
	 
	 echo "<h3 style='padding:20px'>&nbsp &nbsp &nbsp <input type='submit' name='sub' value='update' class='btn btn-success'</h3>";
	 echo "</form>";
	 
	
	 if(isset($_POST['sub']))
      {
		$s=$_POST['s'];
		$d=$_POST['d'];
		$fr=$_POST['f'];
		
        if($s==$d)
		{
		 echo "<script>alert('choose proper station');</script>"; 
		 echo "<script>window.location='updatefare.php';</script>";
		}			
		 
		$ch=mysqli_connect("localhost","root","");	
	    mysqli_select_db($ch,'project');
		
		if($s=='Panvel')
		{
		$x=mysqli_query($ch,"UPDATE fare SET Panvel='$fr' WHERE station='$d'");
		}
		if($s=='Khandeshwar')
		{
		$x=mysqli_query($ch,"UPDATE fare SET Khandeshwar='$fr' WHERE station='$d'");
		}
		if($s=='Mansarovar')
		{
		$x=mysqli_query($ch,"UPDATE fare SET Mansarovar='$fr' WHERE station='$d'");
		}
		if($s=='Kharghar')
		{
		$x=mysqli_query($ch,"UPDATE fare SET Kharghar='$fr' WHERE station='$d'");
		}
		if($s=='Belapur')
		{
		$x=mysqli_query($ch,"UPDATE fare SET Belapur='$fr' WHERE station='$d'");
		}
		if($s=='Seawoods')
		{
		$x=mysqli_query($ch,"UPDATE fare SET Seawoods='$fr' WHERE station='$d'");
		}
		if($s=='Nerul')
		{
		$x=mysqli_query($ch,"UPDATE fare SET Nerul='$fr' WHERE station='$d'");
		}
		if($s=='Sanpada')
		{
		$x=mysqli_query($ch,"UPDATE fare SET Sanpada='$fr' WHERE station='$d'");
		}
		if($s=='Juinagar')
		{
		$x=mysqli_query($ch,"UPDATE fare SET Juinagar='$fr' WHERE station='$d'");
		}
		if($s=='Vashi')
		{
		$x=mysqli_query($ch,"UPDATE fare SET Vashi='$fr' WHERE station='$d'");
		}
		
		if($x)
		{
			echo "<script>alert('sucsessfully updated fare table');</script>"; 
			echo "<script>window.location='admin1.php';</script>";
		}
		else
		{
			echo "<script>alert('operation fail');</script>";
			echo "<script>window.location='updatefare.php';</script>";			
		}
	  }	
		  
?>	
	
	

 
				
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



