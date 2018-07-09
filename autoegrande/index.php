<?php
//include class controller
include "assets/controller/controller.php";

//variabel main merupakan objek baru yang dibuat dari class controller
$main = new controller();//kondisi untuk menampilkan halaman web yang diminta
$main->index(); //kondisi awal (menampilkan seluruh data)
