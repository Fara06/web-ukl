<!DOCTYPE html>
<html>
    <head>
    <meta name="description" contents="Rute">
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
        <h3>Rute</h3>
        <h1>Tabel Admin</h1>

        <table border="5" class="table">
            <tr>
                <th>Rute_awal</th>
                <th>Rute_tujuan</th>
            </tr>
        <?php
        
        include "koneksi.php";
        $query_mysql = mysqli_query($connect,"SELECT * FROM rute");
        while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $data['Rute_awal']; ?></td>
                <td><?php echo $data['Rute_tujuan']; ?></td>
            <td>
                <button><a href="Add2.php">Add new</a></button>
                <button><a href="edit2.php?Id_Rute=<?php echo $data['Id_Rute'];?>">Edit</a></button>
                <button><a href="delete2.php?Id_Rute=<?php echo $data['Id_Rute'];?>">Delete</a></button>
            <td>
            </tr>
            <?php } ?>
        </tr>
        </table>
        
    </body>
</html>