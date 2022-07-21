<?php
include "koneksi.php";

if(isset($_POST['submit']))
{
	$id_barang=$_POST['id_barang'];
	$jenis_barang=$_POST['jenis_barang'];	
	$no_transaksi=$_POST['no_transaksi'];
	$no_update_gudang=$_POST['no_update_gudang'];

	$updateproduk=mysqli_query($koneksi,"update tbproduk set jenis_barang='$jenis_barang',no_transaksi='$no_transaksi',no_update_gudang='$no_update_gudang' where id_barang='$id_barang'");

	if ($updateproduk)
	echo "<script type='text/javascript'> alert('Data produk berhasil diubah') </script>";
	 else
		 echo "<script type='text/javascript'> alert('Data produk gagal diubah') </script>";
}

include "viewproduk.php";
?>

