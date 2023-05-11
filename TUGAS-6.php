<?php
$hasil  = 0;
$n_a    = $_POST['n_a'];
$n_b    = $_POST['n_b'];
$hasil  = $n_a + $n_b;

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
  <h3>Form Penjumlahan</h3>
  <hr>
  <form action="TUGAS-6.php" method="post">
    <table>
      <tr>
        <td>Nilai A</td>
        <td>:</td>
        <td><input type="text" name="n_a"></td>
      </tr>
      <tr>
        <td>Nilai B</td>
        <td>:</td>
        <td><input type="text" name="n_b"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="submit" name="hasil" value="Hasil">
          <input type="reset" value="reset">
        </td>
      </tr>
      <tr>
        <td>Hasil</td>
        <td>:</td>
        <td><?= $hasil ?></td>
      </tr>
    </table>
  </form>
</body>
</html>