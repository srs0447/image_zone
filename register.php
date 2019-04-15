
<?php
	session_start();
	if (isset($_SESSION['username'])) {
		header("Location: index.php");
	}
	else{
		$host = "localhost";
		$user = "root";
		$password = "";
		$db = "img_zone";

		$conn = mysqli_connect($host, $user, $password, $db);

		if ($conn->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
		}
		if (isset($_POST['register'])) {
			$fullname = mysqli_real_escape_string($conn, $_POST['fname']);
			$username = mysqli_real_escape_string($conn, $_POST['uname']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$mobile = ($_POST['mobile']);
			$password = md5($_POST['password']);
			$query = "INSERT INTO `users` (fname, uname, email,mobile, pwd) VALUES('$fullname', '$username', '$email', $mobile, '$password')";
			$result = mysqli_query($conn, $query);
			if ($result) {
				header("Location: reSuccess.php");
			}else{
				echo "Failed";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?Php include "header.php";?>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?Php include "nav.php";?>
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<h1 class="hide">Register here....</h1>
				
			<form action="register.php" method="POST">
				<div class="form-group">
					<label for="fname"><span style="color: red; font: 20px bold Tahoma;">*</span> Enter full Name:</label>
					<input type="text" id="fname" class="form-control" placeholder="full Name" name="fname" required>
				</div>
				<div class="form-group">
					<label for="uname"><span style="color: red; font: 20px bold Tahoma;">*</span> Enter User Name:</label>
					<input type="text" id="uname" class="form-control" placeholder="User Name" name="uname" required>
				</div>
				<div class="form-group">
		    		<label for="email"><span style="color: red; font: 20px bold Tahoma;">*</span> Email address</label>
		    		<input type="email" class="form-control" id="email" required aria-describedby="emailHelp" placeholder="Enter email" name="email">
		    		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		 		</div>
		 		<div class="form-group">
					<label for="mobile"><span style="color: red; font: 20px bold Tahoma;">*</span> Enter Mobile Number</label>
					<input type="text" id="number" class="form-control" placeholder="Enter Mobile number" name="mobile" required>
				</div>
				<div class="form-group">
					<label for="password"><span style="color: red; font: 20px bold Tahoma;">*</span> Enter Password</label>
					<input type="password" id="password" class="form-control" placeholder="Enter Password" name="password" required>
				</div>
				<div class="form-group">
					<input type="submit" class="form-control btn-success" name="register" value="Register">
				</div
				
				
			</form>
		</div>
		<div class="col-sm-2">
			
		</div>
	</div>

	<br>
	<br>
	<?php include_once 'footer.php' ?>

</body>
</html>