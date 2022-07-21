<?php
include "koneksi.php";

if(isset($_POST['submit']))
{
	$no_update_gudang=$_POST['no_update_gudang'];
	$nama_barang_tersedia=$_POST['nama_barang_tersedia'];	
	$nama_barang_kosong=$_POST['nama_barang_kosong'];
	$nama_barang_permintaan=$_POST['nama_barang_permintaan'];
	$nama_barang_diminta=$_POST['nama_barang_diminta'];
	

	$updategudang=mysqli_query($koneksi,"update tbgudang set nama_barang_tersedia='$nama_barang_tersedia',nama_barang_kosong='$nama_barang_kosong',nama_barang_permintaan='$nama_barang_permintaan',nama_barang_diminta='$nama_barang_diminta' where no_update_gudang='$no_update_gudang'");

	if ($updategudang)
	echo "<script type='text/javascript'> alert('Data gudang berhasil diubah'); window.location='viewgudang.php'; </script>";
	 else
		 echo "<script type='text/javascript'> alert('Data gudang gagal diubah'); window.location='viewgudang.php'; </script>";
}

?>
