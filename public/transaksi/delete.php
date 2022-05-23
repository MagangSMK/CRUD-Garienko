<?php
// include database connection file
include_once("../../config/config.php");
 
// Get id from URL to delete that user
$id_transaksi = $_GET['id_transaksi'];
 
// Delete user row from table based on given id
$result3 = mysqli_query($mysqli, "DELETE FROM transaksi WHERE id_transaksi=$id_transaksi");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../index.php");
?>