<?php
/*
  Nama : I GEDE PRADNYA YOGIARTAWAN
  NIM  : 250030522
  Kelas : UG253
*/

echo "<h3>Kuis 1: Angka Habis Dibagi 3 (1-20)</h3>";

$angka = range(1, 20);

foreach ($angka as $val) {
    if ($val % 3 == 0) {
        echo "$val <br>";
    }
}
?>