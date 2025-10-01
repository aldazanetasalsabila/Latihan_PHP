<?php
echo "TUGAS 2 : TANGGAL SEKARANG DENGAN getdate()<br>";

$sekarang = getdate();
echo $sekarang["mday"] . "-" . $sekarang["mon"] . "-" . $sekarang["year"];
?>
