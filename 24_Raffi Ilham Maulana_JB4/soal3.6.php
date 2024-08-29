<?php
$kursi = 45;
$pelanggan = 28;
$kursiKosong = $kursi - $pelanggan;
$persentaseKosong = ($kursiKosong / $kursi) * 100;

echo "Kursi didalam restoran = {$kursi} <br>";
echo "Pada suatu malam kursinya ditempati oleh {$pelanggan} pelanggan <br>";
echo "Kursi yang masih kosong = {$kursiKosong} <br>";
echo "Persentase kursi yang masih kosong = {$persentaseKosong} <br>";

?>
