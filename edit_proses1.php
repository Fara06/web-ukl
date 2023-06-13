<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    $id = $_POST['Id_Transportasi'];
    $Nama=$_POST['Nama_Transportasi'];
    $Merek=$_POST['Merek'];
    $Warna=$_POST['Warna'];
    $NO=$_POST['Nomor'];

    // buat query update
    $result = mysqli_query($connect, "UPDATE transportasi SET Nama_Transportasi='$Nama',Merek='$Merek',Warna='$Warna', Nomor='$NO' WHERE Id_Transportasi=$id");
    header('Location: index1.php');
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