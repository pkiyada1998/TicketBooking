<?php
 session_start();
 if(isset($_SESSION['user'])!=1)
 {
	  echo "<script>window.location='admin.php';</script>";
 }
?>
<!DOCTYPE html>
<html>
<head>
<style>
</style>
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


<div align="left">
<?php
echo "<h1 style='padding:20px;color:red' align='center'>*OPERATIONS*</h1>";

echo "<form method='post'>";
echo "<hr>";
echo "<h3  style='padding:20px'>1. view booking history &nbsp &nbsp &nbsp<input type='submit' name='sub' value='view' class='btn btn-success'></h3>";

echo "<hr>";

echo "<h3  style='padding:20px'>2. update ticket fare &nbsp &nbsp &nbsp<input type='submit' name='sub' value='update' class='btn btn-success'></h3>";

echo "<hr>";

echo "<h3  style='padding:20px'>3. view all user detail &nbsp &nbsp &nbsp<input type='submit' name='sub' value='show' class='btn btn-success'></h3>";

echo "<hr>";

echo "<h3  style='padding:20px'>4. manage the users &nbsp &nbsp &nbsp<input type='submit' name='sub' value='manage' class='btn btn-success'></h3>";

echo "<hr>";

echo "<h3  style='padding:20px'>5. See payment detail  &nbsp &nbsp &nbsp<input type='submit' name='sub' value='see' class='btn btn-success'></h3>";

echo "</form>";
?>
</div>
<?php
error_reporting(0);
if(isset($_POST['sub']))
{
	
	if($_POST['sub']=='view')
	{
		$ch=mysqli_connect("localhost","root","");	
	    mysqli_select_db($ch,'project');
	    $f=mysqli_query($ch,"select * from record");
		if($f)
        {
			echo "<table border='1' style='margin-left:20px;'";	
			echo "
				<tr>
				<th><pre> Username </pre></th>
				<th><pre> Source </pre></th>
				<th><pre> Destination </pre></th>
				<th><pre> Date </pre></th>
				<th><pre> Class </pre></th>
				<th><pre> No.Passenger </pre></th>
				<th><pre> Return </pre></th>
				<th><pre> Fare </pre></th>
				<th><pre> action </pre></th>
				</tr>";
	    }
		
		
		while($arr=mysqli_fetch_array($f,MYSQL_BOTH))
	 {
	    $a=$arr['user'];
	    $p=$arr['source'];
	    $q=$arr['destination'];
	    $r=$arr['date'];
	    $s=$arr['class'];
	    $t=$arr['passenger'];
	    $u=$arr['returnticket'];
	    $v=$arr['fair'];
	    
		if($u=='on')
		{
			$u='yes';
		}
		else
		{
			$u='No';
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
		<th><pre>  $v  </pre></th>
		<th><pre><a href='delete.php?user=$a'>&nbspDelete</a></pre></th>
		
		
		</tr>";
	 }
	 echo "</table>";
	}
	
	 
	 
	 
	if($_POST['sub']=='update')
	{
		echo "<script>window.location='updatefare.php';</script>";
	}	  
	
	
	 
	 
	 
	if($_POST['sub']=='show')
	{
		
		$ch=mysqli_connect("localhost","root","");	
	    mysqli_select_db($ch,'project');
	    $f=mysqli_query($ch,"select * from login");
		if($f)
        {
			echo "<table border='1' style='margin-left:20px;'";	
			echo "
				<tr>
				<th><pre> user </pre></th>
				<th><pre> pass </pre></th>
				<th><pre> fname </pre></th>
				<th><pre> lname </pre></th>
				<th><pre> email </pre></th>
				<th><pre> phone </pre></th>
				<th><pre> gender </pre></th>
				</tr>";
	    }
		
		
		while($arr=mysqli_fetch_array($f,MYSQL_BOTH))
	 {
	    $a=$arr['user'];
	    $p=$arr['pass'];
	    $q=$arr['fname'];
	    $r=$arr['lname'];
	    $s=$arr['email'];
	    $t=$arr['phone'];
	    $u=$arr['gender'];
	    
	    
		
		
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
	
	
	
	
	if($_POST['sub']=='manage')
	{
		
		$ch=mysqli_connect("localhost","root","");	
	    mysqli_select_db($ch,'project');
	    $f=mysqli_query($ch,"select * from login");
		if($f)
        {
			echo "<table border='1' style='margin-left:20px;'";	
			echo "
				<tr>
				<th><pre> user </pre></th>
				<th><pre> pass </pre></th>
				<th><pre> fname </pre></th>
				<th><pre> lname </pre></th>
				<th><pre> email </pre></th>
				<th><pre> phone </pre></th>
				<th><pre> gender </pre></th>
				<th><pre> action </pre></th>
				</tr>";
	    }
		
		
		while($arr=mysqli_fetch_array($f,MYSQL_BOTH))
	 {
	    $a=$arr['user'];
	    $p=$arr['pass'];
	    $q=$arr['fname'];
	    $r=$arr['lname'];
	    $em=$arr['email'];
	    $t=$arr['phone'];
	    $u=$arr['gender'];
	    
	    
		
		
		echo "
		<tr>
		<th><pre>  $a  </pre></th>
		<th><pre>  $p  </pre></th>
		<th><pre>  $q  </pre></th>
		<th><pre>  $r  </pre></th>
		<th><pre>  $em  </pre></th>
		<th><pre>  $t  </pre></th>
		<th><pre>  $u  </pre></th>
		<th><pre><a href='remove.php?email=$em'>&nbspRemove</a></pre></th>
		
		</tr>";
	 }
	 echo "</table>";
		
	}
	
	
	
	if($_POST['sub']=='see')
	{
		
		$ch=mysqli_connect("localhost","root","");	
	    mysqli_select_db($ch,'project');
	    $f=mysqli_query($ch,"select * from payment");
		if($f)
        {
			echo "<table border='1' style='margin-left:20px;'";	
			echo "
				<tr>
				<th><pre> Name </pre></th>
				<th><pre> Card number </pre></th>
				<th><pre> Type </pre></th>
				<th><pre> Date </pre></th>
				<th><pre> Cvv </pre></th>
				<th><pre> Amount </pre></th>
				</tr>";
	    }
		
		
		while($arr=mysqli_fetch_array($f,MYSQL_BOTH))
	 {
	    $a=$arr['name'];
	    $p=$arr['number'];
	    $q=$arr['type'];
	    $r=$arr['date'];
	    $s=$arr['cvv'];
	    $t=$arr['amount'];
	    
	    
	    
		echo "
		<tr>
		<th><pre>  $a  </pre></th>
		<th><pre>  $p  </pre></th>
		<th><pre>  $q  </pre></th>
		<th><pre>  $r  </pre></th>
		<th><pre>  $s  </pre></th>
		<th><pre>  $t  </pre></th>
		</tr>";
	 }
	 echo "</table>";
		
	}
	
	
	
	
}

?>

<div class="jumbotron" id="footer">
    <p>&copy copyright 2017 All rights reserved</p>
    
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>


