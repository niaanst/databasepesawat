<?php
	
	//UPDATE `db_infa`.`mata_kuliah` SET `kode_mk` = 'INF105', `nama_mk` = 'Aljabars', `kode_program_studi` = 'X', `sks` = '7(2-0)' WHERE `mata_kuliah`.`kode_mk` = 'INF104';

    //aksi_update.php?kmk=DIP100&nmk=Pendidikan+Agama+Islam&kj=J&sks=2%282-0%29&tmbl=simpan
	$a = $_GET["nama_maskapai"];
	$b = $_GET["tujuan"];
	

	include("aksi_koneksi.php");

	$q = "UPDATE `db_pesawat`.`tabel_pesawat` 
		  SET `nama_maskapai` = '$a', 
		      `tujuan` = '$b', 
		      
		  WHERE `nama_maskapai`.`id_pesawat` = '$a'";

	mysqli_query($con,$q);	
	echo  "data $a $b telah update ke database";  
?>
<h2><a href="view_data.php">view data</a></h2>