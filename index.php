  <?php 
    session_start();

   ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
   <?php include "header.php"; ?>
   <link rel="stylesheet" href="css/test.css">
   <title>homepage</title>
   <style>
     .carousel-caption{
      top: 50%;
      transform: translateY(-50%);
      text-transform: uppercase;
     }
   </style>
  </head>
  <body>
  <?php include "nav.php"; ?>
    <div class="container-fluid">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="myCarousel" data-slide-to="1"></li>
            <li data-target="myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="first-slide" src="images/md.jpg"></img>
              <div class="container-fluid">
                <div class="carousel-caption">
                  <h1>Search your image</h1>
                  <form action="" method="inpu" accept-charset="utf-8">
                    <input type="text" name="text" class="form-control"><br>
                    <input type="submit" name="search" value="Search" class="btn btn-success">
                  </form>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="first-slide" src="images/caption (2).jpg"></img>
              <div class="carousel-caption">
                  <h1>The beauty of the nature</h1>
                  <p>Look deep into nature, and then you will understand everything better</p>
                </div>
            </div>
            <div class="carousel-item">
              <img class="first-slide" src="images/caption (3).jpg"></img>
              <div class="carousel-caption">
                  <h1>This is the caption of the image</h1>
                  <p>This gives the brief description about the image and from where and how it will come</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    <div class="container-fluid text-center">
      <div class="row jumbotron">
        <p>A human being is a part of the whole called by us universe, a part limited in time and space. He experiences himself, his thoughts and feeling as something separated from the rest, a kind of optical delusion of his consciousness. This delusion is a kind of prison for us, restricting us to our personal desires and to affection for a few persons nearest to us. Our task must be to free ourselves from this prison by widening our circle of compassion to embrace all living creatures and the whole of nature in its beauty.” 
― Albert Einstein</p>
      </div>
    </div>
    <div class="container-fluid bg-3 text-center">    
      <h3 class="margin">Whats you find here.</h3><br>
      <div class="row">
        <div class="col-sm-4">
           <div class="thumbnail">
              <img src="images/caption (4).jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
              <div class="caption">
               <p>Click The bellow button.</p>
                    <a href="animals.php" target="_blank" class="btn btn-success">See All</a>
              </div>
           </div>
          </div>
          <div class="col-sm-4">
             <div class="thumbnail">
              
                <img src="images/caption (1).jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
                <div class="caption">
                 <p>Click The bellow button.</p>
                    <a href="girls.php" target="_blank" class="btn btn-success">See All</a>
                </div>
            
             </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail">
                
                  <img src="images/boy.jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
                  <div class="caption">
                   <p>Click The bellow button.</p>
                    <a href="babies.php" target="_blank" class="btn btn-success">See All</a>
                  </div>
              
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail">
              
                <img src="images/game.jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
                <div class="caption">
                 <p>Click The bellow button.</p>
                    <a href="game.php" target="_blank" class="btn btn-success">See All</a>
                </div>
               
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail">
               
                  <img src="images/car.jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
                  <div class="caption">
                   <div class="display2">Click The bellow button.</div>
                    <a href="cars.php" target="_blank" class="btn btn-success">See All</a>
                  </div>
                
              </div>
            </div>
            <div class="col-sm-4">
               <div class="thumbnail">
                  <img src="images/caption (2).jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
                  <div class="caption">
                    <p>Click The bellow button.</p>
                    <a href="Nature.php" target="_blank" class="btn btn-success">See All</a>
                  </div>
              </div>
            </div>
      </div>

    <div class="container-fluid">
      <div class="display2">
        <h1 class="text-center" >Meet our Team</h1>
      </div>
    </div>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4"> 
          
          <a href="#"><img src="images/anoop.jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image"></a>
        </div>
        <div class="col-sm-8">
          <h2>Anoop Kumar</h2><br>
          <h4><strong>About:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
          <p><strong>VISION:</strong> Our mission is to provide the best responsive and big image website that satisfy all the user and all types images available here</p>
        </div>
        <div class="col-sm-8">
          <h2>R.S.Chauhan</h2><br>
          <h4><strong>About:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
          <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col-sm-4">
           <a href="#"><img src="images/rs_p.jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image"></a>
        </div>
      </div>
    </div>
    <?php include_once 'footer.php'; ?>
 </body>
  </html>