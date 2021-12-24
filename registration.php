<!DOCTYPE html>
<html>
<head>
	<title>Rgistration Page </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<?php
		if(isset($_REQUEST['email'])){
			require('db.php');

			$firstname = $_REQUEST['firstname'];
			$lastname = $_REQUEST['lastname'];
			$email = $_REQUEST['email'];
			$phone = $_POST['phone'];
			$password = $_REQUEST['password'];

			$trn_date = date("Y-m-d H:i:s");
	        $query = "INSERT into `users` (firstname, lastName, email,phone, password, trn_date) VALUES ('$firstname','$lastname','$email', '$phone', '".md5($password)."','$trn_date')";
	        $result = mysqli_query($con,$query);
	        if($result){
	            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
	        }

		}
		else{
		?>
		<div class="text-center">
			<h1>Registration</h1>
		</div>
		<div class="justify-content">
		<form action="" method="POST">
			<div class="form-group">
				<label>First Name</label>
				<input type="text" class="form-control" name="firstname" placeholder="First Name">
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" class="form-control" name="lastname" placeholder="Last Name">
			</div>
			<div class="form-group">
				<label>Eamil</label>
				<input type="text" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" class="form-control" name="phone" placeholder="Phone Number">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<input type="submit" class="btn btn-primary" name="submit" value="Submit">
		</form>
	<?php } ?>
	</div>
	</div>
	</div>
</body>
</html>