<!DOCTYPE html>
<html>
    <head>
    <meta name="description" contents="Transportation">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="home.css">
    <?php
    $color = '#D9D9D9';
    $css = 'body { background-color: ' . $color . '; }';
    ?>
    <style>
        <?php echo $css; ?>
    </style>
</head>
    <body>
    <header>
        <nav class="nav-bar">
        <a href="#">Home</a>
            <a href="View.php">Search</a>
            <a href="lokasi.php">Lokasi</a>
            <a href="contact.php">Contact</a>
            <a href="index1.php">Data Transportasi</a>
            <a href="index2.php">Data Rute</a>
            <a href="index3.php">Data Biaya</a>
        </nav>
    </header>
        <h3>Transportasi</h3>
        <h1>Tabel Admin</h1>

        <table border="5" class="table">
            <tr>
                <th>Nama Transportasi</th>
                <th>Merek Transportasi </th>
                <th>Warna Transportasi </th>
                <th>Plat Nomor</th>
            </tr>
        <?php
        
        include "koneksi.php";
        $query_mysql = mysqli_query($connect,"SELECT * FROM transportasi");
        while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $data['Nama_Transportasi']; ?></td>
                <td><?php echo $data['Merek']; ?></td>
                <td><?php echo $data['Warna']; ?></td>
                <td><?php echo $data['Nomor']; ?></td>
            <td>
                <button><a href="Add1.php">Add new</a></button>
                <button><a href="edit1.php?Id_Transportasi=<?php echo $data['Id_Transportasi'];?>">Edit</a></button>
                <button><a href="delete1.php?Id_Transportasi=<?php echo $data['Id_Transportasi'];?>">Delete</a></button>
            <td>
            </tr>
            <?php } ?>
        </tr>
        </table>
        
    </body>
</html>