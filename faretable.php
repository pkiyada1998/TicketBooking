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

<?php
$ch=mysqli_connect("localhost","root","");	
mysqli_select_db($ch,'project');
$f=mysqli_query($ch,"select * from fare");
 if($f)
 { 
    echo "<h3 style='margin-left:20px;color:blue'> -FARE FOR SECOND CLASS Ticket</h3><br>";
	echo "<table border='1' style='margin-left:20px;' >";
	echo "
		<tr>
		<th><pre> station </pre></th>
		<th><pre> Panvel </pre></th>
		<th><pre> Khandeshwar </pre></th>
		<th><pre> Mansarovar </pre></th>
		<th><pre> Kharghar </pre></th>
		<th><pre> Belapur </pre></th>
		<th><pre> Seawoods </pre></th>
		<th><pre> Nerul </pre></th>
		<th><pre> Juinagar </pre></th>
		<th><pre> Sanpada </pre></th>
		<th><pre> Vashi </pre></th>
		
		</tr>";
	
    while($arr=mysqli_fetch_array($f,MYSQL_BOTH))
	{
	    $a=$arr['station'];
	    $p=$arr['Panvel'];
	    $q=$arr['Khandeshwar'];
	    $r=$arr['Mansarovar'];
	    $s=$arr['Kharghar'];
	    $t=$arr['Belapur'];
	    $u=$arr['Seawoods'];
	    $v=$arr['Nerul'];
	    $w=$arr['Juinagar'];
	    $x=$arr['Sanpada'];
	    $y=$arr['Vashi'];
		
		
		echo "
		<tr>
		<th><pre>  $a  </pre></th>
		<th><pre>  $p  </pre></th>
		<th><pre>  $q  </pre></th>
		<th><pre>  $r  </pre></th>
		<th><pre>  $s  </pre></th>
		<th><pre>  $t  </pre></th>
		<th><pre>  $u  </pre></th>
		<th><pre>  $v  </pre></th>
		<th><pre>  $w  </pre></th>
		<th><pre>  $x  </pre></th>
		<th><pre>  $y  </pre></th>
		
		</tr>";
	}
	echo "</table>";
 } 
 
 echo"<br><br><br>";
 
 $f=mysqli_query($ch,"select * from fare");
 if($f)
 { 
    echo "<h3 style='margin-left:20px;color:blue'>-FARE FOR FIRST CLASS Ticket</h3><br>";
	echo "<table border='1' style='margin-left:20px;'>";
	echo "
		<tr>
		<th><pre> station </pre></th>
		<th><pre> Panvel </pre></th>
		<th><pre> Khandeshwar </pre></th>
		<th><pre> Mansarovar </pre></th>
		<th><pre> Kharghar </pre></th>
		<th><pre> Belapur </pre></th>
		<th><pre> Seawoods </pre></th>
		<th><pre> Nerul </pre></th>
		<th><pre> Juinagar </pre></th>
		<th><pre> Sanpada </pre></th>
		<th><pre> Vashi </pre></th>
		
		</tr>";
	
    while($arr=mysqli_fetch_array($f,MYSQL_BOTH))
	{
	    $a=$arr['station'];
	    $p=$arr['Panvel'];
	    $q=$arr['Khandeshwar'];
	    $r=$arr['Mansarovar'];
	    $s=$arr['Kharghar'];
	    $t=$arr['Belapur'];
	    $u=$arr['Seawoods'];
	    $v=$arr['Nerul'];
	    $w=$arr['Juinagar'];
	    $x=$arr['Sanpada'];
	    $y=$arr['Vashi'];
		
		$p=$p*3;
		$q=$q*3;
		$r=$r*3;
		$s=$s*3;
		$t=$t*3;
		$u=$v*3;
		$v=$v*3;
		$w=$w*3;
		$x=$x*3;
		$y=$y*3;
		
		
		
		echo "
		<tr>
		<th><pre>  $a  </pre></th>
		<th><pre>  $p </pre></th>
		<th><pre>  $q  </pre></th>
		<th><pre>  $r  </pre></th>
		<th><pre>  $s  </pre></th>
		<th><pre>  $t  </pre></th>
		<th><pre>  $u  </pre></th>
		<th><pre>  $v  </pre></th>
		<th><pre>  $w  </pre></th>
		<th><pre>  $x  </pre></th>
		<th><pre>  $y  </pre></th>
		
		</tr>";
	}
	echo "</table>";
 } 
 
 echo"<br><br>";



?>
<h2 style="color:red;margin:20px">*Kindly note that the fare shown in above table is only for single side,if you book return ticket then you have to pay fare multiply by 2.</h2>
<div class="jumbotron" id="footer">
    <p>&copy copyright 2017 All rights reserved</p>
    
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>