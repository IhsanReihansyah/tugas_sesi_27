<?php
$tinggi = 9; // Ganti dengan tinggi piramida yang diinginkan

for ($i = $tinggi; $i >= 1; $i--) { //i = 9 ; 9-- ; akan selalu berjalan selagi i masih lebih besar sama dengan 1
    for ($k = 1; $k <= ($i - 1); $k++) { // akan ngeprint * sampai k(1) lebih kecil dari 8(tinggi - 1)
        echo "*";
    }
    echo "<br>";
}
?>
