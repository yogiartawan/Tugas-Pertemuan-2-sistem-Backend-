<?php
/*
  Nama : I GEDE PRADNYA YOGIARTAWAN 
  NIM  : 250030522
  Kelas : UG253
*/

echo "<h3>Latihan 3: Daftar Mahasiswa</h3>";

$mahasiswa = ["Andi", "Budi", "Citra", "Dika", "Eka"];
$nomor = 1;

foreach ($mahasiswa as $nama) {
    echo "$nomor. $nama <br>";
    $nomor++;
}
?>