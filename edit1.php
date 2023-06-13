<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intrans";

$connect = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_GET['']) ){
    header('Location:edit_proses1.php');
    exit;
}
$id = $_GET['Id_Transportasi'];
 
$result = mysqli_query($connect,"SELECT * FROM Transportasi WHERE Id_Transportasi='$id'");

while($row=mysqli_fetch_array($result))
{
    $Nama = $row['Nama_Transportasi'];
    $Merek = $row['Merek'];
    $Warna = $row['Warna'];
    $Nomor= $row['Nomor'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>
    <form method="POST" action="edit_proses1.php">
        <table border="0">
            <tr> 
                <td>Nama Transportasi</td>
                <td><input type="text" name="Nama_Transportasi" value="<?php echo $Nama;?>"></td>
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
                <td><input type="hidden" name="Id_Transportasi" value=<?php echo $_GET['Id_Transportasi'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>