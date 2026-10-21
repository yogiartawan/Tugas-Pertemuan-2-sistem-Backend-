<?php
/*
  Nama : I GEDE PRADNYA YOGIARTAWAN 
  NIM  : 250030522
  Kelas : UG253
*/

echo "<h3>Latihan 1: Grade Nilai</h3>";

$nilai = 85; 

if ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {
    $grade = "B";
} elseif ($nilai >= 70) {
    $grade = "C";
} elseif ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

echo "Nilai: $nilai <br>";
echo "Grade: $grade";
?>