<?php
$nim  = '220302017';
$nama = 'Nafis watsiq amrulloh';
$alamat = 'Jl. Wijayakusuma Jeruklegi Cilacap';
$umur = 18;
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
  <table>
    <tr>
      <td>Nim</td>
      <td>:</td>
      <td><?= $nim ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><?= $nama ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?= $alamat ?></td>
    </tr>
    <tr> 
      <td>Umur</td>
      <td>:</td>
      <td><?= $umur ?></td>
    </tr>
  </table>
</body>
</html>