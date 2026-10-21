<?php
/*
  Nama : I GEDE PRADNYA YOGIARTAWAN
  NIM  : 250030522
  Kelas : UG253
*/

echo "<h3>Latihan Fungsi 1: Luas Lingkaran</h3>";

function hitungLuasLingkaran($jari) {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

$r = 7;
$luasLingkaran = hitungLuasLingkaran($r);

echo "Luas lingkaran dengan jari-jari $r adalah $luasLingkaran";
?>