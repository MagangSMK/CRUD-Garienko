<?php
include_once("../../config/config.php");
?>
<html>
<head>
    
	<title>Add data</title>
</head>
 
<body>
	<a href="../../index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="80%">
			<tr> 
				<td>Id Buku</td>
				<td><input type="text" name="id_buku"></td>
			</tr>
			<tr> 
				<td>Nama Buku</td>
				<td><input type="text" name="nama_buku"></td>
			</tr>
			<tr> 
				<td>Pengarang</td>
				<td><input type="text" name="pengarang"></td>
			</tr>
			<tr> 
				<td>Penerbit</td>
				<td><input type="text" name="penerbit"></td>
			</tr>
			<tr> 
				<td>Tahun Terbit</td>
				<td><input type="text" name="tahun_terbit"></td>
			</tr>
			<tr> 
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
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
		$id_buku = $_POST['id_buku'];
		$nama_buku = $_POST['nama_buku'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];
		$tahun_terbit = $_POST['tahun_terbit'];
		$jumlah = $_POST['jumlah'];
		// include database connection file
		include_once("../../config/config.php");
				
		// Insert user data into table
		$result1 = mysqli_query($mysqli, "INSERT INTO data_buku(id_buku,nama_buku,pengarang,penerbit,tahun_terbit,jumlah) VALUES('$id_buku','$nama_buku','$pengarang','$penerbit','$tahun_terbit','$jumlah')");
		
		// Show message when user added
		echo "data added successfully. <a href='../../index.php' >View Users</a>";
	}
	?>
</body>
</html>