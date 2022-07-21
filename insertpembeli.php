<?php
//koneksi database
include ('koneksi.php');


if(isset($_POST['submit']))
{
//mengambil data yang dikirim dari form
	$id_barang=$_POST['id_barang']; //mengambil nilai dari input text bernama namakelas, yg dikirim dengan metode POST
	$harga_barang=$_POST['harga_barang'];
	$total_barang=$_POST['total_barang'];

//menambahkan data ke tbkelas

$insertpembeli="insert into tbpembeli (id_barang,harga_barang,total_barang) values ('".$id_barang."','".$harga_barang."','".$total_barang."')";

	if (mysqli_query($koneksi, $insertpembeli)){
		echo "<script type='text/javascript'> alert('Data pembeli berhasil disimpan'); window.location='viewpembeli.php';</script>";
	}else{
		echo "<script type='text/javascript'> alert('Data pembeli gagal disimpan'); window.location='viewpembeli.php';</script>";
	}
}

?>
