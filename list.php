<?php
include ('connection.php');
$query = mysqli_query($connect,"SELECT * FROM mahasiswa");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

if(isset($_POST['cari'])){
    $keyword = $_POST['keyword'];
    $query = mysqli_query($connect,"SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR
    nim LIKE '%$keyword%' OR alamat LIKE '%$keyword%' OR jk LIKE '%$keyword%' OR hobi LIKE '%$keyword%'");
    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<body>
<br></br>
    <div class="container-md">
    <button type="button" class="btn-primary btn-sm"><a class="text-black"href="add.php">Tambah Data</a></button>
    <br></br>
    <form action="" method="post">

    <input type="text" name="keyword" size="30" placeholder="Masukan Pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari</button> 
    </form>
    <br>
 <table border="1"class="table table-hover table-striped">
 <tr>
 <th>Id</th>
 <th>NIM</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Jenis Kelamin</th>
 <th>Hobi</th>
 <th>Aksi</th>
 </tr>
 <?php foreach($results as $result) : ?>
 <tr>
 <td><?php echo $result['id']?></td>
 <td><?php echo $result['nim']?></td>
 <td><?php echo $result['nama']?></td>
 <td><?php echo $result['alamat']?></td>
 <td><?php echo $result['jk']?></td>
 <td><?php echo $result['hobi']?></td>
 <td>
 <a href="edit.php?id=<?php echo $result['id']?>">Edit </a> |
 <a href="delete.php?id=<?php echo $result['id']?>">Delete</a> 
 </td>

 </tr>
 <?php endforeach ?>
 </table>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>