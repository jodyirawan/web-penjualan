<?php
include ('koneksi.php');

$no_update_gudang=$_GET['id'];

$deletegudang="delete from tbgudang where no_update_gudang='$no_update_gudang'";

if(mysqli_query($koneksi,$deletegudang)){
	echo "<script type='text/javascript'> alert('Data gudang berhasil dihapus'); window.location='viewgudang.php'; </script>";
}else {
		 echo "<script type='text/javascript'> alert('Data gudang gagal dihapus'); window.location='viewgudang.php'; </script>";
		}
?>
