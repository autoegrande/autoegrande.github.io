<?php
require_once "./assets/controller/controller.php";

$main = new controller();

// global $index;
// global $value;
// global $labelDiagram;

$countToDisplay = '';
$labelDiagram = 'Cars';
// $diagramType = 'bar';

include_once './assets/view/view_navbar.php';

$index = $main->DataForDiagram($countToDisplay, "brand");
$value = $main->DataForDiagram($countToDisplay, "car");

// echo "<br>";
// var_dump($index);
// echo "<br>";
// var_dump($value);
?>

<div class="space-navbar"></div>

<div class="col-sm-10 col-sm-offset-1">
	<canvas id="chartWeb"></canvas>

	<div class="space-navbar"></div>
	<div class="space-navbar"></div>
</div>

<!-- Footer -->
<?php include_once "./assets/view/view_footer.php"; ?>
<!-- Footer -->