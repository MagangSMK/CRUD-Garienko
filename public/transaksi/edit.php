<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$idtransaksi = $_POST['id_transaksi'];
		$id_peminjam = $_POST['id_peminjam'];
		$nama = $_POST['nama'];
		$id_buku = $_POST['id_buku'];
		$nama_buku = $_POST['nama_buku'];
		$jumlah_buku = $_POST['jumlah_buku'];
	// update user data
	$result2 = mysqli_query($mysqli, "UPDATE transaksi SET 
	id_transaksi='$id_transaksi',
	id_peminjam='$id_peminjam',
	nama='$nama',
	id_buku='$id_buku',
	jumlah_buku='$jumlah_buku' WHERE id_transaksi=$id_transaksi");
	
	// Redirect to homepage to display updated user in list
	header("Location:../../index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_transaksi = $_GET['id_transaksi'];
 
// Fetech user data based on id
$result3 = mysqli_query($mysqli, "SELECT * FROM transaksi WHERE id_transaksi=$id_transaksi");
 
while($user_data = mysqli_fetch_array($result3))
{
        $id_transaksi = $user_data['id_transaksi'];
		$id_peminjam =$user_data['id_peminjam'];
		$nama = $user_data['nama'];
		$id_buku = $user_data['id_buku'];
		$nama_buku = $user_data['nama_buku'];
		$jumlah_buku = $user_data['jumlah_buku'];
}
?>
<html>
<head>	
	<title>Edit User transaksi</title>
</head>
 
<body>
	<a href="../../index.php">Home</a>
	<br/><br/>
	
	<form name="update_data" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Id transaksi</td>
				<td><input type="text" name="id_transaksi" disabled value=<?php echo $id_transaksi;?>></td>
			</tr>
			<tr> 
				<td>Id Peminjam</td>
				<td><input type="text" name="id_peminjam" value=<?php echo $id_peminjam;?>></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Id Buku</td>
				<td><input type="text" name="id_buku" value=<?php echo $id_buku;?>></td>
			</tr>
			<tr> 
				<td>Nama Buku</td>
				<td><input type="text" name="nama_buku" value=<?php echo $nama_buku;?>></td>
			</tr>
			<tr> 
				<td>Jumlah Buku</td>
				<td><input type="text" name="jumlah_buku" value=<?php echo $jumlah_buku;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_peminjam" value=<?php echo $_GET['id_transaksi'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>