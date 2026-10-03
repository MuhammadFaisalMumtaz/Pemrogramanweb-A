<?php

declare(strict_types=1);


// Do-while dijalankan minimal satu kali
$i = 10;

do {
    echo "Dijalankan sekali walau i = $i\n";
    $i++;
} while ($i <= 5);


// Simulasi validasi:
// Ulangi sampai nilai memenuhi syarat
$percobaan = 0;

do {
    $percobaan++;
    $nilai = 30 + $percobaan * 20;
    // Simulasi input yang berubah
} while ($nilai < 80);

echo "Diperoleh nilai $nilai setelah $percobaan percobaan\n";