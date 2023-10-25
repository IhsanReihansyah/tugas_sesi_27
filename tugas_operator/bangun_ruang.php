<?php
echo "<h4>Bangun Ruang<h4>";
//Volume kubus
$sisi = 5;
$volume = $sisi * $sisi * $sisi;
echo "Volume Kubus<br>";
echo "$sisi X $sisi X $sisi = $volume cm3";
echo "<br>____________________<br>";
//Volume Balok
$panjang = 6;
$lebar = 3;
$tinggi = 2;
$volume = $panjang * $lebar * $tinggi;
echo "Volume Balok<br>";
echo "$panjang X $lebar X $tinggi = $volume cm3";
echo "<br>____________________<br>";
//Volume Prisma
$panjang_sisi = 5;
$tinggi = 8;
$luas_alas = 1/2 * $panjang_sisi * $tinggi;
$volume = $luas_alas * $tinggi;
echo "Volume Prisma<br>";
echo "Luas Alas = (1/2) X $panjang_sisi X $tinggi<br>";
echo "Luas Alas = $luas_alas<br>";
echo "Volume Prisma = $luas_alas X $tinggi<br>";
echo "Volume Prisma = $volume cm3";
echo "<br>____________________<br>";
?>