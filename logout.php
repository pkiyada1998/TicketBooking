<?php 
 session_start();
 if(session_destroy())
 {
 	echo "<script>alert('logout sucssesful');</script>";
 	echo "<script>window.location='home.php';</script>";
 }
 else
 {
 	echo "<script>alert('logout unsucssesful');</script>";
 	echo "<script>window.location='home.php';</script>";
 }
 ?>