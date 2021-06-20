<?php
//edit_form.php?kode=DIP100

 $kodenya = $_GET["kode"];
 include("aksi_koneksi.php");
 $q = "SELECT * FROM $table_name WHERE id_pesawat ='$kodenya'";
 $rslt = mysqli_query($con,$q);
 $rec  = mysqli_fetch_assoc($rslt);
?>

<h2>Form Data Update</h2>
	kode mata kuliah, nama mata kuliah, kode jurusan, sks<br/>
	<form action="aksi_update.php">
		
		
		<input type="text" name="nama_maskapai" value="<?php echo $rec["nama_maskapai"]; ?>">
		<input type="text" name="tujuan" value="<?php echo $rec["tujuan"]; ?>">
		
		<input type="submit" name="tmbl" value="simpan">
	</form>