<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intrans";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_GET['Id_biaya'])) {
    $id = $_GET['Id_biaya'];
    $result = mysqli_query($connect,"SELECT * FROM biaya_trans WHERE Id_biaya='$id'");
    
    while($row=mysqli_fetch_array($result))
    {
        $Nama = $row['Nama_transportasi'];
        $Merek = $row['Merek'];
        $Warna = $row['Warna'];
        $Nomor= $row['Nomor'];
        $Rute=$row['Rute_awal'];
        $Tujuan=$row['Rute_tujuan'];
        $Biaya=$row['biaya'];
    }
} else {
    header('Location:edit_proses3.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Data Biaya | InTrans</title>
</head>

<body>
    <header>
        <h3>Edit Data Biaya</h3>
    </header>
    <form method="POST" action="edit_proses3.php">
        <table border="0">
            <tr> 
                <td>Nama Transportasi</td>
                <td><input type="text" name="Nama_transportasi" value="<?php echo $Nama;?>"></td>
            </tr>
            <tr> 
                <td>Merek</td>
                <td><input type="text" name="Merek" value="<?php echo $Merek;?>"></td>
            </tr>
            <tr> 
                <td>Warna</td>
                <td><input type="text" name="Warna" value="<?php echo $Warna;?>"></td>
            </tr>
            <tr> 
                <td>Nomor</td>
                <td><input type="text" name="Nomor" value="<?php echo $Nomor;?>"></td>
            </tr>
            <tr> 
                <td>Rute awal</td>
                <td><input type="text" name="Rute_awal" value="<?php echo $Rute;?>"></td>
            </tr>
            <tr> 
                <td>Rute tujuan</td>
                <td><input type="text" name="Rute_tujuan" value="<?php echo $Tujuan;?>"></td>
            </tr>
            <tr> 
                <td>Biaya</td>
                <td><input type="text" name="biaya" value="<?php echo $Biaya;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="Id_biaya" value="<?php echo $_GET['Id_biaya'];?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>