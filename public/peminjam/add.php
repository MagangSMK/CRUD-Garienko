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
 
	<form action="add.php" method="post" name="form2">
		<table width="80%">
			<tr> 
				<td>Id Peminjam</td>
				<td><input type="text" name="id_peminjam"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr> 
				<td>Semester</td>
				<td><input type="text" name="semester"></td>
			</tr>
			<tr> 
				<td>Angkatan</td>
				<td><input type="text" name="angkatan"></td>
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
		$id_peminjam = $_POST['id_peminjam'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
		$semester = $_POST['semester'];
		$angkatan = $_POST['angkatan'];
		$jumlah = $_POST['jumlah'];
		// include database connection file
		include_once("../../config/config.php");
				
		// Insert user data into table
		$result2 = mysqli_query($mysqli, "INSERT INTO peminjam(id_peminjam,nama,jurusan,semester,angkatan,jumlah) VALUES('$id_peminjam','$nama','$jurusan','$semester','$angkatan','$jumlah')");
		
		// Show message when user added
		echo "data added successfully. <a href='../../index.php' >View Users</a>";
	}
	?>
</body>
</html>