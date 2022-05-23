<?php
// include database connection file
include_once("../../config/config.php");
 
// Get id from URL to delete that user
$id_peminjam = $_GET['id_peminjam'];
 
// Delete user row from table based on given id
$result2 = mysqli_query($mysqli, "DELETE FROM peminjam WHERE id_peminjam=$id_peminjam");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../index.php");
?>