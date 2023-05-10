<?php
$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$tgl_lhr = $_POST['tgl_lhr'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$hobi = $_POST['hobi'];
?>
<html>
<body>
  <p style="font-family:tahoma; font-size:30px; color:green">FORM
    ISIAN</p>
  <fieldset>
    <legend>Isilah Biodata Anda dengan benar</legend>

    <form method="post" action="index.php" style="font-family:tahoma; font-size:12px">

      <table width="663" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="177" valign="top">NIM</td>
          <td width="10">:</td>
          <td width="476"><input type="text" name="nim" id="textfield"></td>
        </tr>
        <tr>
          <td valign="top">Nama Lengkap</td>
          <td>:</td>
          <td><input type="text" name="nama_lengkap" id="textfield2"></td>
        </tr>
        <tr>
          <td valign="top">Alamat</td>
          <td valign="top">:</td>
          <td><textarea name="alamat" id="textarea" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td valign="top">Tempat/Tanggal Lahir</td>
          <td>:</td>
          <td><input type="text" name="tgl_lhr" id="textfield3">
            / Tgl
            <select name="select" id="select">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            Bln
            <select name="select2" id="select2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            Thn
            <select name="select3" id="select3">
              <option>2001</option>
              <option>2002</option>
              <option>2003</option>
              <option>2004</option>
              <option>2005</option>
            </select> </td>
        </tr>
        <tr>
          <td valign="top">Jenis Kelamin</td>
          <td>:</td>
          <td><input type="radio" name="jk" id="jk" value="Laki Laki">
            Laki-laki
            <input type="radio" name="jk" id="jk" value="Perempuan">
            Perempuan</td>
        </tr>
        <tr>
          <td valign="top">Agama</td>
          <td>:</td>
          <td><select name="agama" id="select4">
              <option>Islam</option>
              <option>Kristen Protestan</option>
              <option>Kristen Katholik</option>
              <option>Hindu</option>
              <option>Budha</option>
            </select> </td>
        </tr>
        <tr>
          <td valign="top">Hobi</td>
          <td valign="top">:</td>
          <td><input type="checkbox" name="hobi" id="checkbox" value="berenang">
            Berenang<br>
            <input type="checkbox" name="hobi" id="checkbox2" value="main musik">
            Main Musik<br>
            <input type="checkbox" name="hobi" id="checkbox3" value="olah raga">
            Olah Raga </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" id="button" value="Simpan"></td>
        </tr>
      </table>
    </form>
  </fieldset>

  <table>
    <tr>
      <td>NIM</td>
      <td>:</td>
      <td><?php echo $nim; ?></td>
    </tr>
    <tr>
      <td>Nama Lengkap</td>
      <td>:</td>
      <td><?php echo $nama_lengkap; ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td><?php echo $tgl_lhr; ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><?php echo $jk; ?></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td>:</td>
      <td><?php echo $agama; ?></td>
    </tr>
    <tr>
      <td>Hobi</td>
      <td>:</td>
      <td><?php echo $hobi; ?></td>
    </tr>
  </table>
</body>

</html>