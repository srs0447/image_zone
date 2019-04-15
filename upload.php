<?php
	session_start();
	include 'connection.php';
	if (isset($_SESSION['username'])) {
		if (isset($_POST['baby'])) {
			$name = $_FILES['file'];
			$image = $_FILES['file']['name'];
			$size = $_FILES['file']['size'];
			$type = $_FILES['file']['type'];
			$temp_name = $_FILES['file']['tmp_name'];
			$error = $_FILES['file']['error'];
			$imName = $_POST['name'];
			$fileExt = explode('.', $image);
			$mainExt = strtolower(end($fileExt));

			$allowedFile = array('jpg', 'jpeg', 'png');
			
			$query = "INSERT INTO baby (image, name) VALUES('$image', '$imName')";
			$result = mysqli_query($conn, $query);

			if ($result) {
				move_uploaded_file($temp_name, "images/babies/".$image);
				header("Location: index.php");
			}else{
				echo "<script> alert('Not uploaded');</script>";
			}
		}
	}else{
		header("Location: index.php");
	}

	if (isset($_SESSION['username'])) {
		if (isset($_POST['cars'])) {
			$name = $_FILES['file'];
			$image = $_FILES['file']['name'];
			$size = $_FILES['file']['size'];
			$type = $_FILES['file']['type'];
			$temp_name = $_FILES['file']['tmp_name'];
			$error = $_FILES['file']['error'];
			$imName = $_POST['name'];
			$fileExt = explode('.', $image);
			$mainExt = strtolower(end($fileExt));

			$allowedFile = array('jpg', 'jpeg', 'png');
			
			$query = "INSERT INTO cars (image, name) VALUES('$image', '$imName')";
			$result = mysqli_query($conn, $query);

			if ($result) {
				move_uploaded_file($temp_name, "images/Cars/".$image);
				header("Location: cars.php");
			}else{
				echo "<script> alert('Not uploaded');</script>";
			}
		}
	}else{
		header("Location: index.php");
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'header.php'; ?>
	<meta charset="UTF-8">
	<title>Upload</title>
	<link rel="stylesheet" type="text/css" href="css/upload.css">
</head>
<body>
	<?php include 'nav.php'; ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h1>Select the Image category to upload</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-md-2">
				<h2>Baby Image</h2>
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#baby">
				    Open Upload form.
				 </button>
				  <div class="modal fade" id="baby">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <h4 class="modal-title">Upload Baby Image</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        <div class="modal-body">
				          <form action="upload.php" method="post" enctype="multipart/form-data">
				    		 <label>Select image to upload:</label><br>
				    		 <input type="file" name="file" id="fileToUpload"><br>
				    		 <p>Enter the name:<input type="text" name="name" id="filename"></p><br>
				    		 <input type="submit" value="Upload Image" name="baby" class="btb btn-primary">
						   </form>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </div>
				  </div>
			</div>
			<div class="col-sm-2">
				<h2>Girls Image upload form</h2>
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nature">
				    Open Upload form.
				 </button>
				  <div class="modal fade" id="nature">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <h4 class="modal-title">Upload Nature Image</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        <div class="modal-body">
				          <form action="upload.php" method="post" enctype="multipart/form-data">
				    		 <label>Select image to upload:</label><br>
				    		 <input type="file" name="file" id="fileToUpload"><br>
				    		 <p>Enter the name:<input type="text" name="nature" id="filename"></p><br>
				    		 <input type="submit" value="Upload Image" name="upload" class="btb btn-primary">
						   </form>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </div>
				  </div>
			</div>
			<div class="col-sm-2">
				<h2>Nature Image upload form</h2>
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nature">
				    Open Upload form.
				 </button>
				  <div class="modal fade" id="nature">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <h4 class="modal-title">Upload Nature Image</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        <div class="modal-body">
				          <form action="upload.php" method="post" enctype="multipart/form-data">
				    		 <label>Select image to upload:</label><br>
				    		 <input type="file" name="file" id="fileToUpload"><br>
				    		 <p>Enter the name:<input type="text" name="nature" id="filename"></p><br>
				    		 <input type="submit" value="Upload Image" name="upload" class="btb btn-primary">
						   </form>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </div>
				  </div>
			</div>
			<div class="col-sm-2">
				<h2>Car Image upload form</h2>
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cars">
				    Open Upload form.
				 </button>
				  <div class="modal fade" id="cars">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <h4 class="modal-title">Upload Car Image</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        <div class="modal-body">
				          <form action="upload.php" method="post" enctype="multipart/form-data">
				    		 <label>Select image to upload:</label><br>
				    		 <input type="file" name="file" id="fileToUpload"><br>
				    		 <p>Enter the name:<input type="text" name="nature" id="filename"></p><br>
				    		 <input type="submit" value="Upload Image" name="cars" class="btb btn-primary">
						   </form>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </div>
				  </div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<?php include 'footer.php'; ?>
</body>
</html>