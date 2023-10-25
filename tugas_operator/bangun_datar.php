<?php
echo "<h4>Bangun Datar<h4>";
//Luas Persegi
$sisi = 5;
$luas = $sisi * $sisi;
echo "Luas Persegi<br>";
echo "$sisi X $sisi = $luas cm2";
echo "<br>____________________<br>";
//Luas Persegi Panjang
$panjang = 7;
$lebar = 4;
$luas = $panjang * $lebar;
echo "Luas Persegi Panjang<br>";
echo "$panjang X $lebar = $luas cm2";
echo "<br>____________________<br>";
//Luas Segitiga
$panjang = 6;
$tinggi = 10;
$luas = $panjang / 2 * $tinggi;
echo "Luas Segitiga<br>";
echo "($panjang/2) X $tinggi = $luas cm2";
echo "<br>____________________<br>";
//Luas Jajar Genjang
$panjang = 8;
$tinggi = 4;
$luas = $panjang * $tinggi;
echo "Luas Jajar Genjang<br>";
echo "$panjang X $tinggi = $luas cm2";
echo "<br>____________________<br>";
//Trapesium
$sisi_sejajar_1 = 6;
$sisi_sejajar_2 = 12;
$tinggi = 8;
$luas = 1/2*(6+12)*8;
echo "Trapesium<br>";
echo "1/2 X ($sisi_sejajar_1+$sisi_sejajar_2) X $tinggi = $luas cm2";
echo "<br>____________________<br>";
?>