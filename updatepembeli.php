<?php
include "koneksi.php";

if(isset($_POST['submit']))
{
	$no_transaksi=$_POST['no_transaksi'];	
	$harga_barang=$_POST['harga_barang'];
	$total_barang=$_POST['total_barang'];

	$updatepembeli=mysqli_query($koneksi,"update tbpembeli set harga_barang='$harga_barang',total_barang='$total_barang' where no_transaksi='$no_transaksi'");

	if ($updatepembeli)
	echo "<script type='text/javascript'> alert('Data pembeli berhasil diubah'); window.location='viewpembeli.php'; </script>";
	 else
		 echo "<script type='text/javascript'> alert('Data pembeli gagal diubah'); window.location='viewpembeli.php'; </script>";
}

?>
