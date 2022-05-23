<?php
include_once("../../config/config.php");
?>
<html>
<head>
    
	<title>Add transaksi</title>
</head>
 
<body>
	<a href="../../index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form3">
		<table width="80%">
			<tr> 
				<td>Id transaksi</td>
				<td><input type="text" name="id_transaksi"></td>
			</tr>
			<tr> 
				<td>Id Peminjam</td>
				<td><input type="text" name="id_peminjam"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Id Buku</td>
				<td><input type="text" name="id_buku"></td>
			</tr>
			<tr> 
				<td>Nama Buku</td>
				<td><input type="text" name="nama_buku"></td>
			</tr>
			<tr> 
				<td>Jumlah Buku</td>
				<td><input type="text" name="jumlah_buku"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_transaksi = $_POST['id_transaksi'];
		$id_peminjam = $_POST['id_peminjam'];
		$nama = $_POST['nama'];
		$id_buku = $_POST['id_buku'];
		$nama_buku = $_POST['nama_buku'];
		$jumlah_buku = $_POST['jumlah_buku'];
		// include database connection file
		include_once("../../config/config.php");
				
		// Insert user data into table
		$result3 = mysqli_query($mysqli, "INSERT INTO transaksi(id_transaksi,id_peminjam,nama,id_buku,nama_buku,jumlah_buku) VALUES('$id_transaksi','$id_peminjam','$nama','$id_buku','$nama_buku','$jumlah_buku')");
		
		// Show message when user added
		echo "transaksi added successfully. <a href='../../index.php' >View Users</a>";
	}
	?>
</body>
</html>