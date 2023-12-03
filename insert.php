<?php
include('connection.php');
//karena form menggunakan method post kita gunakan $_POST
$nim = $_POST['nim']; //index didalamnya sesuai dengan input name yang ada diform
$nama = $_POST['nama']; //index didalamnya sesuai dengan input name yang ada diform
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$hobi = $_POST['hobi'];
$insert = mysqli_query($connect,"INSERT INTO mahasiswa SET nim='$nim',nama='$nama',alamat='$alamat', jk='$jk', hobi='$hobi'");
if($insert)
 header('Location:list.php'); //Jika berhasil akan di arahkan ke halamanlist.php
else
 echo 'Input data gagal'; //jika gagal akan keluar pesan tersebut