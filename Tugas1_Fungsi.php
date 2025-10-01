<?php
echo "TUGAS 1 : MENENTUKAN BILANGAN TERBESAR<br>";

function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$bil1 = 100;
$bil2 = 150;
echo "Bilangan 1 = $bil1 <br>";
echo "Bilangan 2 = $bil2 <br>";
echo "Bilangan terbesar adalah: " . terbesar($bil1, $bil2);
?>
