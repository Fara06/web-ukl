<?php
 $host = mysqli_connect("localhost","root","");
 //if ($host){
 //    echo "Koneksi berhasil.<br/>";
 //}else {
 //    echo "Koneksi gagal.<br/>";
 //}

 //$data = mysqli_select_db($host,"intrans");
 //   if($data){
 //    echo "Koneksi database berhasil";
 //}else {
 //    echo "Koneksi database gagal";
 //}

$dbhost = "localhost";
$dbname = "intrans";
$dbuname = "root";
$dbpass = "";

$connect = mysqli_connect($dbhost,$dbuname,$dbpass,$dbname);
?>