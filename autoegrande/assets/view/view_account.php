
<!-- Navbar -->
<?php

/*$main->IncludeView('navbar');*/
require_once "./assets/controller/controller.php";

$main = new controller();

include_once "./assets/view/view_navbar.php";

?>
<!-- Navbar -->

<section id="accountPage">
	<div class="row">

	<?php

  if(isset($_POST['loginsubmit']))
  {
    switch ($_POST['loginsubmit'])
    {
      case 'signin':
        if(isset($_GET['login']))
        {
          switch ($_GET['login'])
          {
            case 'success':
              $main->IncludeView('account_tabmenu');
              $main->IncludeView('account_unpaid_order');
              break;
            case 'failed':
              $main->IncludeView('account_login');
              break;
            default:
              $main->IncludeView('account_login');
              break;
          }
        }
        break;
      
      case 'signup':
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
<?php include_once "./assets/view/view_footer.php"; ?>
<!-- Footer -->
