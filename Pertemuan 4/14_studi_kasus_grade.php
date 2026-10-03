<?php

declare(strict_types=1);


// Data mahasiswa
$mahasiswa = [
    'Andi'  => 88,
    'Budi'  => 72,
    'Citra' => 45,
    'Dewi'  => 91,
    'Eka'   => 65,
];


// Variabel perhitungan
$total = 0;
$maks = 0;
$min = 100;
$lulus = 0;


// Header tabel
echo str_pad("Nama", 8)
    . str_pad("Nilai", 7)
    . str_pad("Huruf", 7)
    . "Status\n";

echo str_repeat("-", 40) . "\n";


// Proses setiap mahasiswa
foreach ($mahasiswa as $nama => $akhir) {

    // Menentukan nilai huruf
    if ($akhir >= 85) {
        $huruf = 'A';
    } elseif ($akhir >= 75) {
        $huruf = 'B';
    } elseif ($akhir >= 65) {
        $huruf = 'C';
    } elseif ($akhir >= 50) {
        $huruf = 'D';
    } else {
        $huruf = 'E';
    }


    // Menentukan status kelulusan
    $status = $akhir >= 50
        ? 'Lulus'
        : 'Tidak Lulus';


    // Menampilkan data mahasiswa
    echo str_pad($nama, 8)
        . str_pad((string) $akhir, 7)
        . str_pad($huruf, 7)
        . $status
        . "\n";


    // Menghitung total nilai
    $total += $akhir;


    // Mencari nilai tertinggi dan terendah
    $maks = max($maks, $akhir);
    $min = min($min, $akhir);


    // Menghitung jumlah mahasiswa yang lulus
    if ($akhir >= 50) {
        $lulus++;
    }
}


// Menghitung rata-rata
$rata = $total / count($mahasiswa);


// Menampilkan hasil akhir
echo str_repeat("-", 40) . "\n";

echo "Rata-rata : " . number_format($rata, 2) . "\n";
echo "Tertinggi : $maks\n";
echo "Terendah  : $min\n";
echo "Lulus     : $lulus dari " . count($mahasiswa) . "\n";