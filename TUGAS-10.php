<?php 
$olahraga = array("Sepak Bola", "Tenis Meja", "Bola Volly", "Sepak Takraw", "Golf", "Renang");
echo 'Terdapat beberapa jenis olahraga, antara lain: <br>';
echo '<br>';

foreach ($olahraga as $key => $value) {
  echo 'Olahraga '. $key . ' : ' . $value . '<br>';
}
echo '<br>';
echo 'Diantara olahraga tersebut, olahraga yang paling saya sukai adalah ' . $olahraga[1] . ', dan ' . $olahraga[5] . '.<br>';