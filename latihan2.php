<?php
/*
  Nama : I GEDE PRADNYA YOGIARTAWAN
  NIM  : 250030522
  Kelas : UG253
*/

echo "<h3>Latihan 2: Bilangan Genap & Ganjil (1-10)</h3>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i - Genap <br>";
    } else {
        echo "$i - Ganjil <br>";
    }
}
?>