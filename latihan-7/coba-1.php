<?php
$i = 2;

while ($i <= 8) {
  if($i % 2 == 0){
    echo $i . '<br>';
  }
  $i++;
}
echo '<br>';
$i = 2;
while ($i <= 18) {
  echo $i . '<br>';
  $i = $i ^ 2;
}