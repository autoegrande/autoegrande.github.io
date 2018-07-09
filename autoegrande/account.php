<?php
//include class controller
include "assets/controller/controller.php";

//variabel main merupakan objek baru yang dibuat dari class controller
$main = new controller();//kondisi untuk menampilkan halaman web yang diminta
if(isset($_POST['signinsubmit']))//kondisi untuk mengakses halaman account
{
    $main->Login($_POST['username']);
}
else
{
    $main->Account(); //kondisi awal (menampilkan seluruh data)
}