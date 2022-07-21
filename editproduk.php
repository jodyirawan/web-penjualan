<!DOCTYPE html>
<html>
<head>
	<title> Edit Data Produk </title>
</head>
<body>
<center>
	<h2> Edit Data Produk </h2>
	<br/>
	<a href="viewproduk.php"> KEMBALI </a>
	<br/>
	<br/>
	<h3> FORM Edit Data Produk </h3>
	<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$dataproduk = mysqli_query($koneksi,"select * from tbproduk where id_barang='$id'");
	while($ds=mysqli_fetch_array($dataproduk)){
	?>
	<form method="post" action="updateproduk.php">
		<table border="1" align="center">
			<tr>
				<td> Id barang </td>
				<td> <input type="hidden" name="id_barang" value=<?php echo $ds['id_barang'];?>>
				<input type="text" name="id_barang" value="<?php echo $ds['id_barang']; ?>">
				</td>
			</tr>
			<tr>
				<td> Jenis Barang </td>
				<td> <input type="text" name="jenis_barang" value="<?php echo $ds['jenis_barang'];?>"> </td>
			</tr>
			<tr>
				<td> No Transaksi </td>
				<td> <input type="text" name="no_transaksi" value="<?php echo $ds['no_transaksi'];?>"> </td>
			</tr>
			<tr>
				<td> No Update Gudang </td>
				<td> <input type="text" name="no_update_gudang" value="<?php echo $ds['no_update_gudang'];?>"> </td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
	<?php
	}
	?>
</center>
</body>
</html>