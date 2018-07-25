<?php
// Include class controller
require_once "./assets/controller/controller.php";

$main = new controller();
// Kondisi untuk menampilkan halaman web yang diminta
if(isset($_COOKIE["USERNAME_PELANGGAN"]))
{
	if(!isset($_POST['loginsubmit']))
	{
		$main->IncludeView('account');
	}
	else
	{
	  switch($_POST['loginsubmit'])
	  {
	    case 'signin':
	      $main->Login();
	    break;
	    case 'signup':
	      $main->SignUp();
	    break;
	    default:
		  	$main->IncludeView('account');
	  	break;
	  }
	}
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
  $main->IncludeView('account');
}

?>