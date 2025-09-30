<?php
// Tugas 2: Program perulangan + kontrol
// Studi kasus: Menentukan kursi yang sudah dipesan & VIP

echo "<h3>Kursi yang Sudah Dipesan:</h3>";
for ($kursi = 100; $kursi <= 1000; $kursi++) {
    if ($kursi % 7 == 0) { // kursi kelipatan 7 dianggap sudah dipesan
        echo "Kursi nomor " . $kursi . " [TERPESAN]<br>";
    }
}

echo "<h3>Kursi VIP:</h3>";
for ($kursi = 100; $kursi <= 1000; $kursi++) {
    if ($kursi % 50 == 0) { // kursi kelipatan 50 dianggap VIP
        echo "Kursi VIP nomor " . $kursi . "<br>";
    }
}
?>
