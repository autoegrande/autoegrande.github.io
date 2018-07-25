<?php
require_once "./assets/controller/controller.php";

$main = new controller();
$countToDisplay = 5;
$labelDiagram = 'Omset ' . date('d', time()-60*60*24*($countToDisplay-1)) . '-' . date('d M Y');
$diagramType = 'line';

include_once './assets/view/view_navbar.php';
// $index = $main->DataForDiagram($countToDisplay, "days");
// $value = $main->DataForDiagram($countToDisplay, "omset");

$index = ['15-Jul-2018','14-Jul-2018','13-Jul-2018','12-Jul-2018','11-Jul-2018','10-Jul-2018','09-Jul-2018','08-Jul-2018'];
$value = ['22', '9', '2', '16', '11', '12', '5', '13'];
?>

<div class="space-navbar"></div>

<div class="col-sm-10 col-sm-offset-1">
	<canvas id="chartDiagram"></canvas>

	<div class="space-navbar"></div>
	<div class="space-navbar"></div>
</div>

<?php include_once './assets/view/view_footer.php'; ?>
