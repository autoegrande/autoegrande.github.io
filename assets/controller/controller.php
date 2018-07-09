<?php
	//include class model
	include "assets/model/model.php";
	
	class controller{
		//variabel public
		public $model;
		
		//inisialisasi awal untuk class
		function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
		}
		
		function index(){
			include "assets/view/view_index.php"; //memamnggil view.php pada folder view
		}

		function Account()
		{
			include "assets/view/view_index.php";
		}
		
		function Login($username, $password){
			$data = $this->model->SignIn($username, $password);
			if($data){
				include "assets/view/view_account_unpaid_order.php"; //menampilkan halaman untuk mengedit data
			}
		}
		
		function viewInsert(){
			include "assets/view/view_login.php"; //menampilkan halaman login
		}
		
		//fungsi updata data
		function update(){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$angkatan = $_POST['angkatan'];
			$fakultas = $_POST['fakultas'];
			$prodi = $_POST['prodi'];
			
			$update = $this->model->updateMhs($nim, $nama, $angkatan, $fakultas, $prodi);
			header("location:index.php");
		}
		
		function delete($nim){
			$delete = $this->model->deleteMhs($nim);
			header("location:index.php");
		}
		
		function SignUpBtn(){
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
		
		function __destruct(){
		}
	}
?>