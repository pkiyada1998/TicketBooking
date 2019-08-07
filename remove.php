<?php
$em=$_REQUEST['email'];
			   $ch=mysqli_connect("localhost","root","");
				mysqli_select_db($ch,'project');
			    $f=mysqli_query($ch,"delete from login where email='$em'");
				 echo "<script>window.location='admin1.php';</script>";
			   
			   
			   
 ?>
 