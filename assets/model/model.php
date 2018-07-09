<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			$connect = mysqli_connect("localhost", "root", "", "jual_mobil");
		}
		
		function execute($query){
			$connect = mysqli_connect("localhost", "root", "", "jual_mobil");
			return mysqli_query($connect, $query);
		}
		
		function listcar(){
			$query = "select * from nama_mobil";
			return $this->execute($query);
		}
		
		function selectMhs($nim){
			$query = "select * from mahasiswa where nim='$nim'";
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			$query = "update mahasiswa set nim='$nim', nama='$nama', angkatan='$angkatan', fakultas='$fakultas', program='$prodi' where nim='$nim'";
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			$query = "delete from mahasiswa where nim='$nim'";
			return $this->execute($query);
		}

		function SignIn($username,$password){
			$query = "select username_pelanggan,password_pelanggan from pelanggan where username_pelanggan = '$username' and password_pelanggan = '$password'";
			return $this->execute($query);
		}
		
		function SignUp($fullname,$address,$phone,$email,$username,$password,$confirmpassword){
			$pss = htmlspecialchars($password);
			$query = "insert into pelanggan values ('$fullname,$address,$phone,$email,$username,$password,$confirmpassword)";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>