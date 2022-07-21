<!DOCTYPE html>
<html>
<head>
	<title> Tambah Data Pembeli </title>
</head>
<body>
<center>
	<h2> Tambah Data Pembeli </h2>
	<br/>
	<a href="viewpembeli.php"> KEMBALI </a>
	<br/>
	<br/>
	<h3> Form Tambah Data Pembeli </h3>
	<form method="post" action="insertpembeli.php">
		<table border="1" align="center">
			<tr>
				<td> No Transaksi</td>
				<td> <input type="text" name="no_transaksi"></td>
			</tr>
			<tr>
				<td> Harga Barang</td>
				<td> <input type="text" name="harga_barang"></td>
			</tr>
			<tr>
				<td> Total barang</td>
				<td> <input type="text" name="total_barang"></td>
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