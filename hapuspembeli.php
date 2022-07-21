<?php
include ('koneksi.php');

$no_transaksi=$_GET['id'];

$deletepembeli="delete from tbpembeli where no_transaksi='$no_transaksi'";

if(mysqli_query($koneksi,$deletepembeli)){
	echo "<script type='text/javascript'> alert('Data kelas berhasil dihapus'); window.location='viewpembeli.php'; </script>";
}else {
		 echo "<script type='text/javascript'> alert('Data kelas gagal dihapus'); window.location='viewpembeli.php'; </script>";
		}
?>
