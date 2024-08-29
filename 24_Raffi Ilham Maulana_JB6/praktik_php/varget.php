<?php
$nama = @$_GET['nama'];//tanda @ agar tidak ada peringatan error ketika ket nya kosong
$usia = @$_GET['usia'];//tanda @ agar tidak ada peringatan error ketika ket nya kosong
echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?"
?>