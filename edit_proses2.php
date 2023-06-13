<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    $id = $_POST['Id_Rute'];
    $Rute=$_POST['Rute_awal'];
    $Tujuan=$_POST['Rute_tujuan'];

    // buat query update
    $result = mysqli_query($connect, "UPDATE rute SET Rute_awal='$Rute',Rute_tujuan='$Tujuan' WHERE Id_Rute=$id");
    header('Location: index2.php');
}
    // $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    // if( $query ) {
    //     // kalau berhasil alihkan ke halaman list-siswa.php
    //     header('Location: list-siswa.php');
    // } else {
    //     // kalau gagal tampilkan pesan
    //     die("Gagal menyimpan perubahan...");
    // }

?>