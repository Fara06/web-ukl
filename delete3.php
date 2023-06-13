<?php

include_once("koneksi.php");
if(isset($_GET['Id_biaya'])){
$id = $_GET['Id_biaya'];
$Sql="DELETE FROM biaya_trans WHERE Id_biaya=$id";
$result = mysqli_query($connect,$Sql);
}
header("location:index3.php");
?>