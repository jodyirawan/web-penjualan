<!DOCTYPE html>
<html>
<head>
	<title> View Data Produk </title>
</head>
<body>
	<center>
	<h2> Data Produk Toko X Clothing</h2>
	<br/>
	<a href = "addproduk.php"> Tambah Data Produk </a>
	<br/>
	<br/>
	<table border ="1">
		<tr>
			<th> No. </th>
			<th> Id barang </th>
			<th> Jenis Barang </th>
			<th> No Transaksi </th>
			<th> No Update Gudang </th>
		</tr>
		<?php
		include ('koneksi.php');
		$no=1;
		$dataproduk=mysqli_query($koneksi,"select * from tbproduk") or die (mysqli_error());

		if (!$dataproduk) { //to show error statement
   			printf("Error: %s\n", mysqli_error($koneksi));
   			exit();
		}
		
		while ($ds=mysqli_fetch_assoc($dataproduk)){
		?>
			<tr>
				<td> <?php echo $no++;?> </td>
				<td> <?php echo $ds['id_barang'];?> </td>
				<td> <?php echo $ds['jenis_barang'];?> </td>
				<td> <?php echo $ds['no_transaksi'];?> </td>
				<td> <?php echo $ds['no_update_gudang'];?> </td>
				<td>
					<a href="editproduk.php?id=<?php echo $ds['id_barang'];?>"> EDIT </a> ||
					<a href="hapusproduk.php?id=<?php echo $ds['id_barang'];?>"> HAPUS </a>
				</td>
		<?php
		}
		?>
	</table>
		<br>
		<a href="index.php"> Kembali ke home </a>
	</center>
</body>
</html>