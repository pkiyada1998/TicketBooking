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

$u=$_SESSION['user'];
$ch=mysqli_connect("localhost","root","");	
mysqli_select_db($ch,'project');
$f=mysqli_query($ch,"select * from record where user='$u'");
if($f)
 { 
    echo "<h3 style='margin-left:20px;color:blue'> -YOUR BOOKING HISTORY</h3><br>";
	echo "<table border='1' style='margin-left:20px;' >";
	echo "
		<tr>
		<th><pre> source </pre></th>
		<th><pre> destination </pre></th>
		<th><pre> date </pre></th>
		<th><pre> class </pre></th>
		<th><pre> passenger </pre></th>
		<th><pre> return ticket </pre></th>
		<th><pre> fare </pre></th>
		</tr>";
		
		while($arr=mysqli_fetch_array($f,MYSQL_BOTH))
	{
	    $a=$arr['source'];
	    $p=$arr['destination'];
	    $q=$arr['date'];
	    $r=$arr['class'];
	    $s=$arr['passenger'];
	    $t=$arr['returnticket'];
	    $u=$arr['fair'];
	    
		if($t=='on')
		{
			$t='yes';
		}
		else
		{
			$t='No';
		}
		
		echo "
		<tr>
		<th><pre>  $a  </pre></th>
		<th><pre>  $p  </pre></th>
		<th><pre>  $q  </pre></th>
		<th><pre>  $r  </pre></th>
		<th><pre>  $s  </pre></th>
		<th><pre>  $t  </pre></th>
		<th><pre>  $u  </pre></th>
		
		
		</tr>";
	}
	echo "</table>";
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



