<?php
/*
Author: Shailesh Kumar Dangi
Website: http://nutantech.co.in/
*/
?>

<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: login.php");
exit(); }
?>
