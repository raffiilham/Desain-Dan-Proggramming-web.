<?php
$hargaProduk = 120000;

$diskon = 0.2;

if ($hargaProduk > 100000) {
    $hargaSetelahDiskon = $hargaProduk - ($hargaProduk * $diskon);
} else {
    $hargaSetelahDiskon = $hargaProduk;
}

echo "Harga produk sebelum diskon: Rp $hargaProduk <br>";
echo "Harga produk setelah diskon: Rp $hargaSetelahDiskon";