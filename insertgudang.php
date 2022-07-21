<?php
//koneksi database
include ('koneksi.php');

if(isset($_POST['submit']))
{
//mengambil data yang dikirim dari form
	$no_update_gudang=$_POST['no_update_gudang'];
	$nama_barang_tersedia=$_POST['nama_barang_tersedia'];
	$nama_barang_kosong=$_POST['nama_barang_kosong'];
	$nama_barang_permintaan=$_POST['nama_barang_permintaan'];
	$nama_barang_diminta=$_POST['nama_barang_diminta'];

//menambahkan data ke tbsiswa
	$insertgudang="insert into tbgudang (no_update_gudang,nama_barang_tersedia,nama_barang_kosong,nama_barang_permintaan,nama_barang_diminta) values ('".$no_update_gudang."','".$nama_barang_tersedia."','".$nama_barang_kosong."','".$nama_barang_permintaan."','".$nama_barang_diminta."')";

	if (mysqli_query($koneksi,$insertgudang)){
	echo "<script type='text/javascript'> alert('Data gudang berhasil disimpan'); window.location='viewgudang.php';</script>";
	 } else {
		 echo "<script type='text/javascript'> alert('Data gudang gagal disimpan'); window.location='viewgudang.php';</script>";
	}	
}
?>
