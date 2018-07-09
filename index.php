<?php
// Include class controller
include "assets/controller/controller.php";

$main = new controller();

$main->index(); // Menampilkan halaman index/Home

var_dump($_POST);