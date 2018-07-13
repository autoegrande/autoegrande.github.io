<?php
// Include class controller
require_once "assets/controller/controller.php";

$main = new controller();
// Kondisi untuk menampilkan halaman web yang diminta
if(isset($_POST['loginsubmit']))
{
 
}
else if(isset($_POST['navbarbtn']))
{
	switch ($_POST['navbarbtn']) 
	{
		case 'account':
			$main->MovePage($_POST['navbarbtn']);
			break;
		case 'chart':
			$main->MovePage($_POST['navbarbtn']);
			break;
		case 'carlist':
			$main->MovePage($_POST['navbarbtn']);
			break;
		case 'rent':
			$main->MovePage($_POST['navbarbtn']);
			break;
	}
}
else
{
  $main->IncludeView('chart');
}