<?php
// Include class controller
include "assets/controller/controller.php";

$main = new controller();
// Kondisi untuk menampilkan halaman web yang diminta
if(isset($_POST['signinsubmit']))
{
		// Kondisi untuk mengakses halaman Login
    $main->Login($_POST['username']);
}
else
{
    $main->Account();
}