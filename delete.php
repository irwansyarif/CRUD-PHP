<?php

include("connection.php");

if( isset($_GET['id']) ){
   
    // ambil id dari query string
    $id = $_GET['id'];
   
    // buat query hapus
    $sql = "DELETE FROM mahasiswa WHERE id=$id";
    $query = mysqli_query($connect, $sql);
   
    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list.php');
    } else {
        die("gagal menghapus...");
    }
   
} else {
    die("akses dilarang...");
}

?>