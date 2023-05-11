<?php
$number = $_POST['number'];

if($number % 2 == 0) {
  $result = "$number adalah Bilangan Genap";
} else {
  $result = "$number adalah Bilangan Ganjil";
}
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
  <fieldset>
    <legend>Input Nilai</legend>
    <form action="TUGAS-8.php" method="post">
      <table>
        <tr>
          <td>Nilai</td>
          <td>:</td>
          <td><input type="number" name="number"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" value="Proses"></td>
        </tr>
        <tr>
          <td colspan="3"><?= $number == '' ? 'data kosong': $result ?></td>
        </tr>
      </table>
    </form>
  </fieldset>
</body>
</html>