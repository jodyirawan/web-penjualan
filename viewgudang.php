<!DOCTYPE html>
<html>
<head>
	<title> View Data Gudang </title>
</head>
<body>
	<center>
	<h2> Data Gudang Toko X Clothing</h2>
	<br/>
	<a href = "addgudang.php"> Tambah Data gudang</a>
	<br/>
	<br/>
	<table border ="1">
		<tr>
			<th> No. </th>
			<th> No_update_gudang </th>
			<th> nama_barang_tersedia </th>
			<th> nama_barang_kosong </th>
			<th> nama_barang_permintaan </th>
			<th> nama_barang_diminta </th>
		</tr>
		<?php
		include ('koneksi.php');
		$no=1; //utk menampilkan nomor urut pada tabel
		$datagudang=mysqli_query($koneksi,"select * from tbgudang order by No_update_gudang desc");
		//$koneksi = yg ada di file koneksi.php
		
		if (!$datagudang) { //to show error statement
   			printf("Error: %s\n", mysqli_error($koneksi));
   			exit();
		}
		
		while ($dk=mysqli_fetch_assoc($datagudang)){ //buka kurung kurawal while
		?>
			<tr>
				<td> <?php echo $no++;?> </td>
				<td> <?php echo $dk['no_update_gudang'];?> </td> 
				<td> <?php echo $dk['nama_barang_tersedia'];?> </td> 
				<td> <?php echo $dk['nama_barang_kosong'];?> </td> 
				<td> <?php echo $dk['nama_barang_permintaan'];?> </td>
				<td> <?php echo $dk['nama_barang_diminta'];?> </td> 
				<td>
					<a href="editgudang.php?id=<?php echo $dk['no_update_gudang'];?>"> EDIT </a> ||
					<a href="hapusgudang.php?id=<?php echo $dk['no_update_gudang'];?>"> HAPUS </a>
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