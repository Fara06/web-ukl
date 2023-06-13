<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intrans";

$connect = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_GET['']) ){
    header('Location:edit_proses2.php');
    exit;
}
$id = $_GET['Id_Rute'];
 
$result = mysqli_query($connect,"SELECT * FROM rute WHERE Id_Rute='$id'");

while($row=mysqli_fetch_array($result))
{
    $Rute=$row['Rute_awal'];
    $Tujuan=$row['Rute_tujuan'];
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
    <form method="POST" action="edit_proses2.php">
        <table border="0">
            <tr> 
                <td>Rute_awal</td>
                <td><input type="text" name="Rute_awal" value="<?php echo $Rute;?>"></td>
            </tr>
            <tr> 
                <td>Rute_tujuan</td>
                <td><input type="text" name="Rute_tujuan" value="<?php echo $Tujuan;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="Id_Rute" value=<?php echo $_GET['Id_Rute'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>