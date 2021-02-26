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

    <?php include 'menu.php';?>
        
          
          
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
        <script type="text/javascript" src="js/scriptindex.js"></script>
    </body>
</html>