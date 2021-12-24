<?php
/*
Author: Shailesh Kumar Dangi
Website: http://nutantech.co.in/
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){
		
		$username = stripslashes($_REQUEST['email']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
		//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());

		$rows = mysqli_num_rows($result);
        if($rows==1){

        	while($row = $result->fetch_assoc()) {
				$_SESSION['email'] = $row['email'];
				$_SESSION['name'] = $row['firstname'].' '.$row['lastname'];
			}
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

</div>
<?php } ?>


</body>
</html>
