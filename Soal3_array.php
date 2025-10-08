<?php
$produk = [
    ["nama" => "Laptop Asus", "kategori" => "Elektronik", "harga" => 8500000, "rating" => 4.7],
    ["nama" => "Headset Sony", "kategori" => "Aksesoris", "harga" => 1250000, "rating" => 4.5],
    ["nama" => "Smartphone Samsung", "kategori" => "Elektronik", "harga" => 9500000, "rating" => 4.8]
];

// Cetak produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $item) {
    if ($item["harga"] > $tertinggi["harga"]) {
        $tertinggi = $item;
    }
}

echo "<b>Produk dengan harga tertinggi:</b><br>";
echo "Nama: " . $tertinggi["nama"] . "<br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: Rp " . number_format($tertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi["rating"];
?>
