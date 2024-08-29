<?php
// soal no 15
// $pesan = "Saya arek malang";
// echo strrev($pesan) . "<br>";


// soal no 16
$pesan = "saya arek malang";
$pesanPerkata = explode(" " , $pesan);
$pesanPerkata = array_map(fn($pesan)=> strrev($pesan), $pesanPerkata);
$pesan = implode (" ", $pesanPerkata);

echo $pesan . "<br>";
?>