<?php
include('connection.php'); // Mengkoneksikan dengan database



?>
<html>
 <form action="insert.php" method="post">
 <label>NIM</label><br/>
 <input type="text" name="nim"/>
 <br/><br/>
 <label>Nama</label><br/>
 <input type="text" name="nama"/>
 <br/><br/>
 <label>Alamat</label><br/>
 <textarea name="alamat" cols="30" rows="10"></textarea>
 <br/><br/>
 <label>Jenis Kelamin</label><br/>
 <input type="radio"name="jk" value="laki-laki" id="laki-laki">
 <label for="laki-laki">Laki-laki</label><br>
 <input type="radio" name="jk" value="Perempuan" id="perempuan">
 <label for="perempuan">Perempuan</label>
 <br/><br/>
 <label>Hobi</label><br/>
 <select name="hobi">
 <option value="kesenian">Seni</option>
 <option value="olahraga">Olahraga</option>
 </select>
 <br/><br/>
 <label>No Telepon</label><br/>
 <input type="text" name="notelp"/>
 <br/><br/>
 <button type="submit">Tambah</button>
 </form>
</html>