<?php
   //aksi_delete.php?kode=DIP100
  $a = $_GET["kode"];
  echo "Yakin akan mendelete data kode mk $a?";
  include("aksi_koneksi.php");	
?>
  <p/>
  <?php
    if(!isset($_GET["pilihan"])){
  ?>
	  <a href="aksi_delete.php?kode=<?php echo $a;?>&pilihan=Y">Ya</a>&nbsp;
	  <a href="aksi_delete.php?kode=<?php echo $a;?>&pilihan=T">Tidak</a>&nbsp;
  <?php
    }
  ?>	  
  <?php
    if (isset($_GET["pilihan"])){
	    	if($_GET["pilihan"]=="Y"){
	    		 $q = "DELETE FROM $table_name WHERE nama_maskapai='$a'";
	    		mysqli_query($con,$q);
	    		echo "DATA  $a sudah dihapus<br/>";
	    	}
	    	else{
	    		echo "DATA  $a batal dihapus";
	    	}
    	
    	
         ?>
         <h2><a href="view_data.php">view data</a></h2>
         <?php
          }
         ?> 