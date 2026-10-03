<?php

declare(strict_types=1);


// Array buah
$buah = [
    'Apel',
    'Jeruk',
    'Mangga'
];

foreach ($buah as $b) {
    echo "- $b\n";
}


// Array IPK mahasiswa
$ipk = [
    'Andi'  => 3.8,
    'Budi'  => 3.2,
    'Citra' => 2.9
];

foreach ($ipk as $nama => $nilai) {
    echo "$nama: $nilai\n";
}


// Menghitung rata-rata IPK dengan foreach
$total = 0;

foreach ($ipk as $nilai) {
    $total += $nilai;
}

$rataRata = $total / count($ipk);

echo "Rata-rata IPK: " . number_format($rataRata, 2) . "\n";