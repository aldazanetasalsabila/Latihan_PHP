<?php
// =======================
// Tugas 1
// =======================
// Tanda " " pada nilai variabel biasanya menandakan string.
// Namun, jika string tersebut berisi angka murni, PHP otomatis
// melakukan konversi (type juggling) ke tipe data numerik.
// Contoh:
$angkaString1 = "10"; // String tapi isinya angka
$angkaString2 = "20"; // String tapi isinya angka
$hasilJumlah = $angkaString1 + $angkaString2; // otomatis dijumlahkan

echo "Tugas 1:<br>";
echo "Hasil penjumlahan string angka \"10\" + \"20\" = " . $hasilJumlah . "<br><br>";


// =======================
// Tugas 2
// =======================
// Operator / digunakan untuk pembagian (hasil bisa desimal).
// Operator % digunakan untuk modulo (sisa hasil pembagian).
$bil1 = 20;
$bil2 = 3;

echo "Tugas 2:<br>";
echo "20 / 3 = " . ($bil1 / $bil2) . " (hasil pembagian)<br>";
echo "20 % 3 = " . ($bil1 % $bil2) . " (sisa pembagian)<br><br>";


// =======================
// Tugas 3
// =======================
// Gabungan string tugas1 dan tugas2 menjadi "9080"
$tugas1 = "90";
$tugas2 = "80";
$gabungan = $tugas1 . $tugas2; // operator . digunakan untuk menggabungkan string

echo "Tugas 3:<br>";
echo "Gabungan string tugas1 dan tugas2 = " . $gabungan . "<br><br>";


// =======================
// Tambahan contoh string dari soal
// =======================
$string1 = 'Ini adalah string sederhana';
$string2 = 'Ini adalah
string yang bisa
memiliki beberapa
baris';
$string3 = 'Dia berkata: "I\'ll be back"';
$string4 = 'Anda telah berhasil menghapus C:\\xampp\\htdoc';
$string5 = 'Kalimat ini tidak akan pindah ke: \n baris baru';
$string6 = 'Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

echo "Contoh String:<br>";
echo $string1 . "<br>";
echo $string2 . "<br>";
echo $string3 . "<br>";
echo $string4 . "<br>";
echo $string5 . "<br>";
echo $string6 . "<br>";
?>