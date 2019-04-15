
<?php
  session_start();
  if (isset($_SESSION['username'])) {
    header("Location: index.php");
  }else{

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "img_zone";

    $conn = mysqli_connect($host, $user, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

      if (isset($_POST['login'])) {

        $username = mysqli_real_escape_string($conn, $_POST['uname']);
        $password = md5($_POST['psw']);

        $query = "SELECT * FROM `users` WHERE uname='$username'AND pwd='$password'";
        $result = mysqli_query($conn, $query);
        if ($result) {
          if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
          }else{
            echo "Wrong User";
          }
        }
      }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <?php include "header.php";?>
  <style>
    .lgn{
      margin: 0 auto;

    }
    .bfg{
      background-color: #754935a3;
      border-radius: 20px;
      margin-top: 12px;
      padding: 12px 10px;
      box-shadow: 8px 8px 8px #000;
    }
  </style>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<?php include "nav.php";?>
<div class="container"> 
  <div class="row">
    <div class="col-sm-6 lgn bfg">
        <form action="login.php" method="POST">
          <!--[CDATA[
          <div class="imgcontainer">
            <img src="images/Avatar/SignIn.ico" alt="Avatar" class="avatar">
          </div>
          -->
          <div class="form-group">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required class="form-control">
          </div>
          <div class="form-group">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required class="form-control">
          </div>     
            <button type="submit" name="login">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <div class="other">
              <a href="index.php"><button type="button" class="cancelbtn">Cancel</a></button>
              <span class="psw">Forgot <a href="forget.php">password?</a></span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<br>
<br>
<?php include "footer.php";?>
</body>
</html>