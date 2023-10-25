<?php
$nama = "Rehan";
$tinggi_badan_dalam_cm = 175;
$berat_badan = 170;

$tinggi = $tinggi_badan_dalam_cm / 100;
$bmi = $berat_badan / ($tinggi * $tinggi);

if ($bmi < 18.5) {
    echo "Halo, $nama . Nilai BMI anda adalah $bmi , anda termasuk kurus ( Under Weight )";
}elseif ($bmi > 18.5 && $bmi < 24.9) {
    echo "Halo, $nama . Nilai BMI anda adalah $bmi , anda termasuk sedang ( Normal Weight )";
}elseif ($bmi > 25 && $bmi < 29.9) {
    echo "Halo, $nama . Nilai BMI anda adalah $bmi , anda termasuk gemuk ( Under Weight )";
}else {
    echo "Halo, $nama . Nilai BMI anda adalah $bmi , anda termasuk Obesitas ( Obese )";
}


?>