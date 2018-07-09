<?php
// Include class controller
include "assets/controller/controller.php";

$main = new controller();
// Kondisi untuk menampilkan halaman web yang diminta
if(isset($_POST['signinsubmit']))
{

}
else
{
    $main->Chart();
}