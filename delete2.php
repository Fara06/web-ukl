<?php

include_once("koneksi.php");
if(isset($_GET['Id_Rute'])){
$id = $_GET['Id_Rute'];
$Sql="DELETE FROM rute WHERE Id_rute=$id";
$result = mysqli_query($connect,$Sql);
}
header("location:index2.php");
?>