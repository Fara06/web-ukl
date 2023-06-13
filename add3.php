<html>
<head>
    <title>Create Data</title>
</head>
<body>
    <h1>Create Data</h1>
    <h3>Data Biaya</h3>
    <form action="add3.php" method="post" name="form1">
    <table width="25%" border="0">
                <tr> 
                    <td>Nama_Transportasi</td>
                    <td><input type="text" name="Nama_transportasi"></td>
                </tr>
                <tr> 
                    <td>merek_transportasi</td>
                    <td><input type="text" name="Merek"></td>
                </tr>
                <tr> 
                    <td>warna_transportasi</td>
                    <td><input type="text" name="Warna"></td>
                </tr>
                <tr> 
                    <td>plat_nomor</td>
                    <td><input type="text" name="Nomor"></td>
                    <tr> 
                    <td>Rute_awal</td>
                    <td><input type="text" name="Rute_awal"></td>
                </tr>
                <tr> 
                    <td>Rute tujuan</td>
                    <td><input type="text" name="Rute_tujuan"></td>
                </tr>
                <tr> 
                    <td>Biaya</td>
                    <td><input type="text" name="biaya"></td>
                </tr>
                </tr>
                    <td>Submit<input type="submit" name="Submit" value="Add"></td>
                </tr>
        </table>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "intrans";

        $connect = mysqli_connect($servername, $username, $password, $dbname);

        // Memeriksa koneksi
        if (!$connect) {
            die("Koneksi gagal: " . mysqli_connect_error());}
       
           if(isset($_POST['Submit'])) {
               $Nama= $_POST['Nama_transportasi'];
               $nama_transportasi= $_POST['Nama_Transportasi'];
               $merek_transportasi= $_POST['Merek'];
               $warna_transportasi = $_POST['Warna'];
               $nomor_transportasi= $_POST['Nomor'];
               $Rute= $_POST['Rute_awal'];
               $Tujuan= $_POST['Rute_tujuan'];
               $Biaya= $_POST['biaya'];
               echo($nomor);
               $sql="INSERT INTO biaya_trans (Nama_transportasi, Merek, Warna, Nomor, Rute_awal, Rute_tujuan, biaya) VALUES ('$nama_transportasi','$merek_transportasi','$warna_transportasi','$nomor_transportasi','$Rute','$Tujuan','$Biaya')";
               $result = mysqli_query($connect,$sql);
       
               header("location:index3.php");
        }
    ?>
</body>
</html>