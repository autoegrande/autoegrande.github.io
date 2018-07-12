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
    <?php $main->IncludeView('navbar'); ?>
    <!-- Navbar -->

		<section id="accountPage">
			<div class="row">


			<?php
      if(isset($_POST['loginsubmit']))
      {
        switch ($_POST['loginsubmit'])
        {
          case 'signin':
            $main->IncludeView('account_tabmenu');
            $main->IncludeView('account_unpaid_order');
            break;
          default:
            $main->IncludeView('account_login');
            break;
        }
      }
      else
      {
        $main->IncludeView('account_login');
      }
      ?>

			</div>
		</section>
		
    <!-- Footer -->
    <?php $main->IncludeView('footer'); ?>
    <!-- Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>