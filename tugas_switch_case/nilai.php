<?php
$nilai = 90; 

switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        $kategori = 'A';
        break;
    case ($nilai >= 80 && $nilai < 90):
        $kategori = 'B';
        break;
    case ($nilai >= 70 && $nilai < 80):
        $kategori = 'C';
        break;
    case ($nilai >= 0 && $nilai < 70):
        $kategori = 'D';
        break;
    default:
        $kategori = 'E';
        break;
}

echo "Kategori nilai: " . $kategori;
?>
