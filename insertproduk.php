<?php
//koneksi database
include ('koneksi.php');

if(isset($_POST['submit']))
{
//mengambil data yang dikirim dari form
	$id_barang=$_POST['id_barang'];
	$jenis_barang=$_POST['jenis_barang'];
	$no_transaksi=$_POST['no_transaksi'];
	$no_update_gudang=$_POST['no_update_gudang'];
	

//menambahkan data 
	$insertproduk="insert into tbproduk (id_barang,jenis_barang,no_transaksi,no_update_gudang) values ('".$id_barang."','".$jenis_barang."','".$no_transaksi."','".$no_update_gudang."')";

	if (mysqli_query($koneksi,$insertproduk)){
	echo "<script type='text/javascript'> alert('Data produk berhasil disimpan'); window.location='viewproduk.php';</script>";
	 } else {
		 echo "<script type='text/javascript'> alert('Data produk gagal disimpan'); window.location='viewproduk.php';</script>";
	}	
}
?>
