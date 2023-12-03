<?php
include('connection.php'); // Koneksi database
$keyword = $_GET['keyword']; // Mengambil keyword yang dikirim dari form
$query = mysqli_query($connect,"SELECT * FROM karyawan WHERE nama='$keyword'"); //Mengambil data pada database berdasarkan nama sesuai keyword yang ditampung pada variabel $keyword.
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>
<body>
 <a href="add.php">Tambah Data</a>
 <form action="search.php" method="GET">
 <input type="text" name="keyword" placeholder="Keyword .." value="<?php echo $_GET['keyword']?>"/>
 <button type="submit">Search</button>
 </form>
 <table border="1">
 <tr>
 <th>Nama</th>
 <th>Alama</th>
 <th>Umur</th>
 <th>Jenis Kelamin</th>
 <th>Pilihan</th>
 </tr>
 <?php foreach($results as $result) : ?>
 <tr>
 <td><?php echo $result['nama']?></td>
 <td><?php echo $result['alamat']?></td>
 <td><?php echo $result['umur']?></td>
 <td><?php echo $result['jenis_kelamin']?></td>
 <td>
 <a href="edit.php?id=<?php echo $result['id']?>">Edit</a>
 <a href="delete.php?id=<?php echo $result['id']?>">Delete</a>
 </td>
 </tr>
 </table>
</body>
</html>