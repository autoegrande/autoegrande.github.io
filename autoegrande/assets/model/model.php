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
			// var_dump($connect);
			return mysqli_query($connect, $query);
		}
		
		function listcar()
		{
			$query = "SELECT * FROM nama_mobil";
			return $this->execute($query);
		}

		function DataSell($day)
		{
			$query = "SELECT * FROM history_penjualan WHERE H_TANGGAL_JUAL = '$day'";
			return $this->execute($query);
		}

		function SelectBrand()
		{
			$query = "SELECT * FROM merek_mobil";
			$cars = $this->execute($query);
			while($datum = mysqli_fetch_assoc($cars))
			{
				$data[] = $datum['NAMA_MEREK_MOBIL'];
			}
			return $data;
		}

		function SelectCar()
		{
			$cars = [];
			$data = [];
			$i = 0;
			$result = $this->execute("SELECT * FROM merek_mobil");
			if(mysqli_num_rows($result) > 0)
			{
				while($datum = mysqli_fetch_assoc($result))
				{
					$cars[] = $datum['ID_MEREK_MOBIL'];
					// echo "<script>alert('" . $cars[$i] . "')</script>";
					$i++;
				}
			}
			else
			{
				echo "<script>alert('Kosong')</script>";
			}
			$i = 0;

			while($i < count($cars))
			{
				$data[] = mysqli_num_rows($this->execute("SELECT * FROM nama_mobil WHERE id_merek_mobil = '$cars[$i]'"));
					// echo "<script>alert('" . $data[$i] . "')</script>";
				$i++;
			}

			return $data;
		}

		function SignIn($username, $password)
		{
			$query = "SELECT * FROM pelanggan WHERE USERNAME_PELANGGAN = '$username'";
			$result = $this->execute($query);
			$value = '';

			if(mysqli_num_rows($result) === 1)
			{
				$user = mysqli_fetch_assoc($result);

				// echo "<br> _user <br>";
				// var_dump($user);

				if($user['PASSWORD_PELANGGAN'] === $password)
				{
					$value = $username;
				}
				else
				{
					$value = null;
				}
			}
			else
			{
				$value = null;
			}
			// echo "<script>alert('Berhasil!" . $value . "')</script>";
			return $value;
		}

		function SignUp($fullname, $address, $phone, $email, $username, $password)
		{
			$connect = mysqli_connect("localhost", "root", "", "jual_mobil");
			$result = mysqli_query($connect, "SELECT * FROM pelanggan");
			$i = 1;
			$_id_temp = '';
			$max = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM pelanggan"));
			// echo $max;

			while ($temp = mysqli_fetch_row($result))
			{
				if($i == $max)
				{
					$_id_temp = $temp[0];
					// echo "<br>" . $_id_temp;
				}
				$i++;
			}

			$_date = strpos($_id_temp, date("ymd"));
			$_id_temp = str_split($_id_temp);
			// echo"<br>" . $_id_temp[7] . $_id_temp[8];
			$num = (int)($_id_temp[7] . $_id_temp[8]);
			// echo "<br> _date ";
			// var_dump($_date);
			$_id = "C" . date("ymd");
			// echo "<br>" . $_id . "<br>";

			if($_date != 1)
			{
				$_id .= '01';
				// echo $_id . "<br>";
			}
			else
			{
				if($num < 9)
				{
					$num += 1;
					$_id .= '0' . $num;
					// echo $_id . "<br>";
				} 
				else
				{
					$num += 1;
					$_id .= $num;
					// echo $_id . "<br>";
				}
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