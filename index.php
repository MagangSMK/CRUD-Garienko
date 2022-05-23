<?php
include_once("config/config.php");

// Create database connection using config file


// Fetch all users data from database



?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="public/data_buku/add.php">Add New Data</a>
 
    <table width="80%" border=1>
        <?php 
        $result1= mysqli_query($mysqli, "SELECT * FROM data_buku ORDER BY id_buku asc");
        ?>
 
    <tr>
     <th>Id Buku</th> <th>Nama Buku</th> <th>Pengarang</th> <th>Penerbit</th> <th>Tahun Terbit</th> <th>Jumlah</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data= mysqli_fetch_array($result1)) {         
        echo "<tr>";
        echo "<td>".$id_buku = $user_data['id_buku']."</td>";
        echo "<td>".$nama_buku =$user_data['nama_buku']."</td>";
        echo "<td>".$pengarang = $user_data['pengarang']."</td>";
        echo "<td>".$penerbit = $user_data['penerbit']."</td>";
        echo "<td>".$tahun_terbit = $user_data['tahun_terbit']."</td>";
        echo "<td>".$jumlah = $user_data['jumlah']."</td>";    
        echo "<td><a  href=' public/data_buku/edit.php?id_buku=[id_buku]'>Edit</a> | <a href='public/data_buku/delete.php?id_buku=[id_buku]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>

    <br>
    <br>

<a href="public/peminjam/add.php">Add New Data</a>
 
    <table width="80%" border=1>
        <?php
        $result2 = mysqli_query($mysqli, "SELECT * FROM peminjam ORDER BY id_peminjam ASC");
        ?>
 
    <tr>
     <th>Id Peminjam</th> <th>Nama</th> <th>Jurusan</th> <th>Semester</th> <th>Angkatan</th> <th>Jumlah</th> <th>Update</th>
    </tr>
    <?php 
    while($user_data = mysqli_fetch_array($result2)) {         
        echo "<tr>";
        echo "<td>".$id_peminjam = $user_data['id_peminjam']."</td>";
        echo "<td>".$nama = $user_data['nama']."</td>";
        echo "<td>".$jurusan = $user_data['jurusan']."</td>";
        echo "<td>".$semester = $user_data['semester']."</td>";
        echo "<td>".$angkatan = $user_data['angkatan']."</td>";
        echo "<td>".$jumlah = $user_data['jumlah']."</td>";    
        echo "<td><a  href=' public/peminjam/edit.php?id_peminjam=[id_peminjam]'>Edit</a> | <a href='public/peminjam/delete.php?id_peminjam=[id_peminjam]'>Delete</a></td></tr>";
    }
    ?>
    </table>

    <br>
    <br>
 
<body>
<a href="public/transaksi/add.php">Add New Transaksi</a>
 
    <table width="80%" border=1>
        <?php
        
        $result3 = mysqli_query($mysqli, "SELECT * FROM transaksi ORDER BY id_transaksi ASC");
        ?>
 
    <tr>
     <th>Id Transaksi</th> <th>Id Peminjam</th> <th>Nama</th> <th>Id Buku</th> <th>Nama Buku</th> <th>Jumlah Buku</th>
    </tr>
    <?php  

    while($user_data = mysqli_fetch_array($result3)) {         
        echo "<tr>";
        echo "<td>".$id_transaksi = $user_data['id_transaksi']."</td>";
        echo "<td>".$id_peminjam =$user_data['id_peminjam']."</td>";
        echo "<td>".$nama = $user_data['nama']."</td>";
        echo "<td>".$id_buku = $user_data['id_buku']."</td>";
        echo "<td>".$nama_buku = $user_data['nama_buku']."</td>";
        echo "<td>".$jumlah_buku = $user_data['jumlah_buku']."</td>";   
        
    }
    ?>
    </table>
</body>
</html>