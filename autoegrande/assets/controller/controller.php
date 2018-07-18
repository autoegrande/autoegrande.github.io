<?php

	// Include class model
	require_once "./assets/model/model.php";

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
			header("Location:" . $page . ".php");
		}

		/* Pindah Halaman */

		/* Include View */
		
		function IncludeView($page)
		{
			include "./assets/view/view_" . $page .".php";
		}

		/* Include View */
		
		/* Login */

		// Fungsi Sign in
		function Login()
		{
			$username = $_POST['loginusername'];
			$password = $_POST['loginpassword'];
			$temp = $this->model->SignIn($username, $password);
			$GLOBALS['login'] = $temp;
			echo "<br>";
			var_dump($GLOBALS['login']);
			//header("Location:account.php");
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
				/*
				if($insert)
				{
					echo "<script>alert('Berhasil!')</script>". $insert;
				}
				else
				{
					echo "<script>alert('Gagal!')</script>" . $insert;
				}
				*/
			}
		}
		
		/* Login */
		
		function __destruct()
		{
		}
	}
?>