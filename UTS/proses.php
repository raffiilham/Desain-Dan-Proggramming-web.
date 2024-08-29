<?php

// Validasi input
if (empty($_POST['bilangan'])) {
  echo "Bilangan tidak boleh kosong!";
} else {

  // Proses menghitung faktorial
  $bilangan = $_POST['bilangan'];

  // Inisialisasi variabel faktorial
  $faktorial = 1;

  // Lakukan looping dari 1 sampai bilangan
  for ($i = 1; $i <= $bilangan; $i++) {
    // Kalikan faktorial dengan bilangan
    $faktorial *= $i;
  }

  // Tampilkan faktorial
  echo "Faktorial dari $bilangan adalah $faktorial";

  // Tampilkan cara penyelesaian
  echo "<br>";
  echo "Cara penyelesaian:";
  echo "<br>";
  echo "1. Mulai dari bilangan 1";
  echo "<br>";
  echo "2. Kalikan bilangan dengan bilangan sebelumnya";
  echo "<br>";
  echo "3. Ulangi langkah 2 sampai bilangan mencapai $bilangan";
  echo "<br>";
  echo "4. Hasilnya adalah $faktorial";
}

?>
