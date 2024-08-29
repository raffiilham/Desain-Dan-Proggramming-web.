<?php
$poin = 700;

if ($poin > 500) {
    $hadiah = "YA";
} else {
    $hadiah = "TIDAK";
}

echo "Total skor pemain adalah: $poin (poin) <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? <br> $hadiah";

?>