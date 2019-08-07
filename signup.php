<?php
session_start();
		if(isset($_SESSION['user']))
		{
			echo "<script>alert('you are already log in');</script>";
			echo "<script>window.location='home.php';</script>";
		}
?>
<!DOCTYPE html>
<html>
<head>
<style>
#g,#p,#u,#ps,#ps1{color:red;font-size:20px}
</style>
<script>
function val()
{
	//var ph=document.getElementById("phone").value;
	var gen=f.gender.value;
	var phone=f.ph.value;
	var user=f.un.value;
	var pass=f.p.value;
	var pass1=f.p1.value;

    if(gen=="")
	{
		document.getElementById("g").innerHTML="please select gender";
		return false;
	}
	
	else
	{
		document.getElementById("g").innerHTML="";
	}
	
	
	var k=0;
 for(var i=0;i<phone.length;i++)
  { if(phone.charCodeAt(i)>=48&&phone.charCodeAt(i)<=57)
  
    {k=1;
	}
	else{
	k=0;
	break;
	}
  }
  if(k==0)
  { 
	document.getElementById("p").innerHTML="phone no. must contain only number";
    return false;
  }
  else
	{
		document.getElementById("p").innerHTML="";
	}
	
	
	
	if(phone.charAt(0)!=9&&phone.charAt(0)!=8&&phone.charAt(0)!=7)
	{	
		document.getElementById("p").innerHTML="num should start from 9,8 or 7";
		return false;
	}	
	else{
		document.getElementById("p").innerHTML="";
	}
	
	if(user.length<5||user.length>10)
    { 
		document.getElementById("u").innerHTML="username must be within 5 to 10 digit";
      return false;
    }
	else
	{
		document.getElementById("u").innerHTML="";
	}
	
	var l=0;
 for(var i=0;i<pass.length;i++)
  { if(pass.charCodeAt(i)>=32&&pass.charCodeAt(i)<=47||pass.charCodeAt(i)==64)
  
    {l=1;
	}
  }
  if(l==0)
  { 
	document.getElementById("ps").innerHTML="password must contain 1 one special character";
    return false;
  }
  else
	{
		document.getElementById("ps").innerHTML="";
	}
  
  var z=0;
 for(var i=0;i<pass.length;i++)
  { if(pass.charCodeAt(i)>64&&pass.charCodeAt(i)<91)
  
    {z=1;
	}
  }
  if(z==0)
  { 
	document.getElementById("ps").innerHTML="password must contain 1 capital letter";
    return false;
  }
  else
	{
		document.getElementById("ps").innerHTML="";
	}
  
  if(pass!=pass1)
  {
    document.getElementById("ps1").innerHTML="passsword must be match";
    return false;
   }
   else
	{
		document.getElementById("ps1").innerHTML="";
	}

  
}	
</script>


	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="SIGNUP.css">
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

	<div class="container">
		<div class="jumbotron">
		<div class="row">
			<div class="col-lg-12">
			
				<h2>Individual Registration</h2>
				<form method="post" onsubmit="return val()" name="f">
	<div class="form-group">
    <label for="first name">First Name:</label>
    <input type="text" name="fn" class="form-control" id="first name" placeholder="john" required></div>

    <div class="form-group">
    <label for="last name">Last Name:</label>
    <input type="text" name="ln" class="form-control" id="last name" placeholder="smith" required>
  </div>	
  <div class="form-group">
        <label for="last name">Gender:</label><br>
		<label for="male">Male </label>
		<input id="male" type="radio"  name="gender" value="male">
		<label for="female">Female </label>
		<input id="female" type="radio" name="gender" value="female">
		<label for="Other">Other </label>
		<input id="Other" type="radio" name="gender" value="other">
		&nbsp&nbsp&nbsp&nbsp<span id="g" ></span>
	</div> 	
	
    <br>	
  	<div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="em" class="form-control" id="email" placeholder="john.smith@example.com" required>
  </div>
   
  <div class="form-group">
    <label for="last name">Phone No:</label>
    <input type="text" name="ph" class="form-control" id="last name" placeholder="98********" maxlength="10" required> &nbsp&nbsp&nbsp&nbsp<span id="p" ></span>
  </div>

    <div class="form-group">
    <label for="first name">USERNAME:</label>
    <input type="text" name="un" class="form-control" id="first name" placeholder="username" required>
	&nbsp&nbsp&nbsp&nbsp<span id="u" ></span></div>
  
  
    <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="p" class="form-control" id="pwd" placeholder="Enter password" required>&nbsp&nbsp&nbsp&nbsp<span id="ps" ></span>
  </div>

    <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" name="p1" class="form-control" id="pwd" placeholder="Re-enter password" required>&nbsp&nbsp&nbsp&nbsp<span id="ps1" ></span>
  </div>

  <!--<div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>  
  -->
  <input type="submit" name="sub" value="SIGNUP" class="btn btn-success">
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
	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$un=$_POST['un'];
	$em=$_POST['em'];
	$ph=$_POST['ph'];
	$g=$_POST['gender'];
	$p=$_POST['p'];
	$p1=$_POST['p1'];
	
	$ep=md5($p);//password encription
	
	if($p==$p1)
	{
		$ch=mysqli_connect("localhost","root","");	
	 mysqli_select_db($ch,'project');
	 $f=mysqli_query($ch,"INSERT INTO login VALUES('$un','$ep','$fn','$ln','$em','$ph','$g')");
	 echo "<script>window.location='login.php';</script>";
	 
	}
	else
	{
		echo "<script>alert('signup up fail');</script>";
	}
	
	
	
	   
	
	
	
	
	
}	
?>


