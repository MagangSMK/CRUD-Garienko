<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$semester = $_POST['semester'];
	$angatan = $_POST['angkatan'];
	$jumlah = $_POST['jumlah'];
	// update user data
	$result2 = mysqli_query($mysqli, "UPDATE peminjam SET 
    nama='$nama',
    jurusan='$jurusan',
    semester='$semester',
    jumlah='$jumlah' WHERE id_buku=$id_buku");
	
	// Redirect to homepage to display updated user in list
	header("Location:../../index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_peminjam = $_GET['id_peminjam'];
 
// Fetech user data based on id
$result2 = mysqli_query($mysqli, "SELECT * FROM peminjam WHERE id_peminjam=$id_peminjam");
 
while($user_data1 = mysqli_fetch_array($result2))
{
        $id_peminjam = $user_data['id_peminjam'];
		$nama =$user_data['nama'];
		$jurusan = $user_data['jurusan'];
		$semester = $user_data['semester'];
		$angkatan = $user_data['angkatan'];
		$jumlah = $user_data['jumlah'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="../../index.php">Home</a>
	<br/><br/>
	
	<form name="update_data" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Id Peminjam</td>
				<td><input type="text" name="id_peminjam" disabled value=<?php echo $id_peminjam;?>></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value=<?php echo $jurusan;?>></td>
			</tr>
			<tr> 
				<td>Semester</td>
				<td><input type="text" name="semester" value=<?php echo $semester;?>></td>
			</tr>
			<tr> 
				<td>Angkatan</td>
				<td><input type="text" name="angkatan" value=<?php echo $angkatan;?>></td>
			</tr>
			<tr> 
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_peminjam" value=<?php echo $_GET['id_peminjam'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>