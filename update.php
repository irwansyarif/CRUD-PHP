<?php
include('connection.php'); // Mengkoneksikan dengan database



$id = htmlspecialchars($_POST['id']); // Karena form menggunakan method post kita gunakan $_POST
$nim = htmlspecialchars($_POST['nim']); // Index didalamnya sesuai dengan input name yang ada diform
$nama = htmlspecialchars($_POST['nama']); // Index didalamnya sesuai dengan input name yang ada diform
$alamat = htmlspecialchars($_POST['alamat']);
$jk = htmlspecialchars($_POST['jk']);
$hobi = htmlspecialchars($_POST['hobi']);
$update = mysqli_query($connect,"UPDATE mahasiswa SET nim='$nim',nama='$nama', alamat='$alamat', jk='$jk' , hobi='$hobi' WHERE id='$id' "); //menggunakan kondisi where untuk menyimpan dengan data spesifik
if($update)
 header('Location:list.php'); // Jika berhasil akan di arahkan ke halaman list.php
else
 echo 'Input data gagal'; // Jika gagal akan keluar pesan tersebut
?>