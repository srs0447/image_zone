
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <a class="navbar-brand" href="index.php">Image Gallary</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">Images</a>
	        <ul class="dropdown-menu">
	          <li class="nav-item"><a href="animals.php" class="dropdown-item">Animals</a></li>
	          <li><a href="babies.php" class="dropdown-item">Babies</a></li>
	          <li><a href="cars.php" class="dropdown-item">Cars</a></li>
	          <li><a href="Nature.php" class="dropdown-item">Nature</a></li>
	          <li><a href="game.php" class="dropdown-item">Game</a></li>
	          <li><a href="#" class="dropdown-item">Girls</a></li>
	        </ul>
	      </li>
	      <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
	      <li class="nav-item"><a class="nav-link" href="#">About</a></li>
	      <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
		</ul>
			<ul class="nav navbar-nav navbar-right">
				
				<?php 
					if(isset($_SESSION['username'])) {
				?>

					<a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#"><?php echo $_SESSION['username']; ?></a>
					<ul class="dropdown-menu">
						<li class="nav-item"><a class="dropdown-item" href="profile.php">Profile</a></li>
						<li class="nav-item"><a class="dropdown-item" href="upload.php">Upload</a></li>
						<li class="nav-item"><a class="dropdown-item" href="logout.php">Logout</a></li>	
					</ul>
					<?php }
				 else{ ?>
						<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
						<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
				<?php } ?>
			</ul>
	  </div>  
	</nav>