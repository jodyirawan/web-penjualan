<!DOCTYPE html>
<html>
<head>
	<title> Tambah Data Gudang </title>
</head>
<body>
<center>
	<h2> TAMBAH DATA Gudang </h2>
	<br/>
	<a href="viewgudang.php"> KEMBALI </a>
	<br/>
	<br/>
	<h3> Form Tambah Data Gudang </h3>
	<form method="post" action="insertgudang.php">
		<table border="1" align="center">
			<tr>
				<td> No Update Gudang </td>
				<td> <input type="text" name="no_update_gudang"></td>
			</tr>
			<tr>
				<td> Nama Barang Tersedia </td>
				<td> <input type="text" name="nama_barang_tersedia"></td>
			</tr>
			<tr>
				<td> Nama Barang Kosong</td>
				<td> <input type="text" name="nama_barang_kosong"></td>
			</tr>
			<tr>
				<td> Nama Barang PErmintaan </td>
				<td> <input type="text" name="nama_barang_tersedia"></td>
			</tr>
			<tr>
				<td> Nama Barang Diminta </td>
				<td> <input type="text" name="nama_barang_tersedia"></td>
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