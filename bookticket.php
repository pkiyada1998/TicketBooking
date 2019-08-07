<?php
 session_start();
 if(isset($_SESSION['user'])!=1)
 {
	  echo "<script>window.location='login.php';</script>";
 }
?>
<!DOCTYPE html>
<html>
<head>
<style>
#s1,#s2,#d,#c{color:red;font-size:20px}
</style>

<script>
function val()
{
	var select1=document.getElementById("sel1").value;
	var select2=document.getElementById("sel2").value;
	var date=document.getElementById("date").value;
	var cls=f.class.value;
	
	if(select1=="Select-station")
	{
		document.getElementById("s1").innerHTML="please enter source station";
		return false;
	}
	
	else
	{
		document.getElementById("s1").innerHTML="";
	}
	
	
	if(select2=="Select-station")
	{
		document.getElementById("s2").innerHTML="please enter destination station";
		return false;
	}
	
	else
	{
		document.getElementById("s2").innerHTML="";
	}
	
	
	if(date=="")
	{
		document.getElementById("d").innerHTML="please enter date";
		return false;
	}
	
	else
	{
		document.getElementById("d").innerHTML="";
	}
	
	
	if(cls=="")
	{
		document.getElementById("c").innerHTML="please select class";
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

	<title>Book Ticket</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

	<link rel="stylesheet" type="text/css" href="bookticket.css">
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
			
				<h2>Book Ticket</h2>
				
				
				<form  method="POST" onsubmit="return val()" name="f">
  <div class="form-group">
    <label for="sel1">From:</label>
      <select class="form-control" id="sel1" name="source">
        <option>Select-station</option>
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

      </select>&nbsp&nbsp&nbsp&nbsp<span id="s1" ></span>
    </div>
    <div class="form-group">
    <label for="sel2">To:</label>
      <select class="form-control" id="sel2" name="destination">
        <option>Select-station</option>
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
        
      </select>&nbsp&nbsp&nbsp&nbsp<span id="s2" ></span>
    </div>
    <legend>Date:</legend>
	<div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' placeholder="Select Date" class="form-control" name="dt" id="date"/>
                    <span class="input-group-addon">
                       <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            &nbsp&nbsp&nbsp&nbsp<span id="d" ></span>
            <script type="text/javascript">
              $(
			  function () 
			  {
                  $('#datetimepicker1').datetimepicker();
              }
			  );
            </script>
            

<br><br>
  <div id="radio" class="form-group">
  <legend>Select class:</legend>
		<label for="first"><strong>First</strong></label>
		<input id="first" type="radio"  name="class" value="first">
		<label for="second"><strong>Second</strong></label>
		<input id="second" type="radio" name="class" value="second">	
	</div> &nbsp&nbsp&nbsp<span id="c" ></span>			
  	<br>
	
	<div class="form-group">
    <label for="Passengers">Passengers</label>
    <input type="Number" class="form-control" id="Passengers" placeholder="Number of Pasengers" name="p" required>
  </div>
  <br>
  <div class="form-group">
    <label><input type="checkbox" name="return">Click for return ticket</label>
  </div> 
<br>
  <input type="submit" name="sub" value="BOOK" class="btn btn-success">
</form>
			
				
			</div>
		</div>
		</div>
	</div>
<div class="jumbotron" id="footer">
		<p>&copy copyright 2017 All rights reserved</p>
		
</div>





</body>
</html>
<?php
error_reporting(0);
if(isset($_POST['sub']))
{
	$s=$_POST['source'];
	$d=$_POST['destination'];
	$p=$_POST['p'];
	$dt=$_POST['dt'];
	$c=$_POST['class'];
	$r=$_POST['return'];
	$user=$_SESSION['user'];
	
	$ch=mysqli_connect("localhost","root","");	
	mysqli_select_db($ch,'project');
	$f=mysqli_query($ch,"SELECT $s FROM fare WHERE station='$d'");
	if($f)
	{
	 $row=mysqli_fetch_array($f,MYSQL_BOTH);
		
		if($row[$d]!=0)
	   {
		$fair=$row[$d]*$p;
		
        if($c=='first')
		{
			$fair=$fair*3;
		}			
		
        if($r=='on')
        {
			$fair=$fair*2;
		}

		
	mysqli_query($ch,"INSERT INTO record VALUES('$user','$s','$d','$dt','$c','$p','$r','$fair')"); 
	
     $_SESSION['fare']=$fair;
	 echo "<script>window.location='payment.php';</script>";
	}
	else 
	  {
		echo "<script>alert('enter proper stations');</script>";
		//echo "<script>window.location='bookticket.php';</script>";
	  }
    }
    else	
	{
		echo mysql_error();
	}
	
	
}

?>


