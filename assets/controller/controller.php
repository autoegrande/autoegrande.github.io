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
		function Login($username, $password)
		{
			$data = $this->model->SignIn($username, $password);
			if($data)
			{
				include "assets/view/view_account_unpaid_order.php";
			}
		}
		// Menampilkan halaman Login
		function viewInsert()
		{
			include "assets/view/view_login.php";
		}
		
		// Fungsi updata data
		function update()
		{
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$angkatan = $_POST['angkatan'];
			$fakultas = $_POST['fakultas'];
			$prodi = $_POST['prodi'];
			
			$update = $this->model->updateMhs($nim, $nama, $angkatan, $fakultas, $prodi);
			header("location:index.php");
		}
		// Fungsi untuk menghapus
		function delete($nim)
		{
			$delete = $this->model->deleteMhs($nim);
			header("location:index.php");
		}
		// Fungsi Sign Up
		function SignUpBtn()
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
				$insert = $this->model->SignUp($fullname,$address,$phone,$email,$username,$password,$confirmpassword);
				header("location:index.php");
			}
		}
		
		function __destruct()
		{
		}
	}
?>