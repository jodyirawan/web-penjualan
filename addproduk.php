<!DOCTYPE html>
<html>
<head>
	<title> Tambah DataProduk </title>
</head>
<body>
<center>
	<h2> Tambah DataProduk </h2>
	<br/>
	<a href="viewproduk.php"> KEMBALI </a>
	<br/>
	<br/>
	<h3> Form Tambah Data Produk </h3>
	<form method="post" action="insertproduk.php">
		<table border="1" align="center">
			<tr>
				<td> Id barang </td>
				<td> <input type="text" name="id_barang"></td>
			</tr>
			<tr>
				<td> Jenis Barang </td>
				<td> <input type="text" name="jenis_barang"></td>
			</tr>
			<tr>
				<td>No Transaksi</td>
				<td> <input type="text" name="no_transaksi"></td>
			</tr>
			<tr>
				<td>No Update Gudang</td>
				<td> <input type="text" name="no_update_gudang"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <input type="submit" name="submit" value ="SIMPAN">
				<input type="reset"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>