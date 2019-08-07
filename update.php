<?php
$u=$_REQUEST['user'];
			   $ch=mysqli_connect("localhost","root","");
				mysqli_select_db($ch,'project');
			    $f=mysqli_query($ch,"delete from record where user='$u'");
				 echo "<script>window.location='admin1.php';</script>";
			   
			   
			   
?>