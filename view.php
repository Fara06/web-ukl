<html>
    <head>
        <meta name="description" contents="Transportation">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="user.css">
    <title>Profil Pengguna | InTrans</title>
    </head>
    <body>
    <header>
        <nav class="nav-bar">
            <a href="#">Home</a>
            <a href="view.php">Search</a>
            <a href="lokasi.php">Lokasi</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
        <h3>Search Transportasi</h3>
        <center><table width='75%' height='75%' border="5" class="table"></center>
            <tr>
            <th>Nama Transportasi</th>
                <th>Merek Transportasi </th>
                <th>Warna Transportasi </th>
                <th>Plat Nomor</th>
                <th>Rute Awal</th>
                <th>Rute Tujuan</th>
                <th>Biaya</th>
            </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($connect,"SELECT * FROM biaya_trans");
        while ($data = mysqli_fetch_array($query_mysql)){
    ?>
            <tr>
                <td><?php echo $data['Nama_transportasi']; ?></td>
                <td><?php echo $data['Merek']; ?></td>
                <td><?php echo $data['Warna']; ?></td>
                <td><?php echo $data['Nomor']; ?></td>
               <td><?php echo $data['Rute_awal']; ?></td>
               <td><?php echo $data['Rute_tujuan']; ?></td>
               <td><?php echo $data['biaya']; ?></td>
        </tr>
        <?php } ?>
        </table>
    </body>
</html>