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
			
				<h2>Admin Login</h2>
				<form method="post">
	 			
  	<div class="form-group">
    <label for="email">USERNAME:</label>
    <input type="text" name="user" class="form-control" id="email" placeholder="username" required>
  </div>
    <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="p" class="form-control" id="pwd" placeholder="Enter password" required>
  </div>

    

  <!-- <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div> -->
  <input type="submit" name="sub" value="Login" class="btn btn-success">
</form>
			
				
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



<?php
error_reporting(0);
if(isset($_POST['sub']))
{
	$u=$_POST['user'];
	$p=$_POST['p'];
	
	$ch=mysqli_connect("localhost","root","");	
	mysqli_select_db($ch,'project');
	$f=mysqli_query($ch,"select * from admin where user='$u' AND pass='$p'");
	
	$n=mysqli_num_rows($f);
	if($n>0)
    {
      $row=mysqli_fetch_array($f,MYSQL_BOTH);
      $user=$row['user'];
      $pass=$row['pass'];
	  $name=$row['name'];
	
	  if($p==$pass&&$u==$user)	
      { 
        
        $_SESSION['user']=$name;
		echo "<script>window.location='admin1.php';</script>";
	  }
	}
    else
     {
       echo "<script>alert('username or password is incorrect');</script>";
     }	
	
}
?>