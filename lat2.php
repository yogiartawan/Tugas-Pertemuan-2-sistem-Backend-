<?php
/*
  Nama : I GEDE PRADNYA YOGIARTAWAN
  NIM  : 250030522
  Kelas : UG253
*/

echo "<h3>Kuis 2: Hitung Nilai Akhir</h3>";

function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
    $status = ($nilaiAkhir >= 70) ? "Lulus" : "Tidak Lulus";

    echo "Output : <br>";
    echo "Nilai Akhir: $nilaiAkhir <br>";
    echo "Status: $status";
}

// Contoh pemanggilan fungsi dengan nilai tugas=80, uts=80, uas=87
hitungNilaiAkhir(80, 80, 87);
?>