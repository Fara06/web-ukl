<html>
    
    <head>
    <h1>Create Data</h1>
    </head>

    <body>
        <h3>Data Rute</h3>
        <form action="add2.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>Rute_awal</td>
                    <td><input type="text" name="Rute_awal"></td>
                </tr>
                <tr> 
                    <td>Rute tujuan</td>
                    <td><input type="text" name="Rute_tujuan"></td>
                </tr>
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
    $Rute= $_POST['Rute_awal'];
    $Tujuan= $_POST['Rute_tujuan'];
    echo($Rute);
    $sql="INSERT INTO rute (Rute_awal, Rute_tujuan) VALUES ('$Rute','$Tujuan')";
    $result = mysqli_query($connect,$sql);

    header("location:index2.php");
}
    ?>
            </table>
        </form>
    </body>
</html>