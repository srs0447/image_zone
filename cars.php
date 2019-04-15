<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <?php include "header.php";?>
  <title>cars</title>
</head>
<body>
  <?php include "nav.php";?>
 <div class="container">

      <h1 class="my-4 text-center text-lg-left">Cars Images</h1>

      <div class="row text-center text-lg-left">
        <?php 
            include 'connection.php';
             $sql = "SELECT * FROM `cars`";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result)){

         ?>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100" data-toggle="lightbox">
            <img class="img-fluid img-thumbnail" src="images/Cars/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
          </a>
        </div>

        <?php } ?>
        
      </div>
    </div>
 <?php include "footer.php";?>
</body>
</html>