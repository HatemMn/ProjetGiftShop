<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Our page</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-grid.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
              <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.png" alt="logo"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active mx-2">
                    <a class="nav-link  navi" style="color: white;" href="index.php">Home</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link  navi" style="color: white;" href="shop.php">Shop</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link  navi" style="color: white;" href="#">MyteryBox</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link  navi" style="color: white;" href="#">Services</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link  navi" style="color: white;" href="#">Login</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link  navi" style="color: white;" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          
          
          <div id="carouselExampleIndicators"  class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators mt-5">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            
            <div class="carousel-inner">
              <div class="carousel-item active pb-5">
                <img class="d-block w-100" src="img/banner1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to our website !</h5>
                    <p>We offer you the best gifts for your dear people</p>
                </div>
              </div>

              <div class="carousel-item pb-5">
                <img class="d-block w-100" src="img/banner2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Gifts made with love</h5>
                    <p>Everything is handcrafted</p>
                </div>
              </div>

              <div class="carousel-item pb-5">
                <img class="d-block w-100" src="img/banner3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Search the website !</h5>
                    <p>You will really be surprised</p>
                </div>
              </div>
            </div>


            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          
         

        
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

          <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>