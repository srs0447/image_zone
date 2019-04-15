<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>forget</title>
	<?php include 'header.php'; ?>
</head>
<body>
<?php include 'nav.php'; ?>



<div class="container-fluid">
	
	<div class="jumbotron">
		<h1>Enter the following details</h1>
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">	
			<form action="register.php" method="POST">
				<div class="form-group">
					<label for="fname"><span style="color: red; font: 20px bold Tahoma;">*</span> Enter email:</label>
					<input type="text" id="fname" class="form-control" placeholder="enter register email" name="fname" required>
				</div>
				<div class="form-group">
					<input type="submit" class="form-control btn-success" name="register" value="Send Password">
				</div>

			</form>
		</div>
	</div>
</div>
<hr>
<?php include 'footer.php'; ?>
</body>
</html>