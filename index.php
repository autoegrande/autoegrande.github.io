<!-- html script -->
<!DOCTYPE html> 
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/style.css" rel="stylesheet">
    
  </head>
  <body>

    <!-- Navbar -->
    <?php include "assets/view/view_navbar.php"; ?>
    <!-- Navbar -->


    <?php include "assets/view/view_account.php"; ?>


    <!-- Footer -->
    <?php include "assets/view/view_footer.php"; ?>
    <!-- Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/laferrari.jpg" alt="Ferrari" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Ferrari LaFerrari</h3>
          <p>‘‘Only Those Who Dare,Truly Live’’</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/lexusrx.jpg" alt="Lexus" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Lexus RX 350</h3>
          <p>‘‘The Pursuit of Perfection’’</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="images/jaguarxj.jpeg" alt="Jaguar" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Jaguar XJ</h3>
          <p>“The Art of Performance” </p>
        </div>      
      </div>
      <div class="item">
        <img src="images/landrovervelar.jpg" alt="LandRover" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Land Rover Velar</h3>
          <p>“Above & Beyond“</p>
        </div>      
    </div>
    </div>

  </body>
</html>