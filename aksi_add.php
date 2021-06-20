<?php
 //http://localhost/infa/aksi_add.php?kmk=INF103&nmk=Struktur+Data&kj=C&sks=3%281-2%29&tmbl=simpan
 
 $a = $_GET["nama_maskapai"];
 $b = $_GET["tujuan"];
 

 include("aksi_koneksi.php");
 //INSERT INTO `db_infa`.`mata_kuliah` (`kode_mk`, `nama_mk`, `kode_program_studi`, `sks`) VALUES ('INF102', 'Algoritma', 'J', '3(1-2)');
 $q = "INSERT INTO `db_pesawat`.`tabel_pesawat` 
 			(`nama_maskapai`, `tujuan`) 
 		VALUES 
 			('$a', '$b')";
 mysqli_query($con,$q);
 echo  "data  $a $b telah di simpan ke database";
?>
<h2><a href="view_data.php">view data</a></h2>