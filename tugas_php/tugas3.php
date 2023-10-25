<?php
$tinggi = 8; // Ganti dengan tinggi piramida yang diinginkan

for ($i = 1; $i <= $tinggi + 1; $i++) { //i = 1 ; i++ ; akan tetap berjalan sampai i tidak lebih kecil sama dengan 9(tinggi + 1)
    for ($j = 0; $j < $i; $j++) { //akan terus berjalan sampai 0 tidak lebih kecil dari i
        echo "$j"; // menyetak angka
    }
    echo "<br>";
}
?>
