<?php
	// Include class model
	include "assets/model/model.php";

	class controller
	{

		public $model;

		function __construct()
		{
			// Variabel model merupakan objek baru yang dibuat dari class model
			$this->model = new model();
		}

		/* Pindah Halaman */

		function MovePage($page)
		{
			header("location:" . $page . ".php");
		}

		/* Pindah Halaman */

		/* Include View */
		
		function IncludeView($page)
		{
			include "assets/view/view_" . $page .".php";
		}

		/* Include View */
		
		/* Login */

		// Fungsi Sign in
		function Login()
		{
			$username = $_POST['loginusername'];
			$password = $_POST['loginpassword'];
			$data = $this->model->SignIn($username, $password);
		}

		// Fungsi Sign Up
		function SignUp()
		{
			$fullname = $_POST['fullname'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$email = $_POST['e-mail'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$confirmpassword = $_POST['confirmpassword'];

			if ($confirmpassword == $password)
			{
				$insert = $this->model->SignUp($fullname,$address,$phone,$email,$username,$password);
				header("location:account.php");
			}
		}
		
		/* Login */
		
		function __destruct()
		{
		}
	}
?>