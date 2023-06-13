<?php

include_once("koneksi.php");
if(isset($_GET['Id_Transportasi'])){
$id = $_GET['Id_Transportasi'];
$Sql="DELETE FROM transportasi WHERE Id_Transportasi=$id";
$result = mysqli_query($connect,$Sql);
}
header("location:index1.php");
?>