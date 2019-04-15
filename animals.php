<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <?php include "header.php";?>
  <title>baby</title>
  
</head>
<body>
  <?php include "nav.php";?>
  <div class="container">

      <h1 class="my-4 text-center text-lg-left">Animals Images</h1>

      <div class="row text-center text-lg-left">
        <?php 
            include 'connection.php';
             $sql = "SELECT * FROM `animals`";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result)){

         ?>
        <div class="col-lg-3 col-md-4 col-xs-6" id="lightbox">
          <a href="#lightbox" class="d-block mb-4 h-100" data-toggle="lightbox">
            <img class="img-fluid img-thumbnail" src="images/animals/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
          </a>
        </div>

        <?php } ?>
        
      </div>
    </div>
  <?php include "footer.php";?>
</body>
</html>