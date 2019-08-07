
<?php
 session_start();
 if(isset($_SESSION['user'])!=1)
 {
	  echo "<script>window.location='home.php';</script>";
 }
?>

<!DOCTYPE html>
<html>
<head>
<style>
#n,#no,#t,#d,#c{color:red;font-size:20px}
</style>
<script>
function val()
{
	var ed=document.getElementById("exd").value;
	var cno=f.cn.value;
	var typ=f.type.value;
	var cv=f.cvv.value;
	
	if(cno.length!=16)
    {
		document.getElementById("no").innerHTML="Card no. must be 16 digit";
		return false;
	}
	
	else
	{
		document.getElementById("no").innerHTML="";
	}	

	
    if(typ=="Select card type")
	{
		document.getElementById("t").innerHTML="please select card type";
		return false;
	}
	
	else
	{
		document.getElementById("t").innerHTML="";
	}
	
	if(ed.length!=5)
	{
		document.getElementById("d").innerHTML="please enter month/year properly example- 02/24;
		return false;
	}
	else
	{
		document.getElementById("d").innerHTML="";
	}
	
	
	if(cv.length!=3)
	{
		document.getElementById("c").innerHTML="Length of cvv must be 3 digit";
		return false;
	}
	else
	{
		document.getElementById("c").innerHTML="";
	}
}	
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

	<title>Payment</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

	<link rel="stylesheet" type="text/css" href="payment.css">
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
        <li><a href="about.php">About </a></li>
        <li><a href="bookticket.php">Book Ticket </a></li>
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
			
				<h2>Payment</h2>
				<form method="post" onsubmit="return val()" name="f"">

        <div class="form-group">
    <label for="card holder name">card holder name:</label>
    <input type="text" name="name" class="form-control" id="card holder name" placeholder="john smith" required></div>&nbsp&nbsp&nbsp&nbsp<span id="n" ></span>
  	
  <div class="form-group">
    <label for="credit card numder">Credit card number:</label>
    <input type="Number"  name="cn" class="form-control" id="card number" placeholder="card number" required maxlength="16">&nbsp&nbsp&nbsp&nbsp<span id="no" ></span>
  </div>
  <div class="form-group">
    <label for="sel">Card type</label>
      <select class="form-control" id="sel" name="type">
        <option>Select card type</option>
        <option>Visa</option>
        <option>Master card</option>
        <option>Maestro</option>
        <option>American express</option>
        <option>Discover</option>
        <option>JCB</option>
        </select>
    </div>&nbsp&nbsp&nbsp&nbsp<span id="t" ></span>

<div class="form-group">
<label for="Expirydate">Expiry date:</label>
<input type="number" name="Expirydate" class="form-control" id="exd" placeholder="MM/YY" required>
</div>&nbsp&nbsp&nbsp&nbsp<span id="d" ></span>

  <div class="form-group">
    <label for="security code">CVV(Security code):</label>
    <input type="Number" name="cvv" class="form-control" id="security code" placeholder="security code" required>&nbsp&nbsp&nbsp&nbsp<span id="c" ></span>
  </div>
  
  <?php
    $fr=$_SESSION['fare'];
	echo "<h4 style='color:red'>&nbsp&nbspAmount to pay is  ".$fr."</h4>";
  ?>
  <br>

   <input type="submit" name="sub" value="Process Payment" class="btn btn-success">
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
	$n=$_POST['name'];
	$cn=$_POST['cn'];
	$t=$_POST['type'];
	$ed=$_POST['Expirydate'];
	$cvv=$_POST['cvv'];
	$ff=$_SESSION['fare'];
	
	$ch=mysqli_connect("localhost","root","");	
	mysqli_select_db($ch,'project');
	$f=mysqli_query($ch,"INSERT INTO payment VALUES('$n','$cn','$t','$ed','$cvv','$ff')");
	if($f)
	echo "<script>alert('payent done successfully');</script>";
	echo "<script>window.location='home.php';</script>";
}
?>