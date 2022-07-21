<!DOCTYPE html>
<html>
<head>
	<title> Edit Data pembeli </title>
</head>
<body>
<center>
	<h2> Edit Data pembeli </h2>
	<br/>
	<a href="viewpembeli.php"> KEMBALI </a>
	<br/>
	<br/>
	<h3> Form Edit Data pembeli </h3>
	<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$datapembeli = mysqli_query($koneksi,"select * from tbpembeli where no_transaksi='$id'");
	while($dk=mysqli_fetch_array($datapembeli)){
	?>
	<form method="post" action="updatepembeli.php">
		<table border="1" align="center">
			<tr>
				<td> No Transaksi</td>
				<td> <input type="hidden" name="no_transaksi" value=<?php echo $dk['no_transaksi'];?>>
				<input type="text" name="no_transaksi" value="<?php echo $dk['no_transaksi']; ?>">
				</td>
			</tr>
			<tr>
				<td> Harga Barang </td>
				<td> <input type="text" name="harga_barang" value="<?php echo $dk['harga_barang'];?>"> </td>
			</tr>
			<tr>
				<td> Total Barang </td>
				<td> <input type="text" name="total_barang" value="<?php echo $dk['total_barang'];?>"> </td>
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