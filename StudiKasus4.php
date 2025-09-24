<?php
$totalBelanja = 250000;

if ($totalBelanja >= 200000) {
    $diskon = 0.2 * $totalBelanja;
    echo "Total belanja: Rp$totalBelanja<br>";
    echo "Diskon: Rp$diskon<br>";
    echo "Total Bayar: Rp" . ($totalBelanja - $diskon);
} else {
    echo "Total belanja: Rp$totalBelanja<br>";
    echo "Maaf, belum dapat diskon.";
}
?>
