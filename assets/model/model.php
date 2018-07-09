<?php
	class model
	{
		// Instansiasi
		function __construct()
		{
			$connect = mysqli_connect("localhost", "root", "", "jual_mobil");
		}
		
		function execute($query)
		{
			$connect = mysqli_connect("localhost", "root", "", "jual_mobil");
			return mysqli_query($connect, $query);
		}
		
		function listcar()
		{
			$query = "select * from nama_mobil";
			return $this->execute($query);
		}

		function SignIn($username,$password)
		{
			$query = "select username_pelanggan,password_pelanggan from pelanggan where username_pelanggan = '$username' and password_pelanggan = '$password'";
			return $this->execute($query);
		}
		
		function SignUp($fullname,$address,$phone,$email,$username,$password,$confirmpassword)
		{
			$pss = htmlspecialchars($password);
			$query = "INSERT INTO pelanggan VALUES ('e12345678','$fullname','$address','$phone','$email','$username','$password')";
			return $this->execute($query);
		}
		
		function fetch($var)
		{
			return mysqli_fetch_array($var);
		}
		
		function __destruct()
		{
		}
	}
?>