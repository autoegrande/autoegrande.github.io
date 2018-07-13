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
			/*
			if(mysqli_query($connect, $query))
			{
				echo "<script>alert('Berhasil!')</script>". $query;
				var_dump($connect);
			}
			else
			{
				echo "<script>alert('Gagal!')</script>" . $query;
				var_dump($connect);
			}
			*/
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
		
		function SignUp($fullname,$address,$phone,$email,$username,$password)
		{
			$connect = mysqli_connect("localhost", "root", "", "jual_mobil");
			$_id_temp = mysqli_num_rows(mysqli_query($connect, "SELECT id_pelanggan FROM pelanggan")) + 1;
			$_id = "C" . date("ymd");
			if($_id_temp < 10)
			{
				$_id .= "0" . $_id_temp;
			}
			else
			{
				$_id .= $_id_temp;
			}
			$_fullname = htmlspecialchars($fullname);
			$_address = htmlspecialchars($address);
			$_phone = htmlspecialchars($phone);
			$_email = htmlspecialchars($email);
			$_username = htmlspecialchars($username);
			$_password = htmlspecialchars($password);
			$query = "INSERT INTO pelanggan VALUES ('$_id','$fullname','$address','$phone','$email','$username','$password')";
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