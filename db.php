<?php
/*
Author: Shailesh Kumar Dangi
Website: http://nutantech.co.in/
*/


$con = mysqli_connect("localhost","root","","project1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>