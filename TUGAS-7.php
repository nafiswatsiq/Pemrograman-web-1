<?php
  $n = 3; //menentukan variable yang akan ditambahkan
  $hasil = 0;
  $i = 1;

  while($i <= $n){
    $hasil += $i;
    if($i !=$n) {
      echo $i." + ";
    } elseif($i = $n) {
      echo "$i = ";
    }
    $i++;
  }

  echo $hasil;

  echo "<br><br> Perulangan for <br>";

  for($i = 1; $i <= $n; $i++){
    echo "Nomor " . $i . "<br>";
  }

  echo "<br><br> Perulangan do while <br>";

  $j = 1;
  do{
    echo "Nomor " . $j . "<br>";
    $j++;
  }while($j <= $n);