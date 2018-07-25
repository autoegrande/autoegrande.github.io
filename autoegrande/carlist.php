<?php
// Include class controller
require_once "./assets/controller/controller.php";

$main = new controller();

$main->IncludeView('list');