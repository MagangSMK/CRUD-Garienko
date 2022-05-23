<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id_buku = $_POST['id_buku'];
	$nama_buku = $_POST['nama_buku'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$tahun_terbit = $_POST['tahun_terbit'];
	$jumlah = $_POST['jumlah'];
	// update user data
	$result1 = mysqli_query($mysqli, "UPDATE data_buku SET  id_buku='$id_buku',
    nama_buku='$nama_buku',
    penerbit='$penerbit',
    tahun_terbit='$tahun_terbit',
    jumlah='$jumlah' WHERE id_buku=$id_buku");
	
	// Redirect to homepage to display updated user in list
	header("Location:../../index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_buku = $_GET['id_buku'];
 
// Fetech user data based on id
$result1 = mysqli_query($mysqli, "SELECT * FROM data_buku WHERE id_buku=$id_buku");
 
while($user_data = mysqli_fetch_array($result1))
{
        $id_buku = $user_data['id_buku'];
		$nama_buku =$user_data['nama_buku'];
		$pengarang = $user_data['pengarang'];
		$penerbit = $user_data['penerbit'];
		$tahun_terbit = $user_data['tahun_terbit'];
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
				<td>Id Buku</td>
				<td><input type="text" name="id_buku" disabled value=<?php echo $id_buku;?>></td>
			</tr>
			<tr> 
				<td>Nama Buku</td>
				<td><input type="text" name="nama_buku" value=<?php echo $nama_buku;?>></td>
			</tr>
			<tr> 
				<td>Pengarang</td>
				<td><input type="text" name="pengarang" value=<?php echo $pengarang;?>></td>
			</tr>
			<tr> 
				<td>Penerbit</td>
				<td><input type="text" name="penerbit" value=<?php echo $penerbit;?>></td>
			</tr>
			<tr> 
				<td>Tahun Terbit</td>
				<td><input type="text" name="tahun_terbit" value=<?php echo $tahun_terbit;?>></td>
			</tr>
			<tr> 
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_buku" value=<?php echo $_GET['id_buku'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>