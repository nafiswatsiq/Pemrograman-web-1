<?php
$server=$_SERVER['PHP SELF'];

$kode       = $_POST['kode'];
$judul      = $_POST['judul'];
$penerbit   = $_POST['penerbit'];
$pengarang  = $_POST['pengarang'];
$tahun      = $_POST['tahun'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo $server;?>" method="post">
    <table width="293" border="1">
      <tr>
        <td width="151">Kode Buku</td>
        <td width="13">:</td>
        <td width="107"><input type="text" name="kode" id="textfield"></td>
      </tr>
      <tr>
        <td>Judul Buku</td>
        <td>:</td>
        <td><input type="text" name="judul" id="textfield2"></td>
      </tr>
      <tr>
        <td>Penerbit</td>
        <td>:</td>
        <td><input type="text" name="penerbit" id="penerbit"></td>
      </tr>
      <tr>
        <td>Pengarang</td>
        <td>:</td>
        <td><input type="text" name="pengarang" id="textfield4"></td>
      </tr>
      <tr>
        <td>Tahun Terbit</td>
        <td>:</td>
        <td><select name="tahun" id="select">
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
          </select> </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="Proses">
            <input type="reset" name="button2" id="button2" value="Reset"></td>
      </tr>
    </table>
  </form>

  <table>
    <tr>
      <td>Kode Buku</td>
      <td>:</td>
      <td><?= $kode ?></td>
    </tr>
    <tr>
      <td>Judul Buku</td>
      <td>:</td>
      <td><?= $judul ?></td>
    </tr>
    <tr>
      <td>Penerbit</td>
      <td>:</td>
      <td><?= $penerbit ?></td>
    </tr>
    <tr>
      <td>Pengarang</td>
      <td>:</td>
      <td><?= $pengarang ?></td>
    </tr>
    <tr>
      <td>Tahun Terbit</td>
      <td>:</td>
      <td><?= $tahun ?></td>
    </tr>
  </table>
</body>
</html>