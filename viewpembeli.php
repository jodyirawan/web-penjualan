<!DOCTYPE html>
<html>
<head>
	<title> View Data Pembeli </title>
</head>
<body>
	<center>
	<h2> Data pembeli Toko X Clothing</h2>
	<br/>
	<a href = "addpembeli.php"> Tambah Data Pembeli</a>
	<br/>
	<br/>
	<table border ="1">
		<tr>
			<th> No. </th>
			<th> No Transaksi </th>
			<th> Harga Barang </th>
			<th> Total Barang </th>
		</tr>
		<?php
		include ('koneksi.php');
		$no=1; //utk menampilkan nomor urut pada tabel
		$datapembeli=mysqli_query($koneksi,"select * from tbpembeli order by harga_barang desc");
		//$koneksi = yg ada di file koneksi.php
		
		if (!$datapembeli) { //to show error statement
   			printf("Error: %s\n", mysqli_error($koneksi));
   			exit();
		}
		
		while ($dk=mysqli_fetch_assoc($datapembeli)){ //buka kurung kurawal while
		?>
			<tr>
				<td> <?php echo $no++;?> </td>
				<td> <?php echo $dk['no_transaksi'];?> </td> 
				<td> <?php echo $dk['harga_barang'];?> </td> 
				<td> <?php echo $dk['total_barang'];?> </td> 
				<td>
					<a href="editpembeli.php?id=<?php echo $dk['no_transaksi'];?>"> EDIT </a> ||
					<a href="hapuspembeli.php?id=<?php echo $dk['no_transaksi'];?>"> HAPUS </a>
				</td>
			</tr>
		<?php
		} //tutup kurung kurawal while
		?>
	</table>
		<br>
		<a href="index.php"> Kembali ke home </a>
	</center>
</body>
</html>