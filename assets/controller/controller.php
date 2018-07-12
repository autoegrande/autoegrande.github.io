<?php
	// Include class model
	include "assets/model/model.php";

	class controller
	{
		// Variabel public
		public $model;
		
		// Instansiasi
		function __construct()
		{
			// Variabel model merupakan objek baru yang dibuat dari class model
			$this->model = new model();
		}

		function MovePage($page)
		{
			header("location:" . $page . ".php");
		}
		
		// Menampilkan Index
		function index()
		{
			include "assets/view/view_index.php";
		}
		
		// Menampilkan halaman Account
		function Account()
		{
			include "assets/view/view_account.php";
		}

		// Menampilkan halaman setelah Login
		function Login()
		{
			$username=$_POST['loginusername'];
			$password=$_POST['loginpassword'];
			$data = $this->model->SignIn($username, $password);
			if($data)
			{
				include "assets/view/view_account_unpaid_order.php";
			}
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
		
		function __destruct()
		{
		}
	}
?>