<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    $id = $_POST['Id_biaya'];
    $Nama=$_POST['Nama_transportasi'];
    $Merek=$_POST['Merek'];
    $Warna=$_POST['Warna'];
    $NO =$_POST['Nomor'];
    $Rute=$_POST['Rute_awal'];
    $Tujuan=$_POST['Rute_tujuan'];
    $Biaya=$_POST['biaya'];

    // buat query update
    $result = mysqli_query($connect, "UPDATE biaya_trans SET Nama_transportasi='$Nama',Merek='$Merek',Warna='$Warna', Nomor='$NO', Rute_awal='$Rute', Rute_tujuan='$Tujuan', biaya='$Biaya' WHERE Id_biaya=$id");
    header('Location: index3.php');
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