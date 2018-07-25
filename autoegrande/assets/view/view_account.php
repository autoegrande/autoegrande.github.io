
<!-- Navbar -->
<?php
require_once "./assets/controller/controller.php";
$main = new controller();

include_once "./assets/view/view_navbar.php";

?>
<!-- Navbar -->

<section id="accountPage">
	<div class="row">

	<?php
  if(isset($_COOKIE["USERNAME_PELANGGAN"]))
  {
    if(isset($_POST['loginsubmit']))
    {
      switch($_COOKIE["USERNAME_PELANGGAN"])
      {
        case $_POST['loginusername']:
          $main->IncludeView('account_tabmenu');
          $main->IncludeView('account_identity');
          echo "<script>alert('Berhasil Login!" . $_COOKIE["USERNAME_PELANGGAN"] . "')</script>";
        break;
        default:
          $main->IncludeView('account_login');
          echo "<script>alert('Gagal Login!" . $_COOKIE["USERNAME_PELANGGAN"] . "')</script>";
        break;
      }
    }
    else
    {
      $main->IncludeView('account_login');
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
