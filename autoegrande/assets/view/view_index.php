
<!-- Navbar -->
<?php
require_once "./assets/controller/controller.php";

$main = new controller();

include_once "./assets/view/view_navbar.php";
?>
<!-- Navbar -->

<?php

if(isset($_GET['i']))
{
	if($_GET['i'] == 'chartCars')
	{
		$main->IncludeView('jumbotron.');
	}
	else if($_GET['i'] == 'chartOmset')
	{
		$main->IncludeView('jumbotron');
	}
}
else
{
	$main->IncludeView('jumbotron');
}

?>

<!-- Footer -->
<?php include_once "./assets/view/view_footer.php"; ?>
<!-- Footer -->
