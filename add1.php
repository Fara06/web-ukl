<html>
    
    <head>
    <h1>Create Data</h1>
    </head>

    <body>
        <h3>Data Transportasi</h3>
        <form action="add1.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>Nama_Transportasi</td>
                    <td><input type="text" name="Nama_Transportasi"></td>
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
                </tr>
                    <td>Submit<input type="submit" name="Submit" value="Add"></td>
                </tr>

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
    $nama_transportasi= $_POST['Nama_Transportasi'];
    $merek_transportasi= $_POST['Merek'];
    $warna_transportasi = $_POST['Warna'];
    $nomor_transportasi= $_POST['Nomor'];
    echo($nomor);
    $sql="INSERT INTO transportasi (Nama_Transportasi, Merek, Warna,Nomor) VALUES ('$nama_transportasi','$merek_transportasi','$warna_transportasi','$nomor_transportasi')";
    $result = mysqli_query($connect,$sql);

    header("location:index1.php");
}
    ?>
            </table>
        </form>
    </body>
</html>