<!DOCTYPE html>
<html>
<head>
	<title> Edit Data Gudang </title>
</head>
<body>
<center>
	<h2> Edit Data Gudang </h2>
	<br/>
	<a href="viewgudang.php"> KEMBALI </a>
	<br/>
	<br/>
	<h3> FORM Edit Data Gudang </h3>
	<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$datagudang = mysqli_query($koneksi,"select * from tbgudang where no_update_gudang='$id'");
	while($ds=mysqli_fetch_array($datagudang)){
	?>
	<form method="post" action="updategudang.php">
		<table border="1" align="center">
			<tr>
				<td> No Update Gudang </td>
				<td> <input type="hidden" name="no_update_gudang" value=<?php echo $ds['no_update_gudang'];?>>
				<input type="text" name="no_update_gudang" value="<?php echo $ds['no_update_gudang']; ?>">
				</td>
			</tr>
			<tr>
				<td> Nama Brang Tersedia </td>
				<td> <input type="text" name="nama_barang_tersedia" value="<?php echo $ds['nama_barang_tersedia'];?>"> </td>
			</tr>
			<tr>
				<td> Nama Barang Kosong </td>
				<td> <input type="text" name="nama_barang_kosong" value="<?php echo $ds['nama_barang_kosong'];?>"> </td>
			</tr>
			<tr>
				<td> Nama Brang Permintaan </td>
				<td> <input type="text" name="nama_barang_permintaan" value="<?php echo $ds['nama_barang_permintaan'];?>"> </td>
			</tr>
			<tr>
				<td> Nama Brang Diminta </td>
				<td> <input type="text" name="nama_barang_diminta" value="<?php echo $ds['nama_barang_diminta'];?>"> </td>
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