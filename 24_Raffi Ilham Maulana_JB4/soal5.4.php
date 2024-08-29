<?php
$daftarNilaiMaatematika = [
    [ 'Alice', 85 ],
    [ 'Bob', 92 ],
    [ 'Charlie', 78 ],
    [ 'David', 64 ],
    [ 'Eva', 90 ],
];
$jumlahNilai = 0;
$banyakNilai = 0;
$rataKelas = 0;
$nilaiAtasRata = [];

foreach ( $daftarNilaiMaatematika as $n) {
    $jumlahNilai += $n[ 1 ];
    $banyakNilai++;
}
$rataKelas = $jumlahNilai / $banyakNilai;
foreach ( $daftarNilaiMaatematika as $n) {
    if ($n[ 1 ] > $rataKelas ) {
        $nilaiAtasRata[] = $n[ 0 ];
    }
}
echo 'Daftar siswa yang mencapai nilai di atas rata-rata: ' . implode( ', ',
$nilaiAtasRata )
?>