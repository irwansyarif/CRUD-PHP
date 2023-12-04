<?php
include('connection.php');
$id = $_GET['id']; // Untuk mengambil id yang dilempar dari form list.php
$query = mysqli_query($connect,"SELECT * FROM mahasiswa WHERE id='$id' LIMIT 1");//mengambil data sesuai dengan id nya
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>
 <form action="update.php" method="post">
 <input type="hidden" name="id" value=<?php echo $result[0]['id']?>> <!--untuk menyimpan id tanpa menampilkan data id pada form-->
 <label>NIM</label><br/>
 <input type="text" name="nim" value="<?php echo $result[0]['nim']?>"/><!--menampilkan data sesuai dr variabel $result diatas-->
 <br/><br/>
 <label>Nama</label><br/>
 <input type="text" name="nama" value="<?php echo $result[0]['nama']?>"/><!--menampilkan data sesuai dr variabel $result diatas-->
 <br/><br/>
 <label>Alamat</label><br/>
 <textarea name="alamat" cols="30" rows="10"><?php echo$result[0]['alamat']?></textarea>
 <br/><br/>
 <label>Jenis Kelamin</label><br/>
 <input type="radio" name="jk" value="Laki-laki" <?php echo ($result[0]['jk'] =='Laki-laki') ? 'checked' : '';?> > Laki-laki <br>
 <input type="radio" name="jk" value="Perempuan" <?php echo ($result[0]['jk'] =='Perempuan') ? 'checked' : '';?> > Perempuan
 <br/><br/>
 <label>Hobi</label><br/>
 <select name="hobi">
 <option value="Kesenian"<?php echo ($result[0]['hobi'] =='kesenian') ? 'selected' : '';?> >Seni</option>
 <option value="Olahraga"<?php echo ($result[0]['hobi'] =='olahraga') ? 'selected' : '';?> >Olahraga</option>
 </select>
</br></br>
<label>No Telepon</label><br/>
 <input type="tel" name="notelp" value="<?php echo $result[0]['notelp']?>"/><!--menampilkan data sesuai dr variabel $result diatas-->
 <br/><br/>
 <button type="submit">Perbaharui</button>
 </form>
</html>