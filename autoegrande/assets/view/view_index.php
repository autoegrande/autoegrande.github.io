
<!-- Navbar -->
<?php
require_once "./assets/controller/controller.php";

$main = new controller();

include_once "./assets/view/view_navbar.php";
?>
<!-- Navbar -->

<?php $main->IncludeView('jumbotron'); ?>

<!-- Footer -->
<?php include_once "assets/view/view_footer.php"; ?>
<!-- Footer -->
