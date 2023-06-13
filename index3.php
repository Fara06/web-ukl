<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="Rute">
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
    <h3>Biaya</h3>
    <h1>Tabel Admin</h1>

    <table border="5" class="table">
        <tr>
        <tr>
                <th>Nama Transportasi</th>
                <th>Merek Transportasi </th>
                <th>Warna Transportasi </th>
                <th>Plat Nomor</th>
                <th>Ruteawal</th>
                <th>Rute tujuan</th>
                <th>Biaya</th>
        </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($connect,"SELECT * FROM biaya_trans");
        while($data = mysqli_fetch_array($query_mysql)){
        ?>
        <tr>
                <td><?php echo $data['Nama_transportasi']; ?></td>
                <td><?php echo $data['Merek']; ?></td>
                <td><?php echo $data['Warna']; ?></td>
                <td><?php echo $data['Nomor']; ?></td>
                <td><?php echo $data['Rute_awal']; ?></td>
                <td><?php echo $data['Rute_tujuan']; ?></td>
                <td><?php echo $data['biaya']; ?></td>
            <td>
                <button><a href="Add3.php">Add new</a></button>
                <button><a href="edit3.php?Id_biaya=<?php echo $data['Id_biaya'];?>">Edit</a></button>
                <button><a href="delete3.php?Id_biaya=<?php echo $data['Id_biaya'];?>">Delete</a></button>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>