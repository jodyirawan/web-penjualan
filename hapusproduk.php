<?php
include ('koneksi.php');

$id_barang=$_GET['id'];

$deleteproduk=mysqli_query($koneksi,"delete from tbproduk where id_barang='$id_barang'");

if ($deleteproduk)
	echo "<script type='text/javascript'> alert('Data produk berhasil dihapus'); 
	window.location='viewproduk.php'; </script>";
	 else
		 echo "<script type='text/javascript'> alert('Data produk gagal dihapus'); 
		 window.location='viewproduk.php'; </script>";
?>

