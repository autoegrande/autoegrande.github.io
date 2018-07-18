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

    <!-- Mengisi ruang dibawah Navbar -->

    <div class="space-navbar"></div>

    <!-- Mengisi ruang dibawah Navbar -->

    <!-- Chart List -->

    <section id="chartList">
      <div class="row">

        <div class="col-sm-8 itemList">

          <div class="col-sm-3 col-sm-offset-1 frameThumb">

            <div class="col-sm-10 frameImage">
              <img src="assets/images/jumbotron/laferrari.png">
            </div>

            <div class="col-sm-10">
              <div class="col-sm-10 col-sm-offset-2">
                <div class="col-sm-4 quantityCount">
                  <a class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></a>
                </div>
                <div class="col-sm-4 quantityCountH5">
                  <h5>1</h5>
                </div>
                <div class="col-sm-4 quantityCount">
                  <a class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></a>
                </div>
              </div>
            </div>

          </div>

          <div class="col-sm-7 frameDescrypt">
            <div class="col-sm-12">
              <h4>Car Name</h4>
            </div>

            <div class="col-sm-12">
              <p>Car Descryption</p>
            </div>

            <div class="col-sm-4 col-sm-offset-8 text-right">
              <h4>Rp. XXX.XXX.XXX</h4>
            </div>
          </div>

        </div>

        <hr>

        <div class="col-sm-8 itemList">

          <div class="col-sm-3 col-sm-offset-1 frameThumb">

            <div class="col-sm-10 frameImage">
              <img src="assets/images/jumbotron/lexusrx.png">
            </div>

            <div class="col-sm-10">
              <div class="col-sm-10 col-sm-offset-2">
                <div class="col-sm-4 quantityCount">
                  <a class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></a>
                </div>
                <div class="col-sm-4 quantityCountH5">
                  <h5>1</h5>
                </div>
                <div class="col-sm-4 quantityCount">
                  <a class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></a>
                </div>
              </div>
            </div>

          </div>

          <div class="col-sm-7 frameDescrypt">
            <div class="col-sm-12">
              <h4>Car Name</h4>
            </div>

            <div class="col-sm-12">
              <p>Car Descryption</p>
            </div>

            <div class="col-sm-4 col-sm-offset-8 text-right">
              <h4>Rp. XXX.XXX.XXX</h4>
            </div>
          </div>

        </div>

        <hr>

        <!-- Checkout Button -->

        <div class="col-sm-12 btnPos text-right">
          <button type="button" class="btn btn-default">Check Out</button>
        </div>

        <!-- Checkout Button -->

      </div>

    </section>

    <!-- Chart List -->

    <!-- Footer -->
    <?php include "assets/view/view_footer.php"; ?>
    <!-- Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>