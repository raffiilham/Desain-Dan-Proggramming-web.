<?php
// fungsi
// function perkenalan()
// {
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Raffi<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan();


// fungsi dengan parameter
// function perkenalan($nama, $salam)
// {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Raffi", "Hallo");

// echo "<hr>";

// $saya = "Raffi";
// $ucapanSalam = "Selamat Pagi!";

// perkenalan($saya, $ucapanSalam);


// fungsi dengan nilai default
// function perkenalan($nama, $salam = "Assalamualaikum")
// {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Raffi", "Hallo");

// echo "<hr>";

// $saya = "Raffi";
// $ucapanSalam = "Selamat Pagi!";

// perkenalan($saya);


// fungsi yang mengembalikan nilai
// function hitungumur($thn_lahir, $thn_sekarang)
// {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur saya adalah " . hitungumur(2004, 2023) . " tahun"


// memanggil fungsi di dalam fungsi
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";

  echo "Saya berusia " . hitungUmur(2003, 2023) . " tahun<br/>";
    echo "Senang berkenalan dengan Anda.<br/>";
}

perkenalan("Raffi");
?>