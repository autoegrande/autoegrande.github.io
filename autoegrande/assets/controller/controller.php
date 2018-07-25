<?php

	session_start();
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
		
		/* Data Chart */

		function DataForDiagram($dataToDisplay, $name)
		{
			$data = [];
			switch ($name)
			{
				case 'omset':
					$i = 0;
					while($i < $dataToDisplay)
					{
						$temp = date('dmY', time()-60*60*24+$i);
						$data[] = $this->model->DataSell($temp);
						$i++;
					}
					$data[] = "Omset";
				break;
				case 'days':
					$i = 0;
					while($i < $dataToDisplay)
					{
						$data[] = date('d-M-Y', time()-60*60*24+$i);
						$i++;
					}
					$data[] = "Days";
				break;
				case 'brand':
					$data = $this->model->SelectBrand();
				break;
				case 'car':
					$data = $this->model->SelectCar();
				break;
				default:
					return "Parameter salah";
					break;
			}
			return $data;
		}

		/* Data Chart */

		/* Login */

		// Fungsi Sign in
		function Login()
		{
			$username = $_POST['loginusername'];
			$password = $_POST['loginpassword'];
			setcookie("USERNAME_PELANGGAN", $this->model->SignIn($username, $password), time()+60);
			echo "<script>alert('Berhasil!" . $_COOKIE["USERNAME_PELANGGAN"] . "')</script>";
			// MovePage("account");
			// return $temp;
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