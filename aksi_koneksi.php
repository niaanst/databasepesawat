<?php
	//sebelum bertransaksi dengan database kita harus terkoneksi dulu
		$host 		= "localhost";
		$user_name 	= "root";
		$psw 		= "";
		$db_name	= "db_pesawat";
		$table_name = "tabel_pesawat";
		$con=mysqli_connect($host,$user_name,$psw,$db_name);
		// Check connection
		if (mysqli_connect_errno())
	  		{
	  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  	}
?>