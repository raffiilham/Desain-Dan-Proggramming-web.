<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$jumlahNilai = count($nilaiSiswa);

$totalNilai = 0;
for ($i = 2; $i < $jumlahNilai - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}

$rataRata = $totalNilai / ($jumlahNilai - 4);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata";

?>